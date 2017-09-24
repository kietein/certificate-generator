<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<?php
$src = $_GET['src'];
?>
<body>
<div style="position:fixed; opacity:0.2;">
<table width="100%" border="0" cellpadding="5">
  <tr>
    <td width="600" height="450">&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><img src="KieteStamp.png" /></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
  </tr>
</table>

</div>
<div class="" style="border:thick; z-index:100; position:absolute;">
<h1 align="center">Social Service Activity | KIETE</h1>
<hr style="color:black;" />
<table width="100%" border="0" cellpadding="5">
  <tr>
    <td width="600" height="450"><img src="<?php echo $src; ?>" width="600" height="450"></td>
  </tr>
  <tr>
    <td ><hr style="color:black;" /></td>
  </tr>
  <tr>
    <td align="center"><input type="text"  style="width:70%; font-size:24px; text-align:center; border: 2px Solid Aqua; 
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 5px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 10px 0;" id="name" placeholder="Your Certificate Name. Ex. Araja Jyothi Babu" value="" /></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td>
    <h2 id="content" style="display:none;">&nbsp;&nbsp;&nbsp;&nbsp;<span id="printname" style="font-size:30px;"></span> took active part in social service activity conducted by Kiete Industrial Tours during an Industrial visit.</h2></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><input type="button" id="print" onclick="printer()" value="Print" style="background-color:#00FF00; font-size:18px; width:100%;" /></td>
  </tr>
  <tr>
    <td align="right">organised by <span style="font-size:20px">KIETE Industrial Tours, Visakhapatnam.</span></td>
  </tr>
</table>
</div>
<script type="text/javascript">
 function printer()
 {
	 var Name = document.getElementById("name").value;
	 document.getElementById("name").style.display = 'none';
	 document.getElementById("print").style.display = 'none';
	 document.getElementById("content").style.display = 'block';
	 document.getElementById("printname").innerHTML = Name;
	 window.print();
	 }
</script>
</body>
</html>