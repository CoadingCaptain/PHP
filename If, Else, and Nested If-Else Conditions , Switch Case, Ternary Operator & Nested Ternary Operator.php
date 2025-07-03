<?php

 If, Else Conditions

 $isPanda = true ;

 if($isPanda){
     echo "I am Panda." ;
 }
 else{
     echo "No I am not a Panda." ;
 }

   Output : I am Panda.


 Nested If-Else Conditions

 $age = 19 ;
 $hasLicense = "" ;

 if($age>=18){
     if($hasLicense = false){
         echo "You are eligible to drive" ;
     }
     else{
         echo "You are not eligible to drive." ;
     }
 }
 else{
     echo "You are still minor." ;
 }

 Output : You are not eligible to drive.


1. Switch...Case কী?
 switch...case একটি কন্ডিশনাল কন্ট্রোল স্টেটমেন্ট, যা একাধিক শর্তের (condition) উপর ভিত্তি করে কোড এক্সিকিউট করে।
 এটি মূলত if...else if...else এর বিকল্প, তবে বেশি ক্লিন এবং রিডেবল যখন অনেকগুলো ভ্যালু চেক করতে হয়।

 $name = "Tiger" ;
 switch($name){
     case ($name == "Panda") :
         echo "Yes, it's Panda." ;
         break ;
     case ($name == "Fox") :
         echo "Yes, it's Fox." ;
         break ;
     default:
         echo "It's not Panda or Fox." ;
 }

 Output : It's not Panda or Fox.


 2. Ternary Operator কী?
 Ternary Operator হল একটি শর্টকাট if...else স্টেটমেন্ট।
 এটি একটি তিন-অংশবিশিষ্ট অপারেটর যার মাধ্যমে কন্ডিশন চেক করে খুব সংক্ষিপ্তভাবে দুইটি ভ্যালুর মধ্যে একটি রিটার্ন করা হয়।

$age = 18 ;
$married = 22 ; 

$result = ($age >= 18) ? (($married >= 21) ? "You are eligible to married 😍" : "You are not eligible to married 😒") : "You are still minor" ;
echo $result ;

 Output : You are eligible to married 😍  
