<?php

class List_Kundengruppe extends Eloquent
{
    public $table = 'customers_groups';
    protected $primaryKey = 'customers_groups_id';
    public $fillable = [
        'customers_groups_id',
        'groupname',
        'default' ];
}



