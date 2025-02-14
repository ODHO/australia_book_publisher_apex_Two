<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require 'php_mailer/src/Exception.php';
require 'php_mailer/src/PHPMailer.php';
require 'php_mailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $brief = $_POST['brief'];
    $route = $_POST['route'];
    $brand = $_POST['brand'];
    // $token = $_POST['token'];
    $tag = $_POST['tag'];
    $price = $_POST['price'];
    $news = $_POST['news'];
    // $gender = $_POST['gender'];

    if (empty($fullname) || empty($email) || empty($phone) || empty($brief) || empty($route) || empty($brand) || empty($tag) || empty($price) || empty($news)) {
        echo "All fields are required.";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'query@storylinepublishers.com';
        $mail->Password = 'CodifiedLabs110@';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('query@storylinepublishers.com', 'Storyline Publisher');
        $mail->addAddress('query@storylinepublishers.com');
        $mail->addReplyTo($email, $fullname);

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "
            <h3>Contact Form Submission</h3>
            <p><strong>Full Name:</strong> $fullname</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>brief:</strong> $brief</p>
            <p><strong>route:</strong> $route</p>
            <p><strong>brand:</strong> $brand</p>
            <p><strong>price:</strong> $price</p>
            <p><strong>tag:</strong> $tag</p>
            <p><strong>news:</strong> $news</p>
        ";

        if ($mail->send()) {
            echo "success";
        } else {
            echo "Email could not be sent.";
        }
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}
?>