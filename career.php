<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $message = $_POST['message'];

    // File attachment
    $file_name = $_FILES['attachment']['name'];
    $file_tmp = $_FILES['attachment']['tmp_name'];
    $file_size = $_FILES['attachment']['size'];
    $file_type = $_FILES['attachment']['type'];
    $file_error = $_FILES['attachment']['error'];

    // Set up PHPMailer
    $mail = new PHPMailer(true);a

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'shussaini@ikonostechnologies.com'; // Replace with your Gmail username
        $mail->Password = 'zmxfznvshqfaztci'; // Replace with your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Email content
        $mail->setFrom($email, $name);
        $mail->addAddress('gunjankhandal05@gmail.com'); // Replace with your email address
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "Name: $name\nEmail: $email\nPhone: $phone\nPosition: $position\nMessage: $message";

        // Attach file
        if ($file_size > 0) {
            $mail->addAttachment($file_tmp, $file_name);
        }

        // Send email
        $mail->send();
        //echo "Email sent successfully!";
        header("Location: success.html");
    } catch (Exception $e) {
        echo "Failed to send email. Error: " . $mail->ErrorInfo;
    }
}
?>
