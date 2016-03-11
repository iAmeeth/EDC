<?php

class EDC_data
{
	private $datafile;
	private $data;
	private $title;
	private $comp_names;

	function __construct()
	{
		$this->datafile = file_get_contents($_SERVER['DOCUMENT_ROOT'].'\My Projects\EDC Website\backend-php\data.json');	
		$this->data = json_decode($this->datafile);
		$this->title = $this->data->edc_obj->title;
		$this->comp_names = $this->data->edc_obj->companies;
	
	}
	function listnames()
	{
		foreach ($this->comp_names as $names) {
		echo $names->name;
		}
	}

	function getfield($id, $field)
	{
		foreach ($this->comp_names as $names) {
			if ($names->id == $id)
			{
				echo $names->$field;
			}
		}
	}
}

// Turn off error reporting
//error_reporting(0);

$reader = new EDC_data;

#$data_obj->getfield("2",name);

?>

