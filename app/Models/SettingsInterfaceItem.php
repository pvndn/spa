<?php
namespace App\Models;

use App\Models;
use App\Models\AbstractModel;

class SettingsInterfaceItem extends AbstractModel
{
    
    protected $editableFields = [
        'interface_content_id',
        'related_id',
        'type',

    ];

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'interface_items';

    protected $primaryKey = 'id';

    public function menuContent()
    {
        return $this->belongsTo('App\Models\SettingsInterfaceContent', 'interface_content_id');
    }

    /**
     * Set the relationship
     *
     * @var children of post
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'related_id');
    }

    /**
     * Set the relationship
     *
     * @var children of post
     */

    public function post()
    {
        return $this->belongsTo('App\Models\Post', 'related_id');
    }
}
