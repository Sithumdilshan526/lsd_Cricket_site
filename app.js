
document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.querySelector('.mobile-toggle');
    const links = document.querySelector('.navlinks');

    if (toggle && links) {
        toggle.onclick = function () {
            links.classList.toggle('show');
        };
    }

    document.querySelectorAll('[data-add]').forEach(function (button) {
        button.addEventListener('click', function () {
            button.textContent = 'Added ✓';
            setTimeout(function () {
                button.textContent = 'Add to Cart';
            }, 1200);
        });
    });

    const savedTheme = localStorage.getItem('lsd-theme');
    if (savedTheme === 'dark') {
        document.body.classList.add('dark');
    }

    updateThemeButton();
});

function toggleTheme() {
    document.body.classList.toggle('dark');

    if (document.body.classList.contains('dark')) {
        localStorage.setItem('lsd-theme', 'dark');
    } else {
        localStorage.setItem('lsd-theme', 'light');
    }

    updateThemeButton();
}

function updateThemeButton() {
    const button = document.getElementById('themeToggle');
    if (!button) return;

    if (document.body.classList.contains('dark')) {
        button.textContent = '☀ Light';
        button.setAttribute('aria-label', 'Switch to light mode');
    } else {
        button.textContent = '☾ Dark';
        button.setAttribute('aria-label', 'Switch to dark mode');
    }
}

function qtyChange(id, delta) {
    const el = document.getElementById(id);
    if (!el) return;
    let n = Math.max(1, parseInt(el.value || 1) + delta);
    el.value = n;
}
