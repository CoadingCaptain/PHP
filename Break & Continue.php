<?php

🔹 Break এর কাজ : break দিয়ে আমরা loop বা switch-case কে জোরপূর্বক থামাতে পারি।

 🧠 ব্যাখ্যা : যখন break চালানো হয়, তখন সেটি যে loop বা switch-এর ভেতরে আছে, তা সঙ্গে সঙ্গে বন্ধ হয়ে যায়।


for($i = 1 ; $i <=5 ; $i++){
    echo $i ;
    if($i == 4){
        break ;
    }
}

 Output : 1234


🔹 Continue এর কাজ : continue দিয়ে আমরা loop-এর বর্তমান iteration (ধাপ) স্কিপ করে পরের ধাপে চলে যেতে পারি।

 🧠 ব্যাখ্যা : যখন continue চালানো হয়, তখন নিচের কোড আর চালানো হয় না, সরাসরি পরবর্তী iteration এ যায়।


 for($i = 1 ; $i <=5 ; $i++){
     if($i == 4){
         continue ;
     }
     echo $i ;
 }

 Output : 1235
