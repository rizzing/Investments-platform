document.querySelectorAll('.dropdown-menu.dropdown-select .dropdown-item').forEach(item => {
    item.addEventListener('click', function () {
        document.getElementById('tabDropdownBtn').textContent = this.textContent;
    });
});

// Отключаем автоматическое закрытие родительского dropdown при клике во вложенный
document.querySelectorAll('.dropdown-menu .dropdown-toggle').forEach(function(element){
    element.addEventListener('click', function (e) {
        e.stopPropagation(); // предотвратить всплытие события
        const subMenu = this.nextElementSibling;

        if (subMenu && subMenu.classList.contains('dropdown-menu')) {
            // Закрываем другие открытые внутренние меню
            const opened = this.closest('.dropdown-menu').querySelector('.dropdown-menu.show');
            if (opened && opened !== subMenu) {
                opened.classList.remove('show');
            }
            // Переключаем текущее меню
            subMenu.classList.toggle('show');
        }
    });
});

// Закрываем внутренние меню при клике вне dropdown
document.addEventListener('click', function (e) {
    document.querySelectorAll('.dropdown-menu .dropdown-menu.show').forEach(subMenu => {
        if (!subMenu.contains(e.target)) {
            subMenu.classList.remove('show');
        }
    });
});

if (window.innerWidth > 1350) {
    document.querySelectorAll('.dropdown-hover').forEach(dropdown => {
        // Пропускаем, если элемент находится внутри .header_navbar__vertical
        if (dropdown.closest('.header_navbar__vertical')) return;

        let timeout;

        dropdown.addEventListener('mouseenter', () => {
            clearTimeout(timeout);
            const toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
            const instance = bootstrap.Dropdown.getOrCreateInstance(toggle);
            instance.show();
        });

        dropdown.addEventListener('mouseleave', () => {
            timeout = setTimeout(() => {
                const toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
                const instance = bootstrap.Dropdown.getOrCreateInstance(toggle);
                instance.hide();
            }, 100);
        });
    });
}

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

function setCookie(name, value, days = 365) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    document.cookie = `${name}=${value}; expires=${date.toUTCString()}; path=/`;
}

/**** Dark / Light ****/
const buttonDarkMode = document.getElementById('theme-toggle');
const body = document.body;

if (buttonDarkMode) {
    buttonDarkMode.addEventListener('click', () => {
        const isDark = body.classList.toggle('dark');
        const newTheme = isDark ? 'dark' : 'light';
        setCookie('theme', newTheme);
    });
}

//menuType
const buttonHeaderToggle = document.getElementById('toggle_header');
if (buttonHeaderToggle) {
    buttonHeaderToggle.addEventListener('click', () => {
        const isHidden = body.classList.toggle('menu_hidden');
        const menuType = isHidden ? 'menu_hidden' : 'menu_visible';
        setCookie('menuType', menuType);
    });
}


// Инициализация всех тултипов на странице
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
const tooltipList = [...tooltipTriggerList].map(el => new bootstrap.Tooltip(el));

function copyToClipboard(el) {
    const input = el.closest('.fp__group_copy').querySelector('input');
    if (!input) return;

    // Копируем текст
    navigator.clipboard.writeText(input.value).then(() => {
        // Анимация подтверждения
        el.classList.add('copied');
        setTimeout(() => el.classList.remove('copied'), 1200);
    }).catch(err => {
        console.error('Ошибка копирования:', err);
    });
}

function showModal(id){
    console.log('12')
    let myModal = new bootstrap.Modal(document.getElementById(id));
    myModal.show();
}

function hideModal(id){
    let modalEl = document.getElementById(id);
    let modal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
    modal.hide();
}

function openProfileTab(id) {
    const tabTriggerEl = document.querySelector(`#profileTab button[data-bs-target="#${id}"]`);
    if (tabTriggerEl) {
        const tab = new bootstrap.Tab(tabTriggerEl);
        tab.show();
    } else {
        console.warn(`Вкладка с id="${id}" не найдена`);
    }
}

function openPlanTab(id, plan_id) {
    const tabTriggerEl = document.querySelector(`#${id} button[data-bs-target="#${plan_id}"]`);
    if (tabTriggerEl) {
        const tab = new bootstrap.Tab(tabTriggerEl);
        tab.show();
    } else {
        console.warn(`Вкладка с id="${id}" не найдена`);
    }
}