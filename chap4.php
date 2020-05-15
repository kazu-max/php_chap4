<?php
require_once __DIR__ . "/chap4_pet.php";
$owners = [
    ["name" => "斎藤", "animal" => "猫", "cnt" => 3],
    ["name" => "鈴木", "animal" => "柴犬", "cnt" => 1],
    ["name" => "藤井", "animal" => ["猫", "チワワ", "うさぎ"], "cnt" => 3]
];
foreach ($owners as $owner) {
    $animal = getPet($animal);
    createMsg($owner["name"], $animal, $owner["cnt"]);
}
?>