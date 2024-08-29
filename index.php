<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabor Urbano CR</title>
    <link rel="stylesheet" href="Styles/style.css">
    <script src="script/main.js"></script>
</head>
<body>
    <!-- Menú de navegación actualizado -->
    <nav class="navbar">
    <div class="logo"><img src="Images/icono.jpg" alt="Sabor Urbano CR Logo"></div>
    <div class="hamburger-icon" onclick="toggleMenu()">&#9776;</div>
    <ul id="nav-menu" class="menu">
        <li><a href="#home">Inicio</a></li>
        <li><a href="#menu">Menú</a></li>
        <li><a href="https://wa.me/+50663777424" target="_blank">Contacto</a></li>
    </ul>
</nav>


    <!-- Main Content -->
    <div class="wrap">
        <section id="home">
            <h1>Bienvenidos a Sabor Urbano CR</h1>
            <p>Disfruta de la mejor comida rápida en un ambiente moderno y acogedor.</p>
        </section>

        <!-- Accordion Section -->
        <section id="about">
            <h2>Sobre Nosotros</h2>
            <div class="accordion">
                <div class="accordion-item">
                    <button class="accordion-button">Nuestra Historia</button>
                    <div class="accordion-content">
                        <p>Las mejores comidas rapidas del país desde el 2020.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button">Nuestros Valores</button>
                    <div class="accordion-content">
                        <p>Comprometidos con la calidad y el servicio al cliente.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cards Section -->
        <section id="menu"
            <h2>Menú</h2>
            <div class="cards">
                <div class="card">
                    <img src="Images/hamburguesa.jpg" alt="Hamburguesa">
                    <h3>Hamburguesas</h3>
                    <p>Las mejores hamburgesas del país.</p>
                </div>
                <div class="card">
                    <img src="Images/burrito.jpg" alt="Papas Fritas">
                    <h3>Burritos</h3>
                    <p>Disfruta de deliciosos burritos con papas fritas.</p>
                </div>
                <div class="card">
                    <img src="Images/especialidad.jpg" alt="Papas Fritas">
                    <h3>Tacos de birria</h3>
                    <p>Especialidades de la casa como tacos de birria.</p>
                </div>
                <div class="card">
                    <img src="Images/surtida.jpg" alt="Papas Fritas">
                    <h3>Surtidas</h3>
                    <p>Surtidas variadas para el deleite familiar.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Sabor Urbano CR. Todos los derechos reservados.</p>
    </footer>

    <div class="social-icons">
    <a href="https://www.facebook.com/profile.php?id=100064837336615" target="_blank">
        <img src="Images/facebook.webp" alt="Facebook" class="social-icon">
    </a>
    <a href="https://www.instagram.com/saborurbanocr/" target="_blank">
        <img src="Images/instagram.png" alt="Instagram" class="social-icon">
    </a>
    <a href="https://www.tiktok.com/@saborurbanocr" target="_blank">
        <img src="Images/tiktok.png" alt="TikTok" class="social-icon">
    </a>
    <a href="https://wa.me/50663777424" target="_blank">
        <img src="Images/whatsapp.jpeg" alt="WhatsApp" class="social-icon">
    </a>
</div>

<style>
    .social-icons {
        position: relative; /* Cambio a 'relative' para que se alinee al final del contenido */
        display: flex;
        justify-content: flex-end; /* Alineación a la derecha */
        gap: 10px;
        padding: 10px; /* Espacio desde el borde del footer */
    }

    .social-icon {
        width: 40px;
        height: 40px;
    }

    footer {
        position: relative; /* El footer ahora contiene los íconos */
    }
</style>


</body>
</html>