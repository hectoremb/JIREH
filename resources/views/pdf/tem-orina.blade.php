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
      font-size: 15px; 
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
          @if(!empty(request('fecha')))    
          <div class="address">Fecha: {{ $fecha }}</div>
          @endif  
        </div>
      </div>


      <center><div style="font-size: 20px;"><strong>EXAMEN GENERAL DE ORINA</strong></div></center>

     <!--  <h3><u>LINEA ROJA</u></h3> -->

      <table border="0" cellspacing="0" cellpadding="0">   
        <tr>
            <td class="lroja"  colspan="5" > 
            <u><b>Examen Físico – Químico</b> </u>
            </td>
            

          </tr>
        <thead>
          <tr>
            <th><strong>Prueba</strong></th>
            <th><strong>Resultado</strong></th>
            <td class="desc" width="5%;" style="border-bottom: 0px;"></td>
            <th><strong>Prueba</strong></th>
            <th><strong>Resultado</strong></th>
          </tr>
        </thead>
        <tbody id="invoiceItems">
		
          <tr>
            <td class="unit">Color</td>
            <td class="desc"> {{ $color }}</td>
            <td class="desc" width="5%;" style="border-bottom: 0px;"></td>
            <td class="unit">Glucosa</td>
            <td class="desc">{{ $glucosa }}</td>
          </tr>
          <tr>
            <td class="unit">Aspecto</td>
            <td class="desc">{{ $aspecto }}</td> 
            <td class="desc" width="5%;" style="border-bottom: 0px;"></td>
            <td class="unit">Urobilinogeno</td>
            <td class="desc">{{ $urobi }}</td>
          </tr>
          <tr>
            <td class="unit">Densidad</td>
            <td class="desc">{{ $densidad }}</td>
            <td class="desc" width="5%;" style="border-bottom: 0px;"></td>
            <td class="unit">Cuerpos Cetonicos</td>
            <td class="desc">{{ $centonicos }}</td>
          </tr>

          <tr>
            <td class="unit">Ph</td>
            <td class="desc">{{ $ph }}</td>
            <td class="desc" width="5%;" style="border-bottom: 0px;"></td>
            <td class="unit">Sangre Oculta</td>
            <td class="desc">{{ $sangreoculta }}</td>
          </tr>
          <tr>
            <td class="unit">Nitritos</td>
            <td class="desc">{{ $nitritos }}</td> 
            <td class="desc" width="5%;" style="border-bottom: 0px;"></td>
            <td class="unit">Bilirrubina</td>
            <td class="desc">{{ $bilirrubina }}</td>
          </tr>

          <tr>
            <td class="unit">Proteínas</td>
            <td class="desc">{{ $proteinas }}</td> 
            <td class="desc" width="5%;" style="border-bottom: 0px;"></td>
            <td class="unit">Esterasa leucocitaria</td>
            <td class="desc">{{ $estarasa }}</td>
          </tr>
          

          <tr>
            <td class="space"  style="border-bottom: 0px;"  colspan="5" >  
          
            </td>
            

          </tr>

          <tr>
            <td class="lroja" style="border-bottom: 0px;"  colspan="5" > 
            <u><b>Examen Microscópico</b></u>
            </td>
            

          </tr>

		
          <thead>
          <tr>
            <th><strong>Prueba</strong></th>
            <th><strong>Resultado</strong></th>
            <td class="desc" width="5%;" style="border-bottom: 0px;"></td>
            <th><strong>Prueba</strong></th>
            <th><strong>Resultado</strong></th>
          </tr>
        </thead>

          <tr>
            <td class="unit">Leucocitos</td>
            <td class="desc"> {{ $leucocitos }}</td>
            <td class="desc" width="5%;" style="border-bottom: 0px;"></td>
            <td class="unit">Hematíes</td>
            <td class="desc">{{ $hematies }}</td>
          </tr>
          <tr> 
            <td class="unit">Células Epiteliales</td>
            <td class="desc">{{ $epiteliales }}</td>
            <td class="desc" width="5%;" style="border-bottom: 0px;"></td>
            <td class="unit">Bacterias</td>
            <td class="desc">{{ $bacterias }}</td>
          </tr>
          <tr>
            <td class="unit">Cristales</td>
            <td class="desc">{{ $cristales }}</td>
            <td class="desc" width="5%;" style="border-bottom: 0px;"></td>
            <td class="unit">Levaduras</td>
            <td class="desc">{{ $levaduras }}</td>
          </tr>

          <tr>
            
            <td class="unit">Cilindros</td>
            <td class="desc">{{ $cilindros }}</td>
            <td class="desc" width="5%;" style="border-bottom: 0px;"></td>
            <td class="desc" style="border-bottom: 0px;"></td>
            <td class="desc" style="border-bottom: 0px;"></td>

          </tr>
         

      
         

          <tr>
            <td class="desc"  colspan="5" >Observaciones: {{ $observaciones }}
            </td>
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
