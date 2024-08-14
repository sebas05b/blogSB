<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            background: #333;
            padding: 10px 0;
        }
    
        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            width: 100%;
            box-sizing: border-box;
        }
        .logo-nombre{
            display: flex;
            align-items: center;
        }
        .logo-nombre img {
            width: 80px;
            margin-right: 10px;
        }
        .logo-nombre h2{
            color: rgb(255, 255, 255);
            margin: 0 12px;
        }
        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            margin-left: 20px;
            
        }
        nav ul li a {
            text-decoration: none;
            color: rgb(255, 255, 255);
            font-weight: bold;

        }
        nav ul li a:hover{
            color: #007bff;
        }
    </style>
</head>
<body>
<header>
        <nav>
            <div class="logo-nombre">
                <img src="imagenes/logo.jpg" alt="Logo blog de futbol">
                <h2>Blog SB</h2>
            </div>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/noticias">Noticias</a></li>
                <li><a href="/curiosidades">Curiosidades</a></li>
                <li><a href="/nosotros">Nosotros</a></li>
                <li><a href="/contactos">Contacto</a></li>
            </ul>
            <div class="nav">
                <ul>
                    <li><a href="/dashboard">Iniciar Sesión</a></li>
                    <li><a href="/register">Registrarse</a></li>
                </ul>
            </div>
        </nav>
    </header>
    
</body>
</html>