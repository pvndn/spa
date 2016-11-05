<?php namespace App\Http\Controllers\Front;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductCategoryMeta;
use Illuminate\Http\Request;

class ProductCategoryController extends BaseFrontController
{
    public function __construct()
    {
        parent::__construct();
        $this->bodyClass = 'product-category';
    }

    public function _handle(Request $request, ProductCategory $object, ProductCategoryMeta $objectMeta)
    {
        $segments = $request->segments();
        $slug = end($segments);

        $item = $object->getBySlug($slug, $this->currentLanguageId);

        if (!$item) {
            return $this->_showErrorPage(404, 'Page not found');
        }

        $this->_setCurrentEditLink('Edit this product category', 'product-categories/edit/' . $item->id . '/' . $this->currentLanguageId);

        $this->_loadFrontMenu($item->id, 'product-category');
        $this->_setPageTitle($item->title);
        $this->_setMetaSEO($item->tags, $item->description, $item->thumbnail);

        $this->dis['object'] = $item;
        $this->_getAllCustomFields($objectMeta, $item->content_id);

        return $this->_showItem($item);
    }

    private function _showItem($item)
    {
        $page_template = $item->page_template;
        if (trim($page_template) != '') {
            $function = '_productCategory_' . str_replace(' ', '', trim($page_template));
            if (method_exists($this, $function)) {
                return $this->{$function}($item);
            }
        }
        return $this->_defaultItem($item);
    }

    private function _defaultItem(ProductCategory $object)
    {
        $this->_setBodyClass($this->bodyClass . ' product-category-default');

        $this->dis['products'] = $object->product()->with('productContent')->get();

        return $this->_viewFront('product-category-templates.default', $this->dis);
    }
}
