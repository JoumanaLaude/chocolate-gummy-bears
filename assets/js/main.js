document.addEventListener('DOMContentLoaded', () => {
    console.log('ChocoGummyBears theme loaded');

    // =========================
    // Hamburger menu toggle
    // =========================
    const menuToggle = document.querySelector(".menu-toggle");
    const menu = document.getElementById("primary-menu");

    if (menuToggle && menu) {
        menuToggle.addEventListener("click", () => {
            menu.classList.toggle("active");
            menuToggle.classList.toggle("open");
        });
    }

    // =========================
    // Menu link scroll highlight
    // =========================
    const sections = document.querySelectorAll('section');
    const menuLinks = document.querySelectorAll('#primary-menu a');

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 60;
            if (window.pageYOffset >= sectionTop) {
                current = section.getAttribute('id');
            }
        });

        menuLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + current) {
                link.classList.add('active');
            }
        });
    });
});
