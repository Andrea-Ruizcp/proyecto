document.addEventListener("DOMContentLoaded", () => {
    const slider = document.querySelector("#slider-news .slider-content");
    const nextBtn = document.querySelector("#next-btn");
    const prevBtn = document.querySelector("#prev-btn");

    let currentSlide = 0;

    // Configuración de movimiento
    const slideWidth = slider.querySelector(".new").offsetWidth;
    const totalSlides = slider.children.length;

    const moveToSlide = (index) => {
        slider.style.transform = `translateX(-${index * slideWidth}px)`;
    };

    nextBtn.addEventListener("click", () => {
        currentSlide = (currentSlide + 1) % totalSlides;
        moveToSlide(currentSlide);
    });

    prevBtn.addEventListener("click", () => {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        moveToSlide(currentSlide);
    });
});