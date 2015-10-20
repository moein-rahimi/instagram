

<?php

    $tag = $_POST['tag'];
    echo $tag;
     $client = "346b0ad31d5f41c38e0369b5c7c3a488";
    $ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"https://api.instagram.com/v1/tags/".$tag."/media/recent?client_id=".$client."");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($ch);
//echo $result;


$response = json_decode($result,true);
?>
<div id ="con">
  <?php
foreach ($response['data'] as $image) {
  //  $image = (str_replace('\\/', '/', json_encode($result['image']['low_resolution']['url'])));
    echo '<img src="radio.gif" data-src="'.$image['images']['low_resolution']['url'].'" alt=""/> ';
}
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}
curl_close($ch);


?>
</div>
