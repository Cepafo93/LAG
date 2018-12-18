<?php
require_once("table.php");

class User extends Table{
    protected $pk_field_name ='id_user';
    protected static $table_name = 'users';
    protected $field_list = ['email','familyname','firstname','login','password'];
}