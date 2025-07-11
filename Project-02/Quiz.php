<?php

$questions = [
    ["question" => "What is 20+2 ?", "correct" => 22],
    ["question" => "What is 20*2 ?", "correct" => 40],
    ["question" => "What is 20/2 ?", "correct" => 10]
];

$answer = [];
foreach ($questions as $index => $item) {
    echo ($index + 1) . " " . $item["question"] . PHP_EOL;
    $data = trim(readline("Your answer : "));
    if ($data === "") {
        echo "\nYou didn't enter any answer for question " . ($index + 1) . ".\n" . PHP_EOL;
        $answer[] = null;
    } else {
        array_push($answer, (int)$data);
    }
}
function quiz($questions, $answer)
{
    $score = 0;
    foreach ($questions as $index => $item) {
        if ($answer[$index] === $item["correct"]) {
            $score++;
        }
    }
    return $score;
}
$score = quiz($questions, $answer);
echo "\nYour score is {$score} out of " . count($questions) . "." . PHP_EOL;

if ($score === count($questions)) {
    echo "\nExcellent job 😍";
} elseif ($score >= 1) {
    echo "\nGood effort 🙂";
} else {
    echo "\nBetter luck next time 😒";
}
