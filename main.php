<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // البيانات من الفورم
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // إعدادات الإيميل
    $to      = "mrnnaelhosiny3@gmail.com";
    $subject = "رسالة جديدة من سمارت كات";
    $body    = "الاسم: $name\n";
    $body   .= "البريد الإلكتروني: $email\n\n";
    $body   .= "الرسالة:\n$message";

    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // إرسال الإيميل
    if (mail($to, $subject, $body, $headers)) {
        echo "تم إرسال الرسالة بنجاح.";
    } else {
        echo "حدث خطأ أثناء الإرسال، حاول مرة أخرى.";
    }
} else {
    echo "طلب غير صحيح.";
}
?>
