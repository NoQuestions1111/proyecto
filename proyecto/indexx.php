<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apreciación del Arte en la Era Tecnológica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
    body {
        font-family: "Tahoma", sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f1f1f1;
        color: #333;
    }

    header {
        text-align: center;
        padding: 40px 0;
        background: radial-gradient(circle at 50% -20.71%, #e3d0e6 0, #e6cfe4 6.25%, #e9cee1 12.5%, #eccede 18.75%, #eecdda 25%, #f0cdd7 31.25%, #f1cdd4 37.5%, #f2cdd0 43.75%, #f2cdcd 50%, #f2cdca 56.25%, #f1cec7 62.5%, #f0cfc4 68.75%, #efcfc2 75%, #edd0c0 81.25%, #ead1be 87.5%, #e8d2bd 93.75%, #e5d3bc 100%);
        color: #fff;
        border-bottom: 2px solid #b8a9c9;
    }

    header h1 {
        font-size: 2.8rem;
        margin: 0;
        color: #faf3e0;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);
    }

    .section {
        margin: 30px 0;
        padding: 25px;
        border-radius: 12px;
        background-color: #fff;
        border-left: 8px solid #b8a9c9;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.6s, transform 0.6s;
    }

    .section.show {
        opacity: 1;
        transform: translateY(0);
    }

    .section h2 {
        font-size: 1.8rem;
        color: #6c5b7b;
        border-bottom: 2px solid #f7cac9;
        padding-bottom: 10px;
        margin-bottom: 15px;
    }

    .section p,
    .section li {
        font-size: 1rem;
        color: #555;
        margin-bottom: 15px;
        line-height: 1.6;
    }

    ul {
        padding-left: 20px;
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 20px;
        background-color: #A3E4DB;
        color: #333;
        border-radius: 25px;
        text-decoration: none;
        font-weight: bold;
        text-align: center;
        transition: background-color 0.3s;
    }

    .button:hover {
        background-color: #F5B7B1;
    }

    .section img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
      
    }

.section:hover {
    filter: drop-shadow(0 0 0.75rem #b8a9c9) !important;
   
}
.section:not(:hover) {
    filter: drop-shadow(0 0 0 transparent) !important;
    transition: 1s filter, 1s opacity;
}
    .about-us {
        background-color: #eaeaea;
        padding: 40px;
        margin-top: 40px;
        border-radius: 10px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.6s, transform 0.6s;
    }

    .about-us.show {
        opacity: 1;
        transform: translateY(0);
    }

    .about-us h2 {
        color: #6c5b7b;
        margin-bottom: 15px;
        font-size: 2rem;
    }

    .about-us p {
        font-size: 1rem;
        color: #555;
        line-height: 1.8;
    }

    .about-us img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }
    </style>
</head>

<body>

    <header>
        <h1>Apreciación del Arte en la Era Tecnológica</h1>
    </header>

    <div class="text-center mt-5">
        <h2 id="InfoPrincipal">Informacion Principal</h2>
    </div>
    <div class="container">
        <!-- Primer conjunto de tarjetas para pantallas medianas y grandes -->
        <div class=" section row align-items-center mt-n1">
            <!-- Columna para la primera imagen -->
            <div class="col-md-6 mb-md-0 mb-4">
                <div class="card mb-3 bg-transparent border-0">
                    <div class="text-center">
                        <img src="./images/foto1.jpg" class="img-fluid mt-3"
                            style="border-radius: 150px; width: 280px; height: 270px; margin-bottom: -15px;"
                            alt="Descripción de la página">
                    </div>
                </div>
            </div>
            <!-- Columna para el primer texto -->
            <div class="col-md-6 mb-md-0 mb-4">
                <div class="card bg-transparent border-0">
                    <div class="card-body">
                        <div class="text-center">
                            <h2 class="card-title text-center mb-2">El Arte Digital y la Tecnología: Un Nuevo Mundo</h2>
                            <p class="card-text mb-0" style="margin-top: 10px;">La tecnología ha cambiado el panorama del arte contemporáneo, convirtiéndose en una herramienta crucial
                para los artistas de hoy. Gracias a los avances en software y hardware, los creadores pueden
                experimentar con nuevas formas y métodos de expresión. Desde el diseño asistido por computadora hasta la
                creación de arte generado por inteligencia artificial, la tecnología ha abierto nuevos horizontes para
                la creatividad.</p>
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <!-- Primer conjunto de tarjetas para pantallas medianas y grandes -->
        <div class=" section row align-items-center">
            <!-- Columna para la primera imagen -->
            <div class="col-md-6 mb-md-0 mb-4">
                <div class="card mb-3 bg-transparent border-0">
                    <div class="text-center">
                        <img src="./images/foto2.jpg" class="img-fluid mt-3"
                            style="border-radius: 150px; width: 280px; height: 270px; margin-bottom: -15px;"
                            alt="Descripción de la página">
                    </div>
                </div>
            </div>
            <!-- Columna para el primer texto -->
            <div class="col-md-6 mb-md-0 mb-4">
                <div class="card bg-transparent border-0">
                    <div class="card-body">
                        <div class="text-center">
                            <h2 class="card-title text-center mb-2">El Papel de la Tecnologia en la Apreciacion del Arte</h2>
                            <p class="card-text mb-0" style="margin-top: 10px;">La apreciación del arte en la era digital está directamente influenciada por la facilidad con la que la
                tecnología permite acceder a una enorme variedad de obras de arte. Las plataformas digitales permiten a
                los usuarios explorar colecciones enteras desde la comodidad de sus hogares, lo que ha democratizado la
                experiencia artística. Además, las redes sociales juegan un papel crucial, ya que los artistas pueden
                compartir su trabajo con una audiencia global instantáneamente.</p>
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row justify-content-center mt-5">
    <div class="col-6 col-md-4 mb-4">
        <div class="card">
            <img src="./images/foto3.jpg" class="card-img-top" style="height: 250px; object-fit: cover;" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">Impacto en la sociedad</h5>
                <p class="card-text">El arte digital no solo afecta a los artistas, sino que también ha modificado la forma en que la sociedad
                consume arte. .</p>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 mb-4">
        <div class="card">
            <img src="./images/foto4.jpg" class="card-img-top" style="height: 250px; object-fit: cover;" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">Nuevos Artes</h5>
                <p class="card-text"> Esto
                ha abierto un nuevo campo para la inversión en arte, donde se puede adquirir una obra de
                arte digital como lo haría con una pieza tradicional</p>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-4 mb-4">
        <div class="card">
            <img src="./images/foto5.jpg" class="card-img-top" style="height: 250px; object-fit: cover;" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">Mercado Artistico</h5>
                <p class="card-text">Este impacto no solo ha transformado el mercado, sino que también ha llevado a una evolución en el
                pensamiento colectivo sobre el valor del arte y cómo se puede conservar y compartir a través de las
                generaciones.</p>
            </div>
        </div>
    </div>
    
   

        <div class="section">
            <h2>Conclusión: Un Futuro Sin Límites para el Arte</h2>
            <p>El impacto de la tecnología en el arte contemporáneo no es un fenómeno pasajero, sino una transformación
                profunda que está aquí para quedarse. A medida que la tecnología continúa avanzando, el arte se
                expandirá hacia nuevas fronteras, explorando territorios como la inteligencia artificial, la realidad
                virtual, y el arte interactivo.</p>
            <p>El futuro del arte estará marcado por una continua integración de las herramientas tecnológicas, lo que
                permitirá a los artistas seguir desafiando los límites de la creatividad. Al mismo tiempo, esto también
                ofrecerá nuevas formas de experiencia e interacción para el público, llevando la apreciación del arte a
                un nivel más profundo y accesible.</p>
            <a href="#" class="button">Descubre Más</a>

        </div>
    <div class="container">
        <!-- Primer conjunto de tarjetas para pantallas medianas y grandes -->
        <div class=" section row align-items-center mt-n1">
            <!-- Columna para la primera imagen -->
            <div class="col-md-6 mb-md-0 mb-4">
                <div class="card mb-3 bg-transparent border-0">
                    <div class="text-center">
                        <img src="./images/foto6.jpg" class="img-fluid mt-3"
                            style="border-radius: 150px; width: 280px; height: 270px; margin-bottom: -15px;"
                            alt="Descripción de la página">
                    </div>
                </div>
            </div>
            <!-- Columna para el primer texto -->
            <div class="col-md-6 mb-md-0 mb-4">
                <div class="card bg-transparent border-0">
                    <div class="card-body">
                        <div class="text-center">
                            <h2 class="card-title text-center mb-2">Sobre Nosotros</h2>
                            <p class="card-text mb-0" style="margin-top: 10px;">Somos un equipo de investigadores apasionados por la evolución del arte en la era digital. Creemos en el
                poder transformador de la tecnología y cómo puede redefinir la forma en que interactuamos con el arte. A
                través de nuestra investigación, buscamos entender cómo la tecnología no solo ha influido en la creación
                de obras de arte, sino también en la percepción y apreciación del arte a nivel global.</p>
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
    function animateOnScroll() {
        const sections = document.querySelectorAll('.section, .about-us');
        sections.forEach(section => {
            const rect = section.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom >= 0) {
                section.classList.add('show');
            }
        });
    }

    window.addEventListener('scroll', animateOnScroll);
    window.addEventListener('load', animateOnScroll); // Asegura que las animaciones se disparen al cargar la página
    </script>

</body>

</html>