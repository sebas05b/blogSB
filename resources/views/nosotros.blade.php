<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
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
        }
        
        .nosotros{
            text-align: justify;
            margin-bottom: 40px;
        }
        .nosotros h1{
            text-align: center;
            font-size: 30px; 
        }
        
        .nosotros h2 {
            margin-top: 20px;
            font-size: 26px;
        }
        
        .nosotros p {
            margin: 10px 0;
            font-size: 22px;
            line-height: 1.7;
        }
        
        .nosotros ul {
            list-style-type: disc;
            margin: 20px 0;
            padding-left: 20px;
            font-size: 20px;
            line-height: 1.7;
        }
        
    </style>
</head>
<body>
@include ('include.navbar');
    <main>
        <section class="nosotros">
            <h1>Sobre Nosotros</h1>
            <p>Bienvenido al Blog de fútbol SB, tu fuente confiable para todas las noticias, curiosidades y actualizaciones sobre el mundo del fútbol. Nuestro objetivo es proporcionar contenido de calidad que informe y entretenga a los apasionados del deporte.</p>
            
            <h2>Nuestra Historia</h2>
            <p>El Blog SB fue fundado en 2024 por Sebastian Bravo un entusiasta del fútbol con el propósito de compartir su amor por el deporte. Desde entonces, hemos crecido y evolucionado, convirtiéndonos en una referencia para los seguidores del fútbol en todo el mundo. Nos enorgullece ofrecer noticias actualizadas, análisis detallados y artículos interesantes sobre el deporte rey.</p>
            
            <h2>Misión</h2>
            <p>Proporcionar a nuestros lectores contenido relevante y de alta calidad sobre fútbol, desde noticias y análisis hasta curiosidades, con el objetivo de enriquecer su experiencia y pasión por el deporte.</p>
            
            <h2>Visión</h2>
            <p>Convertirnos en el blog de referencia para todos los aficionados al fútbol, reconocido por nuestra integridad, profundidad de análisis y compromiso con la calidad del contenido.</p>
            
            <h2>¿Qué Ofrecemos?</h2>
            <ul>
                <li><strong>Noticias Recientes:</strong> Mantente al día con las últimas noticias de fútbol de todo el mundo.</li>
                <li><strong>Datos:</strong> Obtén datos que quizás no conocias y hablan por si solos, son datos y hay que darlos</li>
                <li><strong>Curiosidades:</strong> Descubre datos interesantes y hechos poco conocidos sobre el fútbol.</li>
            </ul>
        </section>
    </main>
</body>
@include ('include.footer');
</html>
