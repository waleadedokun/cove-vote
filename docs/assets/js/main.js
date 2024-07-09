const menuBtn = document.querySelector('.btn-menu');
const closeMenuBtn = document.querySelector('.btn-close');
const mobileMenu = document.querySelector('.nav')
console.log(mobileMenu);

menuBtn.addEventListener('click', () => {
  mobileMenu.classList.add('visible');
})

closeMenuBtn.addEventListener('click', () => {
  mobileMenu.classList.remove('visible');
})