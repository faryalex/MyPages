<?php
include("./Template/cabecera.php"); 
include("./Template/btnWhat.php");
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CharyCris</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <div class="single-hero-slide bg-img" style="background-image: url(ImgCharyCris/cacao2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">Nuestro cacao, Tu Placer</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Explora el mundo <br>del chocolate y el
                                    cacao.</h2>
                                <a href="./productos.php" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Conoce
                                    Nuestros Productos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slide bg-img" style="background-image: url(ImgCharyCris/cacao1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">Nuestro cacao, Tu Placer</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Explora el mundo <br>del chocolate y el
                                    cacao</h2>
                                <a href="#" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Conoce
                                    Nuestros Productos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="academy-courses-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp"
                        data-wow-delay="300ms">
                        <div class="course-icon">
                            <img src="ImgCharyCris/envio.png" alt="">
                        </div>
                        <div class="course-content">
                            <h4>Envío Seguro:</h4>
                            <p style="text-align: justify;">Garantizamos el envío de tu producto eficazmente y en perfectas condiciones.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp"
                        data-wow-delay="400ms">
                        <div class="course-icon">
                            <img src="ImgCharyCris/calidad.png" alt="">
                        </div>
                        <div class="course-content">
                            <h4>Garantía de Calidad:</h4>
                            <p style="text-align: justify;">Comprometidos con la excelencia, solo ofrecemos los mejores chocolates de calidad
                                premium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp"
                        data-wow-delay="500ms">
                        <div class="course-icon">
                            <img src="ImgCharyCris/rapidez.png" alt="">
                        </div>
                        <div class="course-content">
                            <h4>Tiempo de Entrega:</h4>
                            <p style="text-align: justify;">Te entregamos tus chocolates a tiempo para que disfrutes de su frescura.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp"
                        data-wow-delay="600ms">
                        <div class="course-icon">
                            <img src="ImgCharyCris/devolucion.png" alt="">
                        </div>
                        <div class="course-content">
                            <h4>Envios a nivel Nacional: </h4>
                            <p style="text-align: justify;">Realizamos entregas a nivel nacional por medio de Servientrega.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp"
                        data-wow-delay="700ms">
                        <div class="course-icon">
                            <img src="ImgCharyCris/atencionCliente.png" alt="">
                        </div>
                        <div class="course-content">
                            <h4>Atención al Cliente:</h4>
                            <p style="text-align: justify;">Estamos al teléfono, email, whatsapp, siempre que lo necesites, de Lunes a Viernes,
                               en nuestros horarios de 9:00 am a 17:00 pm.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp"
                        data-wow-delay="800ms">
                        <div class="course-icon">
                            <img src="ImgCharyCris/redes.png" alt="">
                        </div>
                        <div class="course-content">
                            <h4>Redes Sociales: </h4>
                            <p style="text-align: justify;">Síguenos en redes sociales y mantente al día con nuestras últimas novedades y ofertas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonials-area section-padding-100 bg-img bg-overlay"
        style="background-image: url(ImgCharyCris/cacao3.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                        <span>Nuestra Historia</span>
                        <h3>Un viaje desde la semilla de cacao hasta la dulce historia de nuestra pasión por el
                            chocolate.</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp">
                        <div class="testimonial-thumb">
                            <img src="ImgCharyCris/finca.png" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h5>La Finca</h5>
                            <p style="text-align: justify;">Es el lugar en donde se produce la planta que nos llena de ilusion para poder complacer tu paladar con nuestro delicioso producto, aqui es donde nace el cacao para la produccion de un exquisito chocolate. </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="500ms">
                        <div class="testimonial-thumb">
                            <img src="ImgCharyCris/familia.png" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h5>Familia</h5>
                            <p style="text-align: justify;">Símbolo de la lucha de vida y la unión por un bien común, aquí nace el ideal de llegar a conquistar sus corazones con un producto fabricado desde el amor de quienes conformamos CharyCris.

                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="600ms">
                        <div class="testimonial-thumb">
                            <img src="ImgCharyCris/trabajo.png" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h5>Trabajo</h5>
                            <p style="text-align: justify;">Manejamos un esquema organizado mediante roles fundamentales para que la producción de nuestro chocolate sea de calidad.</p>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="700ms">
                        <div class="testimonial-thumb">
                            <img src="ImgCharyCris/recompenza.png" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h5>Fruto del Esfuerzo</h5>
                            <p style="text-align: justify;">En CharyCris esperamos llenar los corazones de cada familia que deguste de nuestro producto, confiamos en seguir creciendo y llevando nuestra inspiración en alto.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="800ms">
                        <a href="./galeria.php" class="btn academy-btn">Visita nuestra galería de Imagenes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="top-popular-courses-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>Encuentranos</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3989.791078941954!2d-78.4077574250354!3d-0.2117268997861869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMMKwMTInNDIuMiJTIDc4wrAyNCcxOC43Ilc!5e0!3m2!1ses!2sec!4v1695149230657!5m2!1ses!2sec"
                    width="900" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>

            </div>
        </div>

        <div class="container text-center">
            <div id="daily-visits-counter" class="custom-counter">
                <h5 class="contadorVisitas">Visitas Diarias</h5>
                <p id="visits-count" class="NumVisitas"></p>

            </div>
        </div>
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/plugins/plugins.js"></script>
        <script src="js/active.js"></script>
        <script src="js/ContadorVisitas.js"></script>

<?php
include("./Template/pie.php"); 
?>
