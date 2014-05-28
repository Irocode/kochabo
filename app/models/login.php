<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Login extends BaseModel implements BaseModelInterface {

    public $table = 'login';
    public $fillable=['title', 'slug', 'content', 'datetime', 'is_published', 'bild1'];
    protected $appends = ['url'];

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "login/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }
}



