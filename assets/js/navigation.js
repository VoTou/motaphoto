document.addEventListener('DOMContentLoaded', () => {
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('#nav');
  const links = document.querySelectorAll('nav li');
 
    burger.addEventListener('click', () => {
      nav.classList.toggle('active');
    });

    links.forEach((link) => {
      link.addEventListener('click', () => {
        nav.classList.remove('active');
      });
    });
});

