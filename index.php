<?php

include_once __DIR__ . '/traits/Position.php';
include_once __DIR__ . '/traits/Name.php';
include_once __DIR__ . '/classes/CreditCard.php';
include_once __DIR__ . '/classes/User.php';
include_once __DIR__ . '/classes/GuestUser.php';
include_once __DIR__ . '/classes/RegisteredUser.php';
include_once __DIR__ . '/classes/Product.php';

$username		= $_POST['username']	?? 'SuperPippo';
$password		= $_POST['password']	?? 'password';

$name			= $_POST['name']		?? 'Pippo';
$address		= $_POST['address']		?? 'Via Mazzini';

$number			= $_POST['number']		?? 0;
$expiryYear		= $_POST['expiryYear']	?? 0;
$expiryMonth	= $_POST['expiryMonth']	?? 0;

$creditCard		= new CreditCard($number, $expiryYear, $expiryMonth);

if ($username && $password) {
	$user = new RegisteredUser($username, $password);
} else {
	$user = new GuestUser($creditCard, $name, $surname, $address);
}


try {
    throw new Exception('Errore di prova');
}
catch (Exception $e) {
    //var_dump($e);
    echo 'Caught exception: ',  $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
</head>
<body>

</body>
</html>