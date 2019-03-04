<?php
if (!function_exists('dd')){
    function dd ($data, ...$otherData){
        echo "<pre>";
        var_dump($data);
        echo "</pre>";

        foreach($otherData as $value){
            echo "<pre>";
            var_dump($value);
            echo "</pre>";
        }

        exit(1);



    }
}