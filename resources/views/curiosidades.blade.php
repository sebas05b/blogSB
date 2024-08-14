<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curiosidades</title>
    <link rel="icon" href="imagenes/logo.jpg" type="image/jpg">
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }

        main {
            padding: 20px;
            margin: 0 auto;
        }
        section.tema1 {
            margin: 0 auto;
            max-width: 1200px;
            padding: 20px;
        }
        section.tema1 h1 {
            font-size: 30px;
            margin-bottom: 10px;
        }
        section.tema1 h2 {
            margin-top: 0;
            font-size: 19px;
        }
        .cajita {
            display: flex;
            margin-bottom: 20px; /* margen abajo */
        }
        .cajita img {
            width: 300px; 
            height: auto;
        }
        .contenido {
            width: 25%;
            display: flex;
            flex-direction: column;
        }
        .textico {
            width: 300px;
            text-align: justify;
            margin-left: 30px;
            margin-top: 58px;
            font-size: 17px;
            color: #333;
        }
        .tema1 p {
            font-size: 18px;
            text-align: justify;
        }
        .tema2 .encabezado{
            position: relative;
            background-image: url('imagenes/barca.png');
            background-size: cover;
            background-position: center;
            height: 300px;
            margin-left: -20px;
            margin-right: -20px;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 28px;
        }

        .tema2  p{
            font-size: 22px;
            line-height: 1.7;
            text-align: justify;
            width: 90%;
            margin-left: 5%;
            
        }
        .tema2 h3{
            font-size: 24px;
            margin-left: 5%;
        }
        .tema2 img{
            margin-left: 5%;
            width: 600px;
        }
        .tema3{
            margin: 0 auto;
            padding: 20px;
        }

        .tema3 .imagen{
            display: flex;
            justify-content: center;
            align-items: center;
        
        }
        .tema3 .imagen img{
            width: 500px;
            max-width: 100%;
        }
        .tema3 h3 {
            text-align: center;
            font-size: 24px;
        }
        .tema3 p{
            width: 90%;
            margin-left: 5%;
            font-size: 22px;
            text-align: justify;
            line-height: 1.5;
        }
        .principal {
            display: flex;
        }
        .vandijk{
            margin-left: 250px;
        }
        .messi {
            margin-left: 350px;
            margin-top: 0;
        }

    </style>
</head>
<body>
@include ('include.navbar');
    <main>
        <section id="top5" class="tema1">
            <h1>Los 5 mejores futbolistas de la historia según la IA</h1>
            <h2>Tres de este top según la IA jugaron en el Barça y otro de ellos estuvo a punto.</h2>
            <p>
                A pesar de que determinar cuáles son los mejores futbolistas de la historia es subjetivo (porque no se puede evaluar teniendo en cuenta solo el palmarés y los logros personales), la Inteligencia Artificial nos arroja este resultado cuando le pedimos un ranking. Como curiosidad, tres de ellos defendieron la camiseta azulgrana y uno de ellos vistió de blanco.
            </p>
                
            <div class="cajita">
                <div class="contenido">
                    <h3>5. Johan Cruyff - Países Bajos</h3>
                    <img src="imagenes/johan.jpg" alt="Johan Cruyff">
                </div>
                <p class="textico">
                    Jugador y entrenador neerlandés, influyente en el desarrollo del "fútbol total". Tuvo un impacto significativo en el FC Barcelona y la selección de los Países Bajos.
                </p>
            </div>
            <div class="cajita">
                <div class="contenido">
                    <h3>4. Cristiano Ronaldo - Portugal</h3>
                    <img src="imagenes/ronaldo.jpg" alt="Cristiano Ronaldo">
                </div>
                <p class="textico"> 
                    Delantero portugués, conocido por su fuerza física, velocidad y capacidad goleadora. Ha tenido una carrera exitosa en varios clubes y ha ganado varios premios Balón de Oro.
                </p>
            </div>
            <div class="cajita">
                <div class="contenido">
                    <h3>3. Lionel Messi - Argentina</h3>
                    <img src="imagenes/messi.jpg" alt="Lionel Messi">
                </div>
                <p class="textico">
                    Jugador argentino, conocido por su habilidad técnica, regate excepcional y capacidad goleadora. Ha ganado múltiples premios Balón de Oro.
                </p>
            </div>
            <div class="cajita">
                <div class="contenido">
                    <h3>2. Diego Maradona - Argentina</h3>
                    <img src="imagenes/diego.jpg" alt="Diego Maradona">
                </div>
                <p class="textico">
                    Una leyenda argentina, famoso por su actuación en el Mundial de 1986 y por el famoso "Gol del Siglo". Es considerado uno de los jugadores más talentosos y carismáticos de la historia.
                </p>
            </div>
            <div class="cajita">
                <div class="contenido">
                    <h3>1. Pelé - Brasil</h3>
                    <img src="imagenes/pele.jpg" alt="Pelé">
                </div>
                <p class="textico">
                    Considerado uno de los mejores futbolistas de todos los tiempos, ganó tres Copas del Mundo con Brasil y es conocido por su habilidad goleadora y su impacto en el juego.
                </p>
            </div>
            <p>
                Y asi termina el top 5, no cabe duda de que estos jugadores han demostrado una habilidad sobresaliente y una influencia notable en el fútbol. Cada uno ha dejado una marca importante en el juego con su talento y consistencia. ¿Qué piensas? ¿Hay algún jugador en esta lista que cambiarías o añadirías? ¿O crees que hay otros futbolistas que merecen estar en el top 5?
            </p>
        </section>

        <!------------------------------------------------------------------------------------------------------------->

        <section id="barca" class="tema2">
            <div class="encabezado">
                <h2>El Barca del sextete</h2>
            </div>
            <p>
                El FC Barcelona del sextete, dirigido por Pep Guardiola en la temporada 2008-2009, es uno de los equipos más célebres de la historia del fútbol. El equipo ganó seis títulos en un solo año: La Liga, la Copa del Rey, la Liga de Campeones de la UEFA, la Supercopa de España, la Supercopa de la UEFA y el Mundial de Clubes de la FIFA. 

                Con un estilo de juego basado en la posesión del balón, el Barcelona destacó por su fútbol ofensivo y vistoso. Lionel Messi, Xavi Hernández e Andrés Iniesta fueron claves, mientras que Carles Puyol lideró una defensa sólida. Este sextete no solo marcó una época dorada para el club, sino que también influyó profundamente en las tácticas modernas del fútbol.
            </p>
            <h3>Planilla</h3>
            <p>
                Porteros: Víctor Valdés, Pinto.<br>
                Defensas: Dani Alves, Piqué, Márquez, Puyol, Milito, Maxwell, Chigrinski, Abidal, Fontás, Bartra.<br>
                Centrocampistas: Xavi, Iniesta, Keita, Sergio Busquets, Touré Yaya, Jonathan, Thiago.<br>
                Delanteros: Zlatan Ibrahimovic, Leo Messi, Bojan, Henry, Pedro, Jeffrén, Assulin, Soriano.
            </p>
            <img src="imagenes/equipo.jpg" alt="Equipo">

        </section>

        <!------------------------------------------------------------------------------------------------------------->

        <section id="virgil" class="tema3">
            <h3>¿Van Dijk merecía ganar el Balón de Oro en 2019?</h3>
            <div class="imagen"> 
                <img src="imagenes/virgil.jpg" alt="Virgil">
            </div>
            <P>
                En la temporada 2018-2019, tanto <strong>Virgil Van Dijk</strong> como <strong>Lionel Messi</strong> se destacaron en el fútbol mundial con actuaciones sobresalientes en sus respectivos roles. Van Dijk, con una defensa impenetrable, y Messi, con una capacidad ofensiva impresionante, tuvieron un impacto significativo en sus equipos. A continuación, analizamos sus estadísticas y evaluamos quién merecía el Balón de Oro de ese año.

            </P>
            <div class="principal">
                <div class="vandijk">
                    <p>
                        <strong>Virgil Van Dijk (Liverpool)</strong><br> 

                        <strong>Premier League:</strong><br>
                        - Partidos jugados: 38<br>
                        - Duelos ganados: 80%<br>
                        - Intercepciones: 36<br>
                        - Despejes: 103<br>
                        - Goles: 4<br>

                        <strong>Liga de Campeones de la UEFA:</strong><br>
                        - Partidos jugados: 12<br>
                        - Duelos ganados: 77%<br>
                        - Intercepciones: 22<br>
                        - Despejes: 41<br>
                        - Goles: 1 (en la final)<br>
                    </p>
                </div>

                <div class="messi">
                    <p>
                        <strong>Lionel Messi (Barcelona)</strong><br>

                        <strong> La Liga:</strong><br>
                        - Partidos jugados: 34<br>
                        - Goles: 36<br>
                        - Asistencias: 15<br>
                        - Regateos exitosos: 172<br>
                        - Disparos a puerta: 108<br>

                        <strong>Liga de Campeones de la UEFA:</strong><br>
                        - Partidos jugados: 10<br>
                        - Goles: 12<br>
                        - Asistencias: 3<br>
                        - Regateos exitosos: 30<br>
                        - Disparos a puerta: 34<br>
                    </p>

                </div>
            </div>
            <P>
                ¿Quién debió ganar el Balón de Oro?<br>

                <strong>-</strong> Virgil <strong>Van Dijk</strong> tuvo un impacto defensivo crucial y fue clave en la victoria del Liverpool en la Liga de Campeones. Fue el primer defensor en estar tan alto en la votación en años.
                <br>
                <strong>-</strong> Lionel <strong>Messi</strong> ofreció una temporada ofensiva histórica con 36 goles en La Liga y 12 en la Champions League. Su consistencia y habilidad de juego le dieron una ventaja significativa.
                <br>
                Ambos jugadores tuvieron temporadas excepcionales, pero el Balón de Oro generalmente se otorga a jugadores con un impacto ofensivo destacado. Messi, con su notable desempeño en ataque, probablemente inclinó la balanza a su favor. Sin embargo, el impacto defensivo de Van Dijk también fue sobresaliente y merecedor de reconocimiento.
            </P>
        </section>
    </main>
</body>
@include ('include.footer');
</html>
