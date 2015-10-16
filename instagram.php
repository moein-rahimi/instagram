<html>
<head>
    <title>search result</title>
    <link rel="stylesheet" href="fakeLoader.css">
</head>
<body>
<div id="fakeLoader"></div>

<?php
if (isset($_GET['tag'])) {
    $tag = $_GET['tag'];
     $client = "346b0ad31d5f41c38e0369b5c7c3a488";
    $ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"https://api.instagram.com/v1/tags/".$tag."/media/recent?client_id=".$client."");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($ch);
//echo $result;


$response = json_decode($result,true);
foreach ($response['data'] as $image) {
  //  $image = (str_replace('\\/', '/', json_encode($result['image']['low_resolution']['url'])));
    echo '<img src="'.$image['images']['low_resolution']['url'].'" alt=""/> ';
}
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}
curl_close($ch);
}


?>
<script src="jquery.js">

<script src="fakeLoader.min.js">


<script type="text/javascript">

$("#fakeloader").fakeLoader();

</script>

</body>
</html>