document.addEventListener('DOMContentLoaded', init);

function init() {
    setupNavbarToggle();
    setupScrollAnimations();
    setupExploreButtonHover();
    initializeTestimonials();
}

function setupNavbarToggle() {
    const toggler = document.querySelector('.navbar-toggler');
    const navLinks = document.querySelector('.navbar-links');

    toggler.addEventListener('click', () => {
        toggler.classList.toggle('active');
        navLinks.classList.toggle('active');
    });
}

function setupScrollAnimations() {
    const scrollElements = document.querySelectorAll("[data-scroll]");
    const offset = 150;

    const elementInView = (el) => {
        const elementTop = el.getBoundingClientRect().top;
        return elementTop <= (window.innerHeight || document.documentElement.clientHeight) - offset;
    };

    const toggleScrollElement = (element, isVisible) => {
        element.classList.toggle("scrolled", isVisible);
    };

    const handleScrollAnimation = () => {
        scrollElements.forEach((el) => {
            const isVisible = elementInView(el);
            toggleScrollElement(el, isVisible);
        });
    };

    window.addEventListener("scroll", handleScrollAnimation);
    handleScrollAnimation(); // Initialize animations on load
}

function setupExploreButtonHover() {
    const exploreButton = document.querySelector('.explore-btn');
    if (exploreButton) {
        exploreButton.addEventListener('mouseover', () => scaleButton(exploreButton, 1.05));
        exploreButton.addEventListener('mouseout', () => scaleButton(exploreButton, 1));
    }
}

function scaleButton(button, scale) {
    button.style.transform = `scale(${scale})`;
}

function initializeTestimonials() {
    let currentTestimonial = 0;
    const testimonials = document.querySelectorAll('.testimonial-item');
    const totalTestimonials = testimonials.length;

    function showTestimonial(index) {
        testimonials.forEach((item, i) => {
            item.classList.toggle('active', i === index);
        });
    }

    function nextTestimonial() {
        currentTestimonial = (currentTestimonial + 1) % totalTestimonials;
        showTestimonial(currentTestimonial);
    }

    function prevTestimonial() {
        currentTestimonial = (currentTestimonial - 1 + totalTestimonials) % totalTestimonials;
        showTestimonial(currentTestimonial);
    }

    // Initialize the first testimonial
    showTestimonial(currentTestimonial);

    // Attach event listeners to buttons if they exist
    const nextButton = document.querySelector('.carousel-button.next');
    const prevButton = document.querySelector('.carousel-button.prev');

    if (nextButton) {
        nextButton.addEventListener('click', nextTestimonial);
    }

    if (prevButton) {
        prevButton.addEventListener('click', prevTestimonial);
    }
}
