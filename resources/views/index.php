<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مكتبة جرير</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/model.css">
    <link rel="stylesheet" href="../../public/css/responsive.css">
</head>

<body onload="offerDate()">

<!-- navigation desktop -->
<nav class="nav">
    <a href="#" class="nav__link nav__link--100w login">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" class="icon icon--default list__icon" width="16"  height="16" ><defs><symbol viewBox="0 0 50 50" id="customer" xmlns="http://www.w3.org/2000/svg"><path d="M34.8 33.8c-1.698-.698-3.8-1.6-3.8-2.3V27c2.5-1.898 4-4.898 4-8v-6c0-5.5-4.5-10-10-10S15 7.5 15 13v6c0 3.102 1.5 6.2 4 8v4.5c0 .602-2.102 1.5-3.8 2.3C11.101 35.5 5 38.103 5 45v1h40v-1c0-6.898-6.102-9.5-10.2-11.2z"></path></symbol></defs>
            <use xlink:href="#customer" fill="#42526E"></use>
        </svg>
        ادخل لحسابك أو سجل الآن
    </a>
    <a href="index.html" class="nav__link">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" class="icon icon--default list__icon" width="16"  height="16" ><defs><symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg"><path d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z"></path></symbol></defs>
            <use xlink:href="#star" fill="#42526E"></use>
        </svg>
        الرئيسية
    </a>
    <a href="#" class="nav__link">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" class="icon icon--default list__icon" width="16"  height="16" ><defs><symbol viewBox="0 11 50 39" id="delivery-truck" xmlns="http://www.w3.org/2000/svg"><path d="M11 11C4.898 11 0 15.898 0 22c0 2.3.7 4.5 2 6.3V42c0 1.602 1.398 3 3 3h2.094c.48 2.828 2.949 5 5.906 5s5.426-2.172 5.906-5h9.192c1.601 0 2.804-1.3 2.804-2.8V17.901C31 16.301 29.7 15 28.2 15h-8.7c-2-2.398-5.102-4-8.5-4zm0 2c5 0 9 4 9 9s-4 9-9 9-9-4-9-9 4-9 9-9zm-.016.984c-.55.012-.992.465-.984 1.016v5.75A1.62 1.62 0 009.398 22c.004.059.008.117.016.172l-2.121 2.121a.992.992 0 00-.273.973.99.99 0 00.714.714.992.992 0 00.973-.273l2.117-2.117A1.597 1.597 0 0012.597 22c0-.484-.218-.945-.597-1.25V15a1.003 1.003 0 00-1.016-1.016zM34 20c-1.102 0-2 .898-2 2v21c0 .84.527 1.563 1.266 1.855C33.688 47.754 36.19 50 39.199 50c2.957 0 5.43-2.172 5.91-5H47c1.7 0 3-1.3 3-3v-9.598c0-2-1.398-4.101-1.598-4.304L46.098 25l-1.899-2.5C43.2 21.398 41.7 20 40 20zm4 5h5.598l3.203 4.2c.3.5 1.199 2 1.199 3.1v.7H38c-1 0-2-1-2-2v-4c0-1.102 1-2 2-2zM13 40c2.2 0 4 1.8 4 4s-1.8 4-4 4-4-1.8-4-4 1.8-4 4-4zm26.2 0c2.198 0 4 1.8 4 4s-1.802 4-4 4c-2.2 0-4-1.8-4-4s1.8-4 4-4z"></path></symbol></defs>
            <use xlink:href="#delivery-truck" fill="#42526E"></use>
        </svg>
        من نحن
    </a>
    <a href="#" class="nav__link">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" class="icon icon--default list__icon" width="16"  height="16" ><defs><symbol viewBox="0 0 16 16" id="secure-solid" xmlns="http://www.w3.org/2000/svg"><path d="M14.789 2.511C12.42 1.991 11.02 1.255 10 .718 9.206.3 8.634 0 8 0c-.634 0-1.206.301-2 .718-1.021.537-2.42 1.273-4.789 1.793l-.251.055v.258c0 9.747 6.836 13.017 6.906 13.049l.14.065.139-.07c.069-.035 6.895-3.62 6.895-13.044v-.258l-.251-.055zM7.814 9.97L5.308 7.703l.43-.474L7.685 8.99l2.779-4.312.539.346-3.19 4.946z"></path></symbol></defs>
            <use xlink:href="#secure-solid" fill="#42526E"></use>
        </svg>
        اتصل بنا
    </a>
    <a href="#" class="nav__link">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" class="icon icon--default list__icon" width="16"  height="16" ><defs><symbol viewBox="0 0 50 50" id="info" xmlns="http://www.w3.org/2000/svg"><path d="M25 2C12.297 2 2 12.297 2 25s10.297 23 23 23 23-10.297 23-23S37.703 2 25 2zm0 9a3 3 0 110 6 3 3 0 010-6zm4 27h-8v-2h2V23h-2v-2h6v15h2v2z"></path></symbol></defs>
            <use xlink:href="#info" fill="#42526E"></use>
        </svg>
        المساعدة
    </a>
    <a href="#" class="nav__link nav__link--100w">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" class="icon icon--default list__icon" width="16"  height="16" ><defs><symbol viewBox="0 0 14.5 19" id="store" xmlns="http://www.w3.org/2000/svg"><path d="M7.308.365c3.394 0 6.936 2.723 6.942 6.608.008 4.667-6.942 11.662-6.942 11.662S.358 11.63.365 6.973C.371 3.082 3.914.365 7.308.365zm-.58 7.207v2.519c-1.282-.097-1.922-1.056-1.922-1.056H3.348c1.584 2.9 4.649 2.276 4.649 2.276V7.572h-1.27zm.628-.097c.353 0 .64-.27.64-.608a.627.627 0 00-.64-.613c-.353 0-.643.274-.643.613 0 .338.29.608.643.608zm1.043 2.544v1.245s2.865-.501 3.417-3.736h-1.284s-.2 1.867-2.133 2.49zm-4.698-5.42h1.68s2.16-1.652 4.246.313H3.398S2.32 6.544 3.148 8.7H4.53s-.828-1.463-.252-2.544h7.416s-.532-3.137-4.096-3.38c0 0-2.694-.142-3.896 1.822z"></path></symbol></defs>
            <use xlink:href="#store" fill="#42526E"></use>
        </svg>
        سياسية الخصوصية
    </a>
    <a href="#" class="nav__link"><img src="../../public/images/icon/country.svg" alt="">اليمن</a>
    <a class="nav__link js-language">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" class="icon icon--default list__icon" width="16"  height="16" ><defs><symbol viewBox="0 0 48 48" id="language" xmlns="http://www.w3.org/2000/svg"><path d="M3 0C1.348 0 0 1.348 0 3v26c0 1.652 1.348 3 3 3h11.594l2.469-2.469 1.406 1.407L16 33.406V45c0 1.652 1.348 3 3 3h26c1.652 0 3-1.348 3-3V19c0-1.652-1.348-3-3-3H33.406L31 18.406 29.594 17 32 14.594V3c0-1.652-1.348-3-3-3H3zm39.281.281L36.594 6l5.687 5.719 1.438-1.438L39.406 6l4.313-4.281L42.28.28zM28.188 18.406l1.406 1.407-1.375 1.406-1.438-1.438 1.407-1.375zm-2.782 2.782l1.407 1.406L25.405 24 24 22.594l1.406-1.407zM8.374 10.925c0-1.58.548-2.852 1.638-3.784.856-.744 1.882-1.126 3.068-1.142 1.607 0 2.893.647 3.825 1.926l.067.206v2.55l-.635-.896c-.832-1.171-1.864-1.744-3.125-1.744-.814 0-1.453.265-1.942.8-.495.54-.744 1.244-.744 2.128 0 1.04.304 1.853.912 2.461.577.59 1.35.885 2.346.885h4.244v2.064h-4.2c-1.333 0-2.318.355-2.98 1.057-.495.52-.74 1.16-.74 1.937 0 .955.345 1.724 1.044 2.33.666.573 1.546.862 2.654.862h.044c1.602 0 2.871-.354 3.818-1.053l.558-.413v2.228l-.163.104c-1.26.798-2.681 1.198-4.257 1.198-1.853 0-3.34-.587-4.436-1.76A4.924 4.924 0 018 19.395c0-.975.253-1.862.76-2.653a4.681 4.681 0 011.52-1.492c-1.27-.944-1.906-2.397-1.906-4.325zm22.438 12.98h2.375L39.907 41h-2.5L35.5 35.812h-7.188L26.407 41h-2.312l6.718-17.094zM22.595 24L24 25.406l-1.375 1.407-1.438-1.438L22.595 24zm9.312 1.906l-2.906 8h5.813l-2.907-8zm-12.093.875l1.406 1.407-1.407 1.406-1.406-1.407 1.407-1.406zm-15.094 9.5L3.28 37.72 7.594 42 3.28 46.281l1.44 1.439L10.406 42 4.72 36.281z"></path></symbol></defs>
            <use xlink:href="#language" fill="#42526E"></use>
        </svg>
        <span>English</span>
    </a>
</nav>

<!-- Header -->
<header class="top-header">
    <!-- navigation mobile -->
    <div id="nav" onclick="toggleMobileMenu(this)">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="nav__title">القائمة</div>
        <div class="menu">
            <div class="menu__item">
                <div>
                    <img src="../../public/images/icon/cancel.svg" style="width: 80%;">
                </div>
                <div class="logo-menu">
                    <img src="../../public/images/logo.svg" alt="BookStore">
                </div>
                <div class="lang-menu">
                    <a href="#" class="nav__link js-language"><span>English</span></a><img src="../../public/images/icon/language.svg" alt="">
                </div>
            </div>
            <nav class="nav-mobile">
                <a class="nav__link login"><img src="../../public/images/icon/user-menu.svg" alt="">ادخل لحسابك أو سجل الآن</a>
                <a href="#" class="nav__link"><img src="../../public/images/icon/home-menu.svg" alt="">الرئيسية</a>
                <a href="#" class="nav__link"><img src="../../public/images/icon/cart-menu.svg" alt="">السلة</a>
                <a href="#" class="nav__link"><img src="../../public/images/icon/abou-menu.svg" alt="">من نحن</a>
                <a href="#" class="nav__link"><img src="../../public/images/icon/contact-menu.svg" alt="">اتصل بنا</a>
                <a href="#" class="nav__link"><img src="../../public/images/icon/help-menu.svg" alt="">المساعدة</a>
                <a href="#" class="nav__link nav__link--100w"><img src="../../public/images/icon/policy-menu.svg" alt="">سياسية الخصوصية</a>
                <a href="#" class="nav__link"><img src="../../public/images/icon/countru-menu.svg" alt="">اليمن</a>
            </nav>
        </div>
    </div>

    <!-- Logo block -->
    <div class="logo">
        <a href="index.html"><img src="../../public/images/logo.svg" alt="BookStore"></a>
    </div>

    <!-- Search block -->
    <form action="">
        <div class="search">
            <input type="text" class="search__input" placeholder="البحث">
            <button class="search__btn"><img src="../../public/images/icon/search.svg" alt="بحث"></button>
        </div>
    </form>

    <!-- Cart block -->
    <div class="cart">
        <a href="cart.html"><img src="../../public/images/icon/cart-1.svg" class="cart__icon" alt="السلّة"></a>
        <span class="notficatio" id="cart"></span>
    </div>

</header>

<!-- banner -->
<section>
    <div class="banner">

        <!-- images slide -->
        <div class="banner__item">
            <img class="banner__img" src="../../public/images/banner/1.jpg" alt="">
        </div>
        <div class="banner__item">
            <img class="banner__img" src="../../public/images/banner/2.jpg" alt="">
        </div>
        <div class="banner__item">
            <img class="banner__img" src="../../public/images/banner/5.jpg" alt="">
        </div>
        <div class="banner__item">
            <img class="banner__img" src="../../public/images/banner/3.jpg" alt="">
        </div>
        <div class="banner__item">
            <img class="banner__img" src="../../public/images/banner/4.jpg" alt="">
        </div>
        <div class="banner__item">
            <img class="banner__img" src="../../public/images/banner/5.jpg" alt="">
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
                <a><img src="../../public/images/icon/arrow.svg" alt="السابق"></a>
            </div>
            <article class="category__item">
                <img src="../../public/images/icon/debt.svg" class="category__img" alt="دين">
                <a href="category.html" class="category__title category__title--brown">دين</a>
            </article>
            <article class="category__item">
                <img src="../../public/images/icon/history.svg" class="category__img" alt="تاريخ">
                <a href="category.html" class="category__title category__title--orange">تاريخ</a>
            </article>
            <article class="category__item">
                <img src="../../public/images/icon/novels.svg" class="category__img" alt="روايات">
                <a href="category.html" class="category__title category__title--purple">روايات</a>
            </article>
            <article class="category__item">
                <img src="../../public/images/icon/policy.svg" class="category__img" alt="سياسة">
                <a href="category.html" class="category__title category__title--fuchsia">سياسة</a>
            </article>
            <article class="category__item">
                <img src="../../public/images/icon/economie.svg" class="category__img" alt="اقتصاد">
                <a href="category.html" class="category__title category__title--blue">اقتصاد</a>
            </article>
            <article class="category__item">
                <img src="../../public/images/icon/cooking.svg" class="category__img" alt="طبخ">
                <a href="category.html" class="category__title category__title--green">طبخ</a>
            </article>
            <article class="category__item">
                <img src="../../public/images/icon/education.svg" class="category__img" alt="تربية">
                <a href="category.html" class="category__title category__title--pink">تربية</a>
            </article>
            <div class="category__next">
                <a><img src="../../public/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
            </div>
        </div>
    </section>

    <!-- advertisement section -->
    <section>
        <div class="advertisement">
            <article class="advertisement__item">
                <a href="#"><img src="../../public/images/advertisement/1.jpg" class="advertisement__img" alt=""></a>
            </article>
            <article class="advertisement__item">
                <a href="#"><img src="../../public/images/advertisement/2.jpg" class="advertisement__img" alt=""></a>
            </article>
            <article class="advertisement__item">
                <a href="#"><img src="../../public/images/advertisement/3.jpg" class="advertisement__img" alt=""></a>
            </article>
            <article class="advertisement__item">
                <a href="#"><img src="../../public/images/advertisement/4.jpg" class="advertisement__img" alt=""></a>
            </article>
            <article class="advertisement__item advertisement__item--main">
                <a href="#"><img src="../../public/images/advertisement/5.jpg" class="advertisement__img" alt=""></a>
            </article>
        </div>
    </section>

    <!-- قسم العروض -->
    <section>
        <header class="header">
            <h1 class="header__title">العروض الحالية</h1>
            <a href="category.html" class="header__link">عرض الكل</a>
        </header>
        <div class="category category--gap">
            <div class="category__prev">
                <a href="#"><img src="../../public/images/icon/arrow.svg" alt="السابق"></a>
            </div>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
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
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <img src="../../public/images/product/book2.jpg" class="card__img" alt="صورة الكتاب">
                <div class="card__info">
                    <div class="book-type">
                        <a href="details.html"><img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب"></a>
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
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
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book3.jpg" class="card__img" alt="صورة الكتاب">                    </a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
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
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book4.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
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
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
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
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <div class="category__next">
                <a href="#"><img src="../../public/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
            </div>
        </div>
    </section>

    <!-- قسم الكتب الدينيه -->
    <section>
        <header class="header">
            <h1 class="header__title">الكتب الدينية</h1>
            <a href="#" class="header__link">عرض الكل</a>
        </header>
        <div class="category category--gap">
            <div class="category__prev">
                <a href="#"><img src="../../public/images/icon/arrow.svg" alt="السابق"></a>
            </div>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book2.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book3.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book4.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <a href="details.html"><img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب"></a>
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <div class="category__next">
                <a href="#"><img src="../../public/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
            </div>
        </div>
    </section>

    <!-- قسم الكتب التاريخية -->
    <section>
        <header class="header">
            <h1 class="header__title">الكتب التاريخية</h1>
            <a href="#" class="header__link">عرض الكل</a>
        </header>
        <div class="category category--gap">
            <div class="category__prev">
                <a href="#"><img src="../../public/images/icon/arrow.svg" alt="السابق"></a>
            </div>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book2.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book3.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book4.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <a href="details.html"><img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب"></a>
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" >
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <div class="category__next">
                <a href="#"><img src="../../public/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
            </div>
        </div>
    </section>

    <!-- قسم الكتب السياسية -->
    <section>
        <header class="header">
            <h1 class="header__title">السياسة</h1>
            <a href="#" class="header__link">عرض الكل</a>
        </header>
        <div class="category category--gap">
            <div class="category__prev">
                <a href="#"><img src="../../public/images/icon/arrow.svg" alt="السابق"></a>
            </div>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book2.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book3.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book4.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <a href="details.html"><img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب"></a>
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <div class="category__next">
                <a href="#"><img src="../../public/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
            </div>
        </div>
    </section>

    <!-- قسم كتب الاقتصاد -->
    <section>
        <header class="header">
            <h1 class="header__title">الاقتصاد</h1>
            <a href="#" class="header__link">عرض الكل</a>
        </header>
        <div class="category category--gap">
            <div class="category__prev">
                <a href="#"><img src="../../public/images/icon/arrow.svg" alt="السابق"></a>
            </div>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book2.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book3.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book4.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <a href="details.html"><img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب"></a>
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <div class="category__next">
                <a href="#"><img src="../../public/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
            </div>
        </div>
    </section>

    <!-- قسم كتب الطبخ -->
    <section>
        <header class="header">
            <h1 class="header__title">الطبخ</h1>
            <a href="#" class="header__link">عرض الكل</a>
        </header>
        <div class="category category--gap">
            <div class="category__prev">
                <a href="#"><img src="../../public/images/icon/arrow.svg" alt="السابق"></a>
            </div>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book2.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book3.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book4.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <a href="details.html"><img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب"></a>
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <div class="category__next">
                <a href="#"><img src="../../public/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
            </div>
        </div>
    </section>

    <!-- قسم كتب أفضل الروايات الرومانسية -->
    <section>
        <header class="header">
            <h1 class="header__title">أفضل الروايات الرومانسية</h1>
            <a href="#" class="header__link">عرض الكل</a>
        </header>
        <div class="category category--gap">
            <div class="category__prev">
                <a href="#"><img src="../../public/images/icon/arrow.svg" alt="السابق"></a>
            </div>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book2.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book3.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book4.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <a href="details.html"><img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب"></a>
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                <div class="card__info">
                    <div class="book-type">
                        <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <div class="category__next">
                <a href="#"><img src="../../public/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
            </div>
        </div>
    </section>

</main>

<!-- footer -->
<footer>
    <section class="footer">
        <article class="box">
            <h1 class="box__title">انضم إلى نشرتنا البريدية</h1>
            <form action="" class="box__bulletin">
                <div class="search search--flex">
                    <input type="text" class="search__input" placeholder="ادخل بريدك الالكتروني">
                    <img src="../../public/images/icon/lock.svg" alt="اشتراك">
                </div>
                <button class="subscription">اشتراك</button>
            </form>
        </article>
        <article class="box">
            <h1 class="box__title">خدمة العملا</h1>
            <div class="box__item">
                <a href="#" class="box__link">مبيعات الشركات</a>
                <a href="#" class="box__link">الأسئلة المتكررة</a>
                <a href="#" class="box__link"> دليل التسوق و المطبوعات</a>
                <a href="#" class="box__link">مواقع المعارض</a>
                <a href="#" class="box__link">سياسة الضمان</a>
                <a href="#" class="box__link">سياسة الاسترجاع و الاستبدال </a>
                <a href="#" class="box__link">اتصل بنا</a>
                <a href="#" class="box__link box__link--bold">920000089</a>
            </div>
        </article>
        <article class="box">
            <h1 class="box__title">خدمات جرير</h1>
            <div class="box__item">
                <a href="#" class="box__link">خدمة تقسيط المشتريات</a>
                <a href="#" class="box__link">خدمات مابعد البيع</a>
                <a href="#" class="box__link"> خدمات الحماية الشاملة</a>
                <a href="#" class="box__link">حماية اجهزة آبل</a>
                <a href="#" class="box__link">بطاقة خصم جرير</a>
                <a href="#" class="box__link">بطاقة جرير للهدايا </a>
            </div>
        </article>
        <article class="box">
            <h1 class="box__title">روابط سريعة</h1>
            <div class="box__item">
                <a href="#" class="box__link">إصدارات جرير</a>
                <a href="#" class="box__link">قارئ جرير</a>
                <a href="#" class="box__link"> شركاء برنامج المكافئات  </a>
                <a href="#" class="box__link"> خدمات شركات الاتصالات</a>
            </div>
        </article>
        <article class="box">
            <h1 class="box__title">عن جرير</h1>
            <div class="box__item">
                <a href="#" class="box__link">من نحن</a>
                <a href="#" class="box__link">الحوكمة</a>
                <a href="#" class="box__link">علاقات المستثمرين</a>
                <a href="#" class="box__link">الاستدامة</a>
                <a href="#" class="box__link">الأخبار</a>
                <a href="#" class="box__link">فرص العمل</a>
            </div>
        </article>
        <article class="box">
            <h1 class="box__title">تواصل معنا</h1>
            <div class="box__item box__item--row">
                <a href="#"><img src="../../public/images/icon/face.svg" alt="facebook"></a>
                <a href="#"><img src="../../public/images/icon/tw.svg" alt="twiter"></a>
                <a href="#"><img src="../../public/images/icon/youtup.svg" alt="youtup"></a>
                <a href="#"><img src="../../public/images/icon/insta.svg" alt="instgram"></a>
                <a href="#"><img src="../../public/images/icon/link.svg" alt="link"></a>
                <a href="#"><img src="../../public/images/icon/snap.svg" alt="snap"></a>
                <a href="#"><img src="../../public/images/icon/tik.svg" alt="tiktok"></a>
            </div>
        </article>
    </section>
    <article>
        <div class="credit">
            <img src="../../public/images/credit/amer.png" alt="">
            <img src="../../public/images/credit/master.png" alt="">
            <img src="../../public/images/credit/visa.png" alt="">
            <img src="../../public/images/credit/mada.png" alt="">
            <img src="../../public/images/credit/qitaf.png" alt="">
            <img src="../../public/images/credit/1.png" alt="">
        </div>
        <div class="text">
            <p>سياسة الخصوصية | شروط الخدمة</p>
            <p>.جميع الحقوق محفوظة لمكتبة جرير © 2015. س.ت. 1010032264. اونلاين س.ت. 1010654213</p>
        </div>
    </article>
</footer>

<!-- login model -->
<div class="model model__login">
    <div class="model__container">
        <h1 class="model__title">تسجيل الدخول</h1>
        <a id="close__login"><img src="../../public/images/icon/cancel.svg" alt=""></a>
        <div class="model__item">
            <form action="" class="model__form">
                <div class="model__input">
                    <label for="email">البريد الإلكتروني أو رقم الجوال</label>
                    <input type="text" name="email" id="email" >
                </div>
                <div class="model__input">
                    <label for="oassword">كلمة السر</label>
                    <input type="password" name="password" id="password" >
                </div>
                <a href="#" class="model__link">نسيت؟</a>
                <button class="btn btn--red btn--md">تسجيل الدخول</button>
            </form>
            <label class="model__label" for="register">ليس لديك حساب؟</label>
            <button class="btn register">إنشاء حساب جديد</button>
        </div>
    </div>
</div>

<!-- register model -->
<div class="model model--top model__register">
    <div class="model__container">
        <h1 class="model__title">إنشاء حساب </h1>
        <a id="close__register"><img src="../../public/images/icon/cancel.svg" alt=""></a>
        <div class="model__item">
            <form action="" class="model__form">
                <div class="model__phone">
                    <div class="model__input">
                        <label for="phone">رقم الجوال</label>
                        <input type="text" name="phone" id="phone" >
                    </div>
                    <div>
                        <label for="country">رمز البلد</label>
                        <select name="phone" id="country">
                            <option value=""><img src="../../public/images/icon/country.svg">+967</option>
                            <option value="">+970</option>
                        </select>
                    </div>
                </div>
                <p>سوف نرسل لك <b>رمز التحقق عن طريق رسالة نصية</b></p>
                <button class="btn btn--md btn--darkgray btn--no-bottom">إرسال رمز التحقق</button>
                <div class="model__input">
                    <label for="first-name">الاسم الاول</label>
                    <input type="text" name="f-name" id="first-name" >
                </div>
                <div class="model__input">
                    <label for="last-name">اسم العائلة</label>
                    <input type="text" name="last-name" id="last-name" >
                </div>
                <div class="model__input">
                    <label for="email">البريد الإلكتروني</label>
                    <input type="email" name="email" id="email" >
                </div>
                <div class="model__input">
                    <label for="conferm-email">تأكيد البريد الإلكتروني</label>
                    <input type="text" name="conferm-email" id="conferm-email" >
                </div>
                <div class="model__input">
                    <label for="password">كلمة السر</label>
                    <input type="password" name="password" id="password" >
                </div>
                <div class="model__policy">
                    <div>
                        <input type="checkbox">
                        <label for="">أوافق على</label><a href="#">الشروط والأحكام</a>
                    </div>
                    <div>
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox">التسجيل للإنضمام للنشرة البريدية</label>
                    </div>
                </div>
                <button class="btn btn--md btn--darkgray">إنشاء الحساب</button>
            </form>
            <label class="model__label" for="register"> لديك حساب؟ تسجيل الدخول</label>
        </div>
    </div>
</div>

<!-- image model -->
<div class="model" id="model__img">
    <div class="model__container">
        <a id="close__img"><img src="../../public/images/icon/cancel.svg" alt=""></a>
        <!-- <img src="../../public/images/product/book1.jpg" alt=""> -->
        <div class="model__img" id="img-slide">
            <!-- <figure> -->
            <img id="img-main" src="../../public/images/product/book1.jpg" alt="" class="card__img">
            <!-- </figure> -->
            <!-- <figure> -->
            <img id="img-main" src="../../public/images/product/book3.jpg" alt="" class="card__img">
            <!-- </figure> -->
            <!-- <figure> -->
            <img id="img-main" src="../../public/images/product/book2.jpg" alt="" class="card__img">
            <!-- </figure> -->
        </div>
        <a class="prev" id="prev__img">&#10094;</a>
        <a class="next" id="next__img">&#10095;</a>
        <div class="imges">
            <img src="../../public/images/product/book2.jpg" alt="" class="img__item img">
            <img src="../../public/images/product/book1.jpg" alt="" class="img__item img">
            <img src="../../public/images/product/book3.jpg" alt="" class="img__item img">
        </div>
    </div>
</div>

<script src="../../public/js/script.js"></script>
</body>
</html>