<?php 

function morse_encode($uit) {
    $string = $uit;
    $sl = strtolower($string);
    $translator = [
        "a" => ".-",
        "b" => "-...", 
        "c" => "-.-.", 
        "d" => "-..", 
        "e" => ".", 
        "f" => "..-.", 
        "g" => "--.", 
        "h" => "....", 
        "i" => "..", 
        "j" => ".---", 
        "k" => "-.-", 
        "l" => ".-..", 
        "m" => "--", 
        "n" => "-.", 
        "o" => "---", 
        "p" => ".--.", 
        "q" => "--.-", 
        "r" => ".-.", 
        "s" => "...", 
        "t" => "-", 
        "u" => "..-", 
        "v" => "...-", 
        "w" => ".--", 
        "x" => "-..-", 
        "y" => "-.--", 
        "z" => "--..", 
        "0" => "-----",
        "1" => ".----", 
        "2" => "..---", 
        "3" => "...--", 
        "4" => "....-", 
        "5" => ".....", 
        "6" => "-....", 
        "7" => "--...", 
        "8" => "---..", 
        "9" => "----.",
        "." => ".-.-.-",
        "," => "--..--",
        "?" => "..--..",
        "/" => "-..-.",
        " " => "/"
    ];

    for ($i = 0; $i < strlen($sl); $i++) {
        foreach ($translator as $letter => $code) {
            if ($letter == $sl[$i]) {
                echo $code;
            }
        }
    }
}