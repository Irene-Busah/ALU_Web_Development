<?php
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $country = $_POST['country'];
        $message = $_POST['message'];
    
        $mailTo = "i.busah@alustudent.com";
        $headers = "From: ".$mailFrom;
        $text = "You have a message ".$name."\n\n".$message;
    
        mail($mailTo, $subject, $text, $headers);
    
        header("Location: ./index.html?MessageSent");
        
    }
?>