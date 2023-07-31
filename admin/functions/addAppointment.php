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
        $to = 'booking@creation31.com';
        $subject = 'Appointment Booked against';
        $headers = "From: ".$email."\r\n";
        $headers .= "Reply-To: ".$email."\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        // $body = "<h2>".$name." Book an Appointment for ".$service_type. "</h2>";
        $body .= "<p>Thank you for the booking.</p>";
        $body .= "<p>Our Team will contact you Soon!</p>";
        // $body .= "<p>Name: ".$name."</p>";
        // $body .= "<p>Email: ".$email."</p>";
        // $body .= "<p>Mobile: ".$mobile."</p>";
        // $body .= "<p>On Date: ".$date." And Time is ".$time."</p>";
        // $body .= "<p>Service: ".$service_type."</p>";
        // $body .= "<p>Thanks</p>";

        mail($to, $subject, $body, $headers);
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
        $to = 'subscribe@creation31.com';
        $subject = 'Latest Updates Subscription';
        $headers = "From: info@creation.com\r\n";
        $headers .= "Reply-To: info@creation.com\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $body = "<h2>User with Email ".$email." Suscribe Latest Updates.</h2>";
        $body .= "<p>Thanks</p>";

    mail($to, $subject, $body, $headers);
        $data = array("status"=> true , "message"=>"Thanks for Subscribe Our Newsletter");
        echo json_encode($data);
    }else{
        $data = array("status"=> false , "data"=>"Failed To Subscribe");
        echo json_encode($data);
    }
}


?>