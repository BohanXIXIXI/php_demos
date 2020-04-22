<?php

//option
$opt = isset($_POST["opts"])? htmlspecialchars($_POST["opts"]):'';
if($opt){
    if($opt == "opt1"){echo "option one choosen!" . "<br>";}
    else if($opt == "opt2"){echo "option two choosen!" . "<br>";}
}else{
    //OR form html code <form>...</form>
    echo "options: nothing choosen!" . "<br>";
}

//muitple options
$muo = isset($_POST["muo"])? $_POST["muo"]:'';
if(is_array($muo)){
    $tmpArr = array(
        "muo1" => "mutilple option one choosen!" . "<br>",
        "muo2" => "mutilple option two choosen!" . "<br>",
        "muo3" => "mutilple option three choosen!" . "<br>"
    );
    foreach($muo as $val){
        echo $tmpArr[$val] . "<br>";
    }
}else{
    //OR form html code <form>...</form>
    echo "multi-options: nothing choosen!" . "<br>";
}

//radio
$rads = isset($_POST["rad"])? htmlspecialchars($_POST["rad"]):'';
if($rads){
    if($rads == "rad1"){echo "radio one choosen!" . "<br>";}
    else if($rads == "rad2"){echo "radio two choosen!" . "<br>";}
}else{
    //OR form html code <form>...</form>
    echo "radio: nothing choosen!" . "<br>";
}

//checkboxes
$chs = isset($_POST["cbs"])? $_POST["cbs"]:'';
if(is_array($chs)){
    $tmpArr = array(
        "cb1" => "checkbox one choosen!" . "<br>",
        "cb2" => "checkbox two choosen!" . "<br>",
    );
    foreach($chs as $val){
        echo $tmpArr[$val] . "<br>";
    }
}else{
    //OR form html code <form>...</form>
    echo "checkbox: nothing choosen!" . "<br>";
}



?>
