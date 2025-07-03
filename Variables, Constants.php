<?php

// Variable

 1.  ভ্যারিয়েবল (Variable) কী?
     ভ্যারিয়েবল হলো একটি কন্টেইনার বা ধারক, যেখানে কোনো তথ্য বা মান (value) সংরক্ষণ করা যায় ।
     PHP-তে ভ্যারিয়েবল $ চিহ্ন দিয়ে শুরু হয়।

 2.  ভ্যারিয়েবল লেখার নিয়মাবলী
     1.  ভ্যারিয়েবল $ দিয়ে শুরু করতে হবে
     2.  প্রথম অক্ষর হতে হবে letter বা underscore (_)
     3.  নামের মধ্যে স্পেস বা dash (-) ব্যবহার করা যাবে না
     4.  Case-sensitive — $name আর $Name আলাদা ভ্যারিয়েবল

    $name = "Panda" ;
    $age = 20 ;

    echo "Hello I am $name. My age is $age." ;

    // Output : Hello I am Panda. My age is 20.


// Constant

 1. Constant বা ধ্রুবক হচ্ছে এমন একটি ভেরিয়েবল যেটার মান একবার নির্ধারণ করলে তা পরিবর্তন করা যায় না। 
    সাধারণ ভেরিয়েবল ($ চিহ্ন দিয়ে শুরু হয়) এর মতো না, এটি একবার সেট করা হলে পুরো স্ক্রিপ্টে অপরিবর্তনীয় থাকে।

 2. PHP তে Constant তৈরি করতে define() ফাংশন অথবা const ব্যবহার করা হয়।

    define("is_panda",true) ;
    echo is_panda ? "Hello I am Panda." : "Not a Panda." ;
    
    Output : Hello I am Panda.
    
    const isTiger = false ;
    echo isTiger ? "Hello I am Tiger." : "Not a Tiger." ;
    
    Output : Not a Tiger.

// Data Type 

* PHP তে প্রধানত ৮ ধরনের ডেটা টাইপ ব্যবহার হয়:

 	    নাম                     (ইংরেজিতে)	        উদাহরণ

 1️⃣	String	                 "Hello World"       'Parvez'
 2️⃣	Integer	                 1, -25,             1000
 3️⃣	Float/Double	         10.5                -3.14
 4️⃣	Boolean	                 true, false
 5️⃣	Array	                 ["apple", "banana", "mango"]
 6️⃣	Object	                 User-defined class/object
 7️⃣	NULL	                 মান নেই (empty)
 8️⃣	Resource	             External resource (e.g., database connection, file handler)


* টাইপ চেক করার জন্য ফাংশন:

 ফাংশন	                	       কাজ

 is_string()	                  স্ট্রিং কিনা চেক করে
 is_int()	                      ইন্টিজার কিনা চেক করে
 is_float()	                      ফ্লোট কিনা চেক করে
 is_bool()	                      বুলিয়ান কিনা চেক করে
 is_array()	                      অ্যারে কিনা চেক করে
 is_object()	                  অবজেক্ট কিনা চেক করে
 is_null()	                      null কিনা চেক করে


* PHP-তে ৬টি প্রধান Arithmetic Operators আছে:

  অপারেটর নাম	                     উদাহরণ	             ফলাফল

  + যোগ (Addition)                   $x + $y             $x এবং $y যোগ
  - বিয়োগ (Subtraction)              $x - $y             $x থেকে $y বিয়োগ
  *	গুণ (Multiplication)	         $x * $y             $x এবং $y গুণ
  /	ভাগ (Division)                   $x / $y             $x কে $y দিয়ে ভাগ
  %	ভাগশেষ (Modulus)                 $x % $y	         $x কে $y দিয়ে ভাগ করে ভাগশেষ
  ** ঘাত (Exponentiation)	         $x ** $y	         $x এর $y ঘাত (power)


 1. Assignment Operators (এসাইনমেন্ট অপারেটর) : এই অপারেটরগুলোর মাধ্যমে ভ্যারিয়েবলে মান সংরক্ষণ করা হয়।

 অপারেটর	        উদাহরণ    	    ব্যাখ্যা
     =	            $x = 10	        $x এর মধ্যে 10 রাখে
     +=	            $x += 5	        $x = $x + 5
     -=	            $x -= 3	        $x = $x - 3
     *=	            $x *= 2	        $x = $x * 2
     /=	            $x /= 4	        $x = $x / 4
     %=	            $x %= 3	        $x = $x % 3


 2. Comparison Operators (তুলনা করার অপারেটর)
 দুইটি মানের মধ্যে তুলনা করে true বা false রিটার্ন করে।

  অপারেটর	                    অর্থ	                                    উদাহরণ
     ==	                    সমান কিনা	                                $x == $y
     ===	                মান ও টাইপ দুইটাই সমান কিনা	                $x === $y
     !=	                    সমান না	                                    $x != $y
     <>	                    সমান না	                                    $x <> $y
     !==	                মান বা টাইপ যেকোনো একটাও ভিন্ন	            $x !== $y
     >	                    বড় কিনা	                                    $x > $y
     <	                    ছোট কিনা	                                $x < $y
     >=	                    বড় বা সমান	                                $x >= $y
     <=	                    ছোট বা সমান	                                $x <= $y


 3. Logical Operators (যুক্তিবাচক অপারেটর) : একাধিক শর্ত যাচাই করতে ব্যবহৃত হয়।

  অপারেটর	    নাম 	    ব্যাখ্যা
  and / &&	    AND	        দুইটি শর্তই সত্য হলে true
  or   		    OR          যেকোনো একটি শর্ত সত্য হলে 
  !	            NOT	        শর্তের বিপরীত রিটার্ন করে
