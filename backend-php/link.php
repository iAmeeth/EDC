<?php

	class EDC_data
	{
		public $datafile;
		public $data;
		public $title;
		public $comp_names;
	
		function __construct()
		{
			//The Constructor of the class
			$this->datafile = file_get_contents($_SERVER['DOCUMENT_ROOT'].'\backend-php\data.json');
			
			
			$this->data = json_decode($this->datafile);
			$this->title = $this->data->edc_obj->title;
			echo $this->title;
			$this->comp_names = $this->data->edc_obj->companies;
			
		}
		
		function noOfItems()
		{
			//this function returns the number of companies in the data.json
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
		function searchkeyw($keyword) 
		{
			//basic search function. Gives complete details of company based on keyword searched.
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
	
	//Create an object for the plug and play feature
	$reader = new EDC_data;
?>

