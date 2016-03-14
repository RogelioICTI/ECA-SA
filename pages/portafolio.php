<?php
$archivo = file_get_contents("trayectoria.json",TRUE);
$trayectoria=array();
if($archivo){
    $trayectoria = json_decode($archivo, true);
    
}

?>
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
                $contador=1;
                foreach ($trayectoria as $indice => $cliente):                   
                ?>
                <tr>
                    <td><?php echo $indice; ?></td>
                    <td><?php echo $cliente['cliente'];?></td>
                    <td><?php echo $cliente['trabajo'];?></td>
                    <td><?php echo $cliente['lugar'];?></td>
                    <td><?php echo date("d/m/Y", strtotime($cliente['fecha']));?></td>
                    <td><?php echo $cliente['convocatoria'];?></td>
                </tr>
                <?php
                endforeach;
                ?>
                
        
            </tbody>
        </table>
    </div>
<div class="clearfix"></div>