<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $interest = htmlspecialchars($_POST['interest']);
    $message = htmlspecialchars($_POST['message']);

    $file = fopen("enquiries.csv", "a");

    fputcsv($file, [
        date("Y-m-d H:i:s"),
        $name,
        $phone,
        $interest,
        $message
    ]);

    fclose($file);

    echo "<h2>Thank you! Your enquiry has been saved.</h2>";
}
?>
