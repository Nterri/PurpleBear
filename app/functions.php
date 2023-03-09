<?php
function tpl($tpl)
{
    return VIEW . str_replace('.', DS, $tpl) . '.php';
}

function filter(array $array) {
    for ($i = 0; $i < (count($array) - 1); $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if (strtotime($array[$i]['date']) < strtotime($array[$j]['date'])) {
                $middle = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $middle;
            }
        }
    }
    return $array;
}
