<style type="text/css">
<!--

.header_table{
    padding: 0px 20px;
    width: 100%;
    /*border: 1px solid #000;*/
    border-bottom: 3px solid #000;

    /*border-radius: 8px;*/
}
.footer_table{
    width: 100%;
    border: none;
}

.titulo{
    text-align: center;
    font-size: 18px;
    font-weight: 100;
    padding: 10px;
    
}
.container{
    width: 100%;

}

table.tabla {
    border: solid 1px #5544DD;
    font-size: 12px;
    /*margin: 10px;*/
    vertical-align: top;
    border-collapse: collapse;
}

.tabla tr{
    vertical-align: top;
}

.tabla td{
    padding: 8px;
    border:1px solid #000;
    text-align: left;
    
}    
.cabezera {
  font-size: 13px;
  font-weight: normal;
  padding: 8px;
  background: #ccc;
  color: #000;
}
.cabezera th{
    border: solid 1px #000;
    padding: 8px; 
}
.datos{
    width: 570px;
    padding: 10px;
    border: 1px solid #000;
    border-radius: 8px;
    /*margin-left: 10px;*/
    /*background: orange;*/
}
.datos .cabezera{
    /*width: 100%;*/

    background: #ccc;
    color: black;
    margin-top: 5px;
}
.datos div{
    margin: 0px;
    float: left;
    width: 70px;
    
    border: 1px solid #000;
}
table.liste         { border: solid 2px #FF0000; }
table.liste td      { background: #DDDDDD; }
table.liste td.col1 { color: #FF0000; }
/*text-align: left; border: solid 1px #337722; background: #CCFFCC"*/
-->
</style>
<page backtop="15mm" backbottom="40mm" backleft="20mm" backright="20mm">
    <page_header>
        <table class="header_table">
            <tr>
                <td style="text-align: left;    width: 33%"><img src="../views/img/pdf/recursos.jpg" style="width: 100px;"></td>
                <td style="text-align: center;    width: 34%">UNIDAD DE RECURSOS HUMANOS</td>
                <td style="text-align: right;    width: 33%"><img src="../views/img/pdf/logo.jpg" style="width: 100px;"></td>
            </tr>
        </table>
    </page_header>
    <page_footer>
        <table class="footer_table">
            <tr>
                <td style="text-align: left;    width: 50%">Unidad de recursos Humanos</td>
                <td style="text-align: right;    width: 50%">pagina [[page_cu]]/[[page_nb]]</td>
            </tr>
        </table>
    </page_footer>

    <div  class="titulo" style="margin-top: 40px;">INVENTARIO PERSONAL</div>
    
    <div class="datos">
            
        
                
       
        
        <table class="" style="style=width: 100%;border: solid 1px #5544DD; border-collapse: collapse" align="center">
            <thead>
                <tr>
                    <th style="width: 35%;">Patermo</th>
                    <th style="width: 35%;">Materno</th>
                    <th style="width: 30%;">Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $respuesta[0]["paterno"]; ?></td>
                    <td><?php echo $respuesta[0]["materno"]; ?></td>
                    <td><?php echo $respuesta[0]["nombre"]; ?></td>
                </tr>
            </tbody>
        </table>
        <table class="" style="style=width: 100%;border: solid 1px #5544DD; border-collapse: collapse;margin-top: 5px;" align="center">
            <thead>
                <tr>
                    <th style="width: 35%;">Nro de Documento</th>
                    <th style="width: 35%;">Expedido</th>
                    <th style="width: 30%;">Nro de Libreta Militar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $respuesta[0]["ci"]; ?></td>
                    <td><?php echo $respuesta[0]["expedido"]; ?></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table class="" style="style=width: 100%;border: solid 1px #5544DD; border-collapse: collapse;margin-top: 5px;" align="center">
            <thead>
                <tr>
                    <th style="width: 35%;">Fecha de Nacimiento</th>
                    <th style="width: 35%;">Lugar de Nacimiento</th>
                    <th style="width: 30%;">Nacionalidad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $respuesta[0]["fecha_nac"]; ?></td>
                    <td><?php echo $respuesta[0]["lugarNacimiento"]; ?></td>
                    <td><?php echo $respuesta[0]["nacionalidad"]; ?></td>
                </tr>
            </tbody>
        </table>

        <table class="" style="style=width: 100%;border: solid 1px #5544DD; border-collapse: collapse;margin-top: 5px;" align="center">
            <thead>
                <tr>
                    <th style="width: 35%;">Genero</th>
                    <th style="width: 35%;">Estado Civil</th>
                    <th style="width: 30%;">Telefeno</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php if($respuesta[0]["sexo"]=="M"){echo "MASCULINO";}else if($respuesta[0]["sexo"]=="F"){echo "FEMENINO";} ?></td>
                    <td><?php echo $respuesta[0]["estadoCivil"]; ?></td>
                    <td><?php echo $respuesta[0]["telefono"]; ?></td>
                </tr>
            </tbody>
        </table>

        <table class="" style="style=width: 100%;border: solid 1px #5544DD; border-collapse: collapse;margin-top: 5px;" align="center">
            <thead>
                <tr>
                    <th style="width: 35%;">Celular</th>
                    <th style="width: 35%;">Correo Electronico</th>
                    <th style="width: 30%;"></th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $respuesta[0]["celular"]; ?></td>
                    <td><?php echo $respuesta[0]["email"]; ?></td>
                    
                </tr>
            </tbody>
        </table>

        <table class="" style="style=width: 100%;border: solid 1px #5544DD; border-collapse: collapse;margin-top: 5px;">
            <thead>
                <tr>
                    <th style="width: 35%;">Direccion de domicilio</th>
                   
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $respuesta[0][6]; ?></td>
                 
                    
                </tr>
            </tbody>
        </table>
        
        
    </div>
    <br>
    <div class="" style="width: 615px;padding-bottom: 4px; border-bottom: 3px solid #000;">
        CAPACITACION
    </div>
    <br>
    <?php 
        $fecha = strtotime($respuesta[0]["fecha_inicio"]) ;
        $anio=date("Y", $fecha);
        $cantidad= count($respuesta);
        // echo $anio;
    ?>
    <table class="tabla" style="width: 570px;border: solid 1px #5544DD; border-collapse: collapse">
        <thead >
            <tr><td colspan="6"> GESTION <?php echo $anio; ?></td></tr>
            <tr class="cabezera">
                <th style="width: 10%;">Nro</th>
                <th style="width: 15%;">Evento</th>
                <th style="width: 25%;">Centro Educativo</th>
                <th style="width: 16%;">Fecha Inicio</th>
                <th style="width: 10%;">Fecha Fin</th>
                <th style="width: 20%;">Modalidad</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
                $c=1;
                $x=0;
                if(isset($respuesta)){
                    while ($x<$cantidad) {
                        if(date("Y",strtotime($respuesta[$x]["fecha_inicio"]))==$anio){
                            echo "<tr>
                                    <td>".$c."</td>
                                    <td>".$respuesta[$x]["nombre_curso"]."</td>
                                    <td>".$respuesta[$x]["nombre_institucion"]."</td>
                                    <td>".$respuesta[$x]["fecha_inicio"]."</td>
                                    <td>".$respuesta[$x]["fecha_fin"]."</td>
                                    <td>".$respuesta[$x]["modalidad"]."</td>
                                </tr>";
                                $x=$x+1;
                                $c++;
                            }else{
                                
                                $anio=date("Y",strtotime($respuesta[$x]["fecha_inicio"]));
                                echo "<tr><td colspan='6'>GESTION ".$anio."</td></tr>";
                                echo '<tr class="cabezera">
                                        <th style="width: 10%;">Nro</th>
                                        <th style="width: 15%;">Evento</th>
                                        <th style="width: 25%;">Centro Educativo</th>
                                        <th style="width: 16%;">Fecha Inicio</th>
                                        <th style="width: 10%;">Fecha Fin</th>
                                        <th style="width: 20%;">Modalidad</th>
                                        
                                    </tr>';
                                $c=1;
                            }
                            

                    }
                //     foreach ($respuesta as $row => $item) {
                //         if(date("Y",strtotime($item["fecha_inicio"]))==$anio){
                //             echo "<tr>
                //                     <td>".$c."</td>
                //                     <td>".$item["nombre_curso"]."</td>
                //                     <td>".$item["nombre_institucion"]."</td>
                //                     <td>".$item["fecha_inicio"]."</td>
                //                     <td>".$item["fecha_fin"]."</td>
                //                     <td>".$item["modalidad"]."</td>
                //                 </tr>";
                //             }else{
                //                 echo "<tr>ollolo</tr>";
                //                 $anio=date("Y",strtotime($item["fecha_inicio"]));
                //             }
                            
                //             $c++;
                //     }
                }
            ?>
        </tbody>
        
    </table>
  
</page>



