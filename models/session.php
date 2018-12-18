<?php
require_once("table.php");

class Session extends Table{
    protected $pk_field_name ='id_session';
    protected static $table_name = 'sessions';
    protected $field_list = ['availability_id','end','game_id','participant_id','start','user_id'];
}