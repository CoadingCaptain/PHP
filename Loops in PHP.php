<?php

✅ Loop এর কাজ:
 একই কোড বারবার চালানোর জন্য loop ব্যবহার করা হয় যতক্ষণ না একটি নির্দিষ্ট শর্ত পূরণ হয়।

 1. for loop
 যখন জানা থাকে কতবার চলবে, তখন for loop ব্যবহার করা হয়।

 for($i = 1 ; $i <= 5 ; $i++){
     echo $i ;
 }

 Output : 12345


 2. while loop
 যতক্ষণ একটি শর্ত সত্য থাকে, ততক্ষণ কোড চলবে।

 $i = 5 ;
 while($i>0){
     echo $i ;
     $i-- ;
 }

 Output : 54321


 3. do...while loop
 কমপক্ষে একবার কোড চালাবে, তারপর শর্ত চেক করবে।

 $i = 1 ;
 do{
     echo $i ;
     $i++ ;
 }while($i<=5) ;

 Output : 12345


 4. foreach loop
 array বা list এর উপরে লুপ চালানোর জন্য ব্যবহার হয়।

$fruits = ['apple','orange','cherry','banana'] ;
foreach($fruits as $item){
    echo $item." " ;
}

 Output : apple orange cherry banana 
