<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class OrderAddress extends BaseModel implements BaseModelInterface
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
        return "order_address/" . $this->attributes['orderorder_id'] . "/" . $this->attributes['orderorder_id'];
    }
    
    //hasmanybelongs
    public function order_detail()
    {
        return $this->belongsTo ('OrderDetail');
    }
}

