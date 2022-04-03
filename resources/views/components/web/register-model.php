<div class="model model--top model__register">
    <div class="model__container">
        <h1 class="model__title">إنشاء حساب </h1>
        <a id="close__register"><img src="images/icon/cancel.svg" alt=""></a>
        <div class="model__item">
            <form action="/register" method="post" class="model__form">
                <input hidden name="role_id" value="<?= \App\Enum\RoleEnum::USER_ROLE ?>">
                <div class="model__input">
                    <label for="first-name">الاسم</label>
                    <input type="text" name="name" id="first-name" >
                </div>
                <div class="model__input">
                    <label for="email">البريد الإلكتروني</label>
                    <input type="email" name="email" id="email" >
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
                <button type="submit" class="btn btn--md btn--darkgray">إنشاء الحساب</button>
            </form>
            <label class="model__label" for="register"> لديك حساب؟ تسجيل الدخول</label>
        </div>
    </div>
</div>