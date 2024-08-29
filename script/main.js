
document.addEventListener("DOMContentLoaded", function() {
    const hamburgerIcon = document.querySelector(".hamburger-icon");
    const navMenu = document.querySelector("#nav-menu");

    function toggleMenu() {
        navMenu.classList.toggle("active");
    }

    hamburgerIcon.addEventListener("click", toggleMenu);

    const accordionButtons = document.querySelectorAll(".accordion-button");

    accordionButtons.forEach(button => {
        button.addEventListener("click", function() {
            const content = this.nextElementSibling;
            content.style.display = content.style.display === "block" ? "none" : "block";
            this.classList.toggle("active");
        });
    });
});

document.querySelectorAll('#nav-menu a').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        const section = this.getAttribute('href').substring(1);
        let backgroundImage;
        switch(section) {
            case 'home':
                backgroundImage = 'url("../Images/background.jpg")';
                break;
            case 'about':
                backgroundImage = 'url("../Images/another-image.jpg")';  // Cambia por la imagen que prefieras
                break;
            case 'menu':
                backgroundImage = 'url("../Images/menu-background.jpg")';  // Cambia por la imagen que prefieras
                break;
            case 'contact':
                backgroundImage = 'url("../Images/contact-background.jpg")';  // Cambia por la imagen que prefieras
                break;
            default:
                backgroundImage = 'url("../Images/background.jpg")';
                break;
        }
        document.body.style.backgroundImage = backgroundImage;
    });
});
