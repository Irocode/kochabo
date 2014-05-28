<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Offer extends BaseModel implements BaseModelInterface {

    public $table = 'offers';
    public $fillable=['title', 'slug', 'content', 'datetime', 'is_published', 'bild1'];
    protected $appends = ['url'];

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "offer/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }
}



