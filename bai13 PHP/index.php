<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài1</title>
</head>
<body>
     
    <?php 
        
        //1. Cú pháp in màn hình

        echo "Hello World <br>";
 
        echo "PHP <br>";

        // 2. Biến

        $Ten = "Viet Anh";
        $Tuoi = "29";

        echo "Xin chào". $Ten . "Bạn Năm nay" . $Tuoi ."Tuổi <br>" ;

        

        // 3. Hằng số

        define ("SoPI" , "3.14");
        echo SoPI . "<br>";


        //4. phân biệt " " và ' '

        echo '$Ten' . "<br>";
        echo "$Ten" . "<br>";


        // 5. Chuỗi
        // 5.1 ktra độ dài chuỗi

        echo strlen($Ten)  . "<br>";


        // 5.2 Đếm số từ
        echo str_word_count($Ten) . "<br>";


        // 5.3 tìm kiếm ký tự trong chuỗi
        echo strpos($Ten, "A") . "<br>";

        // 5.4 Thay thế kí tự trong chuỗi
        echo str_replace("Anh" , "An" , $Ten) . "<br>";
 
        // 6.Toán tử
        $soThuNhat = 10;
        $soThuHai = 6;
        
        $Tong = $soThuNhat + $soThuHai;

        // + - * / %
        // += -= *= /=
        // so sánh == != > < >= <= ===

        echo $soThuNhat %= $soThuHai;


        //7. Câu điều kiện

        // ktra tổng số thứ 1 và số thứ 2
        // Nếu < 15 , Thì hthi tổng là ... nhỏ hơn 15
        // Nếu = 15 , Thì hthi tổng là ... nhỏ hơn 15
        // Nếu > 15 , Thì hthi tổng là ... nhỏ hơn 15


       if($Tong < 15){
        echo "Tổng nhỏ hơn 15";

       } elseif($Tong == 15){
        echo "Tổng bằng 15";

       }else{
        echo "Tổng lớn hơn 15";
       }


       //8. switch case
       $color = "red";
       switch ($color){
          case "red":
            echo "is red";
            break;
        case "blue":
            echo "is blue";
            break;
        default:
            echo "no color";
            break;
       }


       // 9. For
       for ($i = 0;  $i < 100;  $i++){
        echo $i . "<br>";
       }
    
       // 10. Mảng

       $Mang = ["An", "Nhat Anh", "Viet Anh" ];

       print_r($Mang);

       echo $Mang[1] . "<br>";

       echo count($Mang);

       $Mang[0] = "Nhat Anh";

       print_r($Mang);


       // Xóa
       unset($Mang[2]);

       print_r($Mang);

       // Thêm

       $Mang[] = "Luc";
       print_r($Mang);
       echo "<br>";


       // Sắp xếp

       $Mang2 = ["C","B","D","A"];
       print_r($Mang2);
       echo "<br>";

       // Sx tăng







       // 11. Kiểm tra biến có tồn tại hay không

       $bienA = "Hello";
       isset($bienA);  //true
       isset($bienB);  //false

       // 12. Hàm

       // Không tham số 

       function XinChao(){
          return "Hello";

       }
       
       echo XinChao() . "<br>";


       function XinChao2($Ten){
          return "Hello" . $Ten;
       }

       echo XinChao2("Viet Anh") . "<br>";

    
    
    ?>

</body>
</html>