<?php 
include('connection.php');
$name = $_POST['name'];
$score = $_POST['score'];
$date_created = date("Y-m-d H:i:s");

$sql = "INSERT INTO `competitor` (`name`,`score`,`created_at`) values ('$name', '$score', '$date_created')";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
   
    $data = array(
        'status'=>'true',
    );
    
    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'false',
    );

    echo json_encode($data);
} 

?>