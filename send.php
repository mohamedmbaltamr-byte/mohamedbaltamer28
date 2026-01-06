<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "mohamed.m.baltamr@gmail.com"; // ضع بريدك هنا
    $subject = "رسالة جديدة من نموذج التواصل";
    $body    = "الاسم: $name\nالبريد: $email\n\nالرسالة:\n$message";
    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)) {
        echo "تم إرسال الرسالة بنجاح!";
    } else {
        echo "حدث خطأ أثناء الإرسال.";
    }
}
?>