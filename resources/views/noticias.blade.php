<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias</title>
    <link rel="icon" href="imagenes/logo.jpg" type="image/jpg">
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
        main {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
            line-height: 1.7;
            
        }
        
        .noticia{
            text-align: justify;
            margin-bottom: 40px;
        }
        .noticia h1, h2{
            text-align: center
        }
        .noticia .carta{
            font-display: georgia;
            font-style: italic;
            width: 600px;
        }
        .noticia .descrip{
            text-align: center; 
        }
        .noticia .imagen{
            display: flex;
            justify-content: center;
            align-items: center;
        
        }
        .noticia .imagen img{
            width: 500px;
            max-width: 100%;
        }
    </style>
</head>
<body>
@include ('include.navbar');
    <main>
        <section id="noticia1" class="noticia">
            <h1>Gareth Southgate dimite como seleccionador de Inglaterra</h1>
            <div class="imagen">
                <img src="imagenes/gareth.jpg" alt="Gareth Southgate">
            </div>
            <p>
                Después de <strong>102 partidos y casi ocho años</strong> al frente de la selección inglesa, <strong>   Gareth Southgate</strong> ha anunciado que deja el cargo.<br>
                Tras caer contra <strong>España en la final de la Eurocopa</strong>, segunda seguida que pierde el conjunto de los 'Three Lions', el preparador ha puesto punto final a su etapa en el combinado nacional.<br>
                En una <strong>carta dirigida a los aficionados</strong>, publicada en la página web oficial de la Federación Inglesa (FA), Southgate ha querido despedirse destacando que ha sido <span class="carta"><strong>"el honor de su vida" jugar y dirigir a Inglaterra</strong></span>.

            </p>
            <h3>Despedida completa de Southgate</h3>
            <p class="carta">
                "Como orgulloso inglés, ha sido el honor de mi vida jugar para Inglaterra y dirigir a Inglaterra. Ha significado todo para mí y lo he dado todo.<br>

                Pero es hora de un cambio y de un nuevo capítulo. La final del domingo en Berlín contra España fue mi último partido como seleccionador de Inglaterra.<br>

                Me uní a la FA en 2011, decidido a mejorar el fútbol inglés. Durante ese tiempo, incluidos ocho años como seleccionador masculino de Inglaterra, he contado con el apoyo de algunas personas brillantes a quienes les agradezco de todo corazón.<br>

                No podría haber tenido a nadie mejor a mi lado que Steve Holland. Es uno de los entrenadores más talentosos de su generación y ha sido inmenso.<br>

                He tenido el privilegio de dirigir a un grupo numeroso de jugadores en 102 partidos. Cada uno de ellos se ha sentido orgulloso de llevar los tres leones en sus camisetas y ha sido un crédito para su país de muchas maneras.<br>

                El equipo que llevamos a Alemania está lleno de jóvenes talentos apasionantes y pueden ganar el trofeo con el que todos soñamos. Estoy muy orgulloso de ellos y espero que apoyemos a los jugadores y al equipo de St. George's Park y a la FA que se esfuerzan cada día por mejorar el fútbol inglés y entendamos el poder que tiene el fútbol para impulsar cambios positivos.<br>

                Mi agradecimiento especial al personal técnico que nos ha brindado a los jugadores y a mí un apoyo incondicional durante los últimos ocho años. Su arduo trabajo y compromiso me inspiraron todos los días y les estoy muy agradecido: el brillante "equipo detrás del equipo".<br>

                Tenemos los mejores fans del mundo y su apoyo ha significado mucho para mí. Soy fanático de Inglaterra y siempre lo seré.<br>

                Espero ver y celebrar cómo los jugadores crean más recuerdos especiales y conectan e inspiran a la nación como sabemos que pueden hacerlo.<br>

                Gracias, Inglaterra, por todo."
            </p>

        </section>

        <!----------------------------------------------------------------------------------------------------------------------------------------->

        <section id="noticia2" class="noticia">
            <h2>Álvaro Morata se une al Milan</h2>
            <p class="descrip">
            El capitán de la selección española campeona de la Eurocopa 2024 firmó un contrato de 4 años, con opción de un año más.
            </p>
            <div class="imagen">
                <img src="imagenes/alvaro.jpg" alt="Alvaro Morata">
            </div>
            <p>
                
                <span class="carta">
                    "El AC Milan se complace en anunciar la adquisición definitiva de las prestaciones deportivas del futbolista Álvaro Borja Morata Martín del Club Atlético de Madrid",
                </span> anunció en su web la entidad, sin dar detalles sobre el monto económico de la operación.<br>
                    
                <span class="carta">
                    "Capitán de la selección española que acaba de proclamarse campeona de Europa, Morata firmó un contrato con el club rossonero hasta el 30 de junio de 2028 con la opción de un año más",
                </span> se añade en la nota.<br>
        
                Según los medios, el club italiano ha pagado su cláusula de rescisión de 13 millones de euros, revelan este martes los medios italianos, mientras que Morata, que lucirá la camiseta con el número 7, el mismo que llevaba en la selección, cobrará entre 4,5 y 5 millones de euros por temporada.<br>

                <span class="carta">
                    "<strong>No veo la hora de empezar</strong>. Ahora me voy de vacaciones porque tengo que estar con mi familia que me ayudó mucho, sino estaría entrenando a partir de mañana",
                </span> dijo el futbolista de 31 años y reciente campeón de Europa con la selección española a 'Sky Sports Italia', hace unos días.<br>
            </p>

        </section>

        <!----------------------------------------------------------------------------------------------------------------------------------------->

        <section id="noticia3" class="noticia">
            <h2>PSG interesado en Joshua Kimmich</h2>
            <p class="descrip">
                El conjunto parisino ha reactivado la pista del mediocentro del Bayern de Múnich. Luis Enrique ha validado completamente su incorporación en verano.
            </p>
            <div class="imagen">
                <img src="imagenes/joshua.jpg" alt="Joshua Kimmich">
            </div>
            <p>
                El Paris Saint-Germain sigue cincelando el presente mercado de fichajes y uno de los objetivos de la dirección deportiva es <strong>Joshua Kimmich. Relacionado con el conjunto parisino desde hace meses, el club ha decidido reactivar la pista del centrocampista, también lateral, de 29 años</strong>, una debilidad de Luis Campos, que lleva años tras los pasos del alemán. Luis Enrique, que tiene mucho peso en los fichajes del PSG, ha validado completamente la pista, tal y como adelantó RMC Sport y pudo confirmar AS.<br>

                La potencial llegada de Kimmich no altera, en absoluto, los planes del <strong>PSG con Joao Neves, prioridad de Luis Campos para reforzar el centro del campo</strong>. El teutón, actualmente en la Eurocopa, acaba contrato en 2025, por lo que el Bayern, en el caso de que no llegue a un acuerdo por renovarle, acarrearía el riesgo de perderle gratis el próximo año, obligado prácticamente a venderle para sacar una interesante cantidad económica por un traspaso.

            </p> 
        </section>

        <!----------------------------------------------------------------------------------------------------------------------------------------->

        <section id="noticia4" class="noticia">
            <h2>Jadon Sancho a la mira del PSG</h2>
            <div class="imagen">
                <img src="imagenes/sancho.jpg" alt="Jadon Sancho">
            </div>
            <p class="descrip">
                Según distintos medios franceses, el inglés, cedido en Dortmund la temporada pasada, estaría cada vez más cerca de jugar en París.
            </p>
            <p>
                <strong>El PSG ha decidido acelerar las negociaciones para fichar a Jadon Sancho</strong>. El extremo inglés, de 24 años, es un perfil que gusta mucho a la dirección deportiva, también a Luis Enrique, que habría validado la incorporación, tal y como adelantaron Foot-Mercato y L’Équipe. El jugador estaría encantado con la idea de unirse al conjunto parisino y las negociaciones van por buen camino.<br>
                <strong>Sancho, que tuvo muchas dificultades para imponerse en Manchester, recuperó sensaciones al final de la temporada pasada, cedido en el Dortmund, con el que fue una pieza clave para llegar a la final de la Champions, perdida contra el Real Madrid</strong>.  De hecho, su eliminatoria de semifinales ante el PSG, siendo una pesadilla para la defensa parisina, ha sido importante para que el club haya decidido lanzarse a por él.<br>
                <strong> Manchester United y PSG, además, llevan una semana conversando, porque los Red Devils han monitorizado a Manuel Ugarte</strong>, mediocentro del Paris-Saint Germain. El uruguayo no cuenta para Luis Enrique y ya tendría un acuerdo con el histórico conjunto inglés. No se descarta en Francia que sea moneda de cambio en un posible traspaso de Sancho, prioridad ahora mismo en la capital francesa para reforzar el ataque del actual campeón de la Ligue 1.

            </p>
            
        </section>

    </main>
</body>
@include ('include.footer');
</html>
