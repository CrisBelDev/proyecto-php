<style type="text/css">
<!--
.header_table{width: 100%;border: 1px solid #000;border-radius: 8px;}
.footer_table{width: 100%;border: none;}
.titulo{text-align: center;font-size: 18px;font-weight: 100;padding: 10px;}
.container{width: 100%;}
table.tabla {border: solid 1px #5544DD;font-size: 12px;margin: 10px;vertical-align: top;border-collapse: collapse;}
.tabla tr{vertical-align: top;}
.tabla td{padding: 15px 8px;border:1px solid #000;text-align: left;}    
.cabezera {font-size: 13px;font-weight: normal;padding: 8px;background: #ccc;color: #000;}
.cabezera th{border: solid 1px #000;padding: 8px; }
.datos{width: 100%;padding: 10px;border: 1px solid #000;border-radius: 8px;margin-left: 10px;}
.datos p{margin: 0px;padding-top: 5px;font-size: 12px;}
.negrita{font-weight: bold;margin-right: 15px;}
/*text-align: left; border: solid 1px #337722; background: #CCFFCC"*/
-->
</style>
<page orientation="paysage"  backtop="10mm" backbottom="10mm" backleft="15mm" backright="15mm">
    <?php
        $nb = 4;
        for($i=0;$i<$nb;$i++){
    ?>
        
        <page_header>
            <table class="header_table">
                <tr>
                    <td style="text-align: left;    width: 33%">MINISTERIO DE DEFENSA</td>
                    <td style="text-align: center;    width: 34%">UNIDAD DE RECURSOS HUMANOS</td>
                    <td style="text-align: right;    width: 33%"><?php //echo date('d/m/Y'); ?></td>
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

        <div  class="titulo">PLANILLA DE ASISTENCIA</div>
        
        
        <div class="datos">
            <p><span class="negrita">EVENTO:</span> <?php echo $respuesta[0]["nombre_curso"] ?></p>   
            <p><span class="negrita">FECHA DE INICIO:</span> <?php echo $respuesta[0]["fecha_inicio"]; ?></p>
            <p><span class="negrita">FECHA DE FINALIZACION:</span> <?php echo $respuesta[0]["fecha_fin"]; ?></p>
            <p><span class="negrita">HORARIO DE INGRESO:</span> <?php echo $respuesta[0]["horario_ingreso"]; ?></p>
            <p><span class="negrita">HORARIO DE SALIDA:</span> <?php echo $respuesta[0]["horario_salida"]; ?></p>
            
        </div>
        <table class="tabla" style="width: 100%;border: solid 1px #5544DD; border-collapse: collapse" align="center">
            <thead >
                <tr class="cabezera">
                    <th style="width: 5%;">Nro</th>
                    <th style="width: 7%;">Ci</th>
                    <th style="width: 9%;">Nombre</th>
                    <th style="width: 9%;">Paterno</th>
                    <th style="width: 9%;">Materno</th>

                    <th style="width: 15%;">firma 1</th>
                    <th style="width: 15%;">firma 2</th>
                    <th style="width: 15%;">firma 3</th>
                    <th style="width: 15%;">firma 4</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php 
                    $c=1;
                    if(isset($respuesta)){
                        foreach ($respuesta as $row => $item) {
                            echo "<tr>
                                    <td>".$c."</td>
                                    <td>".$item["ci"]."</td>
                                    <td>".$item["nombre"]."</td>
                                    <td>".$item["paterno"]."</td>
                                    <td>".$item["materno"]."</td>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>";
                                $c++;
                        }
                    }
                ?>
            </tbody>
        </table>
       
        <?php 
            if($i+1<$nb){
                echo"<page pageset='old'></page> ";
            }else{
               
            }
         ?>
        
    <?php
        }
    ?>
    
   


</page>



