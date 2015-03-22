
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CamelForex.com</title>
<!--This Web is designed by Musa Butt, contact : 03245187257
<!-- start CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!-- end CSS -->

<!-- start JS -->
<script src="jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="js/functions.js" type="text/javascript"></script>
<!-- end JS -->
<?php include 'script/acount_functions.php';?>
<?php include '../include/public_functions.php';?>
</head>

<body>

<!-- start HEADER -->
<?php header1(); ?>
<!-- end HEADER -->

<!-- start MAIN -->
<div id="main">

		<!-- start TOP -->
		<?php userTop();?>
	<!-- end TOP -->
			
	<!-- start WRAP -->
	<div class="wrap">
	
				<!-- start MENU -->
			<?php startMenu(); ?>
		<!-- end MENU -->
				
		<!-- start CONTENT -->
		<div id="content">

				<p class="pageTitle">Earning <span>History</span></p>
 		

<script language=javascript>
function go(p)
{
  document.opts.page.value = p;
  document.opts.submit();
}
</script>


<form method=post name=opts>
<input type=hidden name=a value=earnings>
<input type=hidden name=page value=1>
<table cellspacing=0 cellpadding=0 border=0 width=100%>
<tr>
<td></td>
 <td colspan="4">
   <select name=type class=inpts onchange="document.opts.submit();">
<option value="">All transactions</option>
   </select>
   <select name=ec class=inpts>
     <option value=-1>All eCurrencies</option>
 <option value=18 >Perfectmoney</option>
 <option value=36 >EgoPay</option>
 <option value=43 >Payeer</option>
 <option value=1006 >Bitcoin</option>
   </select>
 </td>
</tr>
<tr>
 <td>
From:
</td>
<td>
 <select name=month_from class=inpts>
<option value=1 >Jan
<option value=2 >Feb
<option value=3 selected>Mar
<option value=4 >Apr
<option value=5 >May
<option value=6 >Jun
<option value=7 >Jul
<option value=8 >Aug
<option value=9 >Sep
<option value=10 >Oct
<option value=11 >Nov
<option value=12 >Dec
</select>
</td>
<td>
<select name=day_from class=inpts>
<option value=1 selected>1
<option value=2 >2
<option value=3 >3
<option value=4 >4
<option value=5 >5
<option value=6 >6
<option value=7 >7
<option value=8 >8
<option value=9 >9
<option value=10 >10
<option value=11 >11
<option value=12 >12
<option value=13 >13
<option value=14 >14
<option value=15 >15
<option value=16 >16
<option value=17 >17
<option value=18 >18
<option value=19 >19
<option value=20 >20
<option value=21 >21
<option value=22 >22
<option value=23 >23
<option value=24 >24
<option value=25 >25
<option value=26 >26
<option value=27 >27
<option value=28 >28
<option value=29 >29
<option value=30 >30
<option value=31 >31
</select>
</td>
<td>
<select name=year_from class=inpts>
<option value=2014 selected>2014
</select>
</td>
<td rowspan="2"><input type=submit value="Go" /></td>
</tr>
<tr>
<td>
To:
</td>
<td>
 <select name=month_to class=inpts>
<option value=1 >Jan
<option value=2 >Feb
<option value=3 selected>Mar
<option value=4 >Apr
<option value=5 >May
<option value=6 >Jun
<option value=7 >Jul
<option value=8 >Aug
<option value=9 >Sep
<option value=10 >Oct
<option value=11 >Nov
<option value=12 >Dec
</select>
</td>
<td>
<select name=day_to class=inpts>
<option value=1 >1
<option value=2 >2
<option value=3 >3
<option value=4 >4
<option value=5 >5
<option value=6 >6
<option value=7 >7
<option value=8 >8
<option value=9 >9
<option value=10 >10
<option value=11 >11
<option value=12 >12
<option value=13 >13
<option value=14 >14
<option value=15 >15
<option value=16 >16
<option value=17 >17
<option value=18 >18
<option value=19 >19
<option value=20 >20
<option value=21 >21
<option value=22 >22
<option value=23 >23
<option value=24 >24
<option value=25 >25
<option value=26 selected>26
<option value=27 >27
<option value=28 >28
<option value=29 >29
<option value=30 >30
<option value=31 >31
</select>
</td>
<td>
<select name=year_to class=inpts>
<option value=2014 selected>2014
</select>

 </td>
</tr></table>
</form>
<br />
<table cellspacing=1 cellpadding=2 border=0 width=100%>
<tr>
 <td class=inheader><b>Type</b></td>
 <td class=inheader width=200><b>Amount</b></td>
 <td class=inheader width=170><b>Date</b></td>
</tr>
<tr>
 <td colspan=3 align=center>No transactions found</td>
</tr>
<tr><td colspan=3>&nbsp;</td>

<tr>
    <td colspan=2>Total:</td>
 <td align=right><b>$ 0.00</b></td>
</tr>
</table>


		</div>
		<!-- end CONTENT -->
		
		<div class="clr"></div>
	
	</div>
	<!-- end WRAP -->

</div>
<!-- end MAIN -->

<!-- start FOOTER -->
<?php footer1(); ?>
<!-- end FOOTER -->

<!-- start OVERLAY -->
<div id="overlay"></div>
<!-- end OVERLAY -->


<!-- start CERTIFICATE -->
<div id="certificate"><a href="Twelverized/files/OurCertificate_large.jpg" target="_blank"></a></div>
<!-- end CERTIFICATE -->

</body>
</html>