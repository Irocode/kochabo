<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Order extends BaseModel implements BaseModelInterface {

    protected $primaryKey = 'order_id';
    public $table = 'order';
  

     public $fillable=['order_id', 'delivery_date', 'customercustomer_id','deliverable', 'order_increment_id','created_at','updated_at'];
  

 protected $appends = ['url'];

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {


        return "order/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }

 
 
//hasmanybelongs
    public function users()

    {
        return $this->belongsTo ('Users');
       
    }




}

