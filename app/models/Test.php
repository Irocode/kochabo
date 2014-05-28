<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Test extends BaseModel implements BaseModelInterface {

    public $table = 'tests';
    public $fillable=['id','hl_ueberuns', 'ct_ueberuns' ,'hl_rezepte', 'ct_rezepte' , 'hl_contact', 'ct_contact'];
    protected $appends = ['url'];

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "test/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }
}
