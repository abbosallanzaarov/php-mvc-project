<?php

function dd($stuff)
{
    echo '<pre>';
    print_r($stuff);
    echo '</pre>';
}
function esc($str){
    return htmlspecialchars($str);
}
?>