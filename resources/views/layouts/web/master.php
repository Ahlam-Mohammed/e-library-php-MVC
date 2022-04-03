<?php
use App\Config\Response;
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مكتبة جرير</title>

    <!-- Css File -->
    <?php include 'style.php' ?>

</head>

<body onload="offerDate()">

<!--<pre>--><?php // var_dump($_SESSION); $response = new Response();?><!--</pre>-->



<!-- navigation desktop -->
<?php include __DIR__ . '../../../components/web/navigation.php' ?>

<!-- Header -->
<?php include __DIR__ . '../../../components/web/header.php' ?>

<!-- Content -->
<?php include $data['content']; ?>


<!-- footer -->
<?php include 'footer.php' ?>

<!-- login model -->
<?php include __DIR__ . '../../../components/web/login-model.php' ?>

<!-- register model -->
<?php include __DIR__ . '../../../components/web/register-model.php' ?>


<?php include 'script.php' ?>

</body>
</html>