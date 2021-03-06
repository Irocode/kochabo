<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class  AddressNoPrimaryKey extends BaseModel implements BaseModelInterface
{
    protected $primaryKey = 'id';
    public $table = 'address';

    public $fillable = [
        'id',
        'customercustomer_id',
        'art',
        'gender',
        'first_name',
        'last_name',
        'street' ,
        'zip' ,
        'country' ,
        'stateprovince',
        'housenumber',
        'stairway_number',
        'floor',
        'appartement_number',
        'created_at',
        'updated_at'];

    protected $appends = ['url'];

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return "address/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }

    public function users()
    {
        return $this->belongsTo ('Users');
    }
}

