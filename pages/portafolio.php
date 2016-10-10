<div class="container">
    <h1 class="titulo-blue text-center">Portafolio</h1>
</div>
<div class="container padding-lr-cero">
    <div class="col-md-6">
        <h3 class="titulo-blue">Somos percibidos por nuestros clientes:</h3>
        <div class="primeralinea text-justify">
            <p>Como una empresa que ejecuta los trabajos con calidad, profesionalismo, siempre construyendo con seguridad y respetando la normatividad de la Comisión Federal de Electricidad. Responsabilidad, Rentabilidad, Calidad, Efectividad.</p>
        </div>
    </div>
    <div class="col-md-6">
        <h3 class="titulo-blue">Nos diferenciamos de la competencia por:</h3>
        <div class="primeralinea text-justify">
            <p>Contamos con personal capacitado para la ejecución de los proyectos eléctricos y electromecánicos que cumplen con las diferentes normas eléctricas de la Comisión Federal de Electricidad, no subcontratamos los trabajos ya que constamos con la infraestructura suficiente para la ejecución de los mismos, ahorrando tiempo y dinero</p>
        </div>
    </div>
</div>
<?php
$archivo = file_get_contents("trayectoria.json", TRUE);
$trayectoria = array();
if ($archivo) {
    $trayectoria = json_decode($archivo, true);
}
?>
<div class="container">
    <div class="col-xs-12">
        <h3 class="titulo-blue text-center margin-bottom-5 title-shadow">Trayectoria</h3>
        <p class="text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in lorem massa. Suspendisse mollis aliquam tortor at convallis. Donec blandit augue sed libero congue pharetra. Vestibulum tempor nec ante non ultricies. Duis neque nibh, tincidunt nec massa ut, hendrerit volutpat nulla. Curabitur ullamcorper, metus a eleifend interdum, nisl nulla condimentum sapien, fringilla sodales magna dolor sit amet dolor. Cras et nunc sed purus aliquam dictum et quis ante. Ut ipsum justo, feugiat id orci eu, luctus vulputate orci. Fusce id augue in massa gravida semper et eu mauris. Maecenas dignissim maximus faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
        </p>
        
    </div>
    
</div>
    
<div class="container">
<div class="fresh-table toolbar-color-orange margin-bottom">
    <!--    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange                  
            Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
    -->


    <table id="fresh-table" class="table">
        <thead>
        <th data-field="id" data-sortable="true">ID</th>
        <th data-field="cliente"  data-sortable="true">Cliente</th>
        <th data-field="descripcion">Descripción</th>
        <th data-field="lugar"  data-sortable="true">Lugar</th>
        <th data-field="fecha"  data-sortable="true">Fecha</th>
        <th data-field="convocatoria" >Convocatoria</th>
        </thead>
        <tbody>
            <?php
            $contador = 1;
            foreach ($trayectoria as $indice => $cliente):
                ?>
                <tr>
                    <td><?php echo $indice; ?></td>
                    <td><?php echo $cliente['cliente']; ?></td>
                    <td><?php echo $cliente['trabajo']; ?></td>
                    <td><?php echo $cliente['lugar']; ?></td>
                    <td><?php echo date("d/m/Y", strtotime($cliente['fecha'])); ?></td>
                    <td><?php echo $cliente['convocatoria']; ?></td>
                </tr>
                <?php
            endforeach;
            ?>


        </tbody>
    </table>
</div>
</div>
    