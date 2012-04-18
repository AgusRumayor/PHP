
	<div id="content">
		<div id="primaryContentContainer">
			<div id="primaryContent">
				<div class="box">
					<h2>Bienvenido Master
					<?php
					$this->load->library('session');
					if(isset($this->session->userdata['Nombre']))echo $this->session->userdata['Nombre'];
					else echo "Por favor registrate de nuevo";
					?></h2>
					<div class="boxContent">
						<h2 class="Estilo3">Proyectos:</h2>
						<p>&nbsp;</p>
						<p><strong><a href=Materia/scaffolding target=_blank>Materias</a></strong></p>
						<p><strong><a href=Proyectos/scaffolding target=_blank>Proyectos</a></strong></p>
						<p><strong><a href=Equipos/scaffolding target=_blank>Equipos</a></strong></p>
						<p><strong><a href=Integrantes/scaffolding target=_blank>Añadir alumnos a equipos</a></strong></p>
						<p><strong><a href=Equipo_Proyecto/scaffolding target=_blank>Añadir proyecto a equipo</a></strong></p>
						
						
				  </div>
				</div>
		
		<div id="secondaryContent">
		  <div class="box">
            <h3>Mensajes</h3>
		    <div class="boxContent">
              <ul>
                
              </ul>
		<a href=Mensajes/scaffolding target=_blank>Gestor de mensajes</a>
	        </div>
	      </div>
		  
		
</body>
</html>

