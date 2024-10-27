@php
$imagePath = public_path('leaves.png');
@endphp

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boda de Cristina y Jonathan</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        /* Estilos generales */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f8fff1;
            color: #4f4f4f;
        }
        nav {
            background-color: #fff;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        nav a {
            color: #4f4f4f;
            text-decoration: none;
            font-size: 1.2rem;
            margin: 0 15px;
        }
        nav a:hover {
            color: #dd8373;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 200px 10px;
            background-image: url('https://i.imgur.com/kfac8eE.png'); /* Reemplaza esta ruta por la ruta donde guardes la imagen */
            background-size: cover;
            background-position: center;
            color: #5e4f47;
        }
        .hero h1 {
            font-family: 'Great Vibes', cursive;
            font-size: 5rem;
            margin: -1rem;
        }
        .hero h2 {
            font-family: 'Great Vibes', cursive;
        }

        /* Carrusel de imágenes */
        .carousel {
            display: none;
            justify-content: center;
            overflow: hidden;
            margin: 30px auto;
            width: 80%;
            max-width: 1000px;
        }
        .carousel img {
            width: 100%;
            border-radius: 10px;
        }
        .carousel-container {
            width: 100%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            transition: all 0.5s ease-in-out;
        }

        /* Frases con estilo */
        .quote {
            font-family: 'Great Vibes', cursive;
            font-size: 2rem;
            text-align: center;
            margin: 50px 20px;
            color: #70655c;
        }

        /* Estilo de la cuenta regresiva */
        .countdown {
            text-align: center;
            font-size: 1.5rem;
            margin: 50px 0;
            color: #4f4f4f;
        }

        .countdown h2 {
            font-family: 'Great Vibes', cursive;
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: #dd8373;
            padding: 1rem;
        }

        .principal-text{
            text-align: center;
            font-size: 1.5rem;
            margin: 50px 0;
            color: #4f4f4f;
        }

        .principal-text-header h1 {
            font-family: 'Great Vibes', cursive;
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #4e6e33;
            padding: 1rem;
        }


        .countdown p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        /* Contenedor del contador */
        .countdown-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin: 20px 0;
        }

        .countdown-item {
            text-align: center;
        }

        .countdown-item span {
            display: block;
            font-size: 3rem;
            font-weight: bold;
            color: #5e4f47;
        }

        .countdown-item label {
            font-size: 1rem;
            color: #dd8373;
        }

        /* Google Maps */
        .maps {
            text-align: center;
            margin: 30px auto;
            width: 80%;
            height: 400px;
        }

        /* Formulario de canciones */
        .playlist {
            text-align: center;
            margin: 50px 20px;
        }

        .event{
            padding: 1.5rem;
        }

        .event-logo {
            display: flex;
            justify-content: center;
            margin: 20px auto;
        }
        .event-logo img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px); /* Comienza desde abajo */
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
            z-index: -30;
        }

        /* Cuando se hace visible */
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0); /* Se posiciona en su lugar original */
            z-index: -30;
        }

        .playlist h2 {
            font-family: 'Great Vibes', cursive;
            font-size: 2rem;
            color: #5e4f47;
            margin-bottom: 20px;
        }
        .playlist form {
            margin: 0 auto;
            width: 50%;
        }
        .playlist input[type="text"] {
            padding: 10px;
            width: 80%;
            margin-right: 10px;
            border: 2px solid #dd8373;
            border-radius: 5px;
        }
        .playlist button {
            background-color: #dd8373;
            color: #fff;
            padding: 10px 20px;
            margin: 1rem;
            font-size: 1.2rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .playlist button:hover {
            background-color: #c66b5c;
        }

        /* Sección de colaboración */
        .collaborate {
            text-align: center;
            font-size: 1.3rem;
            margin: -60px 30px;
            color: #5e4f47;
            padding: 2rem;
        }
        .collaborate button{
            background-color: #dd8373;
            color: #fff;
            padding: 20px 20px;
            font-size: 1.2rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .collaborate a{
            text-decoration: none;
            color: #fff;

        }
        .collaborate button:hover {
            background-color: #c66b5c;
        }

        .event-details {
            text-align: center;
            margin: 3rem;
        }

        .event-icon {
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
            border-radius: 50%;
            background-color: #dd8373; /* Fondo sutil */
        }

        .map-button {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            color: #fff;
            background-color: #c66b5c;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .timeline {
            position: relative;
            margin: 2rem auto;
            max-width: 600px;
            padding: 2rem;
            z-index: -30;
        }

        .timeline::after {
            content: "";
            position: absolute;
            top: 0;
            left: 30px; /* Ajusta este valor según sea necesario */
            width: 2px; /* Ancho de la línea */
            height: 100%; /* Altura de la línea */
            background-color: #dd8373; /* Color de la línea */
            z-index: -30;
        }

        .timeline-item {
            position: relative;
            padding-left: 60px;
            margin-bottom: 40px;
            z-index: -30;
        }

        .timeline-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: 20px;
            width: 20px;
            height: 20px;
            background-color: #dd8373;
            border-radius: 50%;
            z-index: -30;
        }

        .timeline-item .time {
            font-size: 1.2rem;
            color: #5e4f47;
            z-index: -30;
        }

        /* Adaptación para dispositivos móviles */
        @media (max-width: 768px) {
            /* Hero Section en pantallas móviles */
            .hero {
                padding: 100px 10px; /* Reduce el padding para móviles */
                background-size: cover;
                background-position: center;
            }

            .hero h1 {
                font-size: 3rem; /* Tamaño de texto más pequeño en móviles */
                margin: -0.5rem;
            }

            .hero h4 {
                font-size: 1.5rem; /* Ajuste para subtítulo */
            }

            .hero h2 {
                font-size: 2rem; /* Ajuste para '&' */
            }

            /* Ajusta la navegación para que sea más amigable en móvil */
            nav a {
                font-size: 1rem;
                margin: 0 10px;
            }
        }
    </style>
</head>
<body>

<!-- NavBar -->
<nav>
    <a href="/home">Inicio</a>
    <a href="/playlist">Playlist</a>
    <a href="/confirmar-asistencia">Confirmar asistencia</a>
    <a href="/colaborar">Colaborar 💌</a>
</nav>

<!-- Hero Section -->
<section class="hero">
    <h4>¡Nos casamos!</h4>
    <h1>Cristina</h1>
    <h2>&</h2>
    <h1>Jonathan</h1>
</section>

<!-- Carrusel de fotos -->
<section class="carousel">
    <div class="carousel-container">
        <img src="https://via.placeholder.com/800x400/ffe4e1/4f4f4f?text=Foto+1" alt="Foto 1">
        <img src="https://via.placeholder.com/800x400/ffe4e1/4f4f4f?text=Foto+2" alt="Foto 2">
        <img src="https://via.placeholder.com/800x400/ffe4e1/4f4f4f?text=Foto+3" alt="Foto 3">
    </div>
</section>

<x-separator />

<section class="principal-text">
    <div class="principal-text-header">
        <h1>Las pequeñas reuniones se convierten en grandes fiestas cuando estamos rodeados de las personas que más queremos.
            Te invitamos a nuestro Casamiento para que esta fiesta sea inolvidable.</h1>
    </div>
</section>

<x-separator />

<!-- Sección de cuenta regresiva -->
<section class="countdown">
    <h2>El día mas esperado de nuestras vidas finalmente ha llegado.
        Acompáñennos y sean parte de nuestra historia de amor</h2>
    <p>16 de noviembre del 2024</p>
    <div class="countdown-container">
        <div class="countdown-item">
            <span id="days">0</span>
            <label>Días</label>
        </div>
        <div class="countdown-item">
            <span id="hours">0</span>
            <label>Horas</label>
        </div>
        <div class="countdown-item">
            <span id="minutes">0</span>
            <label>Minutos</label>
        </div>
        <div class="countdown-item">
            <span id="seconds">0</span>
            <label>Segundos</label>
        </div>
    </div>
</section>

<x-separator />

<!-- Frase con estilo -->
<section class="quote">
    <p>Para permitir que todos los invitados, incluidos los padres, la pasen bien en el evento, hemos elegido que el día de nuestro matrimonio sea una ocasión solo para adultos.</p>
</section>

<x-separator />

<!-- Sección de la ceremonia -->
<section class="event-details">
    <h1>Detalles de la fiesta</h1>
    <div class="event">
        <div class="event-logo">
            <img src="https://cdn-icons-png.flaticon.com/512/7254/7254047.png" alt="Logo Iglesia">

        </div>
        <h3>Ceremonia</h3>
        <p>16 de Noviembre, 18:30</p>
        <p>Iglesia La Merced</p>
        <p>Calle 9 de Julio y Av. Rivadavia, La Rioja, Argentina</p>
        <a href="https://maps.app.goo.gl/tGSMieqhr4HsNc9RA" target="_blank" class="map-button">Ver Mapa</a>
    </div>
</section>

<!-- Sección de la fiesta -->
<section class="event-details">

    <div class="event">
        <div class="event-logo">
            <img src="https://cdn-icons-png.flaticon.com/512/6211/6211837.png" alt="Logo Iglesia">

        </div>        <h3>Fiesta</h3>
        <p>16 de Noviembre, 20:00</p>
        <p>Salón Estancia La Victoria</p>
        <p>Av. Ortiz De Ocampo, La Rioja, Argentina</p>
        <a href="https://maps.app.goo.gl/Fa9Z5nr1DHZGmtw89" target="_blank" class="map-button">Ver Mapa</a>
    </div>
</section>

<x-separator />


<section class="timeline">
    <div class="timeline-item">
        <span class="time">18:30</span>
        <h4>Ceremonia</h4>
        <p>Iglesia La Merced</p>
    </div>
    <div class="timeline-item">
        <span class="time">20:00</span>
        <h4>Fiesta</h4>
        <p>Salón Estancia La Victoria</p>
    </div>
</section>

<x-separator />

<!-- Frase y botón para colaborar -->
<section class="collaborate">
    <h1>Colaborar</h1>
    <p>La vida está llena de sueños. ¿Nos ayudarías a conseguir los nuestros? Nos sentimos honrados de que compartan este día tan especial con nosotros. Si desean hacernos un presente, les dejamos nuestro número de cuenta.</p>
    <button type="button">
        <a href="{{ route('colaborar') }}">¡Quiero colaborar!</a></button>
</section>


<!-- JavaScript para el carrousel -->
<script>
    const carousel = document.querySelector('.carousel-container');
    let currentIndex = 0;
    const images = carousel.querySelectorAll('img');
    const totalImages = images.length;

    function showNextImage() {
        currentIndex = (currentIndex + 1) % totalImages;
        const offset = -currentIndex * 100;
        carousel.style.transform = `translateX(${offset}%)`;
    }

    setInterval(showNextImage, 3000); // Cambia la imagen cada 3 segundos

    function updateCountdown() {
        const weddingDate = new Date("2024-11-16T00:00:00").getTime();
        const now = new Date().getTime();
        const distance = weddingDate - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById('days').textContent = days;
        document.getElementById('hours').textContent = hours;
        document.getElementById('minutes').textContent = minutes;
        document.getElementById('seconds').textContent = seconds;

        if (distance < 0) {
            document.querySelector('.countdown').innerHTML = "¡La boda ya ha comenzado!";
        }
    }

    setInterval(updateCountdown, 1000);

    document.addEventListener("DOMContentLoaded", function() {
        const fadeElements = document.querySelectorAll("h1, h2, h3, h4, h5, h6, p"); // Selecciona todos los encabezados

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        }, {
            threshold: 0.1 // Se activa cuando el 10% del elemento es visible
        });

        fadeElements.forEach(el => {
            el.classList.add("fade-in"); // Añade la clase inicial a cada encabezado
            observer.observe(el); // Observa cada encabezado
        });
    });
</script>

</body>
</html>
