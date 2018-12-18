<?php
require_once("table.php");

class Link_games_user extends Table{
    protected $pk_field_name ='id_link_games_user';
    protected static $table_name = 'link_games_users';
    protected $field_list = ['games_id','game_id','users_id','user_id'];
}