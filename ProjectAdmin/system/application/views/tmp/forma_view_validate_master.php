<html>
<head>
<title>Registro</title>
<link rel="stylesheet" href="http://localhost/ProyectoFinal/system/application/views/style.css">
</head>
<body>

<p>
  <?=$this->validation->error_string; ?>
  
  <?=form_open('form_master'); ?>
</p>
<p><h2>Proyecto final</h2>
<h4>&nbsp;</h4>
<h4>Bienvenido</h4>
<h5>Matricula</h5>
<input type="text" name="username" value="" size="50" />

<h5>Password</h5>
<input type="text" name="password" value="" size="50" />


<input type="hidden" name="passconf" value="1" size="50" />

<h5>Ingresar como:</h5>
<select name="email">
<option value=/Agus_Style/Agus>Profesor</option>
<option value=/Fer_Style/Fer>Alumno</option>
<option value=/VicStyle/Vic>Coordinador</option>
</select>

<div><br><input type="submit" name="Enviar" value="Entrar" /></div>
</p>
</form>

</body>
</html>