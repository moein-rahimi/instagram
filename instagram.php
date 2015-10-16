<?php
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"https://api.instagram.com/v1/tags/cake/media/recent?client_id=346b0ad31d5f41c38e0369b5c7c3a488");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($ch);
echo $result;
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}
curl_close($ch);

// $client = "346b0ad31d5f41c38e0369b5c7c3a488";

// $api = "https://api.instagram.com/v1/tags/cake/media/recent?client_id=".$client;

// function get_curl($url) {
//     if(function_exists('curl_init')) {
//         $ch = curl_init();
//         curl_setopt($ch, CURLOPT_URL,$url);
//         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//         curl_setopt($ch, CURLOPT_HEADER, 0);
//         curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
//         $output = curl_exec($ch);
//         echo curl_error($ch);
//         curl_close($ch);
//         return $output;
//     } else{
//         return file_get_contents($url);
//     }
// }
// $images = array();

// if($response){
//     foreach(json_decode($response)->data as $item){     
//         $src = $item->images->standard_resolution->url;
//         $thumb = $item->images->thumbnail->url;
//         $url = $item->link;
        
//         $images[] = array(
//         "src" => htmlspecialchars($src),
//         "thumb" => htmlspecialchars($thumb),
//         "url" => htmlspecialchars($url)
//         );

//     }
// }
// print_r(str_replace('\\/', '/', json_encode($images)));
// die();
?>
