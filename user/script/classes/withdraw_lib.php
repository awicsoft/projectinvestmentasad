<?php
require_once('investment_lib.php');
require_once 'database.php';
class Withdaraw extends Database{
	
	var $ID;
	var $investmentID;
	var $date;
	var $ammount;
	var $status;
	///utility function
	function insert(){
		$this->DBConection();
		$query ="INSERT INTO `withdraw_history` (`ID`, `investmentID`, `date`, `ammount`, `status`) VALUES (NULL, '$this->investmentID', '$this->date', '$this->ammount', '$this->status');";
		$run = mysql_query($query);
		$this->closeDBConnection();
		
		}
	///setter and getters
	function setID($ID){
		$this->ID = $ID;
		}
	function getID(){
		return $this->ID;
		}
	function setInvestmentID($investmentID){
		$this->investmentID = $investmentID;
		}		
	function getInvestmentID(){
		return $this->investmentID;
		}
	function setDate($date){
		$this->date = $date;
		}		
	function getDate(){
		return $this->date;
		}
	function setAmmount($ammount){
		if($ammount <=0 || empty($ammount))
		throw new Exception("Ammount Should be Greator than Zero");
		$this->ammount = $ammount;
		}		
	function getAmmount(){
		return $this->ammount;
		}
	function setStatus($status){
	
		$this->status = $status;
		}		
	function getStatus(){
			if($this->status=="Pending")
				return "<lable style='color:#C03;'>$this->status</lable></b>";
		if($this->status=="Completed")
				return "<lable style='color:#090;'>$this->status</lable></b>";
		return $this->status;
		}
		
	////loader function
	function loadInvestmentID(){
		if(empty($this->ID)) 
			throw new Exception("investmentID load Error: ID cannot be Empty");
		
		$this->DBConection();
		$query = "SELECT `investmentID` FROM `withdraw_history` WHERE `ID` = '$this->ID'";
		$run = mysql_query($query);
		$row = mysql_fetch_array($run);
		$this->closeDBConnection();
		$this->investmentID = $row['investmentID'];
		
	}
		function loadDate(){
		if(empty($this->ID)) 
			throw new Exception("investmentID load Error: ID cannot be Empty");
		
		$this->DBConection();
		$query = "SELECT `date` FROM `withdraw_history` WHERE `ID` = '$this->ID'";
		$run = mysql_query($query);
		$row = mysql_fetch_array($run);
		$this->closeDBConnection();
		$this->date = $row['date'];
		
	}
		function loadAmmount(){
		if(empty($this->ID)) 
			throw new Exception("investmentID load Error: ID cannot be Empty");
		
		$this->DBConection();
		$query = "SELECT `ammount` FROM `withdraw_history` WHERE `ID` = '$this->ID'";
		$run = mysql_query($query);
		$row = mysql_fetch_array($run);
		$this->closeDBConnection();
		$this->ammount = $row['ammount'];
		
	}
		function loadStatus(){
		if(empty($this->ID)) 
			throw new Exception("investmentID load Error: ID cannot be Empty");
		
		$this->DBConection();
		$query = "SELECT `status` FROM `withdraw_history` WHERE `ID` = '$this->ID'";
		$run = mysql_query($query);
		$row = mysql_fetch_array($run);
		$this->closeDBConnection();
		$this->status = $row['status'];
		
	}
	function loadAll(){
		loadInvestmentID();
		loadDate();
		loadAmmount();
		loadStatus();
		
		
		}
			
	////UPDATE FUNCTION
		function updateInvestmentID(){
		if(empty($this->ID)) 
			throw new Exception("investmentID Update Error: ID cannot be Empty");
		
		$this->DBConection();
		$query = "UPDATE `withdraw_history` SET `investmentID` = '$this->investmentID' WHERE `withdraw_history`.`ID` ='$this->ID';";
		$run = mysql_query($query);
		
		$this->closeDBConnection();
		
		
	}
		function updateDate(){
		if(empty($this->ID)) 
			throw new Exception("investmentID Update Error: ID cannot be Empty");
		
		$this->DBConection();
		$query = "UPDATE `withdraw_history` SET `date` = '$this->date' WHERE `withdraw_history`.`ID` ='$this->ID';";
		$run = mysql_query($query);
		
		$this->closeDBConnection();
		
		
	}
	
	function updateAmmount(){
		if(empty($this->ID)) 
			throw new Exception("investmentID Update Error: ID cannot be Empty");
		
		$this->DBConection();
		$query = "UPDATE `withdraw_history` SET `ammount` = '$this->ammount' WHERE `withdraw_history`.`ID` ='$this->ID';";
		$run = mysql_query($query);
		
		$this->closeDBConnection();
		
		
	}
		function updateStatus(){
		if(empty($this->ID)) 
			throw new Exception("investmentID Update Error: ID cannot be Empty");
		
		$this->DBConection();
		$query = "UPDATE `withdraw_history` SET `status` = '$this->status' WHERE `withdraw_history`.`ID` ='$this->ID';";
		$run = mysql_query($query);
		
		$this->closeDBConnection();
		
		
	}
	function updateAll(){
		$this->updateAmmount();
		$this->updateDate();
		$this->updateInvestmentID();
		$this->updateStatus();
		
		}
				
}
?>