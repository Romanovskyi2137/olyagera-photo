// mobile menu toggle
const burgerBtn = document.querySelector('.burger_btn');
const closeBtn = document.querySelector('.close_btn');
const navMenu = document.querySelector('.menu-primary-container');

const toggleMenu = () => {
    navMenu.classList.toggle('mobile_menu_active');
    burgerBtn.classList.toggle('mobile_menu_btn_hidden');
    closeBtn.classList.toggle('mobile_menu_btn_hidden');
}

burgerBtn.addEventListener('click', toggleMenu);
closeBtn.addEventListener('click', toggleMenu);

const scrollDownBtn = document.querySelector('.hero_block__scroll_down_button');
const aboutMeBlock = document.querySelector('#about_me_block');

scrollDownBtn.addEventListener('click', (e) => {
    e.preventDefault();
    aboutMeBlock.scrollIntoView({ behavior: 'smooth' });
});