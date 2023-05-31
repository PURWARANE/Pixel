<?php
require("../include/database_connect.php");

$conn = mysqli_connect("localhost","root","","contact");
if(mysqli_connect_error()){
    echo "connection not successful";
    return;
}

$fname = isset ( $_POST['firstname'] ) ? $_POST['firstname'] : "$fname";
$lname = isset ( $_POST['lastname'] ) ? $_POST['lastname'] : "$lname";
$mail = isset ( $_POST['email'] ) ? $_POST['email'] : "$mail";
$phoneno = isset ( $_POST['phone'] ) ? $_POST['phone'] : "$phoneno";
$locations = isset ( $_POST['location'] ) ? $_POST['location'] : "$locations";
$bookingtypes = isset ( $_POST['bookingtype'] ) ? $_POST['bookingtype'] : "$bookingtypes";
$meeting_timing = isset ( $_POST['meeting_time'] ) ? $_POST['meeting_time'] : "$meeting_timing";
$subjects = isset ( $_POST['subject'] ) ? $_POST['subject'] : "$subject";


$sql = "INSERT INTO send (firstname,lastname,email,phone,location,bookingtype,meeting_time,subject) 
        VALUES ('$fname','$lname','$mail','$phoneno','$locations','$bookingtypes','$meeting_timing','$subjects')";
$result = mysqli_query($conn, $sql);
$sql = "SELECT * FROM `send`";

if (!$result) {
    $response =array("success" => false, "message" => "something went wrong");
    echo json_encode($response);
    return;
}

$response = array("success" => true, "message" => "Message has been send");
echo json_encode($response);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
    <body  style="width:100% ; background-color: whitesmoke;">
        <h1 style="text-align:center">MESSAGE HAS BEEN SEND SUCESSFULLY!!!!!!</h1>
        
    </body>
    
</html>