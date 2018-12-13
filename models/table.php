<?php

require_once('dbtools.php');

abstract class Table
{
	protected static $table_name;

	public function dump()
	{
		var_dump($this);
	}

	public function hydrate()
	{
		if (empty($this->{$this->pk_field_name}))
			die('try to hydrate without PK');

		// recuperer les donnees en BDD
		$query = "SELECT * FROM ".$this->table_name." WHERE ".$this->pk_field_name." = ".$this->{$this->pk_field_name};

		$result = myFetchAssoc($query);

		foreach ($this->fields_list as $field_name)
			$this->{$field_name} = $result[$field_name];
	}

	public function save()
    {
    	//@TODO

    }
    
    public static function getAll()
    {
        $query ="SELECT * FROM ".static::$table_name;
		$items = myFetchAllAssoc($query);
		return $items;
	}
}