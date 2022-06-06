<?php 
    if(isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $tel = trim($_POST['tel']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        if(!empty($name) && !empty($tel) && !empty($email) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $from = "$email";
                $to = "Gediminas.Janeika@gmail.com";
                $subject = "New message";
                $author = 'From: ' . $name . ', '. $tel . ', ' . $email;
                $messages = htmlspecialchars($message);
                mail($to, $subject, $author, $messages, $from);
                echo "<script>alert('Thanks. Your message has been received. I will contact you soon.');</script>";
            }
        }
        include 'db.php';
    }