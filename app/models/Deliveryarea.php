<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Deliveryarea extends BaseModel implements BaseModelInterface
{
    protected $primaryKey = 'user_id';
    public $table = 'address';
    public $fillable = [
        'id',
        'gender',
        'city',
        'company',
        'country',
        'dateofbirth',
        'deliveryinformation',
        'fax',
        'email' ,
        'first_name',
        'is_published',
        'last_name',
        'latitude',
        'longitude',
        'prefix',
        'stateprovince',
        'street',
        'suffix',
        'telephone',
        'zip',
        'user_id',
        'gender_delivery',
        'city_delivery',
        'company_delivery',
        'country_delivery',
        'dateofbirth_delivery',
        'deliveryinformation_delivery',
        'fax_delivery',
        'email_delivery',
        'first_name_delivery',
        'last_name_delivery',
        'stateprovince_delivery',
        'street_delivery' ,
        'telephone_delivery',
        'zip_delivery',
        'address_delivery_bill'];

    protected $appends = ['url'];

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return "address/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }
}

