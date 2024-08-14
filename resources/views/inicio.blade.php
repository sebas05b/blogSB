<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" href="imagenes/logo.jpg" type="image/jpg">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
        
        main {
            padding: 20px;
            padding-bottom: 1px;
        }
        h1, h2 {
            text-align: center;
        }
        h2 {
            font-size: 24px;
            margin-bottom: 30px;
        }
        .carousel-inner {
            max-width: 90%;
            margin: auto;
        }
        .carousel-item img {
            object-fit: cover;
            height: 800px;
            width: 100%;
        }
        .carousel-caption {
            color: #ffffff;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 5px;
        }
        .carousel-caption h5 {
            font-size: 1.5rem;
        }
        .carousel-caption p {
            font-size: 1rem;
        }
        .btn-read-more {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 1rem;
            color: #ffffff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-read-more:hover {
            background-color: #0056b3;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
        }
        .tema2{
            background-image:url("imagenes/estadio.jpg");/*imagen de fondo*/
            background-size: cover;
            background-attachment: fixed;
        }
        .card {
            width: 18rem; /* tamaño de las cards */
            margin: 20px; /* espacio alrededor de las cards */
            margin-top: 40px;
            margin-left: 59px;
        }
        
        .card img {
            height: 200px; /* Ajusta la altura de las imágenes */
            object-fit: cover;
        }
        
        .card-body {
            text-align: center;
        }
        
        .row-centered {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .margin{
            margin-top: 40px;
        }
        .datos{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 30px auto;
            max-width: 1420px;
            font-size: 24px;
        }
        .datos h2{
            text-align: left;
            font-size: 28px;
            align-self: flex-start;
            margin-left: 37px;
            margin-bottom: 15px;
        }
        .datos p{
            text-align: justify;
            margin-left: 10px;
            margin-right: 10px;
            line-height: 1.7;

        }
    </style>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
@include ('include.navbar');
    <main>
        <h1>Bienvenido al mejor Blog de Fútbol</h1>
        <h2>Las últimas noticias, curiosidades, datos y más...</h2>

        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagenes/southgate.jpg" class="d-block" alt="Entrenador Southgate">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Gareth Southgate dimite como seleccionador de Inglaterra</h5>
                        <p>Tras la decepción en la Eurocopa 2024, Gareth Southgate renunció a su cargo como entrenador de la selección inglesa. La derrota en la final contra España y las críticas recibidas influyeron en su decisión.</p>
                        <a href="/noticias#noticia1" class="btn-read-more">Leer más</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imagenes/morata.jpg" class="d-block" alt="Álvaro Morata">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Álvaro Morata se une al Milan</h5>
                        <p>Álvaro Morata jugará la próxima temporada en el Milan de la Serie A. El delantero español firmó un contrato de cuatro años, y el traspaso se cerró por 13 millones de euros, que corresponde a su cláusula de salida del Atlético de Madrid.</p>
                        <a href="/noticias#noticia2" class="btn-read-more">Leer más</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imagenes/kimmich.jpg" class="d-block" alt="Joshua Kimmich">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>PSG interesado en Joshua Kimmich</h5>
                        <p>PSG ha mostrado interés en fichar a Joshua Kimmich del Bayern Múnich. Ante los conflictos del jugador con su actual club, el equipo parisino lo ve como una alternativa viable para fortalecer su plantilla.</p>
                        <a href="/noticias#noticia3" class="btn-read-more">Leer más</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imagenes/sancho.jpg" class="d-block" alt="Jadon Sancho">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Jadon Sancho a la mira del PSG</h5>
                        <p>El Paris Saint-Germain ha fijado su atención en Jadon Sancho del Manchester United, con un precio de transferencia establecido en 47 millones de euros. Sancho busca un nuevo desafío tras una temporada complicada en la Premier League.</p>
                        <a href="/noticias#noticia4" class="btn-read-more">Leer más</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>
    <section class="tema2">
        <div class="container">
            <div class="row row-centered">
                <div class="col-lg-4 col-md-6 mb-4 margin">
                    <div class="card">
                        <img src="imagenes/top5.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Los 5 mejores futbolistas de la historia segun la IA</h5>
                            <p class="card-text">Tres de este top según la IA jugaron en el Barça y otro de ellos estuvo a punto.</p>
                            <a href="/curiosidades#top5" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 margin">
                    <div class="card">
                        <img src="imagenes/sextete.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">El barca del sextete</h5>
                            <p class="card-text">FC Barcelona fue el primer equipo español en ganar un triplete y primer equipo del mundo en ganar un Sextete.</p>
                            <a href="/curiosidades#barca" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 margin">
                    <div class="card">
                        <img src="imagenes/vandijk.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">¿Van Dijk merecía ganar el Balón de Oro en 2019?</h5>
                            <p class="card-text">Messi es el mejor de todos, pero Van Dijk merecía ganar el Balón de Oro: DT Klopp.</p>
                            <a href="/curiosidades#virgil" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="imagenes/70.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">¿Mejor mundial de la historia?</h5>
                            <p class="card-text">El Mundial de México 1970 es conocido como el Mejor de toda la Historia. En él se dio cita la famosa Brasil de los cinco "dieces".</p>
                            <a href="/curiosidades" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="imagenes/haaland.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Record de goles en una temporada en Premier League</h5>
                            <p class="card-text">El delantero del MCI Haaland rompió el récord de goles en una sola temporada en su debut.</p>
                            <a href="/curiosidades" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="imagenes/uruguay.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">¿Cuántos mundiales tiene Uruguay?</h5>
                            <p class="card-text">¿Uruguay tiene 4 mundiales o dos de ellos son juegos olímpicos?, la FIFA ya se pronunció y terminó con el debate.</p>
                            <a href="/curiosidades" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="datos">
        <h2><strong>¿Sabías que?</strong></h2>
        <p>
            <strong>1.</strong> El primer partido de fútbol que se jugó entre selecciones fue el que <strong>enfrentó a Escocia y a Inglaterra</strong> el 30 de noviembre de 1872.<br>
            <strong>2.</strong> En 1904, Bélgica, Dinamarca, Francia, Países Bajos, España, Suecia y Suiza fundaron la <strong>Fédération Internationale de Football Association (FIFA)</strong> , que actualmente es el organismo rector del fútbol mundial. Además de promulgar las reglas del fútbol, la FIFA también sanciona torneos como la serie de campeonatos de la Copa del Mundo.<br>
            <strong>3.</strong> El futbolista alemán <strong>Franz Beckenbauer </strong> fue el primer hombre que dirigió y fue capitán de un equipo ganador de la Copa del Mundo. Apodado "der Kaiser", Beckenbauer dominó el fútbol alemán en las décadas de los 60 y los 70 y es posiblemente el mejor futbolista del país. Jugador inteligente y elegante, inventó la posición moderna del líbero alemán, que inicia el ataque desde la defensa central con pases hábiles y carreras largas.<br>
            <strong>4. Pelé</strong>  fue probablemente el deportista más famoso y mejor pagado del mundo en su época. El futbolista brasileño llevó a su selección a tres campeonatos de la Copa del Mundo y a la posesión permanente del Trofeo Jules Rimet. Conocido como la pérola negra (perla negra), Pelé se convirtió en un héroe nacional brasileño.<br>
            <strong>5.</strong> De 1930 a 1970, los ganadores de la Copa del Mundo recibían el <strong> Trofeo Jules Rimet</strong>, llamado así por el francés que propuso el torneo. Esta copa se concedió definitivamente en 1970 a Brasil, tres veces ganador, y se puso en liza un nuevo trofeo llamado Copa Mundial de la FIFA.<br>
            <strong>6.</strong> ¿Sabes que existe un <strong>campo de fútbol flotante</strong>? Se encuentra en una pequeña aldea flotante llamada Koh Panyee,   en Tailandia. Este curioso terreno de juego se empezó a construir en 1986 con trozos de madera de barcos viejos, clavos y otros desechos. La estructura flotaba, pero era pequeña, inestable y resbaladiza. El balón se iba cada dos por tres al agua y los clavos sobresalían peligrosamente. A día de hoy el <strong>Panyee FC</strong> , es uno de los equipos juveniles que tienen más fama y prestigio de toda Tailandia. Obviamente, el campo de fútbol mejoró.<br>
            <strong>7.</strong> El boliviano <strong>Mauricio Baldivieso</strong>  fue el jugador más joven en participar en fútbol de primera división. Lo hizo en 2009 en la Liga de Fútbol Profesional Boliviano con solo 12 años. Por el contrario, el jugador de fútbol más veterano fue <strong>Stanley Matthews</strong> , que jugó su último partido con 50 años. Matthews fue, además, el primer futbolista británico en ser nombrado caballero.<br>
            <strong>8.</strong> Con sus 2,08 metros de altura, <strong>Kristof Van Hout</strong> es hoy el futbolista en activo más alto del mundo. Es el portero del Lommel S.K., de la segunda división de la liga belga. El más bajo es Élton Josè Xavier Gomes, que mide 1,54 metros.<br>
            <strong>9.</strong> El futbolista que tardó menos en meter un gol fue <strong>Nawaf Al Abed</strong>, que en dos segundos ya marcó.<br>
            <strong>10.</strong> En nuestro país, el equipo de fútbol más antiguo es el <strong>Real Club Recreativo de Huelva</strong>, fundado en 1889. Su fundación se relaciona con los ingleses que vivían en la zona de las minas de Riotinto, que solían jugar al fútbol para desconectar del trabajo.
        </p>
    </section>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
</body>
@include ('include.footer');
</html> 