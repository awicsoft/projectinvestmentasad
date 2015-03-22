<?php

require_once 'database.php';
class RefCommision extends Database{
	var $ID;
	var $userID;
	var $comm;
	var $date;
	
	//utility function
	
	//setters
	function setId($ID){$this->ID = $ID;}
	function setUserId($userID){$this->userID = $userID;}
	function setComm($comm){$this->comm = $comm;}
	function setDate($date){$this->date = $date;}	
	//getters
	function getId(){return $this->ID;}
	function getUserId(){return $this->userID;}	
	function getComm(){return $this->comm;}	
	function getDate(){return $this->date;}	
	//loader
	
	function loadUserId(){
		$this->DBConection();
		$row = $this->giveRow("SELECT `userID` FROM `ref_commision` WHERE `ID` = '$this->ID'");
		$this->userID = $row['userID'];
		$this->closeDBConnection();
		}
	function loadComm(){
		$this->DBConection();
		$row = $this->giveRow("SELECT `comm` FROM `ref_commision` WHERE `ID` = '$this->ID'");
		$this->comm = $row['comm'];
		$this->closeDBConnection();
		}
	function loadDate(){
		$this->DBConection();
		$row = $this->giveRow("SELECT `date` FROM `ref_commision` WHERE `ID` = '$this->ID'");
		$this->date = $row['date'];
		$this->closeDBConnection();
		}
		function loadAll(){
			loadUserId();
			loadComm();
			loadDate();
			}
	//updater
	function updateUserId(){
		$this->DBConection();
		$row = $this->run("UPDATE `ref_commision` SET `userID` = '$this->userID' WHERE `ID` = '$this->ID';");
		
		$this->closeDBConnection();
		}	
	function updateComm(){
		$this->DBConection();
		$row = $this->run("UPDATE `ref_commision` SET `comm` = '$this->comm' WHERE `ID` = '$this->ID';");
		
		$this->closeDBConnection();
		}	
	function updateDate(){
		$this->DBConection();
		$row = $this->run("UPDATE `ref_commision` SET `date` = '$this->date' WHERE `ID` = '$this->ID';");
		
		$this->closeDBConnection();
		}	
		
	function updateAll(){
		updateUserId();
		updateComm();
		updateDate();
		
		}
				
	}
	

?>