<?php

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $fathername= $_POST['fathername'];
    $mothername= $_POST['mothername'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $department= $_POST['department'];
    $roll= $_POST['roll'];
    $hallname= $_POST['hallname'];
    $faculty= $_POST['faculty'];
    $session= $_POST['session'];
    $year= $_POST['year'];
    $term= $_POST['term'];


    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'practice';

    $conn = mysqli_connect($host,$user,$pass,$dbname);
    $sql = "INSERT INTO register(name,fathername,mothername,email,mobile,department,roll,hallname,faculty,session,year,term) values('$name', '$fathername', '$mothername', '$email','$mobile','$department', '$roll', '$hallname', '$faculty', '$session', '$year', '$term')";
    mysqli_query($conn,$sql);

    
    header('Location:Homepage.html');
    
    

}


?>