<?php

if(true){
    echo "trueだとここを通る? \n";
}

if(false){
    echo "falseだとここを通る? \n";
}

$age = 20;

if($age >= 20){
    echo "成人です\n";
}

if($age < 20){
    echo "未成年です\n";
}

//

if ($age >= 20){
    echo "成人です\n";
}

else{
    echo "未成年です\n";
} 

//

if ($age > 20){
    echo "成人です \n";
}

elseif ($age = 20){
    echo "新成人おめでとう！！ \n";
}

else {
    echo "未成年です \n";
}