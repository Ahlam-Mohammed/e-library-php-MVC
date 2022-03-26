//########################## Start countDown Script ##########################
const countDown = ( date , id) => 
{
    let upperDate = new Date(date).getTime();

    let x = setInterval(function() 
    {
        let currentDate = new Date().getTime(); // Get today's date and time

        // Find the distance between upper date and current date
        let distance    = upperDate - currentDate;

        // Time calculations for days, hours, minutes and seconds
        let days    = Math.floor(distance / (1000 * 60 * 60 * 24));
        // let hours   = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        // let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        // let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element
        let element = document.getElementById(id);

        // element.querySelector('.secound').innerHTML = seconds;
        // element.querySelector('.minut').innerHTML   = minutes;
        // element.querySelector('.hour').innerHTML    = hours;
        element.querySelector('.day').innerHTML     = "مُتبقي على العرض" +days+ " "+"يوم";

        // If the count down is finished
        if (distance < 0) 
        {
            clearInterval(x);

            // element.querySelector('.secound').style.display = "none";
            // element.querySelector('.minut').style.display   = "none";
            // element.querySelector('.hour').style.display    = "none";
            element.querySelector('.day').style.display     = "none";
            element.querySelector('.expired').innerHTML     = "انتهى العرض ...";
        }


    }, 1000);
}

const offerDate = () => {
    countDown("Jan 29, 2022 21:47:55", "product-1");
    countDown("Jan 20, 2022 21:47:55", "product-2");
    countDown("Jan 24, 2022 21:47:55", "product-3");
    countDown("Jan 30, 2022 21:47:55", "product-4");
    countDown("Jan 31, 2022 21:47:55", "product-5");
}

// window.addEventListener("load", offerDate);

//########################## Start srollY window Script ########################## 
let   scrollpos     = window.scrollY;
const header        = document.querySelector(".top-header");
const header_height = header.offsetHeight;

const add_class_on_scroll    = () => header.classList.add("top-header--shadow");
const remove_class_on_scroll = () => header.classList.remove("top-header--shadow");

window.addEventListener('scroll', function() 
{ 
    scrollpos = window.scrollY;

    if (scrollpos >= header_height) 
    { 
        add_class_on_scroll();
    }
    else 
    { 
        remove_class_on_scroll();
    }
})

//########################## Start searchBook Script ##########################
const searchBook = () => 
{
    let inputValue     = document.getElementById('search').value.toUpperCase();
    let booksContainer = document.getElementById('books');
    let bookCards      = booksContainer.getElementsByClassName('card');
    let book;

    for (let i = 0; i<bookCards.length; i++ )
    {
        book = bookCards[i].querySelector('.book-title');

        if (book.innerText.toUpperCase().indexOf(inputValue) > -1)
        {
            bookCards[i].style.display = "";
        }
        else
        {
            bookCards[i].style.display = "none";
        }
    }


}

//########################## Start addToCart Script ##########################
const cartCounter   = document.getElementById('cart');
const carts         = document.querySelectorAll('.js-cart');

let storeCart = localStorage.getItem('cart_counter');
let counter   = 0;

const addToCart = () =>
{
    storeCart = storeCart === null ? 0 : storeCart;
    counter   = storeCart;

    counter !== 0 ? cartCounter.style.display = "block" : cartCounter.style.display = "none";

    cartCounter.innerText = counter > 9 ? "9+" : counter;

    carts.forEach (element => 
        {
            element.addEventListener('click' , (e) => 
            {
                counter !== 0 ? cartCounter.style.display = "block" : cartCounter.style.display = "none";
                counter++;
                cartCounter.innerText = counter > 9 ? "9+" : counter;
                localStorage.setItem('cart_counter', counter)
            })
    });
};

window.addEventListener("load", addToCart);

//########################## Start changeLanguage Script ##########################
const changeLang  = document.querySelectorAll('.js-language');
const htmlElement = document.querySelector('html');
const headElement = document.querySelector('head');
const enLink      = document.createElement('link');

let storeLang     = localStorage.getItem('lang');

enLink.setAttribute('rel',"stylesheet");
enLink.setAttribute('href',"assets/css/en.css")

changeLang.forEach( element =>
    {
        element.addEventListener('click', ()=>
        {
            // storeLang = storeLang === null ? "" : storeLang;

            if ( htmlElement.dir === 'rtl' )
            {
                htmlElement.dir = 'ltr';
                // storeLang.setItem('ltr');
                element.querySelector('span').innerHTML = "Arabic";
                headElement.append(enLink);
            }
            else
            {
                htmlElement.dir = 'rtl';
                // storeLang.setItem('rtl');
                element.querySelector('span').innerHTML = "English";
                headElement.removeChild(enLink)
            }
        });
    });

//########################## Start steper Script ##########################
let   step = 0;

const stepElement = document.querySelectorAll('.step__item');
const stepContent = document.querySelectorAll('.js-step');

const steper = () => 
{
    stepContent.forEach( element =>
        {
            element.classList.remove('is-active');
        });
    stepContent[step].classList.add('is-active');
}

document
    .querySelectorAll('.js-next-btn')
    .forEach( element => 
        {
            element.addEventListener( 'click', () =>
            {
                step = step >= stepElement.length - 1 ? step : ++step;
                stepElement[step].classList.add('is-active');
                steper();
            })
        });

document
        .querySelectorAll('.js-previews-btn')
        .forEach( element =>
            {
                element.addEventListener( 'click', ()=>
                {
                    if (step !== 0 || step < 0)
                    {
                        stepElement[step].classList.remove('is-active');
                    }
                    step = step <= 0 ? 0 : --step;
                    steper();
                })
            });

//########################## Start Banner Script ##########################
var slideIndex = 1;
banner(slideIndex);

function plus(slide) 
{
    banner(slideIndex += slide);
}

function current(slide) 
{
    banner(slideIndex = slide);
}

function banner(slide) 
{
    var i;
    
    var slides = document.getElementsByClassName("banner__item");
    var dots = document.getElementsByClassName("unit__item");

    if (slide > slides.length) 
    {
        slideIndex = 1;
    } 

    if (slide < 1) 
    {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) 
    {
        slides[i].style.display = "none";  
    }

    for (i = 0; i < dots.length; i++) 
    {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";

    // setTimeout(banner,1000,slide)

}
// window.addEventListener("load", banner(slideIndex));

//########################## Start Menu Script ##########################
function toggleMobileMenu(menu) 
{
    menu.classList.toggle('open');
}

//########################## Start Model Script ##########################
const login           = document.querySelectorAll(".login");
const register        = document.querySelectorAll(".register");
const close__login    = document.querySelector("#close__login");
const close__register = document.querySelector("#close__register");

const model__login    = document.querySelector(".model__login");
const model__register = document.querySelector(".model__register");

login.forEach( element => {
    element.addEventListener('click', ()=>{
        model__login.style.display = "block";
    })
});

register.forEach( element => {
    element.addEventListener( 'click', ()=> {
        model__login.style.display    = "none";
        model__register.style.display = "block";
    })
});

close__register.addEventListener('click' , ()=>{
    model__register.style.display = "none";
})

close__login.addEventListener('click' , ()=>{
    model__login.style.display    = "none";
})



// image slide script
const imgMain = document.getElementById("img-main");
const imges   = document.getElementsByClassName("img");

for (let i=0 ; i<imges.length ; i++)
{
    imges[i].addEventListener('click' , (e)=>
    {
        e.target;
        imgMain.setAttribute('src' , e.target.src);
    })

    if (imgMain.src === imges[i].src)
    {
        imges[i].classList.add('img__item--center')
    }
}

const imgModel = document.getElementById("model__img");
const imgSlide = document.getElementById("img-slide");

const prevImg  = document.getElementById("prev__img");
const nextImg  = document.getElementById("next__img");

imgMain.addEventListener('click' , ()=>{
    imgModel.style.display = "block";
});

prevImg.addEventListener('click' , ()=>
{
    if (imgSlide.style.justifyContent === "center")
    {
        imgSlide.style.justifyContent = "end";
    }
    else if (imgSlide.style.justifyContent === "end")
    {
        imgSlide.style.justifyContent = "start";
    }
    else
    {
        imgSlide.style.justifyContent = "center";
    }
    
})

nextImg.addEventListener('click' , ()=>
{
    if (imgSlide.style.justifyContent === "end")
    {
        imgSlide.style.justifyContent = "start";
    }
    else if (imgSlide.style.justifyContent === "start")
    {
        imgSlide.style.justifyContent = "center";
    }
    else
    {
        imgSlide.style.justifyContent = "end";
    }
    
})

const closeImg = document.getElementById("close__img");

closeImg.addEventListener('click' , ()=>{
    imgModel.style.display    = "none";
})
