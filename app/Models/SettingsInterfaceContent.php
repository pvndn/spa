<?php
namespace App\Models;

use App\Models;
use App\Models\AbstractModel;

class SettingsInterfaceContent extends AbstractModel
{
    
    protected $editableFields = [
        'interface_id',
        'language_id',
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
    protected $table = 'interface_contents';

    protected $primaryKey = 'id';

    /**
     * Validation
     */
    public $rules = array(
        'interface_id' => 'int',
        'language_id' => 'int',
    );

    public function st_interface()
    {
        return $this->belongsTo('App\Models\SettingsInterface', 'interface_id');
    }

    public function interfaceItem()
    {
        return $this->hasMany('App\Models\SettingsInterfaceItem', 'interface_content_id');
    }
}
