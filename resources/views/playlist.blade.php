<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Canciones a la Playlist</title>
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
        .hero {
            padding: 100px 20px;
            text-align: center;
            color: #5e4f47;
        }
        .hero h1 {
            font-family: 'Great Vibes', cursive;
            font-size: 3.5rem;
        }

        .open-playlist-btn {
            background-color: #dd8373;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            margin-top: 20px;
            cursor: pointer;
            text-decoration: none;
        }
        .open-playlist-btn:hover {
            background-color: #c66b5c;
        }

        .form-container {
            width: 80%;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #dddddd;
            border-radius: 5px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
        }
        .form-container input[type="submit"] {
            background-color: #dd8373;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: #c66b5c;
        }
        .song-list {
            list-style-type: none;
            padding: 0;
        }
        .song-item {
            background: #f4f4f4;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .song-item button {
            background-color: #dd8373;
            color: #ffffff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .song-item button:hover {
            background-color: #c66b5c;
        }
    </style>
</head>
<body>

<!-- NavBar --><nav>
    <a href="/home">Inicio</a>
    <a href="/playlist">Playlist</a>
    <a href="/confirmar-asistencia">Confirmar asistencia</a>
    <a href="/colaborar">Colaborar 💌</a>
</nav>

<!-- Hero Section -->
<section class="hero">
    <h1>Agregar Canciones a la Playlist</h1>
    <a href="https://open.spotify.com/playlist/1DYcny3fMa89bOX30KnV90" target="_blank" class="open-playlist-btn">
        Abrir Playlist
    </a>
</section>



<!-- Formulario de búsqueda de canciones -->
<div class="form-container">
    <form id="searchForm">
        <input type="text" id="songName" placeholder="Escribe el nombre de la canción" required>
        <input type="submit" value="Buscar Canciones">
    </form>
</div>

<!-- Lista de canciones -->

<ul class="song-list" id="songList"></ul>

<script>
    document.getElementById("searchForm").addEventListener("submit", function(event) {
        event.preventDefault();
        const songName = document.getElementById("songName").value;

        // Llama a la API para buscar canciones
        fetch(`/spotify/search-song?query=${encodeURIComponent(songName)}`)
            .then(response => response.json())
            .then(data => {
                const songList = document.getElementById("songList");
                songList.innerHTML = ""; // Limpia la lista anterior

                data.tracks.items.forEach(track => {
                    const songItem = document.createElement("li");
                    songItem.className = "song-item";
                    songItem.innerHTML = `
                        <span>${track.name} - ${track.artists[0].name}</span>
                        <button onclick="addSongToPlaylist('${track.uri}')">Agregar</button>
                    `;
                    songList.appendChild(songItem);
                });
            })
            .catch(error => console.error("Error:", error));
    });

    function addSongToPlaylist(songUri) {
        fetch(`/spotify/add-to-playlist`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ songUri: songUri })
        })
            .then(response => {
                if (response.ok) {
                    alert("¡Canción agregada a la playlist!");
                } else {
                    alert("Error al agregar la canción.");
                }
            })
            .catch(error => console.error("Error:", error));
    }
</script>

</body>
</html>
