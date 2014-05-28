<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Kochabobox extends BaseModel implements BaseModelInterface {

    public $table = 'kochabobox';
    public $fillable=['title', 'slug', 'content', 'datetime', 'is_published', 'bild1'];
    protected $appends = ['url'];

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "kochabobox/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }
}




