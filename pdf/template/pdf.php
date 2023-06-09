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
/*.container{
    width: 100%;

}*/

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
    width: 582px;
    padding: 10px;
    border-bottom: 3px solid  #000;
    border-top: 1px solid #000;
    margin-bottom: 5px;
    /*border-radius: 8px;*/
    /*margin-left: 10px;*/
    /*background: orange;*/
}
.datos p{
    margin:5px;
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
<page backtop="15mm" backbottom="40mm" backleft="5mm" backright="20mm">
    <page_header>
        
    </page_header>
    <page_footer>
        <table class="footer_table">
            <tr>
                <td style="text-align: left;    width: 50%">Unidad de recursos Humanos</td>
                <td style="text-align: right;    width: 50%">pagina [[page_cu]]/[[page_nb]]</td>
            </tr>
        </table>
    </page_footer>

    <div  class="titulo" style="margin-top: 30px;">REPORTE DE PERSONAL VIGENTE</div>
   
    
    
    <div>
        
    </div>
    <table class="tabla" style="width: 100%;border: solid 1px #5544DD; border-collapse: collapse" align="center">
        <thead >
            <tr class="cabezera">
                <th style="width: 5%;">Nro</th>
                <th style="width: 15%;">Ci</th>
                <th style="width: 25%;">Nombre</th>
                <th style="width: 25%;">Paterno</th>
                <th style="width: 25%;">Materno</th>
                <th style="width: 10%;">Cargo</th>
                
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
                                <td>".$item["cargo"]."</td>
                            </tr>";
                            $c++;
                    }
                }
            ?>
        </tbody>
        
    </table>
  
</page>



