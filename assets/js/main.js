document.addEventListener('DOMContentLoaded', () => {
    console.log('ChocoGummyBears theme loaded');

    const sections = document.querySelectorAll('section');
    const menuLinks = document.querySelectorAll('#primary-menu a');

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 60;
            if (pageYOffset >= sectionTop) {
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
