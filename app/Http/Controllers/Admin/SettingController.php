<?php

namespace App\Http\Controllers\Admin;

use App\Models;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class SettingController extends BaseAdminController
{
    public $bodyClass = 'setting-controller', $routeLink = 'settings';
    public function __construct()
    {
        parent::__construct();

        $this->middleware('is_webmaster');

        $this->_setPageTitle('Settings', 'manage website settings');
        $this->_setBodyClass($this->bodyClass);

        $this->_loadAdminMenu($this->routeLink);
    }

    public function getIndex(Request $request)
    {
        $this->dis['settings'] = Models\Setting::getAllSettings();

        $this->dis['pages'] = Models\Page::getBy([
            'status' => 1,
        ], ['global_title' => 'ASC'], true);

        return $this->_viewAdmin('settings.index', $this->dis);
    }

    public function postIndex(Request $request)
    {
        $data = $request->except([
            '_token',
        ]);
        $data['construction_mode'] = ($request->has('construction_mode')) ? 1 : 0;
        $data['show_admin_bar'] = ($request->has('show_admin_bar')) ? 1 : 0;
        $result = Models\Setting::updateSettings($data);
        if ($result['error']) {
            $this->_setFlashMessage($result['message'], 'error');
            $this->_setFlashMessage(implode(', ', $result['errors']), 'error');
        } else {
            $this->_setFlashMessage($result['message'], 'success');
        }
        $this->_showFlashMessages();

        return redirect()->back();
    }

    public function getLanguages(Request $request)
    {
        $this->_setPageTitle('Languages', 'manage website languages');
        $this->_setBodyClass($this->bodyClass . ' languages-setting-page');

        $this->_loadAdminMenu($this->routeLink . '/languages');

        return $this->_viewAdmin('settings.languages');
    }

    public function postLanguages(Request $request, Models\Language $object)
    {
        /**
         * Paging
         **/
        $offset = $request->get('start', 0);
        $limit = $request->get('length', 10);
        $paged = ($offset + $limit) / $limit;
        Paginator::currentPageResolver(function () use ($paged) {
            return $paged;
        });

        $records = [];
        $records["data"] = [];

        /*Group actions*/
        if ($request->get('customActionType', null) == 'group_action') {
            $records["customActionStatus"] = "danger";
            $records["customActionMessage"] = "Group action did not completed. Some error occurred.";
            $ids = (array) $request->get('id', []);
            $result = $object->updateMultiple($ids, [
                'status' => $request->get('customActionValue', 0),
            ], true);
            if (!$result['error']) {
                $records["customActionStatus"] = "success";
                $records["customActionMessage"] = "Group action has been completed.";
            }
        }

        /*
         * Sortable data
         */
        $orderBy = $request->get('order')[0]['column'];
        switch ($orderBy) {
            case 1:
                {
                    $orderBy = 'id';
                }
                break;
            case 2:
                {
                    $orderBy = 'language_name';
                }
                break;
            case 3:
                {
                    $orderBy = 'language_code';
                }
                break;
            case 4:
                {
                    $orderBy = 'default_locale';
                }
                break;
            case 5:
                {
                    $orderBy = 'currency';
                }
                break;
            case 6:
                {
                    $orderBy = 'status';
                }
                break;
            default:
                {
                    $orderBy = 'id';
                }
                break;
        }
        $orderType = $request->get('order')[0]['dir'];

        $getByFields = [];
        if ($request->get('language_name', null) != null) {
            $getByFields['language_name'] = ['compare' => 'LIKE', 'value' => $request->get('language_name')];
        }
        if ($request->get('language_code', null) != null) {
            $getByFields['language_code'] = ['compare' => '=', 'value' => $request->get('language_code')];
        }
        if ($request->get('status', null) != null) {
            $getByFields['status'] = ['compare' => '=', 'value' => $request->get('status')];
        }

        $items = $object->searchBy($getByFields, [$orderBy => $orderType], true, $limit);

        $iTotalRecords = $items->total();
        $sEcho = intval($request->get('sEcho'));

        foreach ($items as $key => $row) {
            $status = '<span class="label label-success label-sm">Activated</span>';
            if ($row->status != 1) {
                $status = '<span class="label label-danger label-sm">Disabled</span>';
            }

            $records["data"][] = array(
                '<input type="checkbox" name="id[]" value="' . $row->id . '">',
                $row->id,
                $row->language_name,
                $row->language_code,
                $row->default_locale,
                $row->currency,
                $status,
                '<a class="fast-edit" title="Fast edit">Fast edit</a>',
            );
        }

        $records["sEcho"] = $sEcho;
        $records["iTotalRecords"] = $iTotalRecords;
        $records["iTotalDisplayRecords"] = $iTotalRecords;

        return response()->json($records);
    }

    public function postFastEditLanguages(Request $request, Models\Language $object)
    {
        $data = [
            'id' => $request->get('args_0', null),
            'language_name' => $request->get('args_1', null),
            'language_code' => $request->get('args_2', null),
            'default_locale' => $request->get('args_3', null),
            'currency' => $request->get('args_4', null),
        ];

        $result = $object->fastEdit($data, false, true);
        return response()->json($result, $result['response_code']);
    }
    
    /*
    ** Setting interface homepage
    */

    public function getInterface(Request $request)
    {
        $this->_setPageTitle('Interface Homepage', 'setting interface homepage');
        $this->_setBodyClass($this->bodyClass . ' interface-setting-page');
        return $this->_viewAdmin('interface.index');
    }

    public function postFastEditInterface(Request $request)
    {
        $data = [
            'id' => $request->get('args_0', null),
            'title' => $request->get('args_1', null),
            'slug' => ($request->get('args_2', null)) ? str_slug($request->get('args_2', null)) : str_slug($request->get('args_1', null)),
            'sort' => $request->get('args_3', null),
        ];

        $object = new Models\SettingsInterface();
        $messages = $object->fastEdit($data, false, true);
        return response()->json($messages);
    }
    /*Use for plugin Datatables*/
    public function postInterface(Request $request, Models\SettingsInterface $object)
    {
        /**
         * Paging
         **/
        $offset = $request->get('start', 0);
        $limit = $request->get('length', 10);
        $paged = ($offset + $limit) / $limit;
        Paginator::currentPageResolver(function () use ($paged) {
            return $paged;
        });

        $records = [];
        $records["data"] = [];

        /*
         * Sortable data
         */
        $orderBy = $request->get('order')[0]['column'];
        switch ($orderBy) {
            case 1:{
                    $orderBy = 'id';
                }
                break;
            case 2:{
                    $orderBy = 'title';
                }
                break;
            case 3:{
                    $orderBy = 'slug';
                }
                break;
            case 4:{
                    $orderBy = 'sort';
                }
                break;
            default:{
                    $orderBy = 'id';
                }
                break;
        }
        $orderType = $request->get('order')[0]['dir'];

        $getByFields = [];
        if ($request->get('title', null) != null) {
            $getByFields['title'] = ['compare' => 'LIKE', 'value' => $request->get('title')];
        }
        if ($request->get('slug', null) != null) {
            $getByFields['slug'] = ['compare' => 'LIKE', 'value' => $request->get('slug')];
        }

        $items = $object->searchBy($getByFields, [$orderBy => $orderType], true, $limit);

        $iTotalRecords = $items->total();
        $sEcho = intval($request->get('sEcho'));

        foreach ($items as $key => $row) {
            /*Edit link*/
            $link = asset($this->adminCpAccess . '/' . $this->routeLink . '/interface-edit/' . $row->id . '/' . $this->defaultLanguageId);
            $removeLink = asset($this->adminCpAccess . '/' . $this->routeLink . '/interface-delete/' . $row->id);

            $records["data"][] = array(
                '<input type="checkbox" name="id[]" value="' . $row->id . '">',
                $row->id,
                $row->title,
                $row->slug,
                $row->sort,
                $row->created_at->toDateTimeString(),
                '<a class="fast-edit" title="Fast edit">Fast edit</a>',
                '<a href="' . $link . '" class="btn btn-outline green btn-sm"><i class="icon-pencil"></i></a>' .
                '<button type="button" data-ajax="' . $removeLink . '" data-method="DELETE" data-toggle="confirmation" class="btn btn-outline red-sunglo btn-sm ajax-link"><i class="fa fa-trash"></i></button>',
            );
        }

        $records["sEcho"] = $sEcho;
        $records["iTotalRecords"] = $iTotalRecords;
        $records["iTotalDisplayRecords"] = $iTotalRecords;

        return response()->json($records);
    }

    public function deleteInterfaceDelete(Request $request, Models\SettingsInterface $interface, $id = 0)
    {
        $result = $interface->deleteInterface($id);
        return response()->json($result);
    }

    public function getInterfaceEdit(Request $request, Models\SettingsInterface $object, Models\SettingsInterfaceContent $objectContent, Models\SettingsInterfaceItem $objectNode, Models\Product $product, Models\ProductCategory $productCategory, $id, $language)
    {
        /*
        ** GET PRODUCTS IN CATEGORY
        */
        $service = [];
        if($category_id = $request->get('categories')) {
            $this->dis['category_id'] = $category_id;
            $getCategory = Models\Category::whereIn('id', $category_id)->get();
            foreach($getCategory as $key => $category) {
                $service[] = $category->post()->with('postContent')->get()->toArray();
            }
            $array = $this->collapsed_array($service);
            $this->dis['post_in_category'] = $this->unique_multidim_array($array,'id'); 
        }

        $products = [];
        if($category_id = $request->get('categories_product')) {
            $this->dis['category_product_id'] = $category_id;
            $getCategoryProduct = Models\ProductCategory::whereIn('id', $category_id)->get();
            foreach($getCategoryProduct as $key => $category) {
                $products[] = $category->product()->with('productContent')->get()->toArray();
            }
            $array = $this->collapsed_array($products);
            $this->dis['products_in_category'] = $this->unique_multidim_array($array,'id'); 
        }


        /* --- */
        $oldInputs = old();

        if ($oldInputs && $id == 0) {
            $oldObject = new \stdClass();
            foreach ($oldInputs as $key => $row) {
                $oldObject->$key = $row;
            }
            $this->dis['object'] = $oldObject;
        }

        $currentEditLanguage = Models\Language::getBy([
            'id' => $language,
            'status' => 1,
        ]);
        if (!$currentEditLanguage) {
            $this->_setFlashMessage('This language it not supported', 'error');
            $this->_showFlashMessages();
            return redirect()->back();
        }
        $this->dis['currentEditLanguage'] = $currentEditLanguage;

        $this->dis['rawUrlChangeLanguage'] = asset($this->adminCpAccess . '/' . $this->routeLink . '/interface-edit/' . $id) . '/';

        $interface = $object->find($id);
        if (!$interface) {
            $interface = new Models\SettingsInterface();
            $interfaceContent = null;
        } else {
            $interfaceContent = $objectContent->findByFieldsOrCreate([
                'interface_id' => $id,
                'language_id' => $language,
            ]);
        }
        $this->_setPageTitle('interface', $interface->title);

        $this->dis['object'] = $interface;

        $this->dis['productCategories'] = $productCategory::getBy([
                'status' => 1,
            ], [
                'global_title' => 'ASC',
            ], true);

        $this->dis['categories'] = Models\Category::getBy([
                'status' => 1,
            ], [
                'global_title' => 'ASC',
            ], true);


        if (!$interfaceContent) {
            $item_in_groups = [];
        } else {
            if (!$interfaceContent->id) {
                return [];
            }
            $item_in_groups = $interfaceContent->interfaceItem()->get()->toArray();
        }

        $temp_items = [];
        foreach ($item_in_groups as $value) {
            $temp_items[] = [
               'id' => $value['related_id'],
               'type' => $value['type'],
            ];
        }
        $this->dis['temp_items'] = $temp_items;
        // dd(in_array(["id" => 44, "type" => "post"], $temp_items));
        return $this->_viewAdmin('interface.edit', $this->dis);
    }

    public function postInterfaceEdit(Request $request, Models\SettingsInterface $object, Models\SettingsInterfaceContent $objectContent, Models\SettingsInterfaceItem $objectNode, $id, $language)
    {
        $interface = $object->findOrNew($id);

        $show_name_product = $request->show_name;
        $config = [
            'show_name' => $show_name_product
        ];

        $data = $request->only(['title', 'slug', 'status', 'style', 'column']);
        $data['id'] = $interface->id;
        $data['config'] = json_encode($config);

        $data['slug'] = ($data['slug']) ? str_slug($data['slug']) : str_slug($data['title']);

        (!$id || $id == 0) ? $justUpdateSomeFields = true : $justUpdateSomeFields = false;

        $result = $interface->fastEdit($data, true, $justUpdateSomeFields);

        if ($result['error']) {
            $this->_setFlashMessage($result['message'], 'error');
            $this->_showFlashMessages();

            if ($id == 0) {
                return redirect()->back()->withInput();
            }

            return redirect()->back();
        }
        $this->_setFlashMessage($result['message'], 'success');

        if (!$id) {
            $interface = $result['object'];
        }

        $interfaceContent = $objectContent->getBy(['interface_id' => $interface->id, 'language_id' => $language]);
        if (!$interfaceContent) {
            $resultEditContent = $objectContent->fastEdit([
                'interface_id' => $interface->id,
                'language_id' => $language,
            ], true, true);
            if ($resultEditContent['error']) {
                $this->_setFlashMessage($resultEditContent['message'], 'error');
                $this->_showFlashMessages();
                return redirect()->back();
            }
            $interfaceContent = $resultEditContent['object'];
        }

        $interfaceItemJson = json_decode($request->get('interface_item', null));

        $this->_recursiveSaveInterface($interfaceItemJson, $interfaceContent->id);

        $this->_showFlashMessages();

        if (!$id || $id == 0) {
            return redirect()->to(asset($this->adminCpAccess . '/' . $this->routeLink . '/interface-edit/' . $interface->id . '/' . $language));
        }

        return redirect()->back();
    }


    public function deleteInterfaceItemDelete(Request $request, $id = 0)
    {
        $item = Models\SettingsInterfaceItem::find($id);
        if(!$item) {
            return redirect()->back();
        } 
        $item->delete();
        return redirect()->back();
    }



    private function _saveInterfaceItem($json_item, $interface_content_id)
    {
        $data = [
            'related_id' => (isset($json_item->related_id)) ? $json_item->related_id : '',
            'type' => (isset($json_item->type)) ? $json_item->type : '',
            'interface_content_id' => $interface_content_id,
        ];

        $item = new Models\SettingsInterfaceItem();
        $item = $item->fastEdit($data, true, true);

        if ($item['error']) {
            $this->_setFlashMessage('Some error occurred when update item', 'error');
            return null;
        }
        return $item['object']->id;
    }

    private function _recursiveSaveInterface($json_arr, $interface_content_id)
    {
        foreach ((array) $json_arr as $key => $row) {
            $parent = $this->_saveInterfaceItem($row, $interface_content_id);
        }
    }

    private function unique_multidim_array($array, $key) {
        $temp_array = array(); 
        $i = 0; 
        $key_array = array(); 
        
        foreach($array as $val) { 
            if (!in_array($val[$key], $key_array)) { 
                $key_array[$i] = $val[$key]; 
                $temp_array[$i] = $val; 
            } 
            $i++; 
        } 
        return $temp_array; 
    }

    private function collapsed_array(array $array) {
        $item_to_collect    = collect($array);
        $item_collapsed     = $item_to_collect->collapse();
        $items              = $item_collapsed->all();
        return $items;
    }
}
