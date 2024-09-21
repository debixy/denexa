import '../js/dashboard';

document.addEventListener('DOMContentLoaded', init);

function init() {
    setupNavbarToggle();         // Handle mobile navbar toggle
    setupScrollAnimations();     // Initialize any scroll animations
    setupExploreButtonHover();   // Handle hover effects for the explore button
    initializeTestimonials();    // Initialize testimonials carousel
    setupDropdownToggle();       // Handle dropdown menus on mobile and desktop
    stickyNavbarOnScroll();      // Add sticky navbar functionality on scroll
}

// Navbar toggle for mobile
function setupNavbarToggle() {
    const toggler = document.querySelector('.navbar-toggler');
    const navLinks = document.querySelector('.navbar-links');

    if (toggler && navLinks) {  // Ensure both exist
        toggler.addEventListener('click', () => {
            toggler.classList.toggle('active');
            navLinks.classList.toggle('active');
        });
    }
}

// Sticky navbar on scroll
function stickyNavbarOnScroll() {
    const navbar = document.querySelector('.navbar');

    if (navbar) {  // Ensure the navbar exists
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('sticky');
            } else {
                navbar.classList.remove('sticky');
            }
        });
    }
}

// Dropdown toggle for mobile and card-like design for desktop
function setupDropdownToggle() {
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

    if (dropdownToggles) {
        dropdownToggles.forEach(dropdownToggle => {
            dropdownToggle.addEventListener('click', (e) => {
                e.preventDefault();
                const dropdownMenu = dropdownToggle.nextElementSibling;
                if (dropdownMenu) {
                    dropdownMenu.classList.toggle('active');
                }
            });
        });
    }
}

// Scroll animations setup (if applicable)
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

// Explore button hover effect
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

// Testimonials carousel
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
