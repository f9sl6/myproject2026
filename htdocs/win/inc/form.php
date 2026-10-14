<?php


$firstname =   mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname =    mysqli_real_escape_string($conn, $_POST['lastname']);
$email =       mysqli_real_escape_string($conn, $_POST['email']);

$errors = [

'firstnameError' => '',
'lastnameError' => '',
'emailError' => '',

];
if (isset($_POST['submit'])) {



$sql = "INSERT INTO userss(firstname , lastname , email) 
VALUES ('$firstname' , '$lastname'  , '$email')";

if(empty($firstname) ){
    $errors['firstnameError'] = 'ادخل اسمك الاول' ;
    
    }if(empty($lastname) ){
            $errors['lastnameError'] = 'ادخل اسمك الاخير' ;

        
        }if(empty($email) ){
           $errors['emailError'] = 'ادخل الايميل' ;
;
            
            }if(!filter_var($email,FILTER_VALIDATE_EMAIL) ){
                           $errors['emailError'] = 'ادخل الايميل بالشكل الصحيح' ;

                }  else{
    if(mysqli_query($conn, $sql)){
        header('location:  index.php');
       }else{
           echo 'ERROR:'. mysqli_error($conn);
       }
       
}



}