<!DOCTYPE html>
<html>
<body style="text-align: center;
background: rgb(213, 212, 212) none repeat scroll 0% 0%;">
<head><title>Mobile Demo</title>
</head>
<h2>Mobile Demo</h2>
<?php $url = 0;
if(isset($_POST['save'])){
$url = $_POST['url'];
}
?>
<form method="post" action=""/>
<input type="text" name="url" placeholder="Enter url" value="<?php if($url != ''){ echo $_POST['url']; } ?>"/>
<input type="submit" value="see" name="save" />
</form>
<br/>
<iframe src="<?php echo $url; ?>" width="400px" height="600px">
  <p>Your browser does not support iframes.</p>
</iframe><br>
<i>@width 400px</i>
 
</body>
</html>

