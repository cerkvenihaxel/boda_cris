<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Asistencia - Boda de Cristina y Jonathan</title>
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
            text-align: center;
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
            padding: 200px 30px 80px;
            color: #5e4f47;
        }
        .hero h1 {
            font-family: 'Great Vibes', cursive;
            font-size: 3.5rem;
            margin-bottom: 50px;
        }

        /* Formulario */
        .form-container {
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            font-family: 'Great Vibes', cursive;
            font-size: 2.5rem;
            color: #5e4f47;
            margin-bottom: 20px;
        }
        .form-container label {
            font-size: 1.1rem;
            color: #4f4f4f;
            display: block;
            margin-top: 15px;
            text-align: left;
        }
        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container select,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            font-size: 1rem;
            border: 1px solid #dddddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .form-container textarea {
            resize: none;
            height: 100px;
        }
        .form-container input[type="submit"] {
            background-color: #dd8373;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            margin-top: 20px;
        }
        .form-container input[type="submit"]:hover {
            background-color: #c66b5c;
        }

        /* Modal de Agradecimiento */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 400px;
        }
        .modal-content h3 {
            font-size: 1.8rem;
            color: #5e4f47;
            margin: 0;
            font-family: 'Great Vibes', cursive;
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
    <h1>Confirmación de Asistencia</h1>
</section>

<!-- Formulario de Confirmación de Asistencia -->
<div class="form-container">
    <h2>¡Queremos saber si podrás acompañarnos!</h2>
    <form id="attendanceForm" action="{{ route('add-invitation') }}" method="POST">
        @csrf <!-- Token de seguridad para formularios de Laravel -->

        <label for="assistant_name">Nombre Completo</label>
        <input type="text" id="assistant_name" name="assistant_name" required>

        <label for="assistant_email">Correo Electrónico</label>
        <input type="email" id="assistant_email" name="assistant_email" required>

        <label for="confirmation">¿Asistirás al evento?</label>
        <select id="confirmation" name="confirmation" required>
            <option value="Si, confirmo asistencia">Sí, confirmo asistencia</option>
            <option value="No podré asistir">No podré asistir</option>
        </select>

        <label for="message">Mensaje para los Novios (Opcional)</label>
        <textarea id="message" name="message" placeholder="Escribe un mensaje..."></textarea>

        <input type="submit" value="Enviar Confirmación">
    </form>
</div>

<!-- Modal de Agradecimiento -->
<div class="modal" id="thankYouModal">
    <div class="modal-content">
        <h3>¡Gracias por tu confirmación!</h3>
    </div>
</div>

<script>
    // Función para mostrar el modal y redirigir
    document.getElementById("attendanceForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Previene el envío del formulario

        // Enviar los datos del formulario mediante una solicitud fetch
        fetch("{{ route('add-invitation') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                assistant_name: document.getElementById("assistant_name").value,
                assistant_email: document.getElementById("assistant_email").value,
                confirmation: document.getElementById("confirmation").value,
                message: document.getElementById("message").value
            })
        }).then(response => {
            if (response.ok) {
                // Mostrar modal de agradecimiento
                document.getElementById("thankYouModal").style.display = "flex";

                // Redirigir a la página de inicio después de 3 segundos
                setTimeout(function() {
                    window.location.href = "/home";
                }, 3000);
            } else {
                alert("Hubo un error al enviar tu confirmación. Por favor, intenta de nuevo.");
            }
        }).catch(error => {
            console.error("Error:", error);
            alert("Hubo un error al enviar tu confirmación. Por favor, intenta de nuevo.");
        });
    });
</script>

</body>
</html>
