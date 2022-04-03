<?php

$book        = $data['book'];
$category    = $data['category'];
$author      = $data['author'];
$publisher   = $data['publisher'];
$alternative = $data['alternative'];

?>

<!-- link block -->
    <article>
        <ul class="link">
            <li class="link__item"><a href="/" class="link__link">الرئيسية</a></li>
            <li class="link__item"><a href="/categories?id=<?= $category[0]['id'] ?>" class="link__link"><?= $category[0]['name'] ?></a></li>
            <li class="link__item"><a href="/details?id=<?= $book[0]['id'] ?>" class="link__link"><?= $book[0]['title'] ?></a></li>
        </ul>
    </article>

    <main class="no-padding">
    
        <div class="grid">
            <!-- images book -->
            <section class="images-book">
                <div class="card card--shadow card--details card--86w">
                    <figure>
                        <img id="img-main" src="/uploads/<?= $book[0]['image'] ?>" alt="" class="card__img" style="cursor: pointer;">
                    </figure>
                </div>
            </section>

            <!-- details book -->
            <section class="details-book">
                <div class="details">
                    <div class="book-type book-type--start">
                        <h1><?= $book[0]['title'] . "(" . $book[0]['format'] . ")" ?></h1>
                    </div>
                    <div class="book-link">
                        <a href="#more" class="book-link--cyan">عرض المزيد<img src="images/icon/more.svg"></a>
                    </div>
                    <div class="book-price" style="margin-top: 0;">
                        <h3 class="book-price__price--large"><?= $book[0]['price'] ?> <span class="book-price__currency--large">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="details__item">
<!--                        <h4 class="details__text">وحدة البيع:Each</h4>-->
                        <div class="rating">
                            <img src="images/icon/rating.svg" class="rating__star" alt="">
                            <img src="images/icon/rating.svg" class="rating__star" alt="">
                            <img src="images/icon/rating.svg" class="rating__star" alt="">
                            <img src="images/icon/rating.svg" class="rating__star" alt="">
                            <img src="images/icon/rating.svg" class="rating__star" alt="">
                            <a href="" class="book-link--cyan">(15 المراجعات)</a>
                        </div>
<!--                        <p class="details__text">رقم الصنف <b>JBB410156</b>رقم المنتج <b>4</b></p>-->
                    </div>

                    <div class="book-link">
                        <span class="book-link--blue">الصيغ المتوفرة:</span>
                        <div class="row">
                            <div class="row__item">
                                <span class="radio"></span>
                                <a href="" class="row__link"><?= $book[0]['format'] ?><img src="images/icon/qus.svg"></a>
                            </div>
                            <div class="book-price">
                                <h3 class="book-price__price"><?= $book[0]['price'] ?> <span class="book-price__currency">ر.س</span></h3>
                                <p class="book-price__tax">شامل الضرائب</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- buy info  -->
            <section class="buy-info">
                <div class="card card--details card--shadow card--90w">
                    <div class="note">
                        <p><b>ملاحظة:</b>سيتم إضافة هذا الكتبا الإلكتروني إلى مكتبتك في قارئ جرير</p>
                        <a href="#">اقرأ المزيد</a>
                    </div>
                    <div class="form">
                        <form action="">
                            <button class="btn btn--select">1<img src="images/icon/down.svg"></button>
                            <button class="btn btn--red btn--no-bottom btn--83w js-cart"><img src="images/icon/cart-fff.svg" style="margin-left: 10px;">اضف الى السلة</button>
                        </form>    
                    </div>
                    <div class="info">
                        <a href="#"><img src="images/icon/lock1.svg">تسوق آمن<img src="images/icon/qus-2.svg"></a>
                        <a href="#"><img src="images/icon/save2.svg">أصلي ومضمون<img src="images/icon/qus-2.svg"></a>
                        <a href="#"><img src="images/icon/fast.svg">شحن سريع ومجاني<img src="images/icon/qus-2.svg"></a>
                    </div>
                    <div class="share">
                        <button class="btn"><img src="images/icon/share1.svg">مشاركة</button>
                        <button class="btn"><img src="images/icon/heart.svg">المفضلة</button>
                        <button class="btn"><img src="images/icon/compare.svg">مقارنة</button>
                    </div>
                </div>
                <div class="card card--details card--shadow card--90w">
                    <div class="share share--top-border">
                        <button class="btn"><img src="images/icon/share1.svg">مشاركة</button>
                        <button class="btn"><img src="images/icon/heart.svg">المفضلة</button>
                        <button class="btn"><img src="images/icon/compare.svg">مقارنة</button>
                    </div>
                </div>
            </section>

            <!-- short description -->
            <article class="description">
                <p><?= $book[0]['description'] ?></p>
            </article>
        </div>

        <!-- specifications -->
        <section id="more">
            <header class="header">
                <h1 class="header__title--blue">المواصفات</h1>
            </header>
            <table class="specifications">
                <tr class="specifications__row">
                    <td class="specifications__td">الصنف</td>
                    <th class="specifications__th"><?= $category[0]['name'] ?></th>
                </tr>
                <tr class="specifications__row">
                    <td class="specifications__td">رقم الصنف</td>
                    <th class="specifications__th"><?= $category[0]['id'] ?></th>
                </tr>
                <tr class="specifications__row">
                    <td class="specifications__td">رقم المنتج</td>
                    <th class="specifications__th"><?= $book[0]['id'] ?></th>
                </tr>
                <tr class="specifications__row">
                    <td class="specifications__td">المؤلف</td>
                    <th class="specifications__th"><?= $author[0]['name'] ?></th>
                </tr>
                <tr class="specifications__row">
                    <td class="specifications__td"> الناشر</td>
                    <th class="specifications__th"><?= $publisher[0]['name'] ?></th>
                </tr>
                <tr class="specifications__row">
                    <td class="specifications__td">تاريخ النشر</td>
                    <th class="specifications__th"><?= $book[0]['created_at'] ?></th>
                </tr>
                <tr class="specifications__row">
                    <td class="specifications__td">صيغة الكتاب</td>
                    <th class="specifications__th"><?= $book[0]['format'] ?></th>
                </tr>
                <tr class="specifications__row">
                    <td class="specifications__td">عدد الصفحات</td>
                    <th class="specifications__th"><?= $book[0]['pages_number'] ?></th>
                </tr>
            </table>
        </section>
        <!-- related book -->
        <section>
            <header class="header">
                <h1 class="header__title--blue">منتجات مشابهة</h1>
            </header>
            <div class="category category--gap-36">
                <div class="category__prev">
                    <a href="#"><img src="images/icon/arrow.svg" alt="السابق"></a>
                </div>
                <?php foreach ($alternative as $alt) {?>
                    <article class="card card--shadow card--related">
                        <img src="/uploads/<?= $alt['image'] ?>" class="card__img--min" alt="صورة الكتاب">
                        <div class="card__info card__info--min">
                            <div class="book-title">
                                <h1><a href="/details?id=<?= $alt['id'] ?>" class="book-title__item"><?= $alt['title'] . "(" . $alt['format'] . ")" ?></a></h1>
                            </div>
                            <div class="book-price">
                                <h3 class="book-price__price--min"><?= $alt['price'] ?> <span class="book-price__currency">ر.س</span></h3>
                                <p class="book-price__tax">شامل الضرائب</p>
                            </div>
                        </div>
                    </article>
                <?php }?>
                <div class="category__next">
                    <a href="#"><img src="images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
                </div>
            </div>
        </section>

    </main>

    <!-- image model -->
    <?php include __DIR__ . '../../components/web/display-image-model.php' ?>