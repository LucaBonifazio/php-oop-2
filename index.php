<?php

include_once __DIR__ . '/traits/Position.php';
include_once __DIR__ . '/traits/Name.php';
include_once __DIR__ . '/classes/CreditCard.php';
include_once __DIR__ . '/classes/User.php';
include_once __DIR__ . '/classes/GuestUser.php';
include_once __DIR__ . '/classes/RegisteredUser.php';
include_once __DIR__ . '/classes/Product.php';

$username		= $_POST['username']		?? '';
$password		= $_POST['password']		?? '';

$name				= $_POST['name']			?? '';
$address			= $_POST['address']		?? '';

$number			= $_POST['number']		?? '';
$expiryYear		= $_POST['expiryYear']	?? '';
$expiryMonth	= $_POST['expiryMonth']	?? '';

$creditCard		= new CreditCard($number, $expiryYear, $expiryMonth);

if ($username && $password) {
	$user = new RegisteredUser($username, $password);
} else {
	$user = new GuestUser($name, $address, $creditCard);
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