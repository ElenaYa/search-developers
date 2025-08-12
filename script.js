/**
 * Frevonto - Main JavaScript
 * Handles all interactive functionality including animations, forms, and cookies
 */

'use strict';

// Global app state
const WebTalentApp = {
    initialized: false,
    animations: new Map(),
    cookieConsent: null,
    activeModals: new Set(),
    
    // Initialize the application
    init() {
        if (this.initialized) return;
        
        this.setupEventListeners();
        this.initAnimations();
        this.initCookies();
        this.initForms();
        this.initModals();
        this.initJobFilters();
        this.initPageNavigation();
        this.initSmoothScroll();
        
        this.initialized = true;
    }
};

// ===== EVENT LISTENERS SETUP =====
WebTalentApp.setupEventListeners = function() {
    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => this.init());
    } else {
        // DOM is already ready
        setTimeout(() => this.init(), 0);
    }
    
    // Handle window events
    window.addEventListener('scroll', this.throttle(this.handleScroll.bind(this), 16));
    window.addEventListener('resize', this.throttle(this.handleResize.bind(this), 100));
    window.addEventListener('load', this.handleWindowLoad.bind(this));

    // Mobile menu toggle
    const burger = document.querySelector('.mobile-menu-toggle');
    const nav = document.querySelector('.nav');
    
    if (burger && nav) {
        burger.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            nav.classList.toggle('open');
            burger.classList.toggle('is-open');
            document.body.classList.toggle('no-scroll', nav.classList.contains('open'));
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!burger.contains(e.target) && !nav.contains(e.target) && nav.classList.contains('open')) {
                nav.classList.remove('open');
                burger.classList.remove('is-open');
                document.body.classList.remove('no-scroll');
            }
        });
        
        // Close menu on resize to desktop
        window.addEventListener('resize', () => {
            if (window.innerWidth > 1024 && nav.classList.contains('open')) {
                nav.classList.remove('open');
                burger.classList.remove('is-open');
                document.body.classList.remove('no-scroll');
            }
        });
    }
};

// ===== SCROLL ANIMATIONS =====
WebTalentApp.initAnimations = function() {
    const animatedElements = document.querySelectorAll('[data-animate]');
    
    // Create intersection observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const animationObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const delay = element.dataset.delay || 0;
                
                setTimeout(() => {
                    element.classList.add('animate');
                }, delay);
                
                animationObserver.unobserve(element);
            }
        });
    }, observerOptions);
    
    animatedElements.forEach(element => {
        animationObserver.observe(element);
    });
};

// ===== SCROLL HANDLING =====
WebTalentApp.handleScroll = function() {
    const scrollY = window.scrollY;
    const header = document.querySelector('.header');
    
    // Header background blur effect
    if (header) {
        if (scrollY > 50) {
            header.style.background = 'rgba(17, 19, 25, 0.9)';
            header.style.backdropFilter = 'blur(20px)';
        } else {
            header.style.background = 'rgba(17, 19, 25, 0.7)';
            header.style.backdropFilter = 'blur(20px)';
        }
    }
    
    
    
    // Update active navigation link
    this.updateActiveNavLink();
};

// Update active navigation link based on scroll position
WebTalentApp.updateActiveNavLink = function() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link[href*="#"]');
    
    let currentSection = '';
    const scrollPosition = window.scrollY + 100;
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        
        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
            currentSection = section.id;
        }
    });
    
    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${currentSection}`) {
            link.classList.add('active');
        }
    });
};

// ===== RESIZE HANDLING =====
WebTalentApp.handleResize = function() {
    // Close mobile menu on desktop
    if (window.innerWidth > 768) {
        this.closeMobileMenu();
    }
    
    // Recalculate any layout-dependent animations
    this.recalculateAnimations();
};

WebTalentApp.handleWindowLoad = function() {
    // Hide loading spinner if exists
    const loader = document.querySelector('.loader');
    if (loader) {
        loader.style.opacity = '0';
        setTimeout(() => loader.remove(), 300);
    }
    
    // Start counter animations
    this.startCounterAnimations();
};

// ===== COOKIE CONSENT BANNER =====
WebTalentApp.initCookies = function() {
    this.cookieConsent = this.getCookieConsent();
    
    // Show banner if no consent given
    if (!this.cookieConsent) {
        this.showCookieBanner();
    } else {
        // Apply existing consent
        this.applyCookieConsent(this.cookieConsent);
    }
    
    // Setup cookie banner event listeners
    this.setupCookieEventListeners();
};

WebTalentApp.showCookieBanner = function() {
    const banner = document.getElementById('cookie-banner');
    if (banner) {
        setTimeout(() => {
            banner.classList.add('show');
        }, 1000); // Show after 1 second
    }
};

WebTalentApp.setupCookieEventListeners = function() {
    // Accept all cookies
    const acceptAllBtn = document.querySelector('.cookie-accept-all');
    if (acceptAllBtn) {
        acceptAllBtn.addEventListener('click', () => {
            const consent = {
                necessary: true,
                analytics: true,
                marketing: true,
                functional: true
            };
            this.setCookieConsent(consent);
            this.hideCookieBanner();
        });
    }
    
    // Reject all (except necessary)
    const rejectAllBtn = document.querySelector('.cookie-reject-all');
    if (rejectAllBtn) {
        rejectAllBtn.addEventListener('click', () => {
            const consent = {
                necessary: true,
                analytics: false,
                marketing: false,
                functional: false
            };
            this.setCookieConsent(consent);
            this.hideCookieBanner();
        });
    }
    
    // Cookie settings
    const settingsBtn = document.querySelector('.cookie-settings-btn');
    const manageBtn = document.querySelector('.manage-cookies-btn');
    
    [settingsBtn, manageBtn].forEach(btn => {
        if (btn) {
            btn.addEventListener('click', () => {
                this.showCookieSettings();
            });
        }
    });
    
    // Cookie settings modal
    this.setupCookieSettingsModal();
};

WebTalentApp.setupCookieSettingsModal = function() {
    const modal = document.getElementById('cookie-settings-modal');
    if (!modal) return;
    
    // Load current settings
    const currentConsent = this.getCookieConsent() || {
        necessary: true,
        analytics: false,
        marketing: false,
        functional: false
    };
    
    // Set checkbox states
    Object.keys(currentConsent).forEach(category => {
        const checkbox = modal.querySelector(`[data-category="${category}"]`);
        if (checkbox) {
            checkbox.checked = currentConsent[category];
        }
    });
    
    // Save settings button
    const saveBtn = modal.querySelector('.cookie-save-settings');
    if (saveBtn) {
        saveBtn.addEventListener('click', () => {
            this.saveCookieSettings();
        });
    }
    
    // Accept selected button
    const acceptBtn = modal.querySelector('.cookie-accept-selected');
    if (acceptBtn) {
        acceptBtn.addEventListener('click', () => {
            this.saveCookieSettings();
        });
    }
};

WebTalentApp.showCookieSettings = function() {
    const modal = document.getElementById('cookie-settings-modal');
    if (modal) {
        this.showModal(modal);
    }
};

WebTalentApp.saveCookieSettings = function() {
    const modal = document.getElementById('cookie-settings-modal');
    if (!modal) return;
    
    const consent = {};
    const checkboxes = modal.querySelectorAll('.cookie-toggle');
    
    checkboxes.forEach(checkbox => {
        const category = checkbox.dataset.category;
        consent[category] = checkbox.checked;
    });
    
    // Necessary cookies are always required
    consent.necessary = true;
    
    this.setCookieConsent(consent);
    this.hideModal(modal);
    this.hideCookieBanner();
};

WebTalentApp.getCookieConsent = function() {
    const consent = localStorage.getItem('cookie-consent');
    return consent ? JSON.parse(consent) : null;
};

WebTalentApp.setCookieConsent = function(consent) {
    localStorage.setItem('cookie-consent', JSON.stringify(consent));
    this.cookieConsent = consent;
    this.applyCookieConsent(consent);
};

WebTalentApp.applyCookieConsent = function(consent) {
    // Analytics cookies
    if (consent.analytics) {
        this.loadAnalytics();
    }
    
    // Marketing cookies
    if (consent.marketing) {
        this.loadMarketing();
    }
    
    // Functional cookies
    if (consent.functional) {
        this.loadFunctional();
    }
    
};

WebTalentApp.hideCookieBanner = function() {
    const banner = document.getElementById('cookie-banner');
    if (banner) {
        banner.classList.remove('show');
        setTimeout(() => {
            banner.style.display = 'none';
        }, 300);
    }
};

// Load analytics scripts (placeholder)
WebTalentApp.loadAnalytics = function() {
    // Google Analytics would be loaded here
};

// Load marketing scripts (placeholder)
WebTalentApp.loadMarketing = function() {
    // Marketing pixels would be loaded here
};

// Load functional scripts (placeholder)
WebTalentApp.loadFunctional = function() {
    // Chat widgets, etc. would be loaded here
};

// ===== FORMS HANDLING =====
WebTalentApp.initForms = function() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        // Real-time validation
        this.setupFormValidation(form);
        
        // Form submission
        form.addEventListener('submit', this.handleFormSubmit.bind(this));
        
        // File uploads
        this.setupFileUploads(form);
    });
};

WebTalentApp.setupFormValidation = function(form) {
    const inputs = form.querySelectorAll('input, textarea, select');
    
    inputs.forEach(input => {
        input.addEventListener('blur', () => this.validateField(input));
        input.addEventListener('input', () => this.clearFieldError(input));
    });
};

WebTalentApp.validateField = function(field) {
    const value = field.value.trim();
    let isValid = true;
    let errorMessage = '';
    
    // Required field validation
    if (field.hasAttribute('required') && !value) {
        isValid = false;
        errorMessage = 'Это поле обязательно для заполнения';
    }
    
    // Email validation
    if (field.type === 'email' && value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) {
            isValid = false;
            errorMessage = 'Введите корректный email адрес';
        }
    }
    
    // Phone validation
    if (field.type === 'tel' && value) {
        const phoneRegex = /^\+?[\d\s\-\(\)]{10,}$/;
        if (!phoneRegex.test(value)) {
            isValid = false;
            errorMessage = 'Введите корректный номер телефона';
        }
    }
    
    // URL validation
    if (field.type === 'url' && value) {
        try {
            new URL(value);
        } catch {
            isValid = false;
            errorMessage = 'Введите корректный URL';
        }
    }
    
    this.displayFieldError(field, isValid ? '' : errorMessage);
    return isValid;
};

WebTalentApp.displayFieldError = function(field, message) {
    const errorElement = field.parentElement.querySelector('.error-message');
    
    if (errorElement) {
        errorElement.textContent = message;
        errorElement.style.display = message ? 'block' : 'none';
    }
    
    // Add error styling
    if (message) {
        field.classList.add('error');
    } else {
        field.classList.remove('error');
    }
};

WebTalentApp.clearFieldError = function(field) {
    field.classList.remove('error');
    const errorElement = field.parentElement.querySelector('.error-message');
    if (errorElement) {
        errorElement.textContent = '';
        errorElement.style.display = 'none';
    }
};

WebTalentApp.handleFormSubmit = function(event) {
    event.preventDefault();
    
    const form = event.target;
    const submitBtn = form.querySelector('[type="submit"]');
    
    // Validate all fields
    const inputs = form.querySelectorAll('input[required], textarea[required], select[required]');
    let isFormValid = true;
    
    inputs.forEach(input => {
        if (!this.validateField(input)) {
            isFormValid = false;
        }
    });
    
    if (!isFormValid) {
        this.showFormError(form, 'Пожалуйста, исправьте ошибки в форме');
        return;
    }
    
    // Show loading state
    this.setFormLoading(form, true);
    
    // Simulate form submission (replace with actual API call)
    setTimeout(() => {
        this.setFormLoading(form, false);
        this.showFormSuccess(form);
        
        // Close modal if form is in modal
        const modal = form.closest('.modal');
        if (modal) {
            this.hideModal(modal);
        }
    }, 2000);
};

WebTalentApp.setFormLoading = function(form, isLoading) {
    const submitBtn = form.querySelector('[type="submit"]');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnLoading = submitBtn.querySelector('.btn-loading');
    
    if (isLoading) {
        submitBtn.disabled = true;
        if (btnText) btnText.style.display = 'none';
        if (btnLoading) btnLoading.style.display = 'inline';
        if (!btnText && !btnLoading) {
            submitBtn.textContent = 'Отправляется...';
        }
    } else {
        submitBtn.disabled = false;
        if (btnText) btnText.style.display = 'inline';
        if (btnLoading) btnLoading.style.display = 'none';
    }
};

WebTalentApp.showFormSuccess = function(form) {
    // Show success message
    const successElement = document.getElementById('form-success');
    if (successElement) {
        form.style.display = 'none';
        successElement.style.display = 'block';
    } else {
        alert('Сообщение успешно отправлено!');
        form.reset();
    }
};

WebTalentApp.showFormError = function(form, message) {
    // You could add a general error message display here
    alert(message);
};

WebTalentApp.setupFileUploads = function(form) {
    const fileInputs = form.querySelectorAll('input[type="file"]');
    
    fileInputs.forEach(input => {
        const wrapper = input.closest('.file-upload-wrapper');
        const fileName = wrapper?.querySelector('.file-name');
        
        input.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (fileName) {
                fileName.textContent = file ? file.name : '';
            }
        });
        
        // Drag and drop
        if (wrapper) {
            wrapper.addEventListener('dragover', (e) => {
                e.preventDefault();
                wrapper.classList.add('drag-over');
            });
            
            wrapper.addEventListener('dragleave', () => {
                wrapper.classList.remove('drag-over');
            });
            
            wrapper.addEventListener('drop', (e) => {
                e.preventDefault();
                wrapper.classList.remove('drag-over');
                
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    input.files = files;
                    const event = new Event('change', { bubbles: true });
                    input.dispatchEvent(event);
                }
            });
        }
    });
};

// ===== MODALS =====
WebTalentApp.initModals = function() {
    // Modal triggers
    document.addEventListener('click', (event) => {
        // Job application buttons
        if (event.target.classList.contains('job-apply-btn')) {
            event.preventDefault();
            const jobTitle = event.target.dataset.job;
            this.showJobModal(jobTitle);
        }
        
        // Package order buttons
        if (event.target.classList.contains('package-order-btn')) {
            event.preventDefault();
            const packageType = event.target.dataset.package;
            this.showPackageModal(packageType);
        }
        
        // Modal close buttons
        if (event.target.classList.contains('modal-close') || 
            event.target.classList.contains('modal-cancel')) {
            event.preventDefault();
            const modal = event.target.closest('.modal');
            this.hideModal(modal);
        }
        
        // Click outside modal to close
        if (event.target.classList.contains('modal')) {
            this.hideModal(event.target);
        }
    });
    
    // ESC key to close modals
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && this.activeModals.size > 0) {
            const modals = Array.from(this.activeModals);
            const topModal = modals[modals.length - 1];
            this.hideModal(topModal);
        }
    });
};

WebTalentApp.showModal = function(modal) {
    if (!modal) return;
    
    modal.classList.add('active');
    this.activeModals.add(modal);
    document.body.style.overflow = 'hidden';
    
    // Focus management
    const firstInput = modal.querySelector('input, textarea, select, button');
    if (firstInput) {
        setTimeout(() => firstInput.focus(), 100);
    }
};

WebTalentApp.hideModal = function(modal) {
    if (!modal) return;
    
    modal.classList.remove('active');
    this.activeModals.delete(modal);
    
    if (this.activeModals.size === 0) {
        document.body.style.overflow = '';
    }
};

WebTalentApp.showJobModal = function(jobType) {
    const modal = document.getElementById('job-modal');
    const positionField = modal?.querySelector('#position');
    
    if (modal && positionField) {
        // Set job title in form
        const jobTitles = {
            'designer': 'UI/UX Дизайнер',
            'frontend': 'Frontend разработчик',
            'php': 'PHP разработчик',
            'qa': 'QA инженер',
            'pm': 'Project Manager'
        };
        
        positionField.value = jobTitles[jobType] || jobType;
        this.showModal(modal);
    }
};

WebTalentApp.showPackageModal = function(packageType) {
    const modal = document.getElementById('package-modal');
    const packageField = modal?.querySelector('#package-type');
    
    if (modal && packageField) {
        // Set package type in form
        const packageTitles = {
            'lite': 'Lite - от €450',
            'pro': 'Pro - от €900',
            'custom': 'Custom - от €1500'
        };
        
        packageField.value = packageTitles[packageType] || packageType;
        this.showModal(modal);
    }
};

// ===== JOB FILTERS =====
WebTalentApp.initJobFilters = function() {
    const roleFilter = document.getElementById('role-filter');
    const employmentFilter = document.getElementById('employment-filter');
    const salaryFilter = document.getElementById('salary-filter');
    const resetBtn = document.querySelector('.filter-reset');
    
    [roleFilter, employmentFilter, salaryFilter].forEach(filter => {
        if (filter) {
            filter.addEventListener('change', () => this.applyJobFilters());
        }
    });
    
    if (resetBtn) {
        resetBtn.addEventListener('click', () => this.resetJobFilters());
    }
};

WebTalentApp.applyJobFilters = function() {
    const roleFilter = document.getElementById('role-filter')?.value || 'all';
    const employmentFilter = document.getElementById('employment-filter')?.value || 'all';
    const salaryFilter = document.getElementById('salary-filter')?.value || 'all';
    
    const jobCards = document.querySelectorAll('.job-card');
    
    jobCards.forEach(card => {
        let showCard = true;
        
        // Role filter
        if (roleFilter !== 'all') {
            const cardRole = card.dataset.role;
            if (cardRole !== roleFilter) {
                showCard = false;
            }
        }
        
        // Employment filter
        if (employmentFilter !== 'all' && showCard) {
            const cardEmployment = card.dataset.employment || '';
            if (!cardEmployment.includes(employmentFilter)) {
                showCard = false;
            }
        }
        
        // Salary filter
        if (salaryFilter !== 'all' && showCard) {
            const cardSalary = card.dataset.salary || '';
            if (!cardSalary.includes(salaryFilter)) {
                showCard = false;
            }
        }
        
        // Show/hide card with animation
        if (showCard) {
            card.style.display = 'block';
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 10);
        } else {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            setTimeout(() => {
                card.style.display = 'none';
            }, 300);
        }
    });
};

WebTalentApp.resetJobFilters = function() {
    const filters = ['role-filter', 'employment-filter', 'salary-filter'];
    
    filters.forEach(filterId => {
        const filter = document.getElementById(filterId);
        if (filter) {
            filter.value = 'all';
        }
    });
    
    this.applyJobFilters();
};

// ===== PAGE NAVIGATION =====
WebTalentApp.initPageNavigation = function() {
    const navLinks = document.querySelectorAll('.page-nav-links .nav-link-large');
    const sections = document.querySelectorAll('.jobs-section, .design-section');
    
    navLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            
            const targetSection = link.dataset.section;
            
            // Update active link
            navLinks.forEach(l => l.classList.remove('active'));
            link.classList.add('active');
            
            // Show/hide sections
            sections.forEach(section => {
                if (section.id === targetSection) {
                    section.classList.add('active-section');
                } else {
                    section.classList.remove('active-section');
                }
            });
        });
    });
};

// ===== SMOOTH SCROLL =====
WebTalentApp.initSmoothScroll = function() {
    const scrollLinks = document.querySelectorAll('a[href*="#"]');
    
    scrollLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            const href = link.getAttribute('href');
            if (href.startsWith('#')) {
                event.preventDefault();
                
                const targetId = href.substring(1);
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    const headerHeight = 80;
                    const targetPosition = targetElement.offsetTop - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
};

// ===== COUNTER ANIMATIONS =====
WebTalentApp.startCounterAnimations = function() {
    const counters = document.querySelectorAll('[data-count]');
    
    counters.forEach(counter => {
        const target = parseInt(counter.dataset.count);
        const duration = 2000; // 2 seconds
        const increment = target / (duration / 16); // 60fps
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };
        
        // Start animation when element is visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    updateCounter();
                    observer.unobserve(counter);
                }
            });
        });
        
        observer.observe(counter);
    });
};

// ===== FAQ TOGGLES =====
WebTalentApp.initFAQ = function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const toggle = item.querySelector('.faq-toggle');
        
        if (question && answer) {
            question.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                
                // Close all other FAQ items
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                        const otherAnswer = otherItem.querySelector('.faq-answer');
                        if (otherAnswer) {
                            otherAnswer.style.maxHeight = null;
                        }
                    }
                });
                
                // Toggle current item
                if (isActive) {
                    item.classList.remove('active');
                    answer.style.maxHeight = null;
                } else {
                    item.classList.add('active');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                }
                
                // Rotate toggle icon
                if (toggle) {
                    toggle.style.transform = isActive ? 'rotate(0deg)' : 'rotate(180deg)';
                }
            });
        }
    });
};

// ===== UTILITY FUNCTIONS =====
WebTalentApp.throttle = function(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
};

WebTalentApp.debounce = function(func, wait, immediate) {
    let timeout;
    return function() {
        const context = this;
        const args = arguments;
        const later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};

WebTalentApp.recalculateAnimations = function() {
    // Recalculate any animations that depend on element positions
    // This would be called on window resize
};

WebTalentApp.closeMobileMenu = function() {
    // Close mobile navigation if open
    const mobileMenu = document.querySelector('.mobile-menu');
    if (mobileMenu) {
        mobileMenu.classList.remove('open');
    }
};

// ===== CONTACT FORM SPECIFIC =====
WebTalentApp.resetContactForm = function() {
    const form = document.getElementById('contact-form');
    const successMessage = document.getElementById('form-success');
    
    if (form && successMessage) {
        form.style.display = 'block';
        successMessage.style.display = 'none';
        form.reset();
    }
};

// ===== CHAT FUNCTIONALITY =====
WebTalentApp.openChat = function() {
    // This would integrate with a chat service
    alert('Чат временно недоступен. Пожалуйста, воспользуйтесь формой обратной связи.');
};

// Make openChat available globally for onclick handlers
window.openChat = WebTalentApp.openChat.bind(WebTalentApp);
window.resetContactForm = WebTalentApp.resetContactForm.bind(WebTalentApp);

// Simple mobile menu toggle function
window.toggleMobileMenu = function() {
    const burger = document.querySelector('.mobile-menu-toggle');
    const nav = document.querySelector('.nav');
    
    if (burger && nav) {
        nav.classList.toggle('open');
        burger.classList.toggle('is-open');
        document.body.classList.toggle('no-scroll', nav.classList.contains('open'));
    } else {
    }
};

// ===== INITIALIZATION =====
// Auto-initialize when script loads
WebTalentApp.setupEventListeners();

// Export for potential external use
if (typeof module !== 'undefined' && module.exports) {
    module.exports = WebTalentApp;
} else {
    window.WebTalentApp = WebTalentApp;
}