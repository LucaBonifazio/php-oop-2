<?php
    include_once __DIR__ . '/articles.php';
    include_once __DIR__ . '/creditCard.php';
    include_once __DIR__ . '/user.php';

    $creditCardnumber = 1234567890;
    $obj = new Articles('Cuccia', 15, 'oggettistica'); 
    $user = new User('user', 'Pallino', $creditCardnumber);
    $user->registerUser('Pallonzo','password');
    $creditCard = new CreditCard($creditCardnumber, 234, '10.10.23');
    $result =  $user->pay($obj->getPrice());
    var_dump($user)
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
    <?php
        echo $obj->getTitle();
    ?>
        <br>
    <?php
        echo $obj->getPrice();
    ?>
        <br>
    <?php
        echo $obj->getCategory();
    ?>
        <br>
    <?php
        echo $result;
    ?>
</body>
</html>