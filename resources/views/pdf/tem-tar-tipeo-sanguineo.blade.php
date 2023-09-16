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
      font-size: 11px; 
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
      height: 80px;
    }

    #company {
      float: right;
      text-align: right;
    }





    #invoice {
      float: right;
      text-align: right;
    }


   

    table {
      width: 52%;
      margin-right: 20%;

    }

    /* lineas de la tabla */
    table th,
    table td {
      padding: 5px;
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
   

    <main>
      <table border="1" cellspacing="0" cellpadding="0">
        
        <thead>
          <tr> 
            <td class="desc" colspan="2" >
                <div class="clearfix">
                    <div id="logo">
                        <img src="lab.jpg">
                    </div>
                    <div id="company">
                        <div style="font-size: 15px;"><strong> Laboratorio clínico “JIREH - LAB.”</strong></div><br>
                        <div>Edificio Cañas Prieto, Local 17. Aguilares S. S.</div>
                        <div>Entrada Principal, Escuela Modesto Barrios<br> 
                        a continuación de Ferro Electrónica Palma,<br>
                        Constado Norte de Oficina Jurídica Lic. Ruballo</div>
                        <div>Teléfono: 7902-1322</div><br>

                        <div style="float: left;">LIC.E. J.V.P.L.C. No.3319 &nbsp; &nbsp; &nbsp; &nbsp;   C.S.S.P. No. </div><br><br>
                        <div style="float: left;"><strong>TIPEO SANGUÍNEO</strong></div>
                    </div>

                 
                    
                </div>  
            </td>  
           
          </tr>
        
          <tr>
            <td  class="unit" colspan="2" style="border-bottom: 0px;"><b>NOMBRE:</b> {{ $nombre }}
            </td> 
          </tr>
          
        </thead>
        <tbody id="invoiceItems">
		
          
          <tr>
            <td class="unit" ><b>GRUPO:</b> " {{ $grupo }} " </td>
            <td class="unit"><b>FACTOR:</b> {{ $factor }}</td>
          </tr>
		

        </tbody>

       
      </table>

    </main>





   
  </body>
</html>

