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

if($action == "apply-form"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $cvFileName = $_FILES['cv']['name'];
    $cvTmpName = $_FILES['cv']['tmp_name'];
    $uploadDir = 'uploads/';
    $cvPath = $uploadDir . $cvFileName;
    move_uploaded_file($cvTmpName, $cvPath);
    $sql = "INSERT INTO careers (name, email, mobile, resume) VALUES ('$name', '$email', '$mobile', '$cvPath')";

    $result = mysqli_query($conn , $sql);
    if($result){
        $data = array("status"=> true , "message"=>"Application Submit Successfully!");
        echo json_encode($data);
    }else{
        $data = array("status"=> false , "data"=>"Failed To Submit Application");
        echo json_encode($data);
    }
}
else if($action == "addEmailSubscriber"){
    $email = $_POST['email'];
    $sql = "INSERT INTO email_subscriber (email)VALUE('$email')";
    $result = mysqli_query($conn , $sql);
    if($result){
        $data = array("status"=> true , "message"=>"Thanks for Subscribe Our Newsletter");
        echo json_encode($data);
    }else{
        $data = array("status"=> false , "data"=>"Failed To Subscribe");
        echo json_encode($data);
    }
}


?>