<?php

$contacts = [];
function addContact(&$contacts, $name, $email, $phone)
{
    $data = ["Name" => $name, "Email" => $email, "Phone" => $phone];
    array_push($contacts, $data);
}
function displayed($contacts)
{
    if (empty($contacts)) {
        echo PHP_EOL;
        echo "No contacts available here.";
        echo PHP_EOL;
    } else {
        foreach ($contacts as $index => $item) {
            echo PHP_EOL;
            echo "Name : {$item["Name"]}.\nEmail : {$item["Email"]}.\nPhone Number : {$item["Phone"]}";
            echo PHP_EOL;
        }
    }
}
while (true) {
    echo "\nContact Management System\n";
    echo "\n1. Add Contact. 2. View Contact. 3. Exit.\n";
    $choice = (int)readline("Choose an Option : ");
    if ($choice === 1) {

        echo PHP_EOL;

        $name = readline("Enter your name : ");
        $email = readline("Enter your email : ");
        $phone = readline("Enter your phone number : ");

        echo PHP_EOL;

        addContact($contacts, $name, $email, $phone);
        echo "Name : {$name} is added to contacts.\n";
        echo "Email : {$email} is added to contacts.\n";
        echo "Phone : {$phone} is added to contacts.\n";
    } elseif ($choice === 2) {
        displayed($contacts);
    } elseif ($choice === 3) {
        echo PHP_EOL;
        echo "Thanks for visiting us.";
        echo PHP_EOL;
    } else {
        echo PHP_EOL;
        echo "Invalid choice, Please input a choice option !";
        echo PHP_EOL;
    }
}
