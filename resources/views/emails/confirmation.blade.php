<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Asistencia</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            background-color: #f8f3e8;
            display: flex;
            justify-content: center;
            padding: 20px;
            color: #333;
        }
        .card {
            background-color: #ffffff;
            max-width: 600px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            text-align: center;
            border: 1px solid #e0d4ba;
        }
        .card-header {
            background-color: #b29682;
            color: #ffffff;
            padding: 20px;
            font-size: 1.8em;
            font-weight: bold;
            letter-spacing: 2px;
        }
        .card-body {
            padding: 30px;
            font-size: 1.1em;
        }
        .info {
            margin: 15px 0;
            color: #555;
        }
        .highlight {
            font-weight: bold;
            color: #b29682;
        }
        .footer {
            background-color: #f8f3e8;
            color: #7a6a5c;
            padding: 20px;
            font-size: 0.95em;
            font-style: italic;
        }
        .footer-credit {
            background-color: #ffffff;
            color: #b29682;
            padding: 15px;
            font-size: 0.85em;
        }
        .footer-credit a {
            color: #b29682;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="card">
    <div class="card-header">Confirmación de Asistencia</div>
    <div class="card-body">
        <p class="info">Invitado/a: <span class="highlight">{{ $invitation['assistant_name'] }}</span></p>
        <p class="info">Correo Electrónico: <span class="highlight">{{ $invitation['assistant_email'] }}</span></p>
        <p class="info">Confirmación: <span class="highlight">{{ $invitation['confirmation'] }}</span></p>
        <p class="info">Mensaje: <span class="highlight">{{ $invitation['message'] ?? 'Sin mensaje adicional' }}</span></p>
    </div>
    <div class="footer">
        <p>Gracias por confirmar tu asistencia. Estamos emocionados de que seas parte de nuestro día especial.</p>
    </div>
    <div class="footer-credit">
        Desarrollado con 💙 por <a href="https://www.instagram.com/axelcrkv/" target="_blank">@axelcrkv</a>
    </div>
</div>
</body>
</html>
