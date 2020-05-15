<?php
function createMsg($name, $animal, $cnt)
{
    $msg = <<< EOM
{$name}さんは
{$animal}を
{$cnt}匹飼っています。\n
EOM;
    echo $msg;
}

function getPet($animal)
{
    if (is_array($animal)) {
        return implode(",", $animal);
    } else {
        return $animal;
    }
}
