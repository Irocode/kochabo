<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Order extends BaseModel implements BaseModelInterface
{
    protected $primaryKey = 'customercustomer_id';
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
        return "order/" . $this->attributes['customercustomer_id'] . "/" . $this->attributes['customercustomer_id'];
    }

    public function users()

    {
        return $this->belongsTo ('Users');
    }


     public function order_address()
    {
        return $this->hasMany ('Order_Address', 'customercustomer_id')->orderBy('orderorder_id', 'ASC');
    }

     public function order_status_history()
    {
        return $this->hasMany ('Order_Status_History', 'customercustomer_id')->orderBy('orderorder_id', 'ASC');
    }

     public function order_items()
    {
        return $this->hasMany ('Order_Items', 'customercustomer_id')->orderBy('orderorder_id', 'ASC');
    }
}

