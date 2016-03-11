<div class="container">
    <h2 class="titulo-blue">Contáctanos</h2>
</div>
<div id="map" class="container-fluid"></div>
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
            title: 'Electrificación y Construcción Angeles S. A. de C. V.'
        });
        marker.addListener('click', function () {
            infowindow.open(map, marker);
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>

<div class="container">
    <div class="row padding-centro">
        <div class="col-md-4">
            <p>Av. Nicolás Romero #42, Colonia Hidalgo en Nicolás Romero, Estado de México</p>
            <a class="" href="whatsapp://send?text=https://goo.gl/maps/sRP6Vh5u9B92"><img src="img/contacto/whatsapp.png"></a>
        </div>
        <div class="col-md-8">
            <form class="well form-horizontal" action=" " method="post"  id="contact_form">
                <fieldset>

                    <!-- Form Name -->
                    <legend>!Comunicate con nosotros!</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Nombre</label>  
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  name="first_name" placeholder="Nombre completo" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail</label>  
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="email" placeholder="correo@dominio.com" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>


                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Teléfono</label>  
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input name="phone" placeholder="(55)1234-1212" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text area -->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Comentario</label>
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <textarea class="form-control" name="comment" placeholder="Deja tu comentario ó duda"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Success message -->
                    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-warning" >Enviar <span class="glyphicon glyphicon-send"></span></button>
                        </div>
                    </div>

                </fieldset>
                
            </form>
        </div>
    </div>
</div>