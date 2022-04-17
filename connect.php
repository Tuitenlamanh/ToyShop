<?php
<<<<<<< HEAD
    $severname = "3.132.234.157";
    $username = "manh79";
    $password = "123@123a";
    $database = "toyshop";
=======
    $severname = "localhost";
    $username = "root";
    $password = "";
    $database = "toyshop1";
>>>>>>> 6d4975fed69215950c9a6ebca1a43c908c042bb3
    //Khai báo biến để kết nỗi CSDL
    $connect = new mysqli($severname,$username,$password,$database);
    //$connect = new mysqli_connect ----> Hướng Thủ Tục
    if(!$connect)
        {
            echo "Connect Failed!";
        }
        else
        {
            
        }
<<<<<<< HEAD
=======

>>>>>>> 6d4975fed69215950c9a6ebca1a43c908c042bb3
?>