<?php

setcookie("username","abc",time()+60*60*24*7); //setcookie(name, value, expire, path);
echo "username is set" . "<hr>";


?>


<?php
if(isset($_COOKIE['username'])){
    echo "Username is: " . $_COOKIE['username'] , "<br>";
}else{
    echo "Cookie 'Username' is not set";
}


?>


<?php

if(count($_COOKIE) > 0){
    echo "Cookies are enabled" . "<br>";
}else{
    echo "Cookies are disabled";
}

?>

<?php

setcookie("username","abc",time() - 3600 , "/"); //expiry set in the past
echo "Cookie 'username' is deleted" . "<hr>";


?>



<?php

setcookie("username","abc",time() + (86400 * 1 ), "/"); // 86400 = 1 day

?>