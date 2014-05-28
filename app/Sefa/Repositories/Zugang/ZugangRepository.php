<?php namespace Sefa\Repositories\Logisticianmanager;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;
use Config;
$config = Config::get('sfcms');

$db_pass="bono9999";

$options = array(
    'delete_type' => 'POST',
    'db_host' => 'localhost',
    'db_user' => 'root',
    'db_pass' => $db_pass,
    'db_name' => 'kochabo',
    'db_table' => 'g1'
);



