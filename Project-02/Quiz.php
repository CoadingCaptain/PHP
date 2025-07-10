<?php

$questions = [
    ["question" => "What is 20+2 ?", "correct" => 22],
    ["question" => "What is 20*2 ?", "correct" => 40],
    ["question" => "What is 20/2 ?", "correct" => 10]
];

$answer = [];
foreach ($questions as $index => $item) {
    echo ($index + 1) . " " . $item["question"] . PHP_EOL;
    $data = (int)trim(readline("Your answer : "));
    array_push($answer, $data);
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
echo "Your score is {$score} out of " . count($questions) . "." . PHP_EOL;

if ($score === count($questions)) {
    echo "Excellent job 😍";
} elseif ($score >= 1) {
    echo "Good effort 🙂";
} else {
    echo "Better luck next time 😒";
}
