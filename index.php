<!doctype html>
<html lang="en">



<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Instagram Photo Instant Search App with jQuery</title>
  <meta name="author" content="Jake Rocheleau">

</head>

<body>
	
		<form action="#">
<input type="text" name="tag" placeholder="enter a tag">
<button type="submit">search</button>
	</form>
	
<div id="content"></div>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>

$('form').on('submit',function(e){





$.post('instagram.php',$(this).serialize(),function(data){

console.log(data);
$('#content').load('Instagram.php', '#con');

});
e.preventDefault();
});


</script>

</body>
</html>