<?php

	function header1(){
		
		session_start();
		
		//$_SESSION['u_id']=1;
		//session_destroy();
		?>
        
            <div id="header">
            
                <!-- start WRAP -->
                <div class="wrap">
                
                            <p class="stats left">Running Days: <span>23</span></p>				
                              <p class="links right">
							<?php if(isset($_SESSION['u_id'])){
								$str =  "a".$_SERVER['PHP_SELF'];;
				   $str1 = strtok($str ,'/');
				   $str1 = strtok('/');
				   $str1 = strtok('/');
				 
								if($str1=="user"){
								?>
								
                                  	<a href="index.php">Manage Your Account</a> &nbsp; &nbsp; &nbsp
                                  	<a href="logout.php">Logout</a>
                                 
								 
							<?php }else{
								?>
								  	<a href="index.php">Manage Your Account</a> &nbsp; &nbsp; &nbsp
                                  	<a href="logout.php">Logout</a>
								<?php
								} }else{ 				
											$str =  "a".$_SERVER['PHP_SELF'];;
										   $str1 = strtok($str ,'/');
										   $str1 = strtok('/');
										   $str1 = strtok('/');
											if($str1=="user") 	
											echo "<script>window.open('../login.php','_self')</script>"; ?>
                      
                            
                            
                             
                                <a href="signup.php">Open an Account</a> &nbsp; &nbsp; &nbsp; 
                                <a href="login.php">Investor Login</a>
                           
                            <?php }?>
                             </p>
                    <div class="clr"></div>
                    
                    <a href="index.php" class="logo"></a>
                    
                    <!-- start NAVIGATION -->
                    <ul id="navigation">
                   <?php
				   $str =  "a".$_SERVER['PHP_SELF'];;
				   $str1 = strtok($str ,'/');
				   $str1 = strtok('/');
				   $str1 = strtok('/');
				   
				    if($str1 == "user"){   ?>
               
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../about-us.php">About</a></li>
                    
                        <li><a href="../faq.php">FAQ</a></li>
                        <li><a href="../news.php">News</a></li>
                        <li><a href="../support.php">Support</a></li>
                   <?php }else{ ?>
                      <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About</a></li>
                   
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="support.php">Support</a></li>
                   <?php }?>
                    </ul>
                    <!-- end NAVIGATION -->
                    
                    <div class="clr"></div>
                
                </div>
                <!-- end WRAP -->
            
            </div>
	<?php
	}
	function top(){
		?>
		<div id="top">

	<!-- start WRAP -->
	<div class="wrap">
	
		<!-- start LEFT -->
		<div class="left">
		
			<h2>We are the only key to your success</h2>
			<p> No brackets, no hidden rules, no hidden fees. Pure money making opportunities, only here at Camelforex.com !</p>
			<p class="btn"><a href="about-us.php">Know More</a></p>
		
		</div>
		<!-- end LEFT -->
		
		<!-- start PLAN -->
		<div class="plan">
		
			<p class="percentage">2.1<span>%</span></p>
			<p class="text">Daily For<br /><span>120 Days</span></p>
			<p class="btn"><a href="javascript:;" id="openCalculator">Calculate Profit</a></p>
		
		</div>
		<!-- end PLAN -->
	
	</div>
	<!-- end WRAP -->

</div>
		<?php
		}
	function home(){
		?>
		<div id="home">

	<!-- start WRAP -->
	<div class="wrap">
			<h1>Welcome to Camelforex</h1>
		<p class="text">We are a group of versatile investors who are constantly looking for legitimate investment opportunities to generate profits. With more investment funds, we can take great advantage of all the strategies we have, and thus, we manage to generate a profit of 12% daily over a span of 12 days. We do not have a specific market where we put our investment focus on, because it is a given that all markets fluctuate every minute. That is the reason why we are always looking for new ways and new opportunities. But thanks to this fluctuation and �significant movements� in the markets, we are able to take advantage and we are able to produce a significant amount of profits. The important thing is knowing how to �predict� the market trends and this where we specialize. Camelforex assures you of your earnings on a daily basis. Our vast experience is priceless and it is our best guarantee.</p>
<p class="text"><script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
<a href="skype:?chat&blob=ip7w4eLnTcp6n8qjHmNyLLXkxRqaKqa6lPwUK0HcplTn036Vpe4oEZ8EVU2_mf9P"><img src="images/skype.png" style="border: none;" width="847" height="96" alt="ROBO Skype Chat" /></a>
</p>

		
		<p class="refCommission"><span>5<span>%</span></span><br />Referral Commission</p>
		
		<!-- start INFO -->
		<div class="info">
		
			<h3>Build Your Network</h3>
			<p>You do not need any money to start earning referral commission. you just need to invest your time. The more time you put into promoting your referral link, the more chances of you getting strong downlines. We will provide you the tools needed to do this such as: your own referral link and banners of different sizes which we guarantee can attract potential referrals. Create your account now, it�s FREE!</p>
		
		</div>
		<!-- end INFO -->
		
		<div class="clr"></div>
	
	</div>
	<!-- end WRAP -->

</div>
		
		<?php
		}
	function statics(){
		?>
        <div id="statistics">

	<!-- start WRAP -->
	<div class="wrap">
	
		<h3>Our Statistics</h3>
		
				<!-- start BOX -->
		<div class="box one">
		
			<p class="title">Latest Payments</p>
			
			<table cellpadding="0" cellspacing="0">

<tr><td>Flavio30</td><td class="value">$1.8</td></tr><tr><td>jesusmar10</td><td class="value">$3</td></tr><tr><td>jesusmar10</td><td class="value">$2</td></tr><tr><td>bjudit</td><td class="value">$2.16</td></tr><tr><td>mariaquattro</td><td class="value">$1.6</td></tr><tr><td>pirillo76</td><td class="value">$1.44</td></tr>			</table>
		
		</div>
		<!-- end BOX -->		
				<!-- start BOX -->
		<div class="box two">
		
			<p class="title">Latest Deposits</p>
			
			<table cellpadding="0" cellspacing="0">

<tr><td>supermoney<td></td><td class="value">$31.8</td></tr><tr><td>chance2014<td></td><td class="value">$20</td></tr><tr><td>Leila<td></td><td class="value">$12</td></tr><tr><td>mnk77<td></td><td class="value">$108</td></tr><tr><td>alissoncabral<td></td><td class="value">$12.8</td></tr><tr><td>Josef1959<td></td><td class="value">$14.5</td></tr>			</table>
		
		</div>
		<!-- end BOX -->		
				<!-- start BOX -->
		<div class="box three">
		
			<p class="title">Site Statistics</p>
			
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td>Started</td>
					<td class="value">Mar 3, 2014</td>
				</tr>
				<tr>
					<td>Total Members</td>
					<td class="value">2431</td>
				</tr>
				<tr>
					<td>Total Deposits</td>
					<td class="value">$125,689.49</td>
				</tr>
				<tr>
					<td>Total Withdrawals</td>
					<td class="value">$46,379.07</td>
				</tr>
				<tr>
					<td>Visitors Online</td>
					<td class="value">167</td>
				</tr>
				<tr>
					<td>Newest Member</td>
					<td class="value">Drjones</td>
				</tr>
			</table>
		
		</div>
		<!-- end BOX -->		
		<div class="clr"></div>
	
	</div>
	<!-- end WRAP -->

</div>
		<?php
		}

	function processors(){
		?>
        <div id="processors">
        
            <!-- start WRAP -->
            <div class="wrap">
            
                <img src="images/processor_PM.png" width="187" height="40" alt="PerfectMoney" />
                <img src="images/processor_PE.png" width="126" height="40" alt="Payeer" />
                <img src="images/processor_EP.png" width="84" height="40" alt="EgoPay" />
                <img src="images/processor_BTC.png" width="161" height="40" alt="BitCoin" />
            
            
            </div>
            <!-- end WRAP -->
        
        </div>
		<?php
		}
	function footer1(){
		?>
            <div id="footer">
            
                <!-- start WRAP -->
                <div class="wrap">
                
                    <!-- start BOX -->
                    <div class="box">
                    
                        <h4>Site Links</h4>
                        
                        <ul>
                        <?php  $str =  "a".$_SERVER['PHP_SELF'];;
				   $str1 = strtok($str ,'/');
				   $str1 = strtok('/');
				   $str1 = strtok('/');
				   
				    if($str1 == "user"){   ?>
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="../index.php">Terms and Conditions</a></li>
                            <li><a href="../affiliate.php">Banners Program</a></li>
                            <li><a href="../faq.php">Frequently Asked Questions</a></li>
                        <?php }else{?>
                         	<li><a href="index.php">Home</a></li>
                            <li><a href="index.php">Terms and Conditions</a></li>
                            <li><a href="affiliate.php">Banners Program</a></li>
                            <li><a href="faq.php">Frequently Asked Questions</a></li>
                        <?php }?>
                        </ul>
                    
                    </div>
                    <!-- end BOX -->
                
                    <!-- start BOX -->
                    <div class="box">
                    
                        <h4>Contact Information</h4>
                        
                        <p class="contact address">Camelforex is based in<br />London, England</p>
                        <p class="contact email"><a href="mailto:admin@twelverized.com">admin@twelverized.com</a></p>
                        <p class="contact certificate"><a href="#0" id="openCertificate">Our Certificate</a></p>
                    
                    </div>
                    <!-- end BOX -->
                
                    <!-- start BOX -->
                    <div class="box social">
                    
                        <h4>Social Media</h4>
                        
                        <a href="https://www.facebook.com/groups/twelverized/" target="_blank" class="social facebook">Find us on Facebook</a>
                        <a href="https://twitter.com/Twelverized" target="_blank" class="social twitter">Follow us on Twitter</a>
                    
                    </div>
                    <!-- end BOX -->
                
                    <!-- start BOX -->
                    <div class="box copy">
                    
                        Copyright &copy; 2014 All Rights Reserved<br />
            
                                
                    </div>
                    <!-- end BOX -->
                    
                    <div class="clr"></div>
                
                </div>
                <!-- end WRAP -->
            
            </div>
		<?php }	
		
		function calculator(){
			?>
                 <div id="calculator">
                
                    <a href="#0" id="closeCalculator">x</a>
                    
                    <div class="clr"></div>
                    
                    <h3>Deposit Amount</h3>
                    <input type="text" id="amount" name="amount" />
                    
                    <label>Daily For 120 Days</label>
                    <p class="result">$<span id="daily_profit">0.00</span></p>
                    
                    <div class="clr"></div>
                    
                    <label>Total Profit</label>
                    <p class="result two">$<span id="total_profit">0.00</span></p>
                    
                    <div class="clr"></div>
                    
                    <p class="btn"><a href="signup.php">Invest Now</a></p>
                
                </div>
			<?php
			}
?>