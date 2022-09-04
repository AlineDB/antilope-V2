



document.addEventListener('DOMContentLoaded', function (){
    /*Burger menu*/
    const navbar = document.querySelector('.nav__container');
    const burger = document.querySelector('.header__burger');
    const closeNav = document.querySelector('.nav__close');
    closeNav.style.display = 'none';
    burger.addEventListener('click', () => {
        navbar.style.display = 'block';
        burger.style.display = 'none';
        closeNav.style.display = 'initial';
    })
    closeNav.addEventListener('click', () => {
        navbar.style.display = "none";
        burger.style.display = 'initial';
        closeNav.style.display = 'none';
    })
    /*ancre haut de page*/
    window.onscroll = function(ev) {
        document.getElementById("FixedNav").className = (window.pageYOffset > 150) ? "cInvisible" : "cVisible";
    };

})





