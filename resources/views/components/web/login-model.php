<div class="model model__login">
    <div class="model__container">
        <h1 class="model__title">تسجيل الدخول</h1>
        <a id="close__login"><img src="/images/icon/cancel.svg" alt=""></a>
        <div class="model__item">
            <form method="post" action="/login" class="model__form">
                <div class="model__input">
                    <label for="email">البريد الإلكتروني أو رقم الجوال</label>
                    <input type="text" name="email" id="email" >
                </div>
                <div class="model__input">
                    <label for="oassword">كلمة السر</label>
                    <input type="password" name="password" id="password" >
                </div>
                <a href="#" class="model__link">نسيت؟</a>
                <button type="submit" class="btn btn--red btn--md">تسجيل الدخول</button>
            </form>
            <label class="model__label" for="register">ليس لديك حساب؟</label>
            <button class="btn register">إنشاء حساب جديد</button>
        </div>
    </div>
</div>