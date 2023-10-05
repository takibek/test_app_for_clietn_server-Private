<?php


$location="localhost";
$username="id21339427_test";
$password="test123@T";
$database_name="id21339427_test";
    $connection=mysqli_connect($location,$username,$password,$database_name);
    if(mysqli_connect_errno()){
        die("there is a connection problem".mysqli_connect_error());
    }else{
        echo"connection good";
    }
    
    
    //  if(isset($_POST['insert'])){
        $value=$_POST['value'];
        $asciiArray = [];
        $binaryArray = [];
        $octalArray = [];
        $hexArray = [];
        
       for ($i = 0; $i < strlen($value); $i++) {
    $asciiValue = ord($value[$i]);
    $asciiArray[] = $asciiValue;
    $binaryValue = decbin($asciiValue);
     $binaryArray[]= $binaryValue;
     $octalValue = decoct($asciiValue);
     $hexValue = dechex($asciiValue); 
      $octalArray[]=$octalValue;
        $hexArray[]=$hexValue;
}
$OCT= implode('',$octalArray);
$HEX= implode('',$hexArray);
$BIN= implode('',$binaryArray);
$ASCII= implode('',$asciiArray);

   
      $query="insert into OCT (id,value,oct) values(NULL,'".$value."','".$OCT."')";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die("problem of sending data");
    }
    
     $query="insert into HEX (id,value,hex) values(NULL,'".$value."','".$HEX."')";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die("problem of sending data");
    }
    
    $query="insert into BIN (id,value,bin) values(NULL,'".$value."','".$BIN."')";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die("problem of sending data");
    }
    
    $query="insert into ASCII (id,value,ascii) values(NULL,'".$value."','".$ASCII."')";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die("problem of sending data");
    }
   
     
     
   
    $query="insert into full_table (id,value,oct,hex,bin,ascii) values(NULL,'".$value."','".$OCT."','".$HEX."','".$BIN."','".$ASCII."')";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die("problem of sending data");
    }

        
        $sum = 0;
for ($i = 0; $i < strlen($valu); $i++) {
    $char = $valu[$i];
    $asciiValue = ord($char);
    $sum += $asciiValue;
}
$isEven = ($sum % 2) == 0;

if ($isEven) {
    // Insert into the even table
     $query="insert into even (id,value) values(NULL,'".$value."')";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die("problem of sending data");
    }
}else {
    // Insert into the odd table
     $query="insert into odd (id,value) values(NULL,'".$value."')";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die("problem of sending data");
    }
}

        
    
    //}
 
    ?>