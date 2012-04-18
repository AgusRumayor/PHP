<?php
$this->load->view('header');
?>
<link href="http://localhost/ProyectoFinal/system/application/views/default.css" rel="stylesheet" type="text/css" />
<body>
<h2 align="center">Mis Equipos</h2>
<div class="box">
  <h3>&nbsp;</h3>
  <div class="boxContent">
    <table>
      <tr>
        <th>Alumno</th>
        <th>Funcion</th>
        <th>Equipo</th>
      </tr>
      <?php //Cambiar las tablas
	  		$Vector1= $this->session->userdata['Equipo'];
			$tipo= $this->session->userdata['Tipo'];
			foreach ($Vector1 as $row)
			{
				echo "<tr class=rowA>";
				$i=0;
				$mens= array();
				foreach($row as $msj)
				{
					$mens[$i]=$msj;
					$i++;
				}
				echo "<td>&nbsp;&nbsp;&nbsp;$mens[1]&nbsp;&nbsp;&nbsp; </td><td>&nbsp;&nbsp;&nbsp;$mens[2]&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;$mens[3]</td>\n";
			}
		
		?>
      </tr>
    </table>
  </div>
</div>
</body>

