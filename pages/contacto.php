<div class="container">
    <h1 class="titulo-blue text-center">Contáctanos</h1>
</div>

<script>
    function initMap() {

        var infotext = 'Electrificación y Construcción Angeles S. A. de C. V.<br/><a href="https://goo.gl/maps/sRP6Vh5u9B92" target="_blank">Ver en Google Maps</a>';
        var mapDiv = document.getElementById('map');
        var myLatLng = {lat: 19.621792, lng: -99.311723};
        var infowindow = new google.maps.InfoWindow({
            content: infotext
        });

        var map = new google.maps.Map(mapDiv, {
            center: myLatLng,
            zoom: 16,
            //mapTypeControl: false,
            scrollwheel: false,
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Electrificación y Construcción Angeles S. A. de C. V.',
			icon: 'img/mini_ico.png'
        });
        marker.addListener('click', function () {
            infowindow.open(map, marker);
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap&key=AIzaSyBsIzVsSXMo6LGJXUx8vfvvUVyb8CqRzx4" async defer></script>

<div class="container">
    <div class="row">
        <div class="col-md-6 padding-centro">
            <div id="map" class="container-fluid"></div>
            <br/>
            <p><strong>Dirección:</strong> Av. Nicolás Romero #42, Colonia Hidalgo en Nicolás Romero, Estado de México</p>
            <p><strong>Teléfonos:</strong> (55)21683212 y (55)21685991</p>
            <div class="text-center">
                <a class="popup" href="http://www.facebook.com/sharer.php?u=http://<?php echo $_SERVER['SERVER_NAME']; ?>/">
                    <img src="img/contacto/facebook.png"
                </a>
                <a class="twitter popup" href="http://twitter.com/share?text=This%20is%20so%20easy">
                    <img src="img/contacto/twitter.png"
                </a>
                <a class="" href="whatsapp://send?text=Electrificación y Construcción Angeles S. A. de C. V.%0A(55)21683212%0A(55)21685991%0Ahttps://goo.gl/maps/sRP6Vh5u9B92">
                    <img src="img/contacto/whatsapp.png">
                </a>
            </div>
        </div>
        <div class="col-md-6 padding-centro">
            <form class="well form-horizontal" action="enviar_mail.php" method="post"  id="contact_form">
                <fieldset>

                    <!-- Form Name -->
                    <legend class="text-center">!Comunicate con nosotros!</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Nombre</label>  
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="input_name"  name="first_name" placeholder="Nombre completo" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail</label>  
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="input_email" name="email" placeholder="correo@dominio.com" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>


                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Teléfono</label>  
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input id="input_phone" name="phone" placeholder="(55)1234-1212" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text area -->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Comentario</label>
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <textarea id="input_description" class="form-control" name="comment" placeholder="Deja tu comentario ó duda"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">7 + 21 =</label>
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <input type="number" id="input_robot" class="form-control" name="robot" placeholder="Escribe la respuesta"></textarea>
                            </div>
                        </div>
                    </div>


                    <!-- Success message -->
                    <div class="form-group">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-8" align="right">
                            <div id="resultado"></div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <div class="col-md-12" align="right">
                            <button type="submit" class="btn btn-warning" >Enviar <span class="glyphicon glyphicon-send"></span></button>
                        </div>
                    </div>


                </fieldset>

            </form>
        </div>
    </div>
</div>