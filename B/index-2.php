<?php

$array = ['test', 1, 'hgf', 1, 'string'];
function filter(array $test): array {
    $result = [];
    foreach($test as $value) {
        if(!array_key_exists(gettype($value), $result)) {
            $result[gettype($value)] = 1;
        } else {
            $result[gettype($value)]++;
        }
    }
    var_dump($result);
    return $result;
}
filter($array);
