<html>
<head>

<?php
require "init.php";

if($_SERVER['REQUEST_METHOD']!="POST"){
	die("Not Allowed");
}

$media_path=($_FILES['media']['tmp_name'][0]);
$status=($_POST['status']);

if((!$media_path)and(!$status)){
	die("Nothing to Post");
}

$media_id="";
if($media_path){
	$media=$connection->upload('media/upload',['media'=>$media_path]);
	$media_id=$media->media_id_string;
	
}

$parameters=[

'status'=>$status,
'media_ids'=>implode(',',[$media_id])

];

$result=$connection->post('statuses/update',$parameters);

?>


<?php>echo "Tweeted Successfully "."<a href='index1.html'>Tweet Again Click Here</a>";?>


<?php
exit();


?>