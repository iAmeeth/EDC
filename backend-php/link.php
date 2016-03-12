<?php

class EDC_data
{
	private $datafile;
	private $data;
	private $title;
	private $comp_names;

	function __construct()
	{
		$this->datafile = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/My_Work/backend-php/data.json');	
		$this->data = json_decode($this->datafile);
		$this->title = $this->data->edc_obj->title;
		$this->comp_names = $this->data->edc_obj->companies;
	
	}
	function listnames()
	{
		//this function returns the number of companies in the data.json
		// foreach ($this->comp_names as $names) {
		// 	//echo $names->name;
		// }
		// echo $this->datafile;
		return sizeof($this->comp_names);
	}

	function getfield($id, $field)
	{
		foreach ($this->comp_names as $names) {
			if ($names->id == $id)
			{
				return $names->$field;
			}
		}
	}
	function searchkeyw($keyword) //basic search function. Gives complete details of company based on keyword searched.
	{
		foreach ($this->comp_names as $names) {
			if(preg_match($keyword, $names->name) || preg_match($keyword, $names->field1) || preg_match($keyword, $names->field2))
			{
				echo $names->name;
				echo $names->field1;
				echo $names->field2;
			}
		}
	}
}

// Turn off error reporting
//error_reporting(0);

$reader = new EDC_data;
//$data_obj->searchkeyw("/Comp/");
// echo $reader->listnames();
// echo "Animesh".$reader->getfield("1", name);
//$data_obj->getfield("2",field1);

?>

