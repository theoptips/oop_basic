<?php
	// print_table
		// takes an associative array
		// print out HTML table
		// show key and show value
	
	class print_table {
		var $process_data_array;

		function __construct($data_array){
			$this->process_data_array = $data_array;
		}

		function header_print($data_header_array) {
			foreach ($data_header_array as $column_header) {
				echo "<th>".$column_header."</th>";
			}
		}

		function print_table() 
		{
			foreach ($this->process_data_array as $data_rows) 
			{
				echo "<tr>";
				foreach ($data_rows as $key => $value) 
				{
					echo "<td>".$value."</td>";
				}
				echo "</tr>";
			}
		}
	} 

	// print_select
		// takes an array as select tags

	
	class print_select {

		var $system_process_selection_name;
		var $system_process_array;

		function __construct($selection_name, $user_data_array)
		{
			$this->system_process_selection_name = $selection_name;
			$this->system_process_array = $user_data_array;
		}

		function print_select(){
			// print selection wrapper
			echo "<select name=".$this->system_process_selection_name.">";
			// print selection fields
			foreach ($this->system_process_array as $selection_field) {
				echo "<option value=".$selection_field.">".
				$selection_field."</option>";
			}
			echo "</selection>";
		}
	}

	$data_name_array = array(array("first_name" => "Michael", "last_name"=>"Choi", "nick_name"=>"Sensei"),array("first_name"=>"Dilys","last_name"=>"Sun","nick_name"=>"Codecademy Girl"));
	$print_name = new print_table($data_name_array);

	$state_array = array("CA","WA","UT","TX","AZ","NY");
	$print_state = new print_select("State", $state_array);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>OOP Exercise One</title>
	</head>
	<body>
		<h1>Table</h1>
		<table  border=1>
			<thead>
				<tr>
					<?php $print_name->header_print(array("First Name","Last Name","Nick Name"));?>
				</tr>
			</thead>
			<tbody>
					<?php $print_name->print_table();?>
			</tbody>
		</table>

		<h1>Select Dropdown</h1>
		<?php $print_state->print_select();?>

	</body>
</html>