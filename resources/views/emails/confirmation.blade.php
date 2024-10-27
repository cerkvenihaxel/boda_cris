<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Asistencia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            padding: 20px;
        }
        .card {
            background-color: #ffffff;
            max-width: 600px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            text-align: center;
        }
        .card-header {
            background-color: #4CAF50;
            color: #ffffff;
            padding: 20px;
            font-size: 1.5em;
            font-weight: bold;
        }
        .card-body {
            padding: 30px;
        }
        .info {
            font-size: 1.1em;
            color: #333;
            margin: 10px 0;
            line-height: 1.6;
        }
        .highlight {
            font-weight: bold;
            color: #4CAF50;
        }
        .footer {
            background-color: #f4f4f9;
            color: #777;
            padding: 20px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
<div class="card">
    <div class="card-header">Confirmación de Asistencia</div>
    <div class="card-body">
        <p class="info">Asistente: <span class="highlight">{{ $invitation['assistant_name'] }}</span></p>
        <p class="info">Correo Electrónico: <span class="highlight">{{ $invitation['assistant_email'] }}</span></p>
        <p class="info">Confirmación: <span class="highlight">{{ $invitation['confirmation'] }}</span></p>
        <p class="info">Mensaje: <span class="highlight">{{ $invitation['message'] ?? 'Sin mensaje adicional' }}</span></p>
    </div>
    <div class="footer">
        <p>Gracias por confirmar tu asistencia. Nos alegra saber que serás parte de este evento especial.</p>
    </div>
</div>
</body>
</html>
