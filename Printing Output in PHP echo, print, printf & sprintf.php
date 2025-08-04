<?php

echo "Hello World !" ;

 Output : Hello World !

print "Welcome to PHP !" ;

 Output : Welcome to PHP !

printf("Hello I am %s. I am from %s. I am %d years old.\n","Jack","London","20") ;

 Output : Hello I am Jack. I am from London. I am 20 years old.

$floatingNumber = 3.14765;
printf("The Pie value is %.2f", $floatingNumber);

 Output : The Pie value is 3.15

$m = 1234;
$n = 27;
printf('%05d', $m);
printf('%05d', $n);

 Output : 01234
          00027

$m = 1234.267;
$n = 27.328;
printf('%09.2f', $m);
printf('%09.2f', $n);

 Output : 001234.27
          000027.33

$hexNumber = 31;
printf("Hexadecimal of %d is '%x'.", $hexNumber, $hexNumber);

 Output : Hexadecimal of 31 is '1f'.

$year = 1605;
$leapYear = ($year % 400 == 0 ? true : ($year % 100 == 0 ? false : ($year % 4 == 0 ? true : false)));

if ($leapYear) {
    printf("The year %d is leap year.", $year);
} else {
    printf("The year %d is not leap year.", $year);
}

 Output : The year 1605 is not leap year.

printf("The binary equivalent of %d is %b.", 12, 12);

 Output : The binary equivalent of 12 is 1100.

printf('The binary equivalent of %1$d is %1$b.', 12);

 Output : The binary equivalent of 12 is 1100.

$fname = "Newton";
$lname = "Isaac";
printf('His name is %2$s %1$s.', $fname, $lname);

 Output : His name is Isaac Newton.

$result = sprintf("Hello I am %s. I am from %s. I am %d years old.","Alex","Canada","25") ;
echo $result ;

 Output : Hello I am Alex. I am from Canada. I am 25 years old.

$f = false || true;
$g = false or true;
var_dump($f, $g);

 Output : bool(true)
          bool(false)
