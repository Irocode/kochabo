<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Deliverytimes extends BaseModel implements BaseModelInterface {

	//protected $primaryKey = 'user_id';
    public $table = 'deliverytimes';
  

   public $fillable=['id', 'is_published','user_id' ,'name', 'delivery_time_from' , 'delivery_time_to' , 'nightjump' ,'created_at','updated_at'
];
 
 



    protected $appends = ['url'];

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {


        return "deliverytimes/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }




//hasmanybelongs
    public function logisticianmanager()

    {
        return $this->belongsTo ('Logisticianmanager');
       
    }


}

