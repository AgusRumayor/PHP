<html>
<head>
<title>Project Coord</title>

</head>
<body>



<?=form_open('form'); ?>
<h4>Bienvenido</h4>
<h5>Matricula</h5>
<input type="text" name="username" value="" size="50" />


<input type="hidden" name="password" value="1" size="50" />


<input type="hidden" name="passconf" value="1" size="50" />

<h5>Ingresar como:</h5>
<select name="email">
<option value=/Agus_Style/Agus>Profesor</option>
<option value=/Fer_Style/Fer>Alumno</option>
<option value=/VicStyle/Vic>Coordinador</option>
</select>

<div><input type="submit" name="Enviar" value="Entrar" /></div>

</form>
<?=$this->validation->error_string; ?>
</body>
</html>