/**
 * Contract Furniture Specialists - Main JavaScript
 * Handles hero slider, mobile menu, scroll animations, testimonials, and header behavior.
 */

(function () {
    'use strict';

    // ============================================
    // Header Scroll Behavior
    // ============================================
    const header = document.getElementById('header');
    let lastScroll = 0;

    function handleHeaderScroll() {
        const currentScroll = window.pageYOffset;
        if (currentScroll > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        lastScroll = currentScroll;
    }

    window.addEventListener('scroll', handleHeaderScroll, { passive: true });

    // ============================================
    // Mobile Menu Toggle
    // ============================================
    const menuToggle = document.getElementById('menuToggle');
    const mainNav = document.getElementById('mainNav');

    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function () {
            menuToggle.classList.toggle('active');
            mainNav.classList.toggle('active');
            document.body.style.overflow = mainNav.classList.contains('active') ? 'hidden' : '';
        });

        // Close menu when clicking nav links
        mainNav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                menuToggle.classList.remove('active');
                mainNav.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }

    // ============================================
    // Hero Slider
    // ============================================
    const slides = document.querySelectorAll('.hero-slide');
    const prevBtn = document.querySelector('.hero-prev');
    const nextBtn = document.querySelector('.hero-next');
    let currentSlide = 0;
    let slideInterval;

    function showSlide(index) {
        slides.forEach(function (slide) { slide.classList.remove('active'); });
        currentSlide = (index + slides.length) % slides.length;
        slides[currentSlide].classList.add('active');
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    function startSlider() {
        if (slides.length > 1) {
            slideInterval = setInterval(nextSlide, 5000);
        }
    }

    function resetSliderInterval() {
        clearInterval(slideInterval);
        startSlider();
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function () {
            prevSlide();
            resetSliderInterval();
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            nextSlide();
            resetSliderInterval();
        });
    }

    startSlider();

    // ============================================
    // Smooth Scroll for Anchor Links
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var targetId = this.getAttribute('href');
            if (targetId === '#') return;

            var target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                var headerHeight = header ? header.offsetHeight : 0;
                var targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ============================================
    // Scroll Reveal Animation
    // ============================================
    var revealElements = document.querySelectorAll('.reveal');

    function checkReveal() {
        var windowHeight = window.innerHeight;
        revealElements.forEach(function (el) {
            var elementTop = el.getBoundingClientRect().top;
            var elementVisible = 120;

            if (elementTop < windowHeight - elementVisible) {
                el.classList.add('visible');
            }
        });
    }

    window.addEventListener('scroll', checkReveal, { passive: true });
    checkReveal(); // Run on load

    // ============================================
    // Testimonials Slider
    // ============================================
    var testimonials = document.querySelectorAll('.testimonial-item');
    var dots = document.querySelectorAll('.testimonial-dots button');
    var currentTestimonial = 0;
    var testimonialInterval;

    function showTestimonial(index) {
        testimonials.forEach(function (item) { item.classList.remove('active'); });
        dots.forEach(function (dot) { dot.classList.remove('active'); });

        currentTestimonial = (index + testimonials.length) % testimonials.length;
        testimonials[currentTestimonial].classList.add('active');
        if (dots[currentTestimonial]) {
            dots[currentTestimonial].classList.add('active');
        }
    }

    function nextTestimonial() {
        showTestimonial(currentTestimonial + 1);
    }

    if (testimonials.length > 1) {
        dots.forEach(function (dot) {
            dot.addEventListener('click', function () {
                var index = parseInt(this.getAttribute('data-index'), 10);
                showTestimonial(index);
                clearInterval(testimonialInterval);
                testimonialInterval = setInterval(nextTestimonial, 6000);
            });
        });

        testimonialInterval = setInterval(nextTestimonial, 6000);
    }

    // ============================================
    // Counter Animation for Stats
    // ============================================
    var counters = document.querySelectorAll('.stat-number');
    var countersAnimated = false;

    function animateCounters() {
        if (countersAnimated) return;

        var statsSection = document.querySelector('.hero-stats');
        if (!statsSection) return;

        var sectionTop = statsSection.getBoundingClientRect().top;
        if (sectionTop < window.innerHeight) {
            countersAnimated = true;

            counters.forEach(function (counter) {
                var text = counter.textContent;
                var match = text.match(/(\d[\d,]*)/);
                if (!match) return;

                var target = parseInt(match[1].replace(/,/g, ''), 10);
                var suffix = text.replace(match[0], '');
                var prefix = text.indexOf(match[0]) > 0 ? text.substring(0, text.indexOf(match[0])) : '';
                var duration = 2000;
                var startTime = null;

                function updateCounter(timestamp) {
                    if (!startTime) startTime = timestamp;
                    var progress = Math.min((timestamp - startTime) / duration, 1);
                    var eased = 1 - Math.pow(1 - progress, 3); // ease-out cubic
                    var current = Math.floor(eased * target);

                    if (target >= 1000) {
                        counter.textContent = prefix + current.toLocaleString() + suffix;
                    } else {
                        counter.textContent = prefix + current + suffix;
                    }

                    if (progress < 1) {
                        requestAnimationFrame(updateCounter);
                    }
                }

                requestAnimationFrame(updateCounter);
            });
        }
    }

    window.addEventListener('scroll', animateCounters, { passive: true });
    animateCounters();
})();
