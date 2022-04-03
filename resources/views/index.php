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
<main>

    <!-- category slide section -->
    <section>
        <header class="header">
            <h1 class="header__title">تصفح حسب القسم</h1>
        </header>
        <div class="category">
            <div class="category__prev">
                <a><img src="/images/icon/arrow.svg" alt="السابق"></a>
            </div>
            <?php foreach ($data['categories'] as $category) { ?>
                <article class="category__item">
                    <img src="/uploads/<?= $category['image'] ?>" class="category__img" alt="دين">
                    <a href="/categories?id=<?= $category['id'] ?>" class="category__title category__title--brown"><?= $category['name']?></a>
                </article>
            <?php } ?>
            <div class="category__next">
                <a><img src="/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
            </div>
        </div>
    </section>

    <!-- advertisement section -->
    <section>
        <div class="advertisement">
            <article class="advertisement__item">
                <a href="#"><img src="/images/advertisement/1.jpg" class="advertisement__img" alt=""></a>
            </article>
            <article class="advertisement__item">
                <a href="#"><img src="/images/advertisement/2.jpg" class="advertisement__img" alt=""></a>
            </article>
            <article class="advertisement__item">
                <a href="#"><img src="/images/advertisement/3.jpg" class="advertisement__img" alt=""></a>
            </article>
            <article class="advertisement__item">
                <a href="#"><img src="/images/advertisement/4.jpg" class="advertisement__img" alt=""></a>
            </article>
            <article class="advertisement__item advertisement__item--main">
                <a href="#"><img src="/images/advertisement/5.jpg" class="advertisement__img" alt=""></a>
            </article>
        </div>
    </section>

    <!-- قسم العروض -->
    <section>
        <header class="header">
            <h1 class="header__title">العروض الحالية</h1>
            <a href="/category" class="header__link">عرض الكل</a>
        </header>
        <div class="category category--gap">
            <div class="category__prev">
                <a href="#"><img src="/images/icon/arrow.svg" alt="السابق"></a>
            </div>
            <article class="card">
                <a href="/details"><img src="/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="/details" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="note note--green" id="product-1">
                        <p class="expired"></p>
                        <!-- <span class="secound"></span>
                        <span class="minut"></span>
                        <span class="hour"></span> -->
                        <span class="day"></span>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <img src="/images/product/book2.jpg" class="card__img" alt="صورة الكتاب">
                <div class="card__info">
                    <div class="book-type">
                        <a href="/details"><img src="/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب"></a>
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="/details" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="note note--green" id="product-2">
                        <p class="expired"></p>
                        <!-- <span class="secound"></span>
                        <span class="minut"></span>
                        <span class="hour"></span> -->
                        <span class="day"></span>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/details"><img src="/images/product/book3.jpg" class="card__img" alt="صورة الكتاب">                    </a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="/details" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="note note--green" id="product-3">
                        <p class="expired"></p>
                        <!-- <span class="secound"></span>
                        <span class="minut"></span>
                        <span class="hour"></span> -->
                        <span class="day"></span>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/details"><img src="/images/product/book4.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="/details" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="note note--green" id="product-4">
                        <p class="expired"></p>
                        <!-- <span class="secound"></span>
                        <span class="minut"></span>
                        <span class="hour"></span> -->
                        <span class="day"></span>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/details"><img src="/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="/details" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="note note--green" id="product-5">
                        <p class="expired"></p>
                        <!-- <span class="secound"></span>
                        <span class="minut"></span>
                        <span class="hour"></span> -->
                        <span class="day"></span>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <div class="category__next">
                <a href="#"><img src="/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
            </div>
        </div>
    </section>

    <?php foreach ($data['categories'] as $category){
        $books = \App\Models\Category::books($category['id']);
        if (!empty($books)) {?>
            <section>
                <header class="header">
                    <h1 class="header__title"><?= $category['name'] ?></h1>
                    <a href="/categories?id=<?= $category['id'] ?>" class="header__link">عرض الكل</a>
                </header>
                <div class="category category--gap">
                    <div class="category__prev">
                        <a href="#"><img src="/images/icon/arrow.svg" alt="السابق"></a>
                    </div>

                    <?php
                    $books =  array_slice($books, 0, 5); // get first five only
                    foreach ($books as $book){ ?>
                        <article class="card">
                            <a href="/details?id=<?= $book['id'] ?>"><img src="/uploads/<?= $book['image'] ?>" class="card__img" alt="صورة الكتاب"></a>
                            <div class="card__info">
                                <div class="book-type">
                                    <img src="/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                                    <h1><?= $book['format'] ?></h1>
                                </div>
                                <div class="rating">
                                    <img src="/images/icon/rating.svg" class="rating__star" alt="">
                                    <img src="/images/icon/rating.svg" class="rating__star" alt="">
                                    <img src="/images/icon/rating.svg" class="rating__star" alt="">
                                    <img src="/images/icon/rating.svg" class="rating__star" alt="">
                                    <img src="/images/icon/rating.svg" class="rating__star" alt="">
                                </div>
                                <div class="book-title">
                                    <h1><a href="/details?id=<?= $book['id'] ?>" class="book-title__item"><?= $book['title'] . "(" . $book['format'] . ")" ?></a></h1>
                                </div>
                                <div class="book-price">
                                    <h3 class="book-price__price"><?= $book['price'] ?> <span class="book-price__currency">ر.س</span></h3>
                                    <p class="book-price__tax">شامل الضرائب</p>
                                </div>
                                <div class="action">
                                    <a href="#" class="action__item"><img src="/images/icon/star.svg" alt="المفضلة" ></a>
                                    <a class="action__item js-cart"><img src="/images/icon/cart.svg" alt="السلة" ></a>
                                    <a href="#" class="action__item"><img src="/images/icon/share.svg" alt="مشاركة" ></a>
                                </div>
                            </div>
                        </article>
                    <?php }?>
                    <div class="category__next">
                        <a href="#"><img src="/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
                    </div>
                </div>
            </section>
    <?php } }?>

</main>