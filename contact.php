<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // PHP BLOCKS GMAIL
        $mailTo = "jadeletry78@gmail.com";
        $header = "From: ".$mailFrom;
        $txt = "You have receieved an e-mail from ".$name.".\n\n".$message;
        
        mail($mailTo, $subject, $txt, $header);
        header("Location: index.html?mailsend");
    }
?>