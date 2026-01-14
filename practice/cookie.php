<?php

setCookie("username", "abcd",time()+60*60*60); 

if(isset($_COOKIE['username'])){
    echo "username set: " . $_COOKIE['username'];
}else{
    echo "username not set";
}




?>