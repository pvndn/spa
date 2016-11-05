<?php
namespace App\Models;

use App\Models;
use App\Models\AbstractModel;

class SettingsInterface extends AbstractModel
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'interfaces';

    protected $primaryKey = 'id';

    /**
     * Validation
     */
    public $rules = array(
        'slug' => 'required|unique:interfaces',
        'status' => 'integer|required|between:0,1',
    );

    protected $editableFields = [
        'title',
        'slug',
        'status',
        'style',
        'column',
        'config',
        'sort'
    ];

    public function interfaceContent()
    {
        return $this->hasMany('App\Models\SettingsInterfaceContent', 'interface_id');
    }

    public static function deleteInterface($id)
    {
        $result = [
            'error' => true,
            'response_code' => 500,
            'message' => [],
        ];
        $item = static::find($id);

        if (!$item) {
            $result['response_code'] = 404;
            $result['message'] = 'Interface not found';
            return $result;
        }

        $temp = SettingsInterfaceContent::where('interface_id', '=', $id);
        $related = $temp->get();
        if (!count($related)) {
            $related = null;
        }

        /*Remove all related content*/
        if ($related != null) {
            $menuContents = [];
            foreach ($related as $key => $row) {
                $menuContents[] = $row->id;
            }
            $tempMenuNode = SettingsInterfaceItem::whereIn('interface_content_id', $menuContents);
            if ($tempMenuNode->delete()) {
                $result['message'][] = 'Delete interface item completed!';
            } else {
                $result['message'][] = 'Some error occurred when delete related interface item!';
            }

            if ($temp->delete()) {
                $result['message'][] = 'Delete related content completed!';
            } else {
                $result['message'][] = 'Some error occurred when delete related interface content!';
            }
            if ($item->delete()) {
                $result['error'] = false;
                $result['response_code'] = 200;
                $result['message'][] = 'Delete interface completed!';
            }
        } else {
            if ($item->delete()) {
                $result['error'] = false;
                $result['response_code'] = 200;
                $result['message'][] = 'Delete interface completed!';
            }
        }

        return $result;
    }

    public function getConfigAttribute($value)
    {
        return json_decode($value, true);
    }
}
