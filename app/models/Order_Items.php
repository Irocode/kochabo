<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Order_Items extends BaseModel implements BaseModelInterface
{
    protected $primaryKey = 'orderorder_id';
    public $table = 'order_items';
    public $fillable = [

    'order_items_id',        
    'orderorder_id',   
    'product_id',
    'product_sku', 
    'product_name',
    'original_price_net', 
    'discount', 
    'affilate_discount', 
    'affilate_credit', 
    'giftvoucher_credit',
    'coupon_code',
    'giftvoucher_code',
    'affilate_code', 
    'quantity',
    'timestamp',
    'created_at',
    'updated_at'
 ];

    protected $appends = ['url'];

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return "order/" . $this->attributes['orderorder_id'] . "/" . $this->attributes['orderorder_id'];
    }


   //hasmanybelongs
    public function order()
    {
        return $this->belongsTo ('Order');
    }
}
