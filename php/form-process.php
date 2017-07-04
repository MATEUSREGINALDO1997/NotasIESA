
<?php

header("Content-Type: text/html; charset=utf-8", true); //UTF8 Para acentuação ajax php

$errorMSG = "";

// NAME
if (empty($_POST["n1"])) {
    $errorMSG = "n1 vazio";
    $n1 = 0;
} else {
    $n1 = $_POST["n1"];
}

// EMAIL
if (empty($_POST["n2"])) {
    $errorMSG .= "n2 vazio";
    $n2 = 0;
} else {
    $n2 = $_POST["n2"];
    
}

// MESSAGE
if (empty($_POST["n3"])) {
    $errorMSG = "Campo vazio";
    $n3 = 0;
    $calculoreprovado = (21 - ($n1+ $n2));
//   $calculoaprovado =   (($n1 * 0.35) + ($n2 * 0.35)) + $n3;
    $somaPontosqueFaltam = "Você precisa atingir uma nota maior que ". (21 - ($n1+ $n2)). "  no 3º semestre.";
} else {
    $n3 = $_POST["n3"] * 0.30;
}

$somaMedia12semestre = (($n1 * 0.35) + ($n2 * 0.35));
$somaMedia = (($n1 * 0.35) + ($n2 * 0.35)) + $n3; // calculo da media das 3 notas juntas// se n3 n for preenchido será 0, ou seja, o calculo sera feito somente pela n1 e pela n2.

if(empty($somaMedia12semestre)){
echo "<--- Média do 1º e 2º semestre : " . $somaMedia12semestre . " ---> ";
} else {
    echo "Média: " . $somaMedia . " --->";    
}

if($somaMedia >= 7){
    echo ' Aprovado!';
} else {
    echo ' Reprovado! ';




if(isset($somaPontosqueFaltam)){
    if($calculoreprovado < 10){
    echo $somaPontosqueFaltam ;    
    } else {
        echo 'Mesmo que você tire a nota máxima na substitutiva, infelizmente você ainda reprovaria!';    
    }
}
}



//
//$EmailTo = "emailaddress@test.com";
//$Subject = "New Message Received";
//
//// prepare email body text
//$Body = "";
//$Body .= "Name: ";
//$Body .= $name;
//$Body .= "\n";
//$Body .= "Email: ";
//$Body .= $email;
//$Body .= "\n";
//$Body .= "Message: ";
//$Body .= $message;
//$Body .= "\n";
//
//// send email
//$success = mail($EmailTo, $Subject, $Body, "From:".$email);
//
//// redirect to success page
//if ($success && $errorMSG == ""){
//   echo "success";
//}else{
//    if($errorMSG == ""){
//        echo "Something went wrong :(";
//    } else {
//        echo $errorMSG;
//    }
//}
?>