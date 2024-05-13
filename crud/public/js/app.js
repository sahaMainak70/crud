document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.querySelector('.menu-toggle');
  const menu = document.querySelector('.menu');
  const navbar = document.querySelector('.navbar');
    const crudContainer = document.querySelector('.crud-container');

  menuToggle.addEventListener('click', function() {
    menu.classList.toggle('active');
    navbar.classList.toggle('menu-active');
        crudContainer.classList.toggle('menu-active');
  });
});

