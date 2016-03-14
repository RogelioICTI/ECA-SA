
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Electrificación y Construcción Angeles S. A. de C. V.</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/fresh-bootstrap-table.css" rel="stylesheet" />
        <link href="css/theme.css" rel="stylesheet">
        
    
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">

        <!-- Custom CSS -->
        <link href="css/scrolling-nav.css" rel="stylesheet">

        <link href="css/ihover.css" rel="stylesheet">
        
        <link href="css/extras.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


        <link rel="shortcut icon" type="image/x-icon" href="img/icono.ico" />
    </head>

    <!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        <!-- Navigation -->
        <nav id="navbar_main" class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <img class="imagen_chiquilla" id="logo" src="img/logo_full_sombra.png"/>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a class="page-scroll" href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#nosotros">Nosotros</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#servicios">Servicios</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#portafolio">Portafolio</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Intro Section -->
        <section id="intro">
            <?php include_once 'pages/intro.php'; ?>
        </section>

        <!-- About Section -->
        <section id="nosotros" class="about-section">
            <?php include_once 'pages/about.php'; ?>


        </section>

        <!-- Services Section -->
        <section id="servicios" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Services Section</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="portafolio" class="portafolio-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php include_once('pages/portafolio.php'); ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contacto" class="contact-section">
            <?php include_once('pages/contacto.php'); ?>
        </section>
        
        <?php include_once 'pages/footer.php'; ?>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-table.js"></script>

        <!-- Scrolling Nav JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrolling-nav.js"></script>

    </body>


    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js" type="text/javascript"></script>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        var $table = $('#fresh-table'),
            //$alertBtn = $('#alertBtn'),
            full_screen = false;
            
        $().ready(function(){
            $table.bootstrapTable({
                toolbar: ".toolbar",
                showRefresh: true,
                search: true,
                showToggle: true,
                showColumns: true,
                pagination: true,
                striped: true,
                sortable: true,
                pageSize: 10,
                pageList: [5,10,25,50,100],
                
                formatShowingRows: function(pageFrom, pageTo, totalRows){
                    //do nothing here, we don't want to show the text "showing x of y from..." 
                },
                formatRecordsPerPage: function(pageNumber){
                    return pageNumber + " filas visibles";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                }
            });
        });
    
        $(function () {
            $alertBtn.click(function () {
                alert("You pressed on Alert");
            });
        });
        
    
        function operateFormatter(value, row, index) {
            return [
                '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
                    '<i class="fa fa-heart"></i>',
                '</a>',
                '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
                    '<i class="fa fa-edit"></i>',
                '</a>',
                '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
                    '<i class="fa fa-remove"></i>',
                '</a>'
            ].join('');
        }
    
        window.operateEvents = {
            'click .like': function (e, value, row, index) {
                alert('You click like icon, row: ' + JSON.stringify(row));
                console.log(value, row, index);
            },
            'click .edit': function (e, value, row, index) {
                console.log(value, row, index);    
            },
            'click .remove': function (e, value, row, index) {
                alert('You click remove icon, row: ' + JSON.stringify(row));
                console.log(value, row, index);
            }
        };
    
    </script>

    <script>
        $(document).ready(function () {
            /*$(window).resize(function () {
             var h = $(window).height(),
             offsetTop = 60; // Calculate the top offset
             
             $('#map').css('height', (h - offsetTop));
             }).resize();
             */


            $('#myCarousel').carousel();
            $(".collapse").collapse('hide');

            $('#contact_form').bootstrapValidator({
                // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                submitButton: '$contact_form button[type="submit"]',
                submitHandler: function (validator, form, submitButton) {
                    enviarMail(form);
                    $("#resultado").fadeIn();
                    return false;
                },
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    first_name: {
                        validators: {
                            stringLength: {
                                min: 2,
                            },
                            notEmpty: {
                                message: 'Por favor, ingresa tu nombre'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Por favor, ingresa tu E-Mail'
                            },
                            emailAddress: {
                                message: 'El formato valido es: correo@dominio.com'
                            }
                        }
                    },
                    phone: {
                        validators: {
                            notEmpty: {
                                message: 'Por favor, ingresa tu teléfono'
                            },
                            stringLength: {
                                min: 8,
                            },
                        }
                    },
                    comment: {
                        validators: {
                            stringLength: {
                                min: 10,
                                max: 200,
                                message: 'Por favor, ingresa al menos 10 caracteres y no más de 200'
                            },
                            notEmpty: {
                                message: 'Por favor, ingresa un comentario'
                            }
                        }
                    },
                    robot: {
                        validators: {
                            notEmpty: {
                                message: 'Por favor, ingresa la respuesta'
                            }
                        }
                    }
                }
            })
                    .on('success.form.bv', function (e) {
                        e.preventDefault();
                        $('#contact_form').data('bootstrapValidator').resetForm();

                    });
        });
    </script>

    <script>
        function enviarMail(form) {
            
            $.ajax({
                data: $("#contact_form").serialize(),
                //dataType: "json",
                url: 'enviar_mail.php',
                type: 'POST',
                beforeSend: function () {
                    $("#resultado").html('<div class="alert alert-info" role="alert">Procesando, espere por favor...</div>');
                },
                success: function (response) {
                    if (response.error == 'no') {
                        $("#input_name").val('');
                        $("#input_email").val('');
                        $("#input_phone").val('');
                        $("#input_description").val('');
                    }
                    var respuesta = JSON.parse(response);
                    var cadena = '<div class="alert ' + respuesta.alerta + '" role="alert">' + respuesta.mensaje + '</div>';
                   
                    
                    $("#resultado").html(cadena);
                    $('#contact_form').data('bootstrapValidator').resetForm();
                }
            });

            setTimeout(function () {
                $("#resultado").fadeOut('slow');
            }, 4000);

        }
    </script>
    
    <script>
  $('.popup').click(function(event) {
    var width  = 575,
        height = 400,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    = this.href,
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height +
                 ',top='    + top    +
                 ',left='   + left;
    
    window.open(url, 'twitter', opts);
 
    return false;
  });
</script>
</html>
