// Selecionar os slides e os botões
const slides = document.querySelectorAll('.filme_slide');
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');

// Função para mostrar o slide
function showSlide(n) {
slides.forEach((slide) => {
    slide.style.display = 'none';
});
slides[n].style.display = 'block';
}

// Função para mostrar o próximo slide
function nextSlide() {
let currentSlide = 0;
slides.forEach((slide, index) => {
    if (slide.style.display === 'block') {
    currentSlide = index;
    }
});
showSlide((currentSlide + 1) % slides.length);
}

// Função para mostrar o slide anterior
function prevSlide() {
let currentSlide = 0;
slides.forEach((slide, index) => {
    if (slide.style.display === 'block') {
        currentSlide = index;
    }
});
showSlide((currentSlide - 1 + slides.length) % slides.length);
}

// Função para iniciar a transição automática
function startAutoplay() {
setInterval(nextSlide, 1500); // Muda o slide a cada 1.5 segundos
}

// Adicionar event listeners aos botões
prevButton.addEventListener('click', prevSlide);
nextButton.addEventListener('click', nextSlide);

// Mostrar o primeiro slide por padrão e iniciar a transição automática
showSlide(0);
startAutoplay();
