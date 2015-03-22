<?php

require_once 'includes/upper.php';

?>
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Daily Work<small>Share  & Earn More</small>
			</h3>
			
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			
			
			Share your refferal link and make extra money	<br />
			YOUR REFFERAL LINK <br />

			<?php 


					echo $url =  "http://hilaalbanking.com/signup.php?ref=".tellUserName($_SESSION['u_id']);


				$url=	urlencode($url);

				$title = urlencode("Variable HYip");
				$details = urlencode("usama");

				$link = "https://www.facebook.com/sharer.php?u=$url&t=$title&d=$details";



			?>

<h2>Your daily task is to push below button and Share your link.It will remain active your invest for the next 24 hours.You must share this add on your timeline it contains your refferal link its also benificial for you.</h2>
			
               

<form method="post" action="fb.php">
<input type="hidden" name="username" value="<?= tellUserName($_SESSION['u_id']);?>" />
<input class="btn btn-sm yellow filter-submit margin-bottom" type=submit value="SHARE US ON FACEBOOK">
</form>




<div class="main">
      <div class="container">
     
      <h3>Pay To Click (PTC) websites waly kesay logon k sath <br> fruad karty hain zara ye video daikhain.<h3>
       
       <iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x2cd0uu" allowfullscreen></iframe><br /><a href="http://www.dailymotion.com/video/x2cd0uu_beware-of-ptc-fraud-websites-dont-join-ptc_tech" target="_blank"></a>
       
       <h3>Hilaal Banking kia hy our ap kesy is pe kam kar sakty <br> hain us k liye nichy di gai videos daikhein.<h3> 
       
     <h3>Part 1<h3>
       
      <iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x2ccur1" allowfullscreen></iframe><br /><a href="http://www.dailymotion.com/video/x2ccur1_hilaal-banking-training-part-1_tech" target="_blank">
      
      
                      <clor=black><h3>Part 2<h3>
      
      <iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x2ccsdy" allowfullscreen></iframe><br /><a href="http://www.dailymotion.com/video/x2ccsdy_hilaal-banking-training-part-2_tech" target="_blank">
      
      
      
      
      
      

<?php

require_once 'includes/lower.php';

?>