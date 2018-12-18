<?php
require_once("table.php");

class Availability extends Table{
    protected $pk_field_name ='id_availability';
    protected static $table_name = 'availabilities';
    protected $field_list = ['start','end','user_id'];
}