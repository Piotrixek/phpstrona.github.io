<?php
$imie = $_POST['imie'];
echo "imie - ";
echo $_POST['imie'];
echo "<br>";
$nazwisko = $_POST['nazwisko'];
echo "nazwisko - ";
echo $_POST['nazwisko'];
echo "<br>";
$age = $_POST['age'];
echo "wiek - ";
echo $_POST['age'];
echo "<br>";

if($age>=18){
        echo "jestes pelnioletni";
}elseif($age<18){
        echo "jestes niepelnioletni";
}
$my_str1 = $imie;
$my_str2 = $nazwisko;
echo "<br>";
echo '<span style="color:green;">Liter w imieniu jest  - </span>' . strlen($my_str1); //no to tu jest że liczy//
echo "<br>";
echo '<span style="color:green;">Liter w nazwisku jest  - </span>' . strlen($my_str2);
echo "<br>";
echo '<span style="color:blue;">spacji w imieniu jest = </span>' . substr_count($my_str1, ' ');
echo "<br>";
echo '<span style="color:blue;">spacji w nazwisku jest = </span>' . substr_count($my_str2, ' ');
echo "<br>";
echo "Stworzone przez Piotrka";


?>






