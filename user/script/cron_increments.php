<?php
try{
	
		require_once('classes/investment_lib.php');
	
		$connect = new Database();
		$connect->DBConection();
		
		$investment = new Investment();
		$date = date("y-m-d");

		$query = "SELECT `ID` FROM `investments` WHERE `status` = 'active'  AND `last_increment_date` < '$date'";
		
		$run = mysql_query($query);
		
		
		while($row = mysql_fetch_array($run)){
		
			$investment->setID($row['ID']);
		
			$investment->loadAll();
			
				
		$investment->increments();
		
			
			$investment->updateAll();
			
			}
		
		//$connect->closeDBConnection();
}
catch (Exception $ex){
	echo $ex;
	
	}

?>