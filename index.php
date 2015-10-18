<!doctype html>
<html lang="en">
<script src="jquery.js">

<script src="fakeLoader.min.js">


<script type="text/javascript">
$("#fakeloader").fakeLoader({

timeToHide:1200000, //Time in milliseconds for fakeLoader disappear

zIndex:"999",//Default zIndex

spinner:"spinner1",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'

bgColor:"#2ecc71", //Hex, RGB or RGBA colors



});
</script>
<head>
 <link rel="stylesheet" href="fakeLoader.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Instagram Photo Instant Search App with jQuery</title>
  <meta name="author" content="Jake Rocheleau">

</head>

<body>
	<div id="fakeLoader"><form action="instagram.php">
<input type="text" name="tag" placeholder="enter a tag">
<button type="submit">search</button>
	</form></div>
	

</script>
</body>
</html>