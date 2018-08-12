<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brandink</title>
    <link rel="stylesheet" type="text/css" href="style/index.css" />
    <link rel="stylesheet" type="text/css" href="style/lightbox.min.css" />
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    <script>
        // When the user clicks on div, open the popup
        function myFunction() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");                            // Generate Popup
            /*setTimeout(() => {
                popup.classList.toggle("show");                        // Remove Popup
            }, 2000);*/
        }
    </script>
</head>

<body>
    <!-- <section class="section_1"> -->
    <div class="bgimg">
        <!-- <div class="title">
            <div class="small_line"></div>
            <span class="big_text">BRANDINK</span>
        </div> -->
    </div>
    <!-- </section> -->

    <!-- <p style="padding:5px 15px">This example creates a full page background image. Try to resize the browser window to see how it always will cover the
        full screen (when scrolled to top), and that it scales nicely on all screen sizes.</p> -->

    <section class="section_2" >
        <div class="caption">
            <span class="border">SOBRE NOSOTROS</span>
        </div>
        <br/>
        <div class="line_2"></div>
        <div class="sec2_box_text">
            <p class="barlow_p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum molestiae eaque itaque nemo repellendus rem odit dolorem, est unde et. Culpa, id. Laboriosam enim eum, quos aperiam optio sed ea!</p>
        </div>
        <div class="sec2_options">
            <div class="img_with_text">
                <img class="sec2_imgs" src="style/images/Brandink_wear.jpg" alt="Brand Wear">
                <p class="barlow_p">Brand Wear</p>
            </div>
            <div class="img_with_text">
                <img class="sec2_imgs" src="style/images/Brandink_package.jpg" alt="Brand Package">
                <p class="barlow_p">Brand Package</p>
            </div>
            <div class="img_with_text">
                <img class="sec2_imgs" src="style/images/Brandink_office.jpg" alt="Brand Office">
                <p class="barlow_p">Brand Office</p>
            </div>
            <div class="img_with_text">
                <img class="sec2_imgs" src="style/images/Brandink_sticker.jpg" alt="Brand Sitcks">
                <p class="barlow_p">Brand Sitcks</p>
            </div>
            <div class="img_with_text">
                <img class="sec2_imgs" src="style/images/Brandink_events.jpg" alt="Brand Events">
                <p class="barlow_p">Brand Events</p>
            </div>
        </div>
    </section>

    <section class="section_3">
        <div class="caption">
            <span class="border">PORTFOLIO</span>
        </div>
        <br/>
        <div class="line"></div>
        <!-- <div class="sec2_box_text">
            <p class="barlow_p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum molestiae eaque itaque nemo repellendus rem odit dolorem,
                est unde et. Culpa, id. Laboriosam enim eum, quos aperiam optio sed ea!</p>
        </div> -->

        <!-- Puedo añadir un nombre a cada imagen: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_image_overlay_opacity -->
        <!-- Crear galeria - https://www.youtube.com/watch?v=C1B1Fx3XKOg -->
        <!-- También puedo meterlo en un container en el centro de la pantalla -->
        <div class="row">
            <div class="column">
                <div class="sup">
                    <a href="style/images/BRANDINK_SUDADERA.jpg" data-lightbox="mygallery" data-title="SUDADERA">
                        <img class="item" src="style/images/BRANDINK_SUDADERA.jpg" alt="Sudadera">
                        <div class="middle">
                            <p>SUDADERA</p>
                        </div>  
                    </a>
                </div>
                <div class="sup">
                    <a href="style/images/BRANDINK_ETIQUETAS.jpg" data-lightbox="mygallery" data-title="ETIQUETAS">
                        <img class="item" src="style/images/BRANDINK_ETIQUETAS.jpg" alt="Etiquetas">
                        <div class="middle">
                            <p>ETIQUETAS</p>
                        </div>
                    </a>
                </div>

                <div class="sup">
                    <a href="style/images/BRANDINK_PAPELERIA.jpg" data-lightbox="mygallery" data-title="PAPELERIA">
                        <img class="item" src="style/images/BRANDINK_PAPELERIA.jpg" alt="Papeleria">
                        <div class="middle">
                            <p>PAPELERÍA</p>
                        </div>
                    </a>
                </div>
                
                <div class="sup">
                    <a href="style/images/BRANDINK_PAPEL_ENVOLVER.jpg" data-lightbox="mygallery" data-title="PAPEL PARA ENVOLVER">
                        <img class="item" src="style/images/BRANDINK_PAPEL_ENVOLVER.jpg" alt="Papel_envolver">
                        <div class="middle">
                            <p>PAPEL PARA ENVOLVER</p>
                        </div>
                    </a>
                </div>

                <div class="sup">
                    <a href="style/images/BRANDINK_MALETA_MANO.jpg" data-lightbox="mygallery" data-title="MALETA DE MANO">
                        <img class="item" src="style/images/BRANDINK_MALETA_MANO.jpg" alt="Maleta_de_mano">
                        <div class="middle">
                            <p>MALETA DE MANO</p>
                        </div>
                    </a>
                </div>

                <div class="sup">
                    <a href="style/images/BRANDINK_BOTELLA.jpg" data-lightbox="mygallery"  data-title="BOTELLA DE VINO">
                        <img class="item" src="style/images/BRANDINK_BOTELLA.jpg" alt="Botella_de_vino">
                        <div class="middle">
                            <p>BOTELLA DE VINO</p>
                        </div>
                    </a> 
                </div>
            </div>
            <div class="column">
                <div class="sup">
                    <a href="style/images/4Camisetas.jpg" data-lightbox="mygallery" data-title="CAMISETAS">
                        <img class="item" src="style/images/4Camisetas.jpg" alt="Camisetas">
                        <div class="middle">
                            <p>CAMISETAS</p>
                        </div>
                    </a>
                   
                </div>

                <div class="sup">
                    <a href="style/images/BRANDINK_SELLO.jpg" data-lightbox="mygallery" data-title="SELLOS">                    
                        <img class="item" src="style/images/BRANDINK_SELLO.jpg" alt="Sellos">
                        <div class="middle">
                            <p>SELLOS</p>
                        </div>
                    </a>
                    
                </div>

                <div class="sup">
                    <a href="style/images/BRANDINK_LIBRETA.jpg" data-lightbox="mygallery" data-title="LIBRETA">                    
                        <img class="item" src="style/images/BRANDINK_LIBRETA.jpg" alt="Libreta">
                        <div class="middle">
                            <p>LIBRETA</p>
                        </div>
                    </a>
                    
                </div>

                <div class="sup">
                    <a href="style/images/BRANDINK_PLAYERA_MANO.jpg" data-lightbox="mygallery" data-title="BOLSA PLAYERA">                    
                        <img class="item" src="style/images/BRANDINK_PLAYERA_MANO.jpg" alt="Bolsa Playera">
                        <div class="middle">
                            <p>BOLSA PLAYERA</p>
                        </div>
                    </a>
                </div>
                
                <div class="sup">
                    <a href="style/images/BRANDINK_COFFEE_CUP.jpg" data-lightbox="mygallery" data-title="CAFE COVER">                    
                        <img class="item" src="style/images/BRANDINK_COFFEE_CUP.jpg" alt="Cafe cover">
                        <div class="middle">
                            <p>CAFE COVER</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="column">
                <div class="sup">
                    <a href="style/images/BRANDINK_CAMISETA_CAJA.jpg" data-lightbox="mygallery" data-title="BRAND STICKERS">                    
                        <img class="item" src="style/images/BRANDINK_CAMISETA_CAJA.jpg" alt="Brand Sitckers">
                        <div class="middle">
                            <p>BRAND STICKERS</p>
                        </div>
                    </a>
                </div>
                    
                <div class="sup">
                    <a href="style/images/BRANDINK_SOBRE_KRAFT.jpg" data-lightbox="mygallery" data-title="SOBRES">                    
                        <img class="item" src="style/images/BRANDINK_SOBRE_KRAFT.jpg" alt="Sobres">
                        <div class="middle">
                            <p>SOBRES</p>
                        </div>
                    </a>
                </div>
                    
                <div class="sup">
                    <a href="style/images/BOLSA_KRAFT.jpg" data-lightbox="mygallery" data-title="BOLSA">                    
                        <img class="item" src="style/images/BOLSA_KRAFT.jpg" alt="Bolsa">
                        <div class="middle">
                            <p>BOLSAS</p>
                        </div>
                    </a>
                    
                </div>
                
                <div class="sup">
                    <a href="style/images/BRANDINK_FOOD_PACKAGE.jpg" data-lightbox="mygallery" data-title="FOOD PACKAGING">                    
                        <img class="item" src="style/images/BRANDINK_FOOD_PACKAGE.jpg" alt="Food Package">
                        <div class="middle">
                            <p>FOOD PACKAGING</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section_4">
        <div class="caption">
            <span class="border">NUESTROS CLIENTES</span>
        </div>
        <br/>
        <div class="line"></div>
        <!--<div class="sec2_box_text">
            <p class="barlow_p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum molestiae eaque itaque nemo repellendus rem odit dolorem,
                est unde et. Culpa, id. Laboriosam enim eum, quos aperiam optio sed ea!</p>
        </div>-->
        <div class="sec2_options">
            <img class="sec4_inditex" src="style/images/clientes/INDITEX.png" alt="INDITEX">
            <img class="sec4_nike" src="style/images/clientes/NIKE.png" alt="NIKE">
            <img class="sec4_mrjeff" src="style/images/clientes/MRJEFF.png" alt="MRJEFF">
            <img class="sec4_sporcks" src="style/images/clientes/SPORKS.png" alt="SPORCKS">
            <img class="sec4_fnac" src="style/images/clientes/FNAC.png" alt="FNAC">
            <img class="sec4_nbn" src="style/images/clientes/NBN.png" alt="NBN23">
            <img class="sec4_primark" src="style/images/clientes/PRIMARK.png" alt="PRIMARK">
        </div>
    </section>

    <section class="section_5">
        <div class="caption">
            <span class="border">CONTACTO</span>
        </div>
        <br/>
        <div class="line"></div>
        <!--<div class="sec2_box_text">
            <p class="barlow_p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum molestiae eaque itaque nemo repellendus rem odit dolorem,
                est unde et. Culpa, id. Laboriosam enim eum, quos aperiam optio sed ea!</p>
        </div>-->

        <form action="contactform.php" method="post">
            <div class="wrapper">
                <input type="text" name="name" placeholder="Nombre*" value="" required>
                <input type="email" name="email" placeholder="Email*" value="" required>
                <textarea name="message" placeholder="Mensaje"></textarea>
            </div>
            <button class="submit_button" type="submit" name="submit">Enviar</button>
            <div class="popup">
                <span class="popuptext" id="myPopup">Email enviado correctamente!</span>
            </div>
        </form>

    </section>

    <div class="footer">
        <img class="logo" src="style/images/clientes/BRANDINK.png" alt="Brandink_Logo">
        <br/>
        <div class="footer_container">
            <span>PREGUNTAS FRECUENTES</span>
            <span>CONTACTO</span>
            <span>TRABAJA CON NOSOTROS</span>
        </div>
        <p>© 2018 Brandink</p>
    </div>

    

    <!-- <img src="style/images/Profile.jpg" alt="Brand Logo"> -->
</body>

</html>