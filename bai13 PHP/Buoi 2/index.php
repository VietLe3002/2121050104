<?php

   // cookie 

   // Lưu trữ ng dùng 

   // DÙng thông tin ít quan trọng 

   $cookieName = "User";

   $cookieValue = "An";

   setcookie($cookieName, $cookieValue, time() + 3600, "/");

   if(isset($_COOKIE[$cookieName])){
       echo "Cookie đã tồn tại";
   }
   else{
       echo "Cookie chưa tồn tại";
   }


   // Sesion

   session_start();
   $_SESSION["name"] = "Viet Anh 123";

   echo $_SESSION["name"];
?>