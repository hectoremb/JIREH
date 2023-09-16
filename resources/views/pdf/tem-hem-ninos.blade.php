<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{ $nombre }}</title>
    
  </head>
<style>
 

    .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }

    a {
      color: #0087C3;
      text-decoration: none;
    }

    body {
      position: relative; 
      width: 18cm;  
      height: 20.7cm; 
      margin: 0 auto; 
      color: #555555;
      background: #FFFFFF; 
      font-family: Arial, sans-serif; 
      font-size: 16px; 
      font-family: SourceSansPro;
    }

    header {
      padding: 10px 0;
      margin-bottom: 20px;
      border-bottom: 1px solid #AAAAAA;
    }

    #logo {
      float: left;
      margin-top: 0px;
    }

    #logo img {
      height: 110px;
    }

    #company {
      float: right;
      text-align: right;
    }


    #details {
      margin-bottom: 5px;
    }

    #client {
      padding-left: 10px;
      border-left: 6px solid #D5F4F4;
      float: left;
    }

   

    h2.name {
      font-size: 1.4em;
      font-weight: normal;
      margin: 0;
    }

    #invoice {
      float: right;
      text-align: right;
    }


   

    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
      margin-bottom: 20px;
    }

    /* lineas de la tabla */
    table th,
    table td {
      padding: 5px;
      background: #98E8E8;
      text-align: left;
      border-bottom: 0.2px solid black;
      font-size: 16px; 
    }



    table td {
      text-align: left;
    }

    table .desc {
      text-align: left;
      background: white;
    }

    table .unit {
      background: #D5F4F4;
    }

    table td.unit{
      font-size: 1.0em;
    }

    table .datos {
      font-size: 1.2em;
    }

    table .space{
      background: white;
      font-size: 0.6em;
      float: center;
      color: white;
    }

    table .lroja{
      background: white ;
      font-size: 1.0em;
      float: center;
    }

    table tbody tr:last-child td {
      border: none;
    }


    #notices{
      padding-left: 6px;
      border-left: 6px solid #D5F4F4;  
      font-size: 1.0em;
      float: left;
    }

</style>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="lab.jpg">
      </div>
      <div id="company">
       <h2 class="name"> <b>Laboratorio clínico “JIREH - LAB.”</b></h2><br>
          <div>Edificio Cañas Prieto, Local 17. Aguilares S. S.</div>
          <div>Entrada Principal, Escuela Modesto Barrios a continuación de<br> 
          Ferro Electrónica Palma, Constado Norte de Oficina Jurídica Lic. Ruballo</div><br>
          <div>Teléfono: 7902-1322</div>
      </div>
      
    </header>

    <main>

    <div class="datos"><strong>Datos del Cliente<br><br></strong></div>
    
      <div id="details" class="clearfix">  
         
        <div id="client">
          <div class="address">Nombre: {{ $nombre }} </div>
          <div class="address">Edad: {{ $edad }}</div>
          <div class="address">Sexo: {{ $sexo }}</div>
          <div class="address">Fecha: {{ $fecha }}</div>
        </div>
      </div>


      <center><h3>HEMOGRAMA PARA NIÑOS</h3></center>

     <!--  <h3><u>LINEA ROJA</u></h3> -->

      <table border="0" cellspacing="0" cellpadding="0">   
        <tr>
            <td class="lroja"> 
            <u><b>LINEA ROJA</b> </u>
            </td>
            <td class="lroja"> 
             
            </td>
            <td class="lroja"> 
             
            </td>
            <td class="lroja"> 
            </td>

          </tr>
        <thead>
          <tr>
            <th><strong>Prueba</strong></th>
            <th><strong>Resultado</strong></th>
            <th><strong>Valores de Referencia</strong></th>
            <th><strong>Observación</strong></th>
          </tr>
        </thead>
        <tbody id="invoiceItems">
		
          <tr>
            <td class="unit">Hematocrito</td>
            <td class="desc"> {{ $reshemotocrito }}</td>
            <td class="unit">38% - 51%</td>
            <td class="desc">{{ $obshemotocrito }}</td>
          </tr>
          <tr>
            <td class="unit">Hemoglobina</td>
            <td class="desc">{{ $reshemoglobolina }}</td> 
            <td class="unit">12.6  -  17.0 gr/dl</td>
            <td class="desc">{{ $obshemoglobolina }}</td>
          </tr>
          <tr>
            <td class="unit">Glóbulos Rojos</td>
            <td class="desc">{{ $resglobulosrojos }}</td>
            <td class="unit">4.18  -  5.61 mm3</td>
            <td class="desc">{{ $obsglobulosrojos }}</td>
          </tr>

          <tr>
            <td class="unit">Vgm</td>
            <td class="desc"> {{ $resvgm }}</td>
            <td class="unit">80 - 100 Ft</td>
            <td class="desc">{{ $obsvgm }}</td>
          </tr>
          <tr>
            <td class="unit">Hcm</td>
            <td class="desc">{{ $reshcm }}</td> 
            <td class="unit">26 - 38 Pg.</td>
            <td class="desc">{{ $reshcm }}</td>
          </tr>
          <tr>
            <td class="unit">Chcm</td>
            <td class="desc">{{ $resChbcm }}</td>
            <td class="unit">31   -   37 gr/dl</td>
            <td class="desc">{{ $obsChbcm }}</td>
          </tr>
           <tr>
            <td class="unit">Plaquetas</td>
            <td class="desc"> {{ $plaque }} </td>
            <td class="unit">150.000 - 450.000 mm3</td>
            <td class="desc">{{  $obsplaque }}</td>
          </tr>

          <tr>
            <td class="space"  style="border-bottom: 0px;"> 
          
            </td>
            <td class="space"  style="border-bottom: 0px;"> 
             
            </td>
            <td class="space"  style="border-bottom: 0px;"> 
             
            </td>
            <td class="space"  style="border-bottom: 0px;"> 
            </td>

          </tr>

          <tr>
            <td class="lroja" style="border-bottom: 0px;"> 
            <u><b>LINEA ROJA</b></u>
            </td>
            <td class="lroja"  style="border-bottom: 0px;"> 
             
            </td>
            <td class="lroja"  style="border-bottom: 0px;"> 
             
            </td>
            <td class="lroja"  style="border-bottom: 0px;"> 
            </td>

          </tr>
		 
          <tr>
            <th><strong>Prueba</strong></th>
            <th><strong>Resultado</strong></th>
            <th><strong>Valores de Referencia</strong></th>
            <th><strong>Observación</strong></th>
          </tr>
        
		
          <tr>
            <td class="unit">Glóbulos Blancos</td>
            <td class="desc"> {{ $resglobulosblanco }}</td>
            <td class="unit">5,000 - 10,000mm3</td>
            <td class="desc">{{ $obsglobulosblanco }}</td>
          </tr>
          <tr>
            <td class="unit">Neutrófilos</td>
            <td class="desc">{{ $resneutrofilos }}</td> 
            <td class="unit">50%  -  70%</td>
            <td class="desc">{{ $obsneutrofilos }}</td>
          </tr>
          <tr>
            <td class="unit">Linfocitos</td>
            <td class="desc">{{ $reslinfocitos }}</td>
            <td class="unit">20% - 40 %</td>
            <td class="desc">{{ $obslinfocitos }}</td>
          </tr>

          <tr>
            <td class="unit">Monocitos</td>
            <td class="desc">{{ $resmonocitos }}</td>
            <td class="unit">2% - 8%</td>
            <td class="desc">{{ $obsmonocitos }}</td>
          </tr>
          <tr>
            <td class="unit">Eosinofilos</td>
            <td class="desc">{{ $reseosinofilos }}</td> 
            <td class="unit">0% - 5%</td>
            <td class="desc">{{ $obseosinofilos }}</td>
          </tr>
          <tr>
            <td class="unit">Basófilos</td>
            <td class="desc">{{ $resbasofilico }}</td>
            <td class="unit">0% - 1%</td>
            <td class="desc">{{ $obsbasofilico }}</td>
          </tr>
          <tr>
            <td class="desc"  colspan="4" >Observaciones: {{ $observaciones }}
            </td>
           <!--  <td class="desc"></td>
            <td class="desc"></td>
            <td class="desc"></td> -->
          </tr>
	 
        </tbody>
     </table>

<br>
      <div id="notices">
        <div>Lic.Manuel Rosales</div>
       </div>
    </main>




  </body>
</html>
