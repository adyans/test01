
<!DOCTYPE html> 
<html> 

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Daily Merchandiser Report</title> 
	<link rel="stylesheet" href="jquery.mobile-1.0b2.min.css" />
	<script src="jquery-1.6.2.min.js"></script>
	<script src="jquery.mobile-1.0b2.min.js"></script>
<!--script src="/mint/?js" type="text/javascript"></script-->
	<style type="text/css">
	.my-text { width: 20px; display: inline-block; }
	input[type='text'].my_text { width:50px;padding:5px; }
	.my_text { width:50px; padding:5px; }
	</style>
</head> 

<body> 

<div data-role="page">

	<div data-role="header"  data-theme="b">
		<h1>Daily Merchandiser Report</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<div data-role="collapsible-set" data-inset="true">
		    <div data-role="collapsible">
		        <h3>Available Stock (in pack)</h3>
		        <ul data-role="listview" data-inset="false">
		            <li>ARDATH SPC KS : <input type="text" class='my-text' style='width:50px;padding:5px;'>  </li>
		            <li>B. BIRU SLIM 12 : <input type="text" class="my-text" style="width:50px;padding:5px;"></li>
		            <li>B. BIRU SLIM 16 : <input type="text" class='my_text' style="width:50px;padding:5px;"></li>
		            <li>B. BUANA RAYA : <input type="text" class='my_text' style="width:50px;padding:5px;"></li>
		            <li>B. BUANAFILTER : <input type="text" class='my_text' style="width:50px;padding:5px;"></li>
		            <li>B. SEJATI REGULAR : <input type="text" class='my_text' style="width:50px;padding:5px;"></li>
		            <li>CLUBMILDNEWLOOK : <input type="text" class='my_text' style="width:50px;padding:5px;"></li>
		            <li>COUNTRY INT NW : <input type="text" class='my_text' style="width:50px;padding:5px;"></li>
		            <li>COUNTRY LGT NW : <input type="text" class='my_text' style="width:50px;padding:5px;"></li>
		            <li>XM REBORN 16 : <input type="text" class='my_text' style="width:50px;padding:5px;"></li>
		        </ul>
		    </div>
		    <div data-role="collapsible">
		        <h3>Bad Stock (in pack)</h3>
		        <ul data-role="listview" data-inset="false">
		            <li>ARDATH SPC KS</li>
		            <li>B. BIRU SLIM 12</li>
		            <li>B. BIRU SLIM 16</li>
		            <li>B. BUANA RAYA</li>
		        </ul>
		    </div>
		    <div data-role="collapsible">
		        <h3>CBP</h3>
		        <ul data-role="listview" data-inset="false">
		            <li>Berapkah harga Dunhill Mild?</li>
		            <li>Berapakah harga Sampoerna A Mild 16?</li>
		            <li>Berapakah harga Dunhill Light?</li>
		            <li>Berapakah harga Marlboro Light?</li>
		        </ul>
		    </div>
		    <div data-role="collapsible"
		        <h3>Backwall & Planogram Standarization</h3>
		        <ul data-role="listview" data-inset="false">
		            <li>Apakah terdapat backwall?</li>
		            <li>Apakah standar planogram sudah benar?</li>
		            <li>Bagaimana kondisi Backwall Bentoel?</li>
		        </ul>
		    </div>
		    <div data-role="collapsible">
		        <h3>Sales per day (dalam bungkus)</h3>
		        <ul data-role="listview" data-inset="false">
		            <li>DUNHILL F KSHL</li>
		            <li>DUNHILL L KSHL</li>
		            <li>DUNHILL ML KSHL</li>
		            <li>DUNHILL NFC MIL</li>
		        </ul>
		    </div>
		    <div data-role="collapsible">
		        <h3>PKM (dalam bungkus)</h3>
		        <ul data-role="listview" data-inset="false">
		            <li>DUNHILL F KSHL</li>
		            <li>DUNHILL L KSHL</li>
		            <li>DUNHILL ML KSHL</li>
		            <li>DUNHILL NFC MIL</li>
		        </ul>
		    </div>
		</div>
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="b">
		<h4>Bentoel Group</h4>
	</div><!-- /footer -->
	
</div><!-- /page -->

</body>
</html>