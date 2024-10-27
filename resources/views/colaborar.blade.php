@php
    $imagePath = public_path('hero.webp');
@endphp

    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boda de Cris y Novio</title>
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
            padding: 20px 30px;
            color: #5e4f47;
        }
        .hero h1 {
            font-family: 'Great Vibes', cursive;
            font-size: 3.5rem;
            margin-bottom: 10px;
        }

        /* Carrusel de imágenes */
        .carousel {
            display: flex;
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
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #dd8373;
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
            font-size: 1rem;
            margin: 50px 10px;
            color: #5e4f47;
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
    <h1>Acá están nuestros datos bancarios para que deposites mucho amor</h1>
</section>

<div class="container" style="display: flex; justify-content: center; align-items: center; height: 30vh;">
    <div class="card" style="width: 100%; max-width: 600px; padding: 10px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: center; background-color: white">
        <h2>Datos bancarios</h2>
        <p><strong>CUENTA NRO:</strong> 000007650000029159563</p>
        <p><strong>ALIAS:</strong> msubelza30.ppay</p>
        <p><strong>BANCO:</strong> Personal Pay</p>
        <p>❗Transferencias a partir de $20.000</p>
        <p> ¡Gracias por colaborar con nuestro sueño!</p>
    </div>
</div>
</body>
</html>


