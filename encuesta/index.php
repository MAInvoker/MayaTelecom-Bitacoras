<?php?>
<html lang="es">
  <head>
    <title>Encuesta de Satisfacción - MayaTelecom</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <form class="form-horizontal">
        <fieldset>

        <!-- Form Name -->
        <legend>Encuesta Satisfacción - MayaTelecom</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="nombre">Nombre</label>  
          <div class="col-md-4">
          <input id="nombre" name="nombre" type="text" placeholder="ingresa tu nombre(s)" class="form-control input-md" required="">
          </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="edad">Edad</label>
          <div class="col-md-4">
          <div class="radio">
            <label for="edad-0">
              <input type="radio" name="edad" id="edad-0" value="1" checked="checked">
              Masculino
            </label>
        	</div>
          <div class="radio">
            <label for="edad-1">
              <input type="radio" name="edad" id="edad-1" value="2">
              Femenino
            </label>
        	</div>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="areg">Año de registro</label>
          <div class="col-md-4">
            <select id="areg" name="areg" class="form-control">
              <option value="1">2017</option>
              <option value="2">2016</option>
              <option value="3">2015</option>
              <option value="4">2014</option>
              <option value="5">2013</option>
              <option value="6">2012</option>
              <option value="7">2011</option>
              <option value="8">2010</option>
              <option value="9">2009</option>
              <option value="10">2008</option>
              <option value="11">2007</option>
              <option value="12">2006</option>
              <option value="13">2005</option>
              <option value="14">2004</option>
              <option value="15">2003</option>
              <option value="16">2002</option>
              <option value="17">2001</option>
              <option value="18">2000</option>
              <option value="19">1999</option>
              <option value="20">1998</option>
              <option value="21">1997</option>
              <option value="22">1996</option>
              <option value="23">1995</option>
              <option value="24">1994</option>
              <option value="25">1993</option>
            </select>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="perdes">Periodo de desarrollo</label>  
          <div class="col-md-4">
          <input id="perdes" name="perdes" type="text" placeholder="" class="form-control input-md" required="">
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="edompo">Edo & Mpo</label>
          <div class="col-md-4">
            <select id="edompo" name="edompo" class="form-control">
              <option value="1">Abalá, Yucatán</option>
              <option value="2">Acanceh, Tecoh, Yucatán</option>
              <option value="3">Cacalchen, Yucatán</option>
              <option value="4">Calakmul, Campeche</option>
              <option value="5">Calkini, Campeche</option>
              <option value="6">Campeche, Campeche</option>
              <option value="7">Cancun, Quintana Roo</option>
              <option value="8">Candelaria, Campeche</option>
              <option value="9">Cárdenas, Tabasco</option>
              <option value="10">Champotón, Campeche</option>
              <option value="11">Chemax, Yucatán</option>
              <option value="12">Chetumal, Quintana Roo</option>
              <option value="13">Chiapas</option>
              <option value="14">Chichimilá, Yucatán</option>
              <option value="15">Chicxulub Pueblo, Yucatán</option>
              <option value="16">Chicxulub, Yucatán</option>
              <option value="17">Comacalco, Cárdenas, E. Zapata, Tenosique, Cunduacan, Macuspana, Paraiso, Tabasco.</option>
              <option value="18">Comacalco, Tabasco</option>
              <option value="19">Cuch, Holoch, Halachó, Yucatán</option>
              <option value="20">Cunduacán, Tabasco</option>
              <option value="21">Dzemul, Yucatán</option>
              <option value="22">Dzitás, Yucatán</option>
              <option value="23">Escárcega, Campeche</option>
              <option value="24">Felipe Carrillo Puerto, Quintana Roo</option>
              <option value="25">Halachó, Yucatán</option>
              <option value="26">Hecelchakan, Campeche</option>
              <option value="27">Hopelchen Campeche</option>
              <option value="28">Huimanguillo, Tabasco</option>
              <option value="29">Hunucmá, Yucatán</option>
              <option value="30">Ichmul, Chikindzonot Yucatán</option>
              <option value="31">Izamal, Yucatán</option>
              <option value="32">Jalpa de Méndez, Tabasco</option>
              <option value="33">Jonuta, Tabasco</option>
              <option value="34">Male, Chiapas</option>
              <option value="35">Macuspana, Tabasco</option>
              <option value="36">Maxcanu, Yucatán</option>
              <option value="37">Mérida, Yucatán</option>
              <option value="38">Mesatunich, Motul</option>
              <option value="39">México, D.F.</option>
              <option value="40">Motul, Yucatán</option>
              <option value="41">Muna, Yucatán</option>
              <option value="42">Nacajuca, Tabasco</option>
              <option value="43">Paraiso, Tabasco</option>
              <option value="44">Peto, Yucatán</option>
              <option value="45">Postunich, Yucatán</option>
              <option value="46">Progreso, Yucatán</option>
              <option value="47">Quintana Roo</option>
              <option value="48">Sacalum, Yucatán</option>
              <option value="49">Samahil, Yucatán</option>
              <option value="50">Sitpach, Yucatán</option>
              <option value="51">Soconusco, Chiapas</option>
              <option value="52">Sotuta, Yucatán</option>
              <option value="53">Tabasco</option>
              <option value="54">Tacotalpa, Tabasco</option>
              <option value="55">Tahmek, Yucatán</option>
              <option value="56">Teabo, Yucatán</option>
              <option value="57">Tekanto, Yucatán</option>
              <option value="58">Tekax, Yucatán</option>
              <option value="59">Tenabo, Campeche</option>
              <option value="60">Tenosique, Tabasco</option>
              <option value="61">Teya, Yucatán</option>
              <option value="62">Ticul, Yucatán</option>
              <option value="63">Tinum, Yucatán</option>
              <option value="64">Tixkokob, Yucatán</option>
              <option value="65">Tizimín, Espita, Calotmul, Sucilá, San Felipe y Rio Lagartos, Yucatán</option>
              <option value="66">Tizimín, Yucatán</option>
              <option value="67">Tuxtepec, Oaxaca</option>
              <option value="68">Umán, Yucatán</option>
              <option value="69">Valladolid, Yucatán</option>
              <option value="70">Villahermosa, Tabasco</option>
              <option value="71">Yucalpetén, Yucatán</option>
            </select>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="niedes">Nivel Educativo del Estudio</label>
          <div class="col-md-4">
            <select id="niedes" name="niedes" class="form-control">
              <option value="1">Preescolar</option>
              <option value="2">Primaria</option>
              <option value="3">Secundaria</option>
              <option value="4">Preparatoria</option>
              <option value="5">Bachillerato</option>
              <option value="6">Superior</option>
              <option value="7">Otro</option>
            </select>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="tipara">Tipo de paradigma</label>
          <div class="col-md-4">
            <select id="tipara" name="tipara" class="form-control">
              <option value="1">Cualitativo</option>
              <option value="2">Cuantitativo</option>
              <option value="3">Mixto</option>
            </select>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="tiestu">Tipo de estudio</label>
          <div class="col-md-4">
            <select id="tiestu" name="tiestu" class="form-control">
              <option value="1">Explorativo</option>
              <option value="2">Descriptivo</option>
              <option value="3">Correlacional</option>
              <option value="4">Explicativo</option>
              <option value="5">Mixto</option>
              <option value="6">Fenomenológico</option>
              <option value="7">Etnometodológico</option>
              <option value="8">Estudio de caso</option>
              <option value="9">Etnográfico</option>
              <option value="10">Investigación Acción</option>
            </select>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="tidise">Tipo de diseño</label>
          <div class="col-md-4">
            <select id="tidise" name="tidise" class="form-control">
              <option value="1">Pre-experimental</option>
              <option value="2">Cuasi-experimental</option>
              <option value="3">Experimento puro</option>
              <option value="4">No experimental transversal descriptivo</option>
              <option value="5">No experimental transversal correlacional</option>
              <option value="6">No experimental transversal correlacional causal</option>
              <option value="7">No experimental longitudinal de tendencia</option>
              <option value="8">No experimental longitudinal de análisis evolutivo</option>
              <option value="9">No experimental longitudinal de  panel</option>
            </select>
          </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="livari">Listado de variables por frecuencias</label>
          <div class="col-md-4">                     
            <textarea class="form-control" id="livari" name="livari"></textarea>
          </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="critpob">Criterios para determinar la Pob.</label>
          <div class="col-md-4">                     
            <textarea class="form-control" id="critpob" name="critpob"></textarea>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="timue">Tipo de muestra</label>
          <div class="col-md-4">
            <select id="timue" name="timue" class="form-control">
              <option value="1">Probabilística</option>
              <option value="2">No probabilística</option>
            </select>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="tipins">Tipo de instrumento</label>
          <div class="col-md-4">
            <select id="tipins" name="tipins" class="form-control">
              <option value="1">Cuestionario</option>
              <option value="2">Escala Liker</option>
              <option value="3">Escala Guttman</option>
            </select>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="vali">Validez</label>
          <div class="col-md-4">
            <select id="vali" name="vali" class="form-control">
              <option value="1">Si</option>
              <option value="2">No</option>
            </select>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="conta">Contabilidad</label>
          <div class="col-md-4">
            <select id="conta" name="conta" class="form-control">
              <option value="1">Si</option>
              <option value="2">No</option>
            </select>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="hipo">Hipotesis</label>
          <div class="col-md-4">
            <select id="hipo" name="hipo" class="form-control">
              <option value="1">Si</option>
              <option value="2">No</option>
            </select>
          </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="tiphip">Tipo de Hipótesis Estadística</label>
          <div class="col-md-4">                     
            <textarea class="form-control" id="tiphip" name="tiphip"></textarea>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="semi">Seminario</label>
          <div class="col-md-4">
            <select id="semi" name="semi" class="form-control">
              <option value="1">Si</option>
              <option value="2">No</option>
            </select>
          </div>
        </div>

        </fieldset>
    </form>
  </body>
</html>