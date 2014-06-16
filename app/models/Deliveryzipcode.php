<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Deliveryzipcode extends BaseModel implements BaseModelInterface
{
    //protected $primaryKey = 'user_id'; http://stackoverflow.com/questions/23048804/ajax-search-laravel
    //protected $primaryKey = 'user_id';
    public $table = 'deliveryzipcode';
    public $fillable = [
        'id',
        'user_id',
        'zip',
        'created_at',
        'updated_at',
        'is_published'];

    protected $appends = ['url'];

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return "deliveryzipcode/" . $this->attributes['id'] . "/" . $this->attributes['id'];
    }

    public function logisticianmanager()
    {
        return $this->belongsTo ('Logisticianmanager','id');
    }
}

