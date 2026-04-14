
const THEME_STORAGE_KEY = 'theme';
const DARK_THEME_CLASS = 'dark';
const MOBILE_BREAKPOINT = 768;

document.addEventListener('DOMContentLoaded', () => {
    initThemeToggle();

    const closeMobileMenu = initMobileMenu();
    initSmoothScroll(closeMobileMenu);
    initCtaButtons();
    initScrollReveal();
    initLeadFormCounter();
});

function initThemeToggle() {
    const checkbox = document.getElementById('theme-checkbox');

    const applyTheme = (isDark) => {
        document.body.classList.toggle(DARK_THEME_CLASS, isDark);
        localStorage.setItem(THEME_STORAGE_KEY, isDark ? 'dark' : 'light');

        if (checkbox) {
            checkbox.checked = isDark;
        }
    };

    applyTheme(localStorage.getItem(THEME_STORAGE_KEY) === 'dark');

    if (checkbox) {
        checkbox.addEventListener('change', () => {
            applyTheme(checkbox.checked);
        });
    }
}

function initMobileMenu() {
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const mainMenu = document.getElementById('main-menu');

    if (!hamburgerBtn || !mainMenu) {
        return () => {};
    }

    const closeMobileMenu = () => {
        hamburgerBtn.classList.remove('is-active');
        hamburgerBtn.setAttribute('aria-expanded', 'false');
        mainMenu.classList.remove('open');
    };

    const toggleMobileMenu = () => {
        const isOpen = mainMenu.classList.toggle('open');
        hamburgerBtn.classList.toggle('is-active', isOpen);
        hamburgerBtn.setAttribute('aria-expanded', String(isOpen));
    };

    hamburgerBtn.addEventListener('click', toggleMobileMenu);

    window.addEventListener('resize', () => {
        if (window.innerWidth > MOBILE_BREAKPOINT) {
            closeMobileMenu();
        }
    });

    document.addEventListener('click', (event) => {
        if (window.innerWidth > MOBILE_BREAKPOINT || !mainMenu.classList.contains('open')) {
            return;
        }

        const clickedInsideNav = event.target.closest('nav');
        if (!clickedInsideNav) {
            closeMobileMenu();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMobileMenu();
        }
    });

    return closeMobileMenu;
}

function initSmoothScroll(closeMobileMenu) {
    const links = document.querySelectorAll('a[href^="#"]');

    links.forEach((link) => {
        link.addEventListener('click', (event) => {
            const targetSelector = link.getAttribute('href');
            if (!targetSelector || targetSelector === '#') {
                return;
            }

            const target = document.querySelector(targetSelector);
            if (!target) {
                return;
            }

            event.preventDefault();
            target.scrollIntoView({ behavior: 'smooth' });
            closeMobileMenu();
        });
    });
}

function initCtaButtons() {
    const headerButton = document.getElementById('btn-header');
    const footerButton = document.getElementById('btn-final');
    const nameField = document.getElementById('nome');

    const focusNameField = () => {
        if (nameField) {
            nameField.focus();
        }
    };

    if (headerButton) {
        headerButton.addEventListener('click', focusNameField);
    }

    if (footerButton) {
        footerButton.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
            setTimeout(focusNameField, 500);
        });
    }
}

function initScrollReveal() {
    const revealTargets = document.querySelectorAll('.card, .step');
    if (!revealTargets.length) {
        return;
    }

    revealTargets.forEach((element) => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    });

    if (!('IntersectionObserver' in window)) {
        revealTargets.forEach((element) => {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        });
        return;
    }
    
    const observer = new IntersectionObserver((entries, currentObserver) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) {
                return;
            }

            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
            currentObserver.unobserve(entry.target);
        });
    }, { threshold: 0.1 });

    revealTargets.forEach((element) => {
        observer.observe(element);
    });
}

function initLeadFormCounter() {
    const leadForm = document.querySelector('.lead-form');
    const stepIndicator = document.getElementById('step-indicator');

    if (!leadForm || !stepIndicator) {
        return;
    }

    const fields = Array.from(leadForm.querySelectorAll('input[required], textarea[required], select[required]'));
    const totalFields = fields.length;

    const updateFilledCounter = () => {
        const filledFields = fields.filter((field) => field.value.trim() !== '').length;
        stepIndicator.textContent = `Passo ${filledFields} de ${totalFields}`;
    };

    fields.forEach((field) => {
        field.addEventListener('input', updateFilledCounter);
        field.addEventListener('change', updateFilledCounter);
    });

    updateFilledCounter();
}
