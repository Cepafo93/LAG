<?php
require_once("table.php");

class Game extends Table{
    protected $pk_field_name ='id_game';
    protected static $table_name = 'games';
    protected $field_list = ['name', "type","img_path"];
}