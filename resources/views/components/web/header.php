<header class="top-header">
    <!-- navigation mobile -->
    <div id="nav" onclick="toggleMobileMenu(this)">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="nav__title">القائمة</div>
        <div class="menu">
            <div class="menu__item">
                <div>
                    <img src="/images/icon/cancel.svg" style="width: 80%;">
                </div>
                <div class="logo-menu">
                    <img src="/images/logo.svg" alt="BookStore">
                </div>
                <div class="lang-menu">
                    <a href="#" class="nav__link js-language"><span>English</span></a><img src="/images/icon/language.svg" alt="">
                </div>
            </div>
            <nav class="nav-mobile">
                <a class="nav__link login"><img src="/images/icon/user-menu.svg" alt="">ادخل لحسابك أو سجل الآن</a>
                <a href="#" class="nav__link"><img src="/images/icon/home-menu.svg" alt="">الرئيسية</a>
                <a href="#" class="nav__link"><img src="/images/icon/cart-menu.svg" alt="">السلة</a>
                <a href="#" class="nav__link"><img src="/images/icon/abou-menu.svg" alt="">من نحن</a>
                <a href="#" class="nav__link"><img src="/images/icon/contact-menu.svg" alt="">اتصل بنا</a>
                <a href="#" class="nav__link"><img src="/images/icon/help-menu.svg" alt="">المساعدة</a>
                <a href="#" class="nav__link nav__link--100w"><img src="/images/icon/policy-menu.svg" alt="">سياسية الخصوصية</a>
                <a href="#" class="nav__link"><img src="/images/icon/countru-menu.svg" alt="">اليمن</a>
            </nav>
        </div>
    </div>

    <!-- Logo block -->
    <div class="logo">
        <a href="/"><img src="/images/logo.svg" alt="BookStore"></a>
    </div>

    <!-- Search block -->
    <form action="">
        <div class="search">
            <input type="text" class="search__input" placeholder="البحث">
            <button class="search__btn"><img src="/images/icon/search.svg" alt="بحث"></button>
        </div>
    </form>

    <!-- Cart block -->
    <div class="cart">
        <a href="/cart"><img src="/images/icon/cart-1.svg" class="cart__icon" alt="السلّة"></a>
        <span class="notficatio" id="cart"></span>
    </div>

</header>