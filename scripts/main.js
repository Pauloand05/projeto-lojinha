const button = document.querySelector('.button i');
const nav = document.querySelector('.navbar');
console.log(nav);

button.addEventListener('click', () => {
    nav.classList.toggle('active');
} );

const buttonPage = document.querySelectorAll('.pages > li')

buttonPage.forEach(link => {
    link.addEventListener('click', () => {
        if (window.innerWidth <= 437) {
            nav.classList.remove('active');
        }
    });
});

// Resetar a navbar quando a tela voltar a ser grande
window.addEventListener('resize', () => {
    if (window.innerWidth > 437) {
      nav.classList.remove('active');
      nav.style.left = '0';
    }
  });