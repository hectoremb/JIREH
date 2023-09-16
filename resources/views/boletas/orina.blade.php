<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXAMEN GENERAL DE ORINA</title>
    <link href="./bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: #58D9D9;">
  
    <br>
    <div class="bg-light" style="margin-left: 10%; margin-right: 10%;border-radius: 5px;" >
    <br>
      <div>
        <center><h1>EXAMEN GENERAL DE ORINA</h1></center>
      </div>
    <br>

    <form action="/orina" method="post" style="margin-left: 5%; margin-right: 5%;">
        @csrf
        <div class="row">
            <div class="col">
              <strong>1. Nombre</strong>
              <input autocomplete="off" name="nombre" type="text" class="form-control" style="border-color: #5FB5B5;">
            </div>
            
          
        </div>  

        <div class="row">
        <div class="col">
              <strong>2. Edad</strong>
               
              <select class="form-select" name="edad" style="border-color: #5FB5B5; background-color: #D0F0F0">
                <option value="" selected></option>
                <option value="1 Año">1</option>
                <option value="2 Años">2</option>
                <option value="3 Años">3</option>
                <option value="4 Años">4</option>
                <option value="5 Años">5</option>
                <option value="6 Años">6</option>
                <option value="7 Años">7</option>
                <option value="8 Años">8</option>
                <option value="9 Años">9</option>
                <option value="10 Años">10</option>
                <option value="11 Años">11</option>
                <option value="12 Años">12</option>
                <option value="13 Años">13</option>
                <option value="14 Años">14</option>
                <option value="15 Años">15</option>
                <option value="16 Años">16</option>
                <option value="17 Años">17</option>
                <option value="18 Años">18</option>
                <option value="19 Años">19</option>
                <option value="20 Años">20</option>
                <option value="21 Años">21</option>
                <option value="22 Años">22</option>
                <option value="23 Años">23</option>
                <option value="24 Años">24</option>
                <option value="25 Años">25</option>
                <option value="26 Años">26</option>
                <option value="27 Años">27</option>
                <option value="28 Años">28</option>
                <option value="29 Años">29</option>
                <option value="30 Años">30</option>
                <option value="31 Años">31</option>
                <option value="32 Años">32</option>
                <option value="33 Años">33</option>
                <option value="34 Años">34</option>
                <option value="35 Años">35</option>
                <option value="36 Años">36</option>
                <option value="37 Años">37</option>
                <option value="38 Años">38</option>
                <option value="39 Años">39</option>
                <option value="40 Años">40</option>
                <option value="41 Años">41</option>
                <option value="42 Años">42</option>
                <option value="43 Años">43</option>
                <option value="44 Años">44</option>
                <option value="45 Años">45</option>
                <option value="46 Años">46</option>
                <option value="47 Años">47</option>
                <option value="48 Años">48</option>
                <option value="49 Años">49</option>
                <option value="50 Años">50</option>
                <option value="51 Años">51</option>
                <option value="52 Años">52</option>
                <option value="53 Años">53</option>
                <option value="54 Años">54</option>
                <option value="55 Años">55</option>
                <option value="56 Años">56</option>
                <option value="57 Años">57</option>
                <option value="58 Años">58</option>
                <option value="59 Años">59</option>
                <option value="60 Años">60</option>
                <option value="61 Años">61</option>
                <option value="62 Años">62</option>
                <option value="63 Años">63</option>
                <option value="64 Años">64</option>
                <option value="65 Años">65</option>
                <option value="66 Años">66</option>
                <option value="67 Años">67</option>
                <option value="68 Años">68</option>
                <option value="69 Años">69</option>
                <option value="70 Años">70</option>
                <option value="71 Años">71</option>
                <option value="72 Años">72</option>
                <option value="73 Años">73</option>
                <option value="74 Años">74</option>
                <option value="75 Años">75</option>
                <option value="76 Años">76</option>
                <option value="77 Años">77</option>
                <option value="78 Años">78</option>
                <option value="79 Años">79</option>
                <option value="80 Años">80</option>
                <option value="81 Años">81</option>
                <option value="82 Años">82</option>
                <option value="83 Años">83</option>
                <option value="84 Años">84</option>
                <option value="85 Años">85</option>
                <option value="86 Años">86</option>
                <option value="87 Años">87</option>
                <option value="88 Años">88</option>
                <option value="89 Años">89</option>
                <option value="90 Años">90</option>
                <option value="91 Años">91</option>
                <option value="92 Años">92</option>
                <option value="93 Años">93</option>
                <option value="94 Años">94</option>
                <option value="95 Años">95</option>
                <option value="96 Años">96</option>
                <option value="97 Años">97</option>
                <option value="98 Años">98</option>
                <option value="99 Años">99</option>
                <option value="100 Años">100</option>
                <option value="101 Años">101</option>
                <option value="102 Años">102</option>
                <option value="103 Años">103</option>
                <option value="104 Años">104</option>
                <option value="105 Años">105</option>
                <option value="106 Años">106</option>
                <option value="107 Años">107</option>
                <option value="108 Años">108</option>
                <option value="109 Años">109</option>
                <option value="110 Años">110</option>
                <option value="111 Años">111</option>
                <option value="112 Años">112</option>
                <option value="113 Años">113</option>
                <option value="114 Años">114</option>
                <option value="115 Años">115</option>
                <option value="116 Años">116</option>
                <option value="117 Años">117</option>
                <option value="118 Años">118</option>
                <option value="119 Años">119</option>
                <option value="120 Años">120</option>
              </select>

            </div>

            <div class="col">
              <strong>3. Sexo</strong>
              <select name="sexo" class="form-select" aria-label="Default select example" style="border-color: #5FB5B5;background-color: #D0F0F0;">
                <option value="" selected></option>  
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Ninguno">Ninguno</option>
                
              </select>
            </div>
            <div class="col">
              <strong>4. Fecha </strong>
              <input autocomplete="off"  type="text" id="fecha" name="fecha" value="{{ now()->format('d/m/Y') }}" 
               class="form-control"  style="border-color: #5FB5B5;"/>
              </div>          
        </div>

        <hr>

        <div>
            <center><h3> <u>Examen Físico - Químico</u></h3></center>
        </div><br>


        <div class="row">
            <div class="col">
              <strong>Color:</strong>
              <input autocomplete="off" name="color" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>

            <div class="col">
              <strong>Aspecto: </strong>
              <input autocomplete="off" name="aspecto" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>
                      
       
             <div class="col">
              <strong>Densidad: </strong>
              <input autocomplete="off" name="densidad" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>

        </div>

        <div class="row">
            <div class="col">
              <strong>Ph:</strong>
              <input autocomplete="off" name="ph" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>

            <div class="col">
              <strong>Nitritos:</strong>
              <input autocomplete="off" name="nitritos" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>
                      
       
             <div class="col">
              <strong>Proteínas: </strong>
              <input autocomplete="off" name="proteinas" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>

        </div>

        <div class="row">
            <div class="col">
              <strong>Glucosa: </strong>
              <input autocomplete="off" name="glucosa" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>

            <div class="col">
              <strong>Urobilinogeno: </strong>
              <input autocomplete="off" name="urobi" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>
                      
       
             <div class="col">
              <strong>Cuerpos Cetonicos: </strong>
              <input autocomplete="off" name="centonicos" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>

        </div>

        <div class="row">
            <div class="col">
              <strong>Sangre Oculta: </strong>
              <input autocomplete="off" name="sangreoculta" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>

            <div class="col">
              <strong>Bilirrubina: </strong>
              <input autocomplete="off" name="bilirrubina" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>
                      
       
             <div class="col">
              <strong>Esterasa leucocitaria: </strong>
              <input autocomplete="off" name="estarasa" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>

        </div><br>


        <div>
            <center><h3> <u>Examen Microscópico</u></h3></center>
        </div><br>


        <div class="row">
            <div class="col">
              <strong>Leucocitos:</strong>
              <input autocomplete="off" name="leucocitos" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>

            <div class="col">
              <strong>Hematíes: </strong>
              <input autocomplete="off" name="hematies" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>
                      
       
             <div class="col">
              <strong>Células Epiteliales: </strong>
              <input autocomplete="off" name="epiteliales" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>

        </div>

        <div class="row">
            <div class="col">
              <strong>Bacterias:</strong>
              <input autocomplete="off" name="bacterias" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>

            <div class="col">
              <strong>Levaduras:</strong>
              <input autocomplete="off" name="levaduras" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>
                      
       
             <div class="col">
              <strong>Cristales: </strong>
              <input autocomplete="off" name="cristales" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>

        </div>

        <div class="row">
            <div class="col">
              <strong>Cilindros:</strong>
              <input autocomplete="off" name="cilindros" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>

            <div class="col">
              <strong></strong>
              
            </div>
                      
       
             <div class="col">
              <strong></strong>
            </div>

        </div>

<hr><br>
        
        <div class="row">
             <div class="col">
              <strong>Observaciones</strong>
              <input autocomplete="off" name="observaciones" type="text" class="form-control"  style="border-color: #5FB5B5;">
            </div>       
        </div>

      <br>
      
      <div class="d-flex bd-highlight mb-3">
        <div class="p-2 bd-highlight"><button type="submit" class="btn btn-primary">Generar Documento</button></div>
        <div class="ms-auto p-2 bd-highlight"><a href="/" class="btn btn-info" >Regresar</a></div>
      </div>
      <br>
    </form>
    
  </div>
  <br><br>
<script src="./bootstrap.bundle.min.js"></script>
</body>
</html>






@if(!empty(request('fecha')))
@endif