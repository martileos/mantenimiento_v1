<?php
/*
	include("../db/conexionMysql.php");
	$mysql = new mysql;
	$mysql->connect();

	$sql = $mysql->query("SELECT * FROM aficha WHERE ALUFIC = '".$_POST['nombre']."'")or die(mysql_error());
	$result = $mysql->f_array($sql);
	*/
?>
<fieldset>
	<label>DATOS PESRSONALES</label>
<fieldset class="lineafield" style="width:95%; margin-left:10px">
	<div class="clear"></div>
 	<label for="nombre" > Apellido Paterno</label><label>Apellido Materno</label><label>Nombre</label>
 	<div class="clear"></div>
        <input type="text" style="width:30%;"  value="a" id="app" required>
        <input type="text" style="width:30%;"  value="b" id="apm" required>
		<input type="text" style="width:30%;" class="lineainput" value="c" id="nom" required />
</fieldset>


<fieldset style="width:48%; float:left; margin-right: 3%; margin-left: 2px;"> <!-- to make two field float next to one another, adjust values accordingly -->
	<label>Sexo</label>
		<select style="width:92%;" name="sexo" id="sexo">
			<?php 
				if($result['ALUSEX'] == "1"){
					echo "<option value=\"1\" selected>HOMBRE</option>";
				}else{
					echo "<option value=\"2\" selected>MUJER</option>";
				}
			?>
			<option value="1">HOMBRE</option>
			<option value="2">MUJER</option>
		</select>
	<label>CURP</label>
	<input type="text" style="width:50%;" name="CURP" value="<?= $result['ALUCUR'] ?>" id="curp" required>
	<div class="clear"></div>
	<label>RFC</label>
	<input type="text" style="width:50%;" name="rfc" value="<?= $result['ALURFC'] ?>" id="rfc"   required>
</fieldset>

<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
	<label>1ra. Opcion</label>
	<select style="width:92%;" name="op1" id="op1">
		<?php
			switch($result['CARCVE1']){
				case 6: echo "<option value=\"6\" selected>INGENIERIA BIOQUIMICA</option>";
				break;
				case 16: echo "<option value=\"19\" selected>INGENIERIA EN TICS</option>";
				break;
				case 18: echo "<option value=\"18\" selected>INGENIERIA AMBIENTAL</option>";
				break;
				case 19: echo "<option value=\"19\" selected>INGENIERIA EN ENERGIAS RENOVABLES</option>";
				break;
			}
		?>
		<option value="6">INGENIERIA BIOQUIMICA</option>
		<option value="16">INGENIERIA TICS</option>
		<option value="18">INGENIERIA AMBIENTAL</option>
		<option value="19">INGENIERIA EN ENERGIAS RENOVABLES</option>
	</select>
	<label>2a. Opcion</label>
	<select style="width:92%;" name="op2" id="op2">
		<?php
			switch($result['CARCVE2']){
				case 6: echo "<option value=\"6\" selected>INGENIERIA BIOQUIMICA</option>";
				break;
				case 16: echo "<option value=\"19\" selected>INGENIERIA EN TICS</option>";
				break;
				case 18: echo "<option value=\"18\" selected>INGENIERIA AMBIENTAL</option>";
				break;
				case 19: echo "<option value=\"19\" selected>INGENIERIA EN ENERGIAS RENOVABLES</option>";
				break;
				case 4: echo "<option value=\"4\" selected> INGENIERIA INDUSTRIAL</option>";
				break;
				case 7: echo "<option value=\"7\" selected> INGENIERIA MECANICA</option>";
				break;
				case 8: echo "<option value=\"8\" selected>INGENIERIA ELECTRICA</option>";
				break;
				case 9: echo "<option value=\"9\" selected>INGENIERIA ELECTRONICA</option>";
				break;
				case 11: echo "<option value=\"11\" selected>INGENIERIA EN SISTEMAS COMPUTACIONALES</option>";
				break;
				case 13: echo "<option value=\"13\" selected>INGENIERIA MECATRONICA</option>";
				break;
			}
		?>
		<option value="6">INGENIERIA BIOQUIMICA</option>
		<option value="16">INGENIERIA TICS</option>		
		<option value="18">INGENIERIA AMBIENTAL</option>
		<option value="19">INGENIERIA EN ENERGIAS RENOVABLES</option>
		<option value="4">INGENIERIA INDUSTRIAL</option>
		<option value="7"> INGENIERIA MECANICA</option>
		<option value="8">INGENIERIA ELECTRICA</option>
		<option value="9">INGENIERIA ELECTRONICA</option>
		<option value="11">INGENIERIA EN SISTEMAS COMPUTACIONALES</option>
		<option value="13">INGENIERIA MECATRONICA</option>
	</select>
</fieldset>
</fieldset>
<fieldset>
<label>PROCEDENCIA</label>
<div class="clear"></div>
<fieldset style="width:48%; float:left; margin-right: 3%; margin-left: 2px;">
	<label>Municipio De Nacimiento</label>
		<?php
			//$sql_muni = $mysql->query("SELECT MUNCVE, MUNNOM FROM dmunic WHERE MUNCVE != 999 ORDER BY MUNNOM")or die(mysql_error());
			//$sql_muni = $mysql->query("SELECT * FROM dmunic , destad WHERE dmunic.ESTCVE = destad.ESTCVE AND dmunic.MUNCVE != 999")or die(mysql_error());
		?>
		<select style="width:92%;" name="alumpio" id="alumpio">
			<?php
				/*
				while($result_munic = $mysql->f_array($sql_muni)){
					$number=$result_munic['MUNCVE'];
					$number = str_pad($number, 3, "0", STR_PAD_LEFT);
					$claveest = str_pad($result_munic['ESTCVE'], 2, "0", STR_PAD_LEFT);
					$clavemun = $claveest.$number;
					if($clavemun == $result['ALULNA']){
						echo "<option value='".$clavemun."' selected>".$result_munic['ESTNOM']." - ".$result_munic['MUNNOM']."</option>";
					}else{
						echo "<option value='".$clavemun."'>".$result_munic['ESTNOM']." - ".$result_munic['MUNNOM']."</option>";
					}
				}
				*/
			?>
		</select>
	<label>Fecha De Nacimiento</label>
	<input type="text" style="width:50%;" name="alufnaci" value="<?= $result['ALUNAC'] ?>" id="alufnaci">
	<div class="clear"></div>
	<label>Estado Civil</label>
	<select style="width:92%;" name="estciv" id="estciv">

        <option value="1">Soltero</option>
        <option value="2">Casado</option>
        <option value="3">Viudo</option>
        <option value="4">Divorciado</option>
        <option value="5">Union Libre</option>
    </select>
</fieldset>

<fieldset style="width:48%; float:left;">
<label>Escuela De Bachillerato</label>
    <select name="alubach" id="alubach">


    </select>
	<label>Año De Egreso</label>
	<input type="text" style="width:50%;" name="anoegre" value="<?= $result['ALUEGR'] ?>" id="anoegre">
	<div class="clear"></div>
<label>Esp. De Bachillerato</label>
	<select style="width:92%;" name="aluesp" id="aluesp">

        <option value="1">FISICO-MATEMATICAS</option>
        <option value="2">QUIMICO-BIOLOGICAS</option>
        <option value="3">ECONOMICO ADMINISTRATIVAS</option>
        <option value="4">SOCIALES Y HUMANIDADES</option>
        <option value="5">BACHILLERATO GENERAL</option>
        <option value="6">OTRA AREA</option>
    </select>
</fieldset>
</fieldset>

<fieldset>
	<label>DOMICILIO</label>
<div class="clear"></div>
<fieldset style="width:48%; float:left; margin-right: 3%; margin-left: 2px;">
	<label>Calle</label>
	<input type="text" style="width:92%;" name="calle" value="<?= $result['ALUCLL'] ?>" id="calle">
	<div class="clear"></div>
	<label>Numero</label>
	<input type="text" style="width:50%;" name="num" value="<?= $result['ALUNUM'] ?>" id="num">
	<div class="clear"></div>
	<label>Colonia</label>
	<input type="text" style="width:50%;" name="col" value="<?= $result['ALUCOL'] ?>" id="col">
	<div class="clear"></div>
	<label>Codigo Postal</label>
	<input type="text" style="width:50%;" name="cp" value="<?= $result['ALUCPO'] ?>" id="cp">
</fieldset>
<fieldset style="width:48%; float:left;">
<label>Municipio </label>

		<select style="width:92%;" name="alumun" id="alumun">

		</select>
	<div class="clear"></div>
<label>Ciudad o Localidad</label>
	
		<input type="text" style="width:50%;" name="aluciu" id="aluciu" value="<?= $result['ALUCIU'] ?>">
		<div clas="clear"></div>
		<label>Telefono</label> 
	<input type="text" style="width:40%;"  name="" value="<?= $result['ALUTE1'] ?>" id="" required >
    <label>Telefono (Opcional)</label>
	<input type="text" style="width:40%;"  name="" value="<?= $result['ALUTE2'] ?>" id=""  >
	<div class"clear"></div>
	<label>Correo Electronico</label>
	<input type="text" style="width:50%;" name="" value="<?= $result['ALUMAI'] ?>" id="" required >
</fieldset>
</fieldset>

<fieldset>
	<label>DATOS FAMILIARES</label>
<div class="clear"></div>
<fieldset class="lineafield" style="width:95%; margin-left:10px">
	<div class="clear"></div>
	<label>[NOMBRE DEL PADRE]</label>
<div class="clear"></div>
 	<label for="nombre" > Apellido Paterno</label><label>Apellido Materno</label><label>Nombre</label>

 	<div class="clear"></div>
        <input type="text" style="width:30%;"  value="<?= $nombrepadre[$tpadre-2]; ?>" id="app" required>
        <input type="text" style="width:30%;"  value="<?= $nombrepadre[$tpadre-1]; ?>" id="apm" required>
		<input type="text" style="width:30%;" class="lineainput" value="<?= $nombrepadre[0]; ?>" id="nom" required />
		<div class="clear"></div>
		<label>Vive</label>
		<div class="clear"></div>
        <select style="width:30%;" name="livep" id="livep">

            <option value="S">Si</option>
            <option value="N">No</option>
        </select>
		<div class="clear"></div>
	<label>Telefono</label>
		<div class="clear"></div>
	<input type="text" style="width:30%;"  name="" value="<?= $result['ALUPADT'] ?>" id="" required >

</fieldset>
<fieldset class="lineafield" style="width:95%; margin-left:10px">
	<div class="clear"></div>
	<label>[NOMBRE DE LA MADRE]</label>
<div class="clear"></div>
 	<label for="nombre" > Apellido Paterno</label><label>Apellido Materno</label><label>Nombre</label>

 	<div class="clear"></div>
        <input type="text" style="width:30%;"  value="<?= $nombremadre[$tmadre-2]; ?>" id="app" required>
        <input type="text" style="width:30%;"  value="<?= $nombremadre[$tmadre-1]; ?>" id="apm" required>
		<input type="text" style="width:30%;" class="lineainput" value="<?= $nombremadre[0]; ?>" id="nom" required />
		<div class="clear"></div>
		<label>Vive</label>
		<div class="clear"></div>
	<select style="width:30%;" name="livem" id="livem">

            <option value="S">Si</option>
            <option value="N">No</option>
	</select>
		<div class="clear"></div>
	<label>Telefono</label>
		<div class="clear"></div>
	<input type="text" style="width:30%;"  name="" value="<?= $result['ALUMADT'] ?>" id="" required >

</fieldset>
</fieldset>

<fieldset>
	<label>TUTOR</label>
<div class="clear"></div>
<fieldset style="width:48%; float:left; margin-right: 3%; margin-left: 2px;">
	<label>Calle</label>
	<input type="text" style="width:92%;" name="calle" value="<?= $result['ALUTCL'] ?>" id="calle">
	<div class="clear"></div>
	<label>Numero</label>
	<input type="text" style="width:50%;" name="num" value="<?= $result['ALUTNU'] ?>" id="num">
	<div class="clear"></div>
	<label>Colonia</label>
	<input type="text" style="width:50%;" name="col" value="<?= $result['ALUTCO'] ?>" id="col">
	<div class="clear"></div>
	<label>Codigo Postal</label>
	<input type="text" style="width:50%;" name="cp" value="<?= $result['ALUTCP'] ?>" id="cp">
	<div class="clear"></div>
	<label>Centro De Trabajo</label>
	<input type="text" style="width:50%;" name="num" value="<?= $result['ALUTCE'] ?>" id="num">
	<div class="clear"></div>
</fieldset>
<fieldset style="width:48%; float:left;">
<label>Municipio </label>

		<select style="width:92%;" name="alumunt" id="alumunt">

		</select>
	<div class="clear"></div>
<label>Ciudad o Localidad</label>
	<input type="text" style="width:50%;" name="alutciu" id="alutciu" value="<?= $result['ALUTCI'] ?>">
		<div clas="clear"></div>
		<label>Telefono</label>
	<input type="text" style="width:40%;"  name="" value="<?= $result['ALUTTE1'] ?>" id="" required >
    <label>Telefono (Opcional)</label>
	<input type="text" style="width:40%;"  name="" value="<?= $result['ALUTTE2'] ?>" id=""  >
	<div class"clear"></div>
	<label>Correo Electronico</label>
	<input type="text" style="width:50%;" name="" value="<?= $result['ALUTMAI'] ?>" id="" required >
</fieldset>
</fieldset>
<fieldset style="width:48%; float:left;">
	<label>[DOCUMENTOS]</label>
	<br>
	<p>
		<input type="checkbox" name="doc1" value="doc1">COPIA CERTIFICADO BACHILLERATO O KARDEX<br>
		<input type="checkbox" name="doc2" value="doc2">COPIA DE ACTA DE NACIMIENTO<br>
		<input type="checkbox" name="doc3" value="doc3">COPIA DE CURP<br>
		<input type="checkbox" name="doc4" value="doc4">2 FOTOGRAFÍAS TAMAÑO INFANTIL<br>
		<input type="checkbox" name="doc5" value="doc5">RECIBO OFICIAL DE PAGO<br>
	</p>
</fieldset>
<fieldset style="width:48%; float:left; margin-left:2px;">
	<label>[ACCIONES]</label>
		<br>
		<p style="margin-left:5px;">
	    <a class="btn btn-danger" href="#" id="cancel_btn"><i class="icon-remove icon-white"></i> Cancelar</a>
	    <a class="btn btn-warning" href="#" id="pendiente_btn"><i class="icon-folder-open icon-white"></i> Pendiente</a>
		<a class="btn btn-success" href="pdf/ejemplopdf.php?f=<?= $result['ALUFIC'] ?>&token=ZHJhd3NvZWs=" target="_BLANK" id="finalizar_btn"><i class="icon-ok icon-white"></i>Finalizar</a>
		</p>
</fieldset>
<?php
//libera memoria
/*
	$result = $mysql->free_sql($sql);
	$result = $mysql->free_sql($sql_muni);
	$result = $mysql->free_sql($sql_bach);
	$result = $mysql->free_sql($sql_muni2);
	$result = $mysql->free_sql($sql_muni3);
	$mysql->close();
	*/
?>
<div class="clear"></div>