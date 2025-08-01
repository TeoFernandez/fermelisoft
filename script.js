document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
    // Cerrar el menú hamburguesa al hacer clic en un enlace
    document.querySelector('.nav-menu').classList.remove('active');
  });
});

document.querySelector('.hamburger').addEventListener('click', function () {
  document.querySelector('.nav-menu').classList.toggle('active');
});