const checkbox = document.getElementById("theme-checkbox");

window.onload = () => {
    const theme = localStorage.getItem("theme");

    if (theme === "dark") {
        document.body.classList.add("dark");
        checkbox.checked = true;
    }
}

checkbox.addEventListener("change", () => {
    document.body.classList.toggle("dark", checkbox.checked);
    localStorage.setItem("theme", checkbox.checked ? "dark" : "light");
});

function toggleTheme() {
    const body = document.body;
    body.classList.toggle("dark");

    if (body.classList.contains("dark")) {
        localStorage.setItem("theme", "dark");
    } else {
        localStorage.setItem("theme", "light");
    }
}

document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
        const target = document.querySelector(link.getAttribute('href'));
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth' });
        }
    });
});

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, { threshold: 0.1 });

document.querySelectorAll('.card, .step').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    observer.observe(el);
});

const leadForm = document.querySelector('.lead-form');
const stepIndicator = document.getElementById('step-indicator');

if (leadForm && stepIndicator) {
    const fields = Array.from(leadForm.querySelectorAll('input[required], textarea[required], select[required]'));
    const totalFields = fields.length;

    const updateFilledCounter = () => {
        const filledFields = fields.filter(field => field.value.trim() !== '').length;
        stepIndicator.textContent = `Passo ${filledFields} de ${totalFields}`;
    };

    fields.forEach(field => {
        field.addEventListener('input', updateFilledCounter);
        field.addEventListener('change', updateFilledCounter);
    });

    updateFilledCounter();
}
