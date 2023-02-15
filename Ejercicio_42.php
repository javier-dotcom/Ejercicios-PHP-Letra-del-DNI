<style>
        body{
            width: 80%;
            background-color:black;
            color:white;
            text-align:center;
            margin:auto;
        }
    </style>
<?php




$dni=$_GET["dni"];
$words=strtoupper($_GET["words"]);
$divisor=23;



echo "<br><br>";
if ($dni< 0 || $dni >99999999){
echo "El numero proporcionado no es valido";
}else{
echo comprobar($dni,$divisor,$words);
}


function comprobar($dni,$divisor,$words){
$letras=['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C',
'K', 'E', 'T'];
if($letras[$dni % $divisor]== $words){
return "<h3> El numero y
la letra de DNI son correctos. </h3>";
}else{
    return"<h3>La letra que
ha indicado no es correcta</h3>";
}
};










?>