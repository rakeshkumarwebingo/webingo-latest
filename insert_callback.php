<?php  
ini_set('display_errors', 'off');

include 'dbconn.php';

 
        $name = str_replace("'", "\'", $_POST['first_name'])." ".str_replace("'", "\'", $_POST['last_name']);
        $email = str_replace("'", "\'", $_POST['form_email']);
        $phone = str_replace("'", "\'", $_POST['mobile_number']);
        $c_name = str_replace("'", "\'", $_POST['interested']);
        $txtmessage = str_replace("'", "\'", $_POST['txtmessage']);
             
                $sql = "INSERT INTO `callback` (`name`, `email`, `phone`, `interest`, `txtmessage`) VALUES ('".$name."', '".$email."', '".$phone."', '".$c_name."', '".$txtmessage."')";  
                $done = mysqli_query($conn, $sql);  
            
      if($done==true){
          
          // Subject
    $subject = 'New Query';
  $to="pritammahapatra2050@gmail.com";  
//$to="subham@webingo.in, info@webingo.in";

    // Message
    $message = 'Name: '.$name.'<br>Email: '.$email.'<br>Phone Number: '.$phone.'<br> Message: '.$txtmessage.' <br><br><b>Thanks & Regards <br> WEBINGO</b>';

    // To send HTML mail, the Content-type header must be set
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    // Additional headers
    $headers[] = 'From: WEBINGO ADMIN <rishav@webingo.in>';
    // Mail it
    $mail = mail($to, $subject, $message, implode("\r\n", $headers));
    
        if ($mail) {
        $messegealert = "THANK YOU FOR SHOWING YOUR INTEREST. WE WILL CONTACT YOU SOON, STAY CONNECTED...";
      include("contact.php");
      echo "<meta http-equiv='refresh' content='1;url=contact.php'>";
      exit; 
                    }
                }
 ?>