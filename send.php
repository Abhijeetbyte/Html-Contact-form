<?php


//varible setting
 $name= $_REQUEST['name'];
 $email = $_REQUEST['Email'];
 $message = $_REQUEST['Message'];
 $subject = "Message from Contact form !";

 $to ="xxxxxxxxxxxxx@gmail.com";  // change receiving email id 
 
 $content = "Name : ". $name. "\r\nContact email : ". $email. "\r\n \r\nMessage : \r\n \r\n".$message ; // name [break] email [break] message
 


// check input fields
if ( empty($name)|| empty($email)|| empty($message))
{
echo"<script type='text/javascript'>alert('Please fill all correct');
    window.history.go(-1);
    </script>";
}
else 
{ mail($to,$subject,$content);

    echo"<script type='text/javascript'>alert('Your message sent succesfully ');
    window.history.go(-1);
    </script>";
}


?>