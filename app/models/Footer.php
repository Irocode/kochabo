<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Footer extends BaseModel implements BaseModelInterface {

    public $table = 'footers';
    public $fillable=['id','hl_ueberuns', 'ct_ueberuns' ,'hl_rezepte', 'ct_rezepte' , 'hl_contact', 'ct_contact' , 'slug', 'datetime', 'is_published'];
    protected $appends = ['url'];

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "footer/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }
}
