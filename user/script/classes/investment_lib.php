<?php 
require_once 'database.php';
class Investment extends Database {
	var $userID;
	var $investedAmmount;
	var $earned;
	var $withdraw;
	var $deposit;
	
	var $packageID;
	var $packageType;
	var $profit;
	var $loss;
	var $startDate;
	var $lastIncrementDate;
	var $ID;
	var $userMarchantID;
	var $status;
	var $inacount;
	//Utility
	function isUserMarchantAvialable(){
	$this->DBConection();
		
		$query = "SELECT *
FROM `user_marchant` WHERE `ID` = '$this->userMarchantID;'";
		$run = mysql_query($query);
		$row = mysql_fetch_array($run);
	
		
		$this->closeDBConnection();
		
		if(empty($row['username1'])) 
		 return false;
		
		return true;
		
		}	
	function tellMarchantEmail(){
		
		$this->DBConection();
		$query = "SELECT `username1` FROM `user_marchant` WHERE `ID` = '$this->userMarchantID'";
		
		$run = mysql_query($query);
		$row = mysql_fetch_array($run);
		$this->closeDBConnection();
	
		return $row['username1'];
		
		
		}	
	function tellMarchantName(){
		$this->DBConection();
		$query = "SELECT `marchantID` FROM `user_marchant` WHERE `ID` = '$this->userMarchantID'";
		
		$run = mysql_query($query);
		$row = mysql_fetch_array($run);
		
		$marchantID = $row['marchantID'];
		
		$query = "SELECT `name` FROM `marchant` WHERE `ID` = '$marchantID'";
		$run = mysql_query($query);
		$row = mysql_fetch_array($run);
		$this->closeDBConnection();
		return $row['name'];
		
		
		
		}
	function tellWithdrawable(){
		return $this->earned - $this->withdraw;
		
		}
	function tellMaximumEarned(){
		$this->DBConection();
		$query = "SELECT `maximuim` FROM `daily_packages` WHERE `ID` = '$this->packageID'";
		$run = mysql_query($query);
		$row = mysql_fetch_array($run);
		
		$this->closeDBConnection();
		return ($row['maximuim']/100 * $this->deposit);
		}
				
	//Setter and Getters
	function setStatus($status){$this->status = $status;}
	function getStatus(){return $this->status;}
	
	
	function setLoss($loss){$this->loss = $loss;}
	function getLoss(){return $this->loss;}
	function setDeposit($deposit){
		$this->deposit = $deposit;
		}
	function setUserMarchantID($userMarchantID){
		if(empty($userMarchantID))
		throw new Exception("userMarchantID cannot be Empty");
		
		$this->userMarchantID = $userMarchantID;
		 
		}
	function getUserMarchantID(){
			return $this->userMarchantID;
		}	
	function setID($ID){ 
		if(empty($ID))
		throw new Exception("ID cannot be Empty");
		
		$this->ID  = $ID;	
	}
	function getID(){ return $ID;}

	function setLastIncrementDate($lastIncrementDate){
		if(empty($lastIncrementDate))
			throw new Exception("lastIncrementDate  cannot be Empty");
			

		 $this->lastIncrementDate = $lastIncrementDate;
		
		
		}
	function getLastIncrementDate(){
		return $this->lastIncrementDate;
		}	
	function setStartDate($startDate){
		if(empty($startDate))
			throw new Exception("Start date cannot be Empty");
		$this->startDate = $startDate;
		
		
		}
	function getStartDate(){
		return $this->startDate;
		}	
		function setProfit($profit){
	
			$this->profit = $profit;
		}
	function getProfit(){
		return $this->profit;
		}	
function setpackageType($packageType){
		if(empty($packageType))
		throw new Exception("packageType cannot be Empty");
		
		$this->packageType = $packageType;
		
		
		}
	function getpackageType(){
		return $this->packageType;
		
		}	

	function setpackageID($packageID){
		if(empty($packageID))
		throw new Exception("packageID cannot be Empty");
		
		$this->packageID = $packageID;
		
		}
	function setUserID($userID){
		if(empty($userID))
		throw new Exception("User ID cannot be Empty");
		
		$this->userID = $userID;
		
		}
	
	
	
	function setEarned($earned){
		if(empty($earned))
			throw new Exception("earned cannot be Empty");
			
			$this->earned = $earned;
			
		}	
	function setWithdraw($withdraw){
			if(empty($withdraw))
			throw new Exception("withdraw cannot be Empty");
			
			$this->withdraw = $withdraw;
		
		}
	function getUserID(){
		
			return $this->userID;
		}
		
	
		function getEarned(){
		
			return $this->earned;
		}
		function getWithdraw(){
		
			return $this->withdraw;
		}
		function getDeposit(){
		
			return $this->deposit;
		}
		function getPackageID(){
		
			return $this->packageID;
		}
		function isRecordEmty(){
			if(0)
				return true;
			return false;
			}
		//Loading Function 	
		function loadStatus(){
				if(empty($this->ID))
				throw new Exception("ERROR LOADING DATA : INVESTMENT ID IS EMPTY");
			$this->DBConection();
			$query = "SELECT `status`  FROM `investments`  WHERE `ID` ='$this->ID';";
			$run = mysql_query($query);
			$row = mysql_fetch_array($run);
			$this->status = $row['status'];
			
			$this->closeDBConnection();
			
			
			}
		function loadInAcount(){
		$this->DBConection();
			$query = "SELECT `inacount`  FROM `investments`  WHERE `ID` ='$this->ID';";
			$run = mysql_query($query);
			$row = mysql_fetch_array($run);
			$this->inacount= $row['inacount'];
			
			$this->closeDBConnection();
		}	
		function loadLoss(){
			if(empty($this->ID))
				throw new Exception("ERROR LOADING DATA : INVESTMENT ID IS EMPTY");
			$this->DBConection();
			$query = "SELECT `loss`  FROM `investments`  WHERE `ID` ='$this->ID';";
			$run = mysql_query($query);
			$row = mysql_fetch_array($run);
			$this->loss = $row['loss'];
			
			$this->closeDBConnection();
			
			}
		function loaduserID(){
			if(empty($this->ID))
				throw new Exception("ERROR LOADING DATA : INVESTMENT ID IS EMPTY");
			$this->DBConection();
			$query = "SELECT `userID`  FROM `investments`  WHERE `ID` ='$this->ID';";
			$run = mysql_query($query);
			$row = mysql_fetch_array($run);
			$this->userID = $row['userID'];
			
			$this->closeDBConnection();
			
			}
		function loadearned(){
			if(empty($this->ID))
				throw new Exception("ERROR LOADING DATA : INVESTMENT ID IS EMPTY");
			$connection1 = new Database();
			$connection1->DBConection();
			$query = "SELECT `earned`  FROM `investments`  WHERE `ID` ='$this->ID';";
			
			$run = mysql_query($query);
			$row = mysql_fetch_array($run);
			
			$this->earned = $row['earned'];
			
			
			$connection1->closeDBConnection();
			
			}
			function loadwithdraw(){
			if(empty($this->ID))
				throw new Exception("ERROR LOADING DATA : INVESTMENT ID IS EMPTY");
			$this->DBConection();
			$query = "SELECT `withdraw`  FROM `investments`  WHERE `ID` ='$this->ID';";
			
			$run = mysql_query($query);
			$row = mysql_fetch_array($run);
			
			$this->withdraw = $row['withdraw'];
			
			
			$this->closeDBConnection();
			
			}
			function loaddeposit(){
			if(empty($this->ID))
				throw new Exception("ERROR LOADING DATA : INVESTMENT ID IS EMPTY");
			$this->DBConection();
			$query = "SELECT `deposit`  FROM `investments`  WHERE `ID` ='$this->ID';";
			
			$run = mysql_query($query);
			$row = mysql_fetch_array($run);
			
			$this->deposit = $row['deposit'];
			
			
			$this->closeDBConnection();
			
			}
			function loadpackageID(){
			if(empty($this->ID))
				throw new Exception("ERROR LOADING DATA : INVESTMENT ID IS EMPTY");
			$this->DBConection();
			$query = "SELECT `packageID`  FROM `investments`  WHERE `ID` ='$this->ID';";
			
			$run = mysql_query($query);
			$row = mysql_fetch_array($run);
			
			$this->packageID = $row['packageID'];
			
			
			$this->closeDBConnection();
			
			}
		function loadpackageType(){
			if(empty($this->ID))
				throw new Exception("ERROR LOADING DATA : INVESTMENT ID IS EMPTY");
			$this->DBConection();
			$query = "SELECT `package_type`  FROM `investments`  WHERE `ID` ='$this->ID';";
			
			$run = mysql_query($query);
			$row = mysql_fetch_array($run);
			
			$this->packageType = $row['package_type'];
			
			
			$this->closeDBConnection();
			
			}
			function loadprofit(){
			if(empty($this->ID))
				throw new Exception("ERROR LOADING DATA : INVESTMENT ID IS EMPTY");
			$this->DBConection();
			$query = "SELECT `profits`  FROM `investments`  WHERE `ID` ='$this->ID';";
			
			$run = mysql_query($query);
			$row = mysql_fetch_array($run);
			
			$this->profit = $row['profits'];
			
			
			$this->closeDBConnection();
			
			}
			
			
			
				function loadstartDate(){
			if(empty($this->ID))
				throw new Exception("ERROR LOADING DATA : INVESTMENT ID IS EMPTY");
			$this->DBConection();
			$query = "SELECT `start_date`  FROM `investments`  WHERE `ID` ='$this->ID';";
			
			$run = mysql_query($query);
			$row = mysql_fetch_array($run);
			
			$this->startDate = $row['start_date'];
			
			
			$this->closeDBConnection();
			
			}
			function loadlastIncrementDate(){
			if(empty($this->ID))
				throw new Exception("ERROR LOADING DATA : INVESTMENT ID IS EMPTY");
			$this->DBConection();
			$query = "SELECT `last_increment_date`  FROM `investments`  WHERE `ID` ='$this->ID';";
			
			$run = mysql_query($query);
			$row = mysql_fetch_array($run);
			
			$this->lastIncrementDate = $row['last_increment_date'];
			
			
			$this->closeDBConnection();
			
			}
			function loaduserMarchantID(){
			if(empty($this->ID))
				throw new Exception("ERROR LOADING DATA : INVESTMENT ID IS EMPTY");
			$this->DBConection();
			$query = "SELECT `user_marchantID`  FROM `investments`  WHERE `ID` ='$this->ID';";
			
			$run = mysql_query($query);
			$row = mysql_fetch_array($run);
			
			$this->userMarchantID = $row['user_marchantID'];
			
			
			$this->closeDBConnection();
			
			}
			function loadAll(){
				if(empty($this->ID))
					throw new Exception("ERROR LOADING DATA : INVESTMENT ID IS EMPTY");
					
				$this->loaddeposit();
				$this->loadearned();
				$this->loadlastIncrementDate();
				$this->loadpackageID();
				$this->loadpackageType();
				$this->loadprofit();
				$this->loadLoss();
				$this->loadstartDate();
				$this->loaduserID();
				$this->loaduserMarchantID();
				$this->loadwithdraw();	
				$this->loadStatus();
				$this->loadInAcount();
				}
			
		///Updating Functions
		function updateStatus(){$this->DBConection();
						$this->DBConection();
				
					$query = "UPDATE `investments` SET `status` = '$this->status' WHERE `ID` ='$this->ID';";
					$run = mysql_query($query);
					
					$this->closeDBConnection();
					}
			function updateLoss(){
					$this->DBConection();
					
					$query = "UPDATE `investments` SET `loss` = '$this->loss' WHERE `ID` ='$this->ID';";
					$run = mysql_query($query);
					
					$this->closeDBConnection();
				}
			function upadateProfits(){
					$this->DBConection();
					$query = "UPDATE `investments` SET `profits` = '$this->profit' WHERE `ID` ='$this->ID';";
					$run = mysql_query($query);
					
					$this->closeDBConnection();
				}
			function upadateEarned(){
					$this->DBConection();
					
					$query = "UPDATE `investments` SET `earned` = '$this->earned' WHERE `ID` ='$this->ID';";
					$run = mysql_query($query);
					
					$this->closeDBConnection();
				}
			function upadateWithdraw(){
					$this->DBConection();
					
					$query = "UPDATE `investments` SET `withdraw` = '$this->withdraw' WHERE `ID` ='$this->ID';";
					$run = mysql_query($query);
					
					$this->closeDBConnection();
				}	
				
		
			function updatePackageID(){
					$this->DBConection();
					
					$query = "UPDATE `investments` SET `packageID` = '$this->packageID' WHERE `ID` ='$this->ID';";
					$run = mysql_query($query);
					
					$this->closeDBConnection();
				
				}
			function updatePackage_type(){
				$this->DBConection();
					
					$query = "UPDATE `investments` SET `package_type` = '$this->packageType' WHERE `ID` ='$this->ID';";
					$run = mysql_query($query);
					
					$this->closeDBConnection();
				
				}
			function updateUserID(){
				$this->DBConection();
					
					$query = "UPDATE `investments` SET `userID` = '$this->userID' WHERE `ID` ='$this->ID';";
					$run = mysql_query($query);
					
					$this->closeDBConnection();
				
				
				}
			function updateUser_marchantID(){
				$this->DBConection();
					
					$query = "UPDATE `investments` SET `user_marchantID` = '$this->userMarchantID' WHERE `ID` ='$this->ID';";
					$run = mysql_query($query);
					
					$this->closeDBConnection();
				}
		
			function updateDeposit(){
				$this->DBConection();
					
					$query = "UPDATE `investments` SET `deposit` = '$this->deposit' WHERE `ID` ='$this->ID';";
					$run = mysql_query($query);
					
					$this->closeDBConnection();
				
				}
			function updateLast_increment_date(){
				$this->DBConection();
					
					$query = "UPDATE `investments` SET `last_increment_date` = '$this->lastIncrementDate' WHERE `ID` ='$this->ID';";
					$run = mysql_query($query);
					
					$this->closeDBConnection();
				
				
				}
			
				
					
					//inserting
					
					
					//other functions
		
		
									
			

function updateStart_date(){
				$this->DBConection();
					
					$query = "UPDATE `investments` SET `start_date` = '$this->startDate' WHERE `ID` ='$this->ID';";
					$run = mysql_query($query);
					
					$this->closeDBConnection();
				
				}	
function updateAll(){
					$this->upadateEarned();
					$this->upadateProfits();
					$this->upadateWithdraw();
					$this->updateDeposit();
				
					$this->updateLast_increment_date();
					$this->updatePackage_type();
					$this->updatePackageID();
					$this->updateStart_date();
					//$this->updateUser_marchantID();
					$this->updateUserID();
					
					$this->updateLoss();
					
					$this->updateStatus();
					}
	function insert(){
						
						$this->DBConection();
						$query= "INSERT INTO `investments` (`ID`, `packageID`, `package_type`, `userID`, `user_marchantID`, `earned`, `withdraw`, `deposit`, `profits`, `last_increment_date`, `start_date` , `status`) VALUES (NULL, '$this->packageID', '$this->packageType', '$this->userID', '$this->userMarchantID', '$this->earned', '$this->withdraw', '$this->deposit', '$this->profit', '$this->lastIncrementDate', '$this->startDate' , '$this->status');";
						$run = mysql_query($query);
						
						$this->closeDBConnection();
						
						}
	function tellCommistioRate(){
			if($this->isRecordEmty())
				throw new Exception("TELL COMMISTION ERROR :Record is Empty");
				
			$this->DBConection();
				
			$query = "SELECT `commission` FROM `$this->packageType` WHERE `ID` = '$this->packageID'";
			$run = mysql_query($query);
			$row = mysql_fetch_array($run);
					
			$this->closeDBConnection();
			
			return $row['commission'];
					
				
			
			}
		function isValidDateToIncrement(){
				
				$curr = strtotime(date("y-m-d"));
				$last = strtotime($this->lastIncrementDate);
				
				if($curr > $last)
					return true;
					
				return false;		
					
				}
	function isCompeleted(){
		return $this->status == "COMPELETED";
		}
	function isActive(){
	//echo $this->status;
		return $this->status == "active";
		
		}	
	function increments(){
	$date = date("y-m-d");
				if(!$this->isActive()){
				
					return ;
				}
				
				if(!$this->isValidDateToIncrement())
					throw new Exception("Last Increment date Should be less than current date for Incrementings");
				
				if($this->earned < $this->tellMaximumEarned()){
						$this->setStatus("do daily work to continue");
			
			$this->setLastIncrementDate($date);
						
						
						$rate =	$this->tellCommistioRate();			
							$rate /= 100;	
									
							if($rate > 0.0){
								
								$this->profit += ($this->deposit * $rate);
								
								
								}
							else if($rate < 0.0){
								
								$this->loss += ($this->deposit * $rate);
								
								
								}
								$this->calEarned();
								
						}else if(!$this->isCompeleted()){
								$this->setStatus("COMPELETED");
								
								$this->updateStatus();
							}
					}
						
				function calEarned(){
					$i = ($this->profit - $this->earned) + $this->loss;
					if($i > 0){
						if(($this->earned + $i ) > $this->tellMaximumEarned())
							$this->earned =  $this->tellMaximumEarned();
						else{
							
							$this->earned += $i;
							$this->giveParentOnPerEarningComm($i);
						}
						}
						
				} 
				
				function activeUserStatus(){
					$this->run("UPDATE .`user` SET `status` = '1' WHERE `ID` = '$this->userID';");
				}
				function isUserActive(){
					$this->DBConection();
					$row = $this->giveRow("SELECT `status` FROM `user` WHERE `ID` = '$this->userID';");
					$this->closeDBConnection();
					
					if($row['status'] == 1){
						return true;}
					else 
						return false;
					}
				
				function giveParentOnActiveComm(){
					if(!$this->isUserActive()){
					
						$this->DBConection();
						$row = $this->giveRow("SELECT `commision` FROM `commistions` WHERE `name` = 'on_active_refferal'");
						$this->closeDBConnection();
						$rate = $row['commision'] /100;
						
						echo $comm = $this->getDeposit() * $rate;
						$this->DBConection();
						$row = $this->giveRow("SELECT `commision` FROM `ref_commision` WHERE `userID` = '$this->userID'");
						$this->closeDBConnection();
						
						$preComm = $row['commision'];
						$comm += $preComm;
						
						$run = $this->run("UPDATE `ref_commision` SET `commision` = '$comm' WHERE `userID` ='$this->userID' AND `parentID` != '0';");
						
					}
					
					}
						
				function giveParentOnPerEarningComm($earned){
					
					
						$this->DBConection();
						$row = $this->giveRow("SELECT `commision` FROM `commistions` WHERE `name` = 'on_earning_refferal'");
						$this->closeDBConnection();
						$rate = $row['commision'] /100;
						
					$comm = $earned * $rate;
						
						$this->DBConection();
						$row = $this->giveRow("SELECT `commision` FROM `ref_commision` WHERE `userID` = '$this->userID'");
						$this->closeDBConnection();
						
						$preComm = $row['commision'];
						$comm += $preComm;
						$run = $this->run("UPDATE `ref_commision` SET `commision` = '$comm' WHERE `userID` ='$this->userID' AND `parentID` != '0';");
						
					
					
					}

}				
?>