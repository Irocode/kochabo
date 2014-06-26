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
        return "order/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }

    public function users()

    {
        return $this->belongsTo ('Users');
    }
}

