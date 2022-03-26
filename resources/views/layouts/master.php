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

<!-- navigation desktop -->
<?php include __DIR__ . '../../components/web/navigation.php' ?>

<!-- Header -->
<?php include __DIR__ . '../../components/web/header.php' ?>

<!-- banner -->
<section>
    <div class="banner">

        <!-- images slide -->
        <div class="banner__item">
            <img class="banner__img" src="images/banner/1.jpg" alt="">
        </div>
        <div class="banner__item">
            <img class="banner__img" src="images/banner/2.jpg" alt="">
        </div>
        <div class="banner__item">
            <img class="banner__img" src="images/banner/5.jpg" alt="">
        </div>
        <div class="banner__item">
            <img class="banner__img" src="images/banner/3.jpg" alt="">
        </div>
        <div class="banner__item">
            <img class="banner__img" src="images/banner/4.jpg" alt="">
        </div>
        <div class="banner__item">
            <img class="banner__img" src="images/banner/5.jpg" alt="">
        </div>

        <!-- prev and next slide -->
        <a class="prev" onclick="plus(-1)">&#10094;</a>
        <a class="next" onclick="plus(1)">&#10095;</a>

        <!-- unit -->
        <div class="unit">
            <span class="unit__item" onclick="current(1)"></span>
            <span class="unit__item" onclick="current(2)"></span>
            <span class="unit__item" onclick="current(3)"></span>
            <span class="unit__item" onclick="current(4)"></span>
            <span class="unit__item" onclick="current(5)"></span>
            <span class="unit__item" onclick="current(6)"></span>
        </div>
    </div>
</section>

<!-- Content -->
<?php include $data ?>


<!-- footer -->
<?php include 'footer.php' ?>

<!-- login model -->
<?php include __DIR__ . '../../components/web/login-model.php' ?>

<!-- register model -->
<?php include __DIR__ . '../../components/web/register-model.php' ?>

<!-- image model -->
<?php include __DIR__ . '../../components/web/display-image-model.php' ?>

<?php include 'script.php' ?>
</body>
</html>