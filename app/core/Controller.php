<?php


class Controller 
{
    public function view($name)
    {
        $filename = '../app/views/'.$name . '.abbose.php';
        if(file_exists($filename)){
            require $filename;
        }else{
        $filename = '../app/views/404.abbose.php';
        require $filename;
        }
    }
}