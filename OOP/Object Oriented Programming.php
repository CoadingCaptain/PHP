<?php

// ✅ OOP - মানে হলো Object Oriented Programming, অর্থাৎ কোড লেখার এমন এক স্টাইল যেখানে আমরা প্রোগ্রামকে বস্তু (Object) আকারে সাজাই।
// ভাবুন, আপনার আশেপাশের সব কিছুই একটি Object — যেমন গাড়ি, মোবাইল, মানুষ, বই। প্রতিটা জিনিসের কিছু বৈশিষ্ট্য (Property) আর কিছু কাজ (Method) থাকে।
// ## OOP এর 4টি মূল কাজ
// ✅ Encapsulation (ঢেকে রাখা)
// ডেটা আর কাজগুলো একসাথে Class এর মধ্যে ঢেকে রাখা।
// যেমন: "Car" ক্লাসে গাড়ির রঙ, মডেল (Property) এবং চালানো, ব্রেক (Method) রাখা।

// ✅ Inheritance (উত্তরাধিকার)
// এক ক্লাসের বৈশিষ্ট্য ও কাজ অন্য ক্লাসে পাওয়া।
// যেমন: "ElectricCar" ক্লাস Car ক্লাস থেকে রঙ, মডেল, চালানোর পদ্ধতি নিয়ে নতুন কিছু ফিচার যোগ করলো (যেমন ব্যাটারি চার্জ)।

// ✅ Polymorphism (বহুরূপী)
// একই কাজ ভিন্নভাবে করা।
// যেমন: "drive()" মেথড Car এ সাধারণ ড্রাইভ, কিন্তু ElectricCar এ তা ব্যাটারি চেক করে ড্রাইভ করবে।

// ✅ Abstraction (সরলীকরণ)
// ব্যবহারকারীকে শুধু দরকারি জিনিস দেখানো, ভেতরের জটিলতা লুকানো।
// যেমন: আপনি মোবাইলের "Call" বাটন চাপেন, কিন্তু ভিতরে কীভাবে সিগন্যাল যাচ্ছে তা জানেন না।

// class car
// {
//     public $color = "Red";
//     public function driving()
//     {
//         echo "I am driving";
//     }
// }
// $carObj = new car();
// echo $carObj->color;

// Output : Red
// $carObj->driving();

// Output : I am driving.

// ✅ Constructor - হলো এক ধরনের special function যেটা class থেকে object তৈরি করার সময় স্বয়ংক্রিয়ভাবে চালু হয়।
// এটার কাজ হলো object তৈরির সাথে সাথেই সেটার প্রাথমিক সেটআপ (initialization) করা।

// ✅ Constructor এর বৈশিষ্ট্য
// 1. নাম সবসময় __construct হয় (PHP তে)।
// 2. Object তৈরি হলেই নিজে থেকে কল হয়ে যায় (আপনাকে আলাদা করে কল করতে হয় না)।

// class bmw
// {
//     public function __construct($newColor)
//     {
//         $this->color = $newColor;
//     }
//     public $color = "Red";
// }
// $carObj = new bmw("Green");

// Output : The car is driving without driver.

// echo $carObj->color;

// Output : Green

// ✅Inheritance (উত্তরাধিকার)  — একটা ক্লাস (Child Class) আরেকটা ক্লাসের (Parent Class) সব property আর method পেয়ে যায়।
// এতে কোড বারবার লিখতে হয় না, আর একবার লেখা কোড অনেক জায়গায় reuse করা যায়।

// ✅ Inheritance এর মূল কাজ
// 1. কোড পুনঃব্যবহার (Code Reusability)
//  - একবার Parent ক্লাসে লিখে দিলে Child ক্লাসগুলো সেই কোড ব্যবহার করতে পারে।

// 2. হায়ারার্কি তৈরি
// -  সম্পর্ক অনুযায়ী ক্লাস সাজানো যায় (যেমন: Vehicle → Car → ElectricCar)।

// 3. Extend করে নতুন ফিচার যোগ করা
//  - Parent এর কোড নিয়ে তার উপরে অতিরিক্ত জিনিস যোগ করা যায়।

// class Father
// {
//     function print100()
//     {
//         for ($i = 1; $i <= 3; $i++) {
//             echo $i . " ";
//         }
//     }
// }
// class Son extends Father {}
// $sonObj = new Son();
// $sonObj->print100();

// Output : 1 2 3

// ✅ Method Overriding - মানে হলো — Parent Class এ থাকা কোনো method কে Child Class এ নতুন করে লিখে তার আচরণ (behavior) পরিবর্তন করা।

// class Father
// {
//     function print100()
//     {
//         for ($i = 1; $i <= 5; $i++) {
//             echo $i . " ";
//         }
//     }
// }
// class Son extends Father
// {
//     function print100()
//     {
//         for ($i = 1; $i <= 3; $i++) {
//             echo $i . " ";
//         }
//     }
// }
// $sonObj = new Son();
// $sonObj->print100();

// Output : 1 2 3 

// ✅ parent keyword Child Class থেকে Parent Class এর property বা method অ্যাক্সেস করার জন্য ব্যবহার হয় — বিশেষ করে constructor বা overridden method কল করার সময়।
//    মানে, যখন Child Class Parent এর কোনো function আবার লিখে (override) ফেলে, তখনও আমরা চাইলে Parent এর পুরানো ভার্সন চালাতে পারি parent:: দিয়ে।

// class Father
// {
//     function print100()
//     {
//         for ($i = 1; $i <= 5; $i++) {
//             echo $i . " ";
//         }
//     }
// }
// class Son extends Father
// {
//     function demo()
//     {
//         parent::print100();
//     }
// }
// $sonObj = new Son();
// $sonObj->demo();

// Output : 1 2 3 4 5 

// ✅ Abstract এর কাজ হলো এটি Parent class-এ উল্লেখ থাকলে সেই class আর কাজ করবে না।

// abstract class Father
// {
//     function print100()
//     {
//         for ($i = 1; $i <= 3; $i++) {
//             echo $i . " ";
//         }
//     }
// }
// class Son extends Father {}
// $fatherObj = new Father();
// $fatherObj->print100();

// Output : Fatal error: Uncaught Error: Cannot instantiate abstract class Father.

// ✅ Constractor for inharitence

// class Father
// {
//     function __construct()
//     {
//         echo "This is father constructor.";
//     }
// }
// class Son extends Father
// {
//     function __construct()
//     {
//         echo "This is Son constructor.";
//     }
// }
// $sonObj = new Son();

// Output : This is Son constructor.
// যদি ছেলের কন্সট্রাক্টর না থাকতো তাহলে বাবার কন্সট্রাক্টর ছেলে ব্যবহার করতো।

// ✅ final কীওয়ার্ডের কাজ হলো ক্লাস বা মেথডকে এমনভাবে নির্ধারণ করা যাতে তা পরবর্তী ক্লাস থেকে ওভাররাইড বা ইনহেরিট (উত্তরাধিকার) করা না যায়।

// class Father
// {
//     function car()
//     {
//         echo "Car";
//     }
//     final function Land()
//     {
//         echo "Land";
//     }
// }
// class Son extends Father
// {
//     function Land()
//     {
//         echo "Land";
//     }
// }
// $sonObj = new Son();
// $sonObj->Land();

// Output : Cannot override final method Father::Land()

// ✅ static method হলো এমন একটি মেথড যেটাকে ক্লাসের অবজেক্ট তৈরি না করেই সরাসরি ক্লাসের নাম দিয়ে কল করা যায়।
//   অর্থাৎ, এই মেথড কোনো নির্দিষ্ট অবজেক্টের সাথে যুক্ত থাকে না, বরং ক্লাস লেভেলে কাজ করে।

// class Mygadget
// {
//     static function Umbrella()
//     {
//         echo "I'm Umbrella.";
//     }
//     function Watch()
//     {
//         echo "I'm Watch.";
//     }
//     static function DSLR()
//     {
//         echo "I'm DSLR.";
//     }
// }
// Mygadget::DSLR();

// Output : I'm DSLR.

// ✅ কোনো static প্রোপাটিজ যদি ঐ class এর মধ্যে access করতে চাওয়া হয় তাহলে self:: ব্যবহার করতে হয়।
// আর যদি কোনো প্রোপাটিজ বা ভ্যারিয়েবল static না হয় তাহলে $this-> ব্যবহার করতে হয়।

// class Mygadget
// {
//     static public $mobile = "mi 200";
//     public $car = "BMW";
//     static function Umbrella()
//     {
//         echo "I'm Umbrella.";
//     }
//     function Watch()
//     {
//         echo "I'm Watch.";
//     }
//     static function DSLR()
//     {
//         echo "I'm DSLR.";
//     }
//     static function Phone()
//     {
//         echo self::$mobile;
//     }
//     public function Vehicle()
//     {
//         echo $this->car;
//     }
// }
// Mygadget::Phone();

// Output : mi 200

// $carObj = new Mygadget();
// echo $carObj->car;

// Output : BMW

// ✅ Access Modifier - এর কাজ হচ্ছে ক্লাসের property (ভ্যারিয়েবল) ও method (ফাংশন) কে কতটুকু বাইরে থেকে ব্যবহার করা যাবে সেটা নিয়ন্ত্রণ করা।

// class MyGadget
// {
//     public $watch = "black Shark s1";
//     private $mobile = "S23";
//     protected $dress = "Shirt";

//     function demo()
//     {
//         echo $this->mobile;
//     }
// }
// class friends extends MyGadget
// {
//     function demo()
//     {
//         echo $this->dress;
//     }
// }
// class otherFriends
// {
//     function demo()
//     {
//         $objGadget = new MyGadget();
//         echo $objGadget->watch;
//     }
// }
// $obj = new MyGadget();
// $obj->demo();

// Output : S23

// $obj = new friends();
// $obj->demo();

// Output : Shirt

// $obj = new otherFriends();
// $obj->demo();

// Output : black Shark s1

// ✅ Working with Access Modifier

// class RGB
// {
//     private $color;
//     private $red;
//     private $green;
//     private $blue;

//     function __construct($colorCode)
//     {
//         $this->color = ltrim($colorCode, "#");
//         $this->perseColor();
//     }
//     function getColor()
//     {
//         return $this->color;
//     }
//     function readRGBColor()
//     {
//         return array($this->red, $this->green, $this->blue);
//     }
//     function getRGBColor()
//     {
//         echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";
//     }
//     function setRGBColor($colorCode)
//     {
//         $this->color = ltrim($colorCode, "#");
//         $this->perseColor();
//     }
//     function perseColor()
//     {
//         if ($this->color) {
//             list($this->red, $this->green, $this->blue) = sscanf($this->color, "%2x%2x%2x");
//         } else {
//             list($this->red, $this->green, $this->blue) = array(0, 0, 0);
//         }
//     }
//     function getRed()
//     {
//         echo $this->red;
//     }
//     function getGreen()
//     {
//         echo $this->green;
//     }
//     function getBlue()
//     {
//         echo $this->blue;
//     }
// }
// $obj = new RGB("ff253f");
// print_r($obj->readRGBColor());

// ✅ Another working with inheritance

// class Shape
// {
//     protected $name, $area;
//     function __construct($name)
//     {
//         $this->name = $name;
//     }
//     function getArea()
//     {
//         echo "This {$this->name} area is {$this->area} ";
//     }
// }
// class Triangle extends Shape
// {
//     private $a, $b, $c;
//     function __construct($a, $b, $c)
//     {
//         $this->a = $a;
//         $this->b = $b;
//         $this->c = $c;
//         parent::__construct("Triangle");
//         $this->calculateArea();
//     }
//     function calculateArea()
//     {
//         $perimetere = ($this->a + $this->b + $this->c);
//         $this->area = $perimetere * ($perimetere - $this->a) * ($perimetere - $this->b) * ($perimetere - $this->c);
//     }
// }
// $obj = new Triangle(5, 5, 5);
// $obj->getArea();

// Output : This Triangle area is 15000 

// ✅ Interface 

// interface BaseAnimal
// {
//     function canWalk();
//     function canEat();
//     function canSleep();
// }
// class Animal implements BaseAnimal
// {
//     public function canWalk() {}
//     public function canEat() {}
//     public function canSleep() {}
// }
// interface BaseHuman extends BaseAnimal
// {
//     public function canTalk();
// }
// class Human implements BaseHuman
// {
//     public function canWalk() {}
//     public function canEat() {}
//     public function canSleep() {}
//     public function canTalk() {}
// }
// $h = new Human();
// echo $h instanceof BaseAnimal;

// Output : 1

// $animal = new Animal();
// echo $animal instanceof BaseHuman;

// Output : 

// ✅ Constant সব সময় static স্কোপে থাকে

// class MyClass
// {
//     const City = "Dhaka";

//     function city()
//     {
//         echo "I am form " . self::City;
//     }
// }
// $obj = new MyClass();
// $obj->city();

// Output : I am form Dhaka

// ✅ Working

// class Student
// {
//     private $name;
//     private $age;
//     private $id;
//     function __construct($name, $age, $id)
//     {
//         $this->name = $name;
//         $this->age = $age;
//         $this->id = $id;
//     }
//     function __get($prop)
//     {
//         echo $this->$prop;
//     }
//     function __set($prop, $value)
//     {
//         $this->$prop = $value;
//     }
// }
// $obj = new Student("Alex", "20", "101");
// echo $obj->name;

// Output : Alex

// ✅ clone এর কাজ হলো— কোনো object-এর একটা copy তৈরি করা, যাতে নতুন object টি আলাদা memory location-এ থাকে।

// class MyClass
// {
//     public $data;
//     function __construct($data)
//     {
//         $this->data = $data;
//     }
//     function setData($data)
//     {
//         $this->data = $data;
//     }
// }
// $obj1 = new MyClass("Some Data");
// $obj2 = clone $obj1;
// $obj2->setData("More Data");
// print_r($obj1);
// print_r($obj2);

// Output : MyClass Object
//          (
//              [data] => Some Data
//          )
//          MyClass Object
//          (
//              [data] => More Data
//          )

// ✅ Object কে echo করতে __toString() method ব্যবহার করতে হয়।

// class Color
// {
//     public $data;
//     function __construct($data)
//     {
//         $this->data = $data;
//     }
//     function setData($data)
//     {
//         $this->data = $data;
//     }
//     function __tostring()
//     {
//         return $this->data;
//     }
// }
// $obj = new Color("Some Data");
// echo $obj;

// Output : Some Data

// ✅ Working

// class Planet
// {
//     public $name;

//     function __construct($name)
//     {
//         $this->name = $name;
//     }
// }
// $e = new Planet("Earth");
// $e1 = $e;
// $f = new Planet("Earth");

// if ($e === $f) {
//     echo "Similar Planets";
// } else {
//     echo "Not Similar";
// }

// Output : Not Similar

// Early Bynding & Late Bynding

class Planet
{
    static function echoName()
    {
        echo static::getName();
    }
    static function getName()
    {
        echo "Planet";
    }
}
class Earth extends Planet
{
    static function getName()
    {
        echo "Earth";
    }
}
Planet::echoName();

// Output : Planet

Earth::echoName();

// Output : Earth