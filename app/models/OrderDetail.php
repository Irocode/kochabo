<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class OrderDetail extends BaseModel implements BaseModelInterface
{
    protected $primaryKey = 'order_id';
    public $table = 'order';
    public $fillable = [
        
        'order_id',
        'customercustomer_id',
        'order_increment_id',               
        'deliverable',   
        'delivery_date',      
        'created_at',
        'updated_at' ];

    protected $appends = ['url'];

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return "order_detail/" . $this->attributes['order_id'] . "/" . $this->attributes['order_id'];
    }




     public function order_address()
    {
        return $this->hasMany ('OrderAddress');
    }

     public function order_status_history()
    {
        return $this->hasMany ('OrderStatusHistory');
    }

     public function order_items()
    {
        return $this->hasMany ('OrderItems');
    }
}

