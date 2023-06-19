<?php 

require_once("./config.php");
$action = $_POST['action'];

if($action == "addAppointment"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $service_type = $_POST['service_type'];
    $sql = "INSERT INTO appointments (name  , email , mobile , app_date , app_time , service_type)VALUE('$name' , '$email' , '$mobile' , '$date' , '$time' , '$service_type')";
    $result = mysqli_query($conn , $sql);
    if($result){
        $data = array("status"=> true , "message"=>"Successfully Create Appointment");
        echo json_encode($data);
    }else{
        $data = array("status"=> false , "data"=>"Failed To Created Appointment");
        echo json_encode($data);
    }
}



?>