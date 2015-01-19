<?php
/**
 * Created by PhpStorm.
 * User: Aile
 * Date: 15.12.14
 * Time: 8:38
 */
class feedback extends Controller {
        function index() {

            if(isset($_GET['sent'])) {
                $sent = $_GET['sent'];
                if($sent == 1) {
                    $this-> mail_message="Saatmine õnnestus";
                }else {
                    $this-> mail_message="Saatmine ebaõnnestus";
                }
            }
    }

    function send_mail() {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $headers = 'From: "'.$name.'" <'.$email .'>'. "\r\n" .
            'Reply-To: '.$email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $sent_ok = mail ("viorda20@gmail.com", "teade kodulehelt" ,$message, $headers);
        header('Location: '.BASE_URL .'feedback/index?sent='.$sent_ok);

    }
}