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
      margin-bottom: 20px;
    }

    #client {
      padding-left: 10px;
      border-left: 6px solid #D5F4F4;
      float: left;
    }

    #client .to {
      color: #777777;
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
      padding: 20px;
      background: white;
      text-align: left;
      border-bottom: 0.2px solid black;
    }

    table th {
      white-space: nowrap;        
      font-weight: normal;
    }

    table td {
      text-align: left;
    }

    table td h3{
      color: black;
      font-size: 1.2em;
      font-weight: normal;
      margin: 0 0 0 0;
    }

    table .no {
      color: black;
      font-size: 1.6em;
      background: #D5F4F4;
    }

    table .desc {
      text-align: left;
    }

    table .unit {
      background: #D5F4F4;
    }

    table .qty {
      background: white;
       float: top;
    }
    


    table td.unit,
    table td.qty{
      font-size: 1.2em;
    }

    table tbody tr:last-child td {
      border: none;
    }


    #notices{
      padding-left: 6px;
      border-left: 6px solid #D5F4F4;  
    }

    #notices .notice {
      font-size: 1.5em;
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

    <h3>Datos del Cliente</h3>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="address">Nombre: {{ $nombre }} </div>
          <div class="address">Edad: {{ $edad }}</div>
          <div class="address">Sexo: {{ $sexo }}</div>
          <div class="address">Fecha: {{ $fecha }}</div>
        </div>
    
      </div>


      <center><h3>VARIOS</h3></center>
      <table border="0" cellspacing="0" cellpadding="0">
        
        <thead>
          <tr>
            <td class="unit"  width="35%;">MUESTRA</th>
            <td class="desc" colspan="2" >{{ $muestra }}</th>
            
          </tr>
        </thead>
        <tbody id="invoiceItems">
		
          <tr>
            <td class="unit">PRUEBA</td>
            <td class="desc" colspan="2">VDRL - RPR</td>
          </tr>
          <tr>
            <td class="unit" >RESULTADO:</td>
            <td class="desc" colspan="2"> {{ $res }} </td>
          </tr>
		 
          <tr>
            <td class="desc"  colspan="3" >Observaciones: {{ $Observacion }}
                </td>
          </tr>
        </tbody>

       
      </table>

      <br>
      <div id="notices">
        <div>Lic.Manuel Rosales</div>
        <!-- <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
       --></div>
    </main>




  </body>
</html>
