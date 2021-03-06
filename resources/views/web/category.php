<!-- link block -->
<?php $category    = $data['category']; ?>
<article>
        <ul class="link">
            <li class="link__item"><a href="/" class="link__link">الرئيسية</a></li>
            <li class="link__item"><a href="/categories?id=<?= $category[0]['id'] ?>" class="link__link"><?= $category[0]['name'] ?></a></li>
        </ul>
    </article>

    <main>
        <div class="grid grid-category">
            <section>
                <div class="filter">
                    <h1 class="filter__title">
                        <span><img src="images/icon/book.svg" alt="book"></span>
                        كتب إلكترونية
                    </h1>
                    <div class="filter__box">
                        <p class="filter__box-title">تصفية النتائج</p>
                        <a href="#" class="filter__item">
                            علامة تجارية
                            <span>-</span>
                        </a>
                        <a href="#" class="filter__item">
                            السعر
                            <span>-</span>
                        </a>
                        <div class="filter__collap">
                            <div class="prograssDetails">
                                <button></button>
                                <div></div>
                                <button></button>
                            </div>
                            <div class="priceDetaile">
                                <p>ر.س.0</p>
                                <p>ر.س.150</p>
                            </div>
                        </div>
                        <a href="#" class="filter__item">
                            صيغة الكتاب
                            <span>-</span>
                        </a>
                    </div>

                </div>
            </section>
            <section>
                <div class="select">
                    <!-- Search block -->
                    <form action="">
                        <div class="search">
                            <input id="search" onkeyup="searchBook()" type="text" class="search__input" placeholder="البحث">
                            <button class="search__btn"><img src="images/icon/search.svg" alt="بحث"></button>
                        </div>
                    </form> 
                    <div>
                        <label for="categoriesSorting">الترتيب بحسب : </label>
                        <select name="categoriesSorting">
                            <option value="*">الرجاء الإختيار</option>
                            <option value="name">الاسم</option>
                            <option value="date">التاريخ</option>
                            <option value="price">السعر</option>
                        </select>
                    </div>
                </div>
                <div class="category category--gap" style="flex-wrap: wrap;" id="books">
                    <?php foreach ($data['books'] as $book){ ?>
                    <article class="card">
                        <img src="/uploads/<?= $book['image'] ?>" class="card__img" alt="صورة الكتاب">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                                <h1><?= $book['format'] ?></h1>
                            </div>
                            <div class="rating">
                                <img src="images/icon/rating.svg" class="rating__star" alt="">
                                <img src="images/icon/rating.svg" class="rating__star" alt="">
                                <img src="images/icon/rating.svg" class="rating__star" alt="">
                                <img src="images/icon/rating.svg" class="rating__star" alt="">
                                <img src="images/icon/rating.svg" class="rating__star" alt="">
                            </div>
                            <div class="book-title">
                                <h1><a href="/details?id=<?= $book['id'] ?>" class="book-title__item"><?= $book['title'] ?></a></h1>
                            </div>
                            <div class="book-price">
                                <h3 class="book-price__price"><?= $book['price'] ?> <span class="book-price__currency">ر.س</span></h3>
                                <p class="book-price__tax">شامل الضرائب</p>
                            </div>
                            <div class="action">
                                <a href="#" class="action__item"><img src="images/icon/star.svg" alt="المفضلة" ></a>
                                <a href="#" class="action__item js-cart"><img src="images/icon/cart.svg" alt="السلة" ></a>
                                <a href="#" class="action__item"><img src="images/icon/share.svg" alt="مشاركة" ></a>
                            </div>
                        </div>
                    </article>
                    <?php }?>
                </div>
                <footer style="display: flex;flex-direction: column;align-items: center;">
                    <button class="btn btn--blue btn--100w">عرض المزيد</button>
                    <a href="" class="link--green">اشتر من كتب إلكترونية على متجر جرير الإلكتروني</a>
                </footer>
            </section>
    
        </div>
    </main>