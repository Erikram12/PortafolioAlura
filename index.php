<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Portfolio</title>
</head>
<body>
    <!-- MENU ENCABEZADO -->
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="#">Erik Jovani Martinez Ramirez</a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="#inicio" onclick="seleccionar()">INICIO</a></li>
                    <li><a href="#sobremi" onclick="seleccionar()">SOBRE MI</a></li>
                    <li><a href="#skills" onclick="seleccionar()">SKILLS</a></li>
                    <li><a href="#hobbies" onclick="seleccionar()">HOBBIES</a></li>
                    <li><a href="#curriculum" onclick="seleccionar()">FORMACIÓN</a></li>
                    <li><a href="#portfolio" onclick="seleccionar()">PROYECTOS</a></li>
                    <li><a href="#contacto" onclick="seleccionar()">CONTACTO</a></li>
                </ul>
            </nav>
            <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
    </div>

    <!-- SECCION INICIO -->
    <section id="inicio" class="inicio">
        <div class="contenido-banner">
            <div class="contenedor-img">
                <img src="assets/images/profile.png" alt="">
            </div>
            <h1>Erik Jovani Martinez Ramirez</h1>
            <h2>Estudiante - ING: TIC's</h2>
            <div class="redes">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://github.com/Erikram12"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/erik-jovani-martinez-ramirez-948443217/"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
    </section>

    <!-- SECCION SOBRE MI -->
    <section id="sobremi" class="sobremi">
        <div class="contenido-seccion">
            <h2>Sobre Mí</h2>
            <p><span>Hola, Soy Erik Jovani Martinez Ramirez </span> y soy estudiante de la carrera de Ingeniería en Tecnologías de la Información y Comunicación (TIC'S). Desde siempre, me ha apasionado el mundo de la tecnología y la programación. Me considero un entusiasta del aprendizaje constante, especialmente cuando se trata de explorar nuevos lenguajes de programación y tecnologías emergentes. Creo firmemente que el conocimiento es la clave para desbloquear infinitas posibilidades y soluciones innovadoras.</p>

            <div class="fila">
                <!-- datos personales -->
                <div class="col">
                    <h3>Datos Personales</h3>
                    <ul>
                        <li>
                            <strong>Cumpleaños</strong>
                            30-09-2003
                        </li>
                        <li>
                            <strong>Teléfono</strong>
                            99514306010
                        </li>
                        <li>
                            <strong>Email</strong>
                            chacmolmon3@gmail.com
                        </li>
                        <li>
                            <strong>Dirección</strong>
                            San Miguel El Grande
                        </li>
                        <li>
                            <strong>Cargo</strong>
                            <span>Estudiante</span>
                        </li>
                    </ul>
                </div>

               
                </div>
            </div>
            <button>
                Descargar CV <i class="fa-solid fa-download"></i>
                <span class="overlay"></span>
            </button>
        </div>
    </section>

    <!-- SECCION SKILLS -->
    <section class="skills" id="skills">
        <div class="contenido-seccion">
            <h2>Skills</h2>
            <div class="fila">
                <!-- Technical Skill -->
                <div class="col">
                    <h3>Technical Skills</h3>
                    <div class="skill">
                        <span>Javascript</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>55%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>HTML & CSS</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Photoshop</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>25%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Wordpress</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Drupa</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>25%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Professional Skills -->
                <div class="col">
                    <h3>Professional Skills</h3>
                    <div class="skill">
                        <span>Comunicación</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Trabajo en Equipo</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Creatividad</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Dedicación</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>65%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Proyect Management</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>10%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- SECCION DE HOBBIES -->
    <section class="hobbies" id="hobbies">
        <div class="contenido-seccion">
            <div class="fila">
                <div class="col">
                    <h3>Intereses</h3>
                    <div class="contenedor-intereses">
                        <div class="interes">
                            <i class="fa-solid fa-gamepad"></i>
                            <span>JUEGOS</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-headphones"></i>
                            <span>MUSICA</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-plane"></i>
                            <span>VIAJAR</span>
                        </div>
                        <div class="interes">
                            <i class="fa-brands fa-apple"></i>
                            <span>MAC OS</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-person-hiking"></i>
                            <span>DEPORTE</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-book"></i>
                            <span>LIBROS</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-car"></i>
                            <span>AUTOS</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-camera"></i>
                            <span>FOTOS</span>
                        </div>  
                    </div>
             </div>
         </div>
    </section>

    <!-- SECCION CURRICULUM -->
    <section id="curriculum" class="curriculum">
        <div class="contenido-seccion">
            <h2>Formacion Academica</h2>
            <div class="fila">
                <div class="col izquierda">
                    <h3>Educación</h3>
                    <div class="item izq">
                        <h4>Tecnico en Ofimatica</h4>
                        <span class="casa">Cbta 109</span>
                        <span class="fecha">2019 - 2021</span>
                        <p>Recibi mi educacion media superior en el Bachillerato Cbta 109, donde lleve princios de programacion y redes de telecomunicacion.</p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                    <div class="item izq">
                        <h4>Ing: TIC's</h4>
                        <span class="casa">TECNM Campus San Miguel el Grande</span>
                        <span class="fecha">2021 - 202?</span>
                        <p>Actualmente estoy recibiendo mi formacion superior donde estoy aprendiendo  a dominar los principios de programacion y otras areas Tecnoplogicas.</p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                </div>

                <div class="col derecha">
                    <h3>Experiencia de trabajo</h3>
                    <div class="item der">
                        <h4>Alura Principiante de programacion</h4>
                        <span class="casa">Alura</span>
                        <span class="fecha">2024 - 2024</span>
                        <p>Aprendi varios conceptos de programacion</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                    <div class="item der">
                        <h4>?</h4>
                        <span class="casa">?</span>
                        <span class="fecha">?</span>
                        <p>?</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION PORTFOLIO -->
    <section id="portfolio" class="portfolio">
        <div class="contenido-seccion">
            <h2>PORTFOLIO</h2>
            <div class="galeria">
                <div class="proyecto">
                    <img src="assets/images/ConversorMonedas.PNG" alt="">
                    <div class="overlay">
                        <h3>Conversor De Moneda</h3>
                        <p>html, css y js</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="assets/images/ConversorTempe.PNG" alt="">
                    <div class="overlay">
                        <h3>Conversor de Temperatura</h3>
                        <p>html, css y js</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="assets/images/Encriptador.PNG" alt="">
                    <div class="overlay">
                        <h3>Encriptador</h3>
                        <p>html, css y js</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="assets/images/Galeria.PNG" alt="">
                    <div class="overlay">
                        <h3>Galeria de Peliculas</h3>
                        <p>html, css y js</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="assets/images/JuegoSecreto.PNG" alt="">
                    <div class="overlay">
                        <h3>Juego Secreto</h3>
                        <p>html, css y js</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION CONTACTO -->
    <section id="contacto" class="contacto">
        <div class="contenido-seccion">
            <h2>CONTACTO</h2>
            <div class="fila">
                <!-- Formulario -->
                <div class="col">
                    <input type="text" placeholder="Tú Nombre">
                    <input type="text" placeholder="Número telefónico">
                    <input type="text" placeholder="Dirección de correo">
                    <input type="text" placeholder="Tema">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                    <button>
                        Enviar Mensaje<i class="fa-solid fa-paper-plane"></i>
                        <span class="overlay"></span>
                    </button>
                </div>
                <!-- Mapa -->
                <div class="col">
                    <img src="assets/images/ubicacion.png" alt="">
                    <div class="info">
                        <ul>
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                Santiago Laxopa, Av Juares S/N
                            </li>
                            <li>
                                <i class="fa-solid fa-mobile-screen"></i>
                                Llamanos: 951 - 430 -6030 
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                Email: chacmolmon3@gmail.com
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <a href="#inicio" class="arriba">
            <i class="fa-solid fa-angles-up"></i>
        </a>
        <div class="redes">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://github.com/Erikram12"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.linkedin.com/in/erik-jovani-martinez-ramirez-948443217/"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>