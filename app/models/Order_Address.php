<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Order_Address extends BaseModel implements BaseModelInterface
{
    protected $primaryKey = 'orderorder_id';
    public $table = 'order_address';
    public $fillable = [


    'address_id',
    'orderorder_id',
    'address_type',
    'gender',
    'first_name', 
    'last_name', 
    'street', 
    'city', 
    'country', 
    'stateprovince', 
    'zip',
    'housenumber',
    'stairway_number',
    'floor',
    'appartement_number',
    'delivery_information',
    'created_at',
    'updated_at' ];

    protected $appends = ['url'];

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return "order_address/" . $this->attributes['address_id'] . "/" . $this->attributes['address_id'];
    }
    
    //hasmanybelongs
    public function order()
    {
        return $this->belongsTo ('Order');
    }
}

