<?php use \App\Config\Auth; ?>
<nav class="nav">
    <?php if (empty(Auth::isGuest())){ ?>
        <a href="#" class="nav__link nav__link--100w login">
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" class="icon icon--default list__icon" width="16"  height="16" ><defs><symbol viewBox="0 0 50 50" id="customer" xmlns="http://www.w3.org/2000/svg"><path d="M34.8 33.8c-1.698-.698-3.8-1.6-3.8-2.3V27c2.5-1.898 4-4.898 4-8v-6c0-5.5-4.5-10-10-10S15 7.5 15 13v6c0 3.102 1.5 6.2 4 8v4.5c0 .602-2.102 1.5-3.8 2.3C11.101 35.5 5 38.103 5 45v1h40v-1c0-6.898-6.102-9.5-10.2-11.2z"></path></symbol></defs>
                <use xlink:href="#customer" fill="#42526E"></use>
            </svg>
            ادخل لحسابك أو سجل الآن
        </a>
    <?php } else {?>
        <a href="#" class="nav__link nav__link">
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" class="icon icon--default list__icon" width="16"  height="16" ><defs><symbol viewBox="0 0 50 50" id="customer" xmlns="http://www.w3.org/2000/svg"><path d="M34.8 33.8c-1.698-.698-3.8-1.6-3.8-2.3V27c2.5-1.898 4-4.898 4-8v-6c0-5.5-4.5-10-10-10S15 7.5 15 13v6c0 3.102 1.5 6.2 4 8v4.5c0 .602-2.102 1.5-3.8 2.3C11.101 35.5 5 38.103 5 45v1h40v-1c0-6.898-6.102-9.5-10.2-11.2z"></path></symbol></defs>
                <use xlink:href="#customer" fill="#42526E"></use>
            </svg>
            <?= Auth::name() ;?>
        </a>
        <a href="/logout" class="nav__link">
            تسجيل الخروج
        </a>
    <?php } ?>
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
    <a href="#" class="nav__link"><img src="/images/icon/country.svg" alt="">اليمن</a>
    <a class="nav__link js-language">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" class="icon icon--default list__icon" width="16"  height="16" ><defs><symbol viewBox="0 0 48 48" id="language" xmlns="http://www.w3.org/2000/svg"><path d="M3 0C1.348 0 0 1.348 0 3v26c0 1.652 1.348 3 3 3h11.594l2.469-2.469 1.406 1.407L16 33.406V45c0 1.652 1.348 3 3 3h26c1.652 0 3-1.348 3-3V19c0-1.652-1.348-3-3-3H33.406L31 18.406 29.594 17 32 14.594V3c0-1.652-1.348-3-3-3H3zm39.281.281L36.594 6l5.687 5.719 1.438-1.438L39.406 6l4.313-4.281L42.28.28zM28.188 18.406l1.406 1.407-1.375 1.406-1.438-1.438 1.407-1.375zm-2.782 2.782l1.407 1.406L25.405 24 24 22.594l1.406-1.407zM8.374 10.925c0-1.58.548-2.852 1.638-3.784.856-.744 1.882-1.126 3.068-1.142 1.607 0 2.893.647 3.825 1.926l.067.206v2.55l-.635-.896c-.832-1.171-1.864-1.744-3.125-1.744-.814 0-1.453.265-1.942.8-.495.54-.744 1.244-.744 2.128 0 1.04.304 1.853.912 2.461.577.59 1.35.885 2.346.885h4.244v2.064h-4.2c-1.333 0-2.318.355-2.98 1.057-.495.52-.74 1.16-.74 1.937 0 .955.345 1.724 1.044 2.33.666.573 1.546.862 2.654.862h.044c1.602 0 2.871-.354 3.818-1.053l.558-.413v2.228l-.163.104c-1.26.798-2.681 1.198-4.257 1.198-1.853 0-3.34-.587-4.436-1.76A4.924 4.924 0 018 19.395c0-.975.253-1.862.76-2.653a4.681 4.681 0 011.52-1.492c-1.27-.944-1.906-2.397-1.906-4.325zm22.438 12.98h2.375L39.907 41h-2.5L35.5 35.812h-7.188L26.407 41h-2.312l6.718-17.094zM22.595 24L24 25.406l-1.375 1.407-1.438-1.438L22.595 24zm9.312 1.906l-2.906 8h5.813l-2.907-8zm-12.093.875l1.406 1.407-1.407 1.406-1.406-1.407 1.407-1.406zm-15.094 9.5L3.28 37.72 7.594 42 3.28 46.281l1.44 1.439L10.406 42 4.72 36.281z"></path></symbol></defs>
            <use xlink:href="#language" fill="#42526E"></use>
        </svg>
        <span>English</span>
    </a>
</nav>

