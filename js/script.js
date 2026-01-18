// Navbar scroll effect
window.addEventListener('scroll', () => {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Mobile menu toggle
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('navMenu');

if (hamburger && navMenu) {
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
    });
}

// Close mobile menu when clicking on a link
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
        if (hamburger && navMenu) {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
        }
    });
});

// Testimonial slider
let currentTestimonialIndex = 0;
const testimonialCards = document.querySelectorAll('.testimonial-card');
const dots = document.querySelectorAll('.dot');

function showTestimonial(index) {
    if (testimonialCards.length > 0) {
        testimonialCards.forEach((card, i) => {
            card.classList.remove('active');
            if (dots[i]) dots[i].classList.remove('active');
        });
        
        testimonialCards[index].classList.add('active');
        if (dots[index]) dots[index].classList.add('active');
    }
}

function changeTestimonial(direction) {
    if (testimonialCards.length > 0) {
        currentTestimonialIndex += direction;
        
        if (currentTestimonialIndex >= testimonialCards.length) {
            currentTestimonialIndex = 0;
        } else if (currentTestimonialIndex < 0) {
            currentTestimonialIndex = testimonialCards.length - 1;
        }
        
        showTestimonial(currentTestimonialIndex);
    }
}

function currentTestimonial(index) {
    currentTestimonialIndex = index;
    showTestimonial(currentTestimonialIndex);
}

// Auto-rotate testimonials
if (testimonialCards.length > 0) {
    setInterval(() => changeTestimonial(1), 5000);
}

// FAQ toggle
function toggleFaq(element) {
    element.classList.toggle('active');
}

// Contact form submission
const contactForm = document.getElementById('contactForm');
const formSuccess = document.getElementById('formSuccess');

if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const formData = new FormData(contactForm);
        const data = Object.fromEntries(formData);
        
        console.log('Form submitted:', data);
        
        contactForm.style.display = 'none';
        if (formSuccess) formSuccess.classList.add('show');
        
        setTimeout(() => {
            contactForm.reset();
            contactForm.style.display = 'block';
            if (formSuccess) formSuccess.classList.remove('show');
        }, 5000);
    });
}

// Scroll to top button
const scrollTopBtn = document.getElementById('scrollTop');

window.addEventListener('scroll', () => {
    if (scrollTopBtn) {
        if (window.scrollY > 300) {
            scrollTopBtn.classList.add('show');
        } else {
            scrollTopBtn.classList.remove('show');
        }
    }
});

if (scrollTopBtn) {
    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}