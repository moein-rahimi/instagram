<html>
<head>
    <title>search result</title>
  <style type="text/css">
img.lazy {
        width: 700px; 
        height: 467px; 
        display: block;
        
        /* optional way, set loading as background */
        background-image: url('loading.gif');
        background-repeat: no-repeat;
        background-position: 50% 50%;
    }

  </style>
</head>
<body>


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
    echo '<img class="lazy" src="'.$image['images']['low_resolution']['url'].'" alt=""/> ';
}
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}
curl_close($ch);
}


?>
<script src="jquery.js"></script>
<script type="text/javascript" src="jquery.lazy.min.js"></script>
<script type="text/javascript">
  $(function() {
        $('.lazy').lazy();
            
       
    });
</script>
</body>
</html>