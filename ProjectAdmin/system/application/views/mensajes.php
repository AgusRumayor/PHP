<?php
$this->load->view('header');
?>
<link href="http://localhost/ProyectoFinal/system/application/views/default.css" rel="stylesheet" type="text/css" />
<body>
<h2 align="center">Bandeja de Mensajes</h2>
<div class="box">
  <h3>&nbsp;</h3>
  <div class="boxContent">
    <table>
      <tr>
        <th>Fecha</th>
        <th>De</th>
        <th>Asunto</th>
        <th>Mensaje</th>
      </tr>
      <?php 
	  		$this->load->library('session');
			if(isset($this->session->userdata['Vector']))
			{
			$Vector1= $this->session->userdata['Vector'];
		
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
				echo "<td>&nbsp;&nbsp;&nbsp;$mens[4]&nbsp;&nbsp;&nbsp; </td><td>&nbsp;&nbsp;&nbsp;$mens[3]&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;$mens[6]&nbsp;&nbsp;&nbsp;</td><td>$mens[1]</td>\n";
			}
		
		}?>
      </tr>
    </table>
  </div>
</div>
</body>

