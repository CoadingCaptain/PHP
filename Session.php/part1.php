<?php

✅ Session - এর কাজ হলো ওয়েবসাইটে একাধিক পেজে ব্যবহারকারীর তথ্য সংরক্ষণ ও ব্যবহার করা।
 কারণ সাধারণত HTTP একটি stateless প্রোটোকল, মানে এক পেজ থেকে আরেক পেজে গেলে ডাটা হারিয়ে যায়।
 Session এই সমস্যা সমাধান করে Server এ ডাটা স্টোর করে রাখে যতক্ষণ পর্যন্ত সেশন শেষ না হয়।

session_start();

$_SESSION["userEmail"] = "me.parvezj@gmail.com" . "<br/>";
$_SESSION["userName"] = "Parvez" . "<br/>";
$_SESSION["userScore"] = 100 . "<br/>";

