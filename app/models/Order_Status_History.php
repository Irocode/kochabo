<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Order_Status_History extends BaseModel implements BaseModelInterface
{
    protected $primaryKey = 'orderorder_id';
    public $table = 'order_status_history';
    public $fillable = [       
       

    'orderorder_id',
    'order_status_history_id',   
    'status', 
    'channel', 
    'operator',
    'timestamp',
    'created_at',
    'updated_at'];

    protected $appends = ['url'];

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return "order_status_history/" . $this->attributes['orderorder_id'] . "/" . $this->attributes['orderorder_id'];
    }

    //hasmanybelongs
    public function order()
    {
        return $this->belongsTo ('Order');
    }
}

