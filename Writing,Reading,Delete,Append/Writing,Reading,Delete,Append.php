<?php

🚩Write

$text = [
    "d",
    "e"
];
file_put_contents("books2.text", $text, FILE_APPEND);
$file = fopen("data.text", "w");
$data = "Hello from World.\n";
fwrite($file, $data);
fclose($file);

 Output : আউটপুট data.text ফাইলে জমা হবে।

🚩Another Working

$books = [
    "books1",
    "books2",
    "books3",
    "books4",
    "books5",
];
$file = fopen("books.text", "w");
foreach ($books as $book) {
    fwrite($file, $book . PHP_EOL);
}

🚩Add more books

$books = [
    "books6",
    "books7",
    "books8",
    "books9",
    "books10",
];
$file = fopen("books.text", "a");
foreach ($books as $book) {
    fwrite($file, $book . PHP_EOL);
}

🚩Reading Mood

$content = file_get_contents("books.text");
echo $content;
$books = explode("\n", $content);
echo "Total count of books " . count($books) - 1;

 Output : books1
          books2
          books3
          books4
          books5
          Total count of books 5

$file = file("books.text");
foreach ($file as $line) {
    echo $line;
}
echo "Total books of count " . count($file);

 Output : books1
          books2
          books3
          books4
          books5
          Total books of count 10

🚩Use SPL to read CSV

$file = new SplFileObject("books.csv");
$file->setFlags(SplFileObject::READ_CSV);
$file->setCsvControl(",");
$price = 0;
foreach ($file as $row) {
    echo "$row[0] - $row[1] - $row[2].\n";
    $price += $row[2];
}
echo "Total price of books is {$price}";

 Output : To Kill a Mockingbird - Harper Lee -  12.99.
          The Lord of the Rings - J.R.R. Tolkien -  15.99.
          Total price of books is 28.98

