<?php

class List_Einheit extends Eloquent
{
    public $table = 'list_einheit';
    public $fillable = [
        'id',
        'bezeichnung',       
        'updated_at',
        'created_at' ];
}



