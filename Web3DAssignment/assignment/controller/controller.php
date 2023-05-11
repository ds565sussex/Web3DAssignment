<?php
// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageURI = null) // constructor of the class
	{
		$this->load = new Load(); 
		$this->model = new Model();
		// determine what page you are on
		$this->$pageURI();
	}

    // home page function
	function home()
	{
		// $data = $this->model->getJSONData();
		$this->load->view("home");
	}

	function viewDrinks($name){
		$data = $this->model->getDrinkByName($name);
		$this->load->view("viewDrinks", $data);
	}

	function apiCreateTable()
	{
	  	// echo "Create table function";
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}

	function apiCreateBrandsTable()
	{
	  	// echo "Create table function";
		$data = $this->model->dbCreateBrandsTable();
		$this->load->view('viewMessage', $data);
	}

	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  

	function apiGetData()
	{
		$data = $this->model->getJSONData();
		$this->load->view('viewMessage', $data);
	}  	




}
?>    