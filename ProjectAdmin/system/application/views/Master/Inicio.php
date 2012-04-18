<?php
$this->load->view('Master/header');
?>
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
						<h2 class="Estilo3">Panel de control:</h2>
						<p>&nbsp;</p>
						<p><strong><a href=Master/Profesores/scaffolding target=_blank>Profesores</a></strong></p>
						<p><strong><a href=Master/Alumnos/scaffolding target=_blank>Alumnos</a></strong></p>
						<p><strong><a href=Master/Proyectos_vista target=_blank>Proyectos</a></strong></p>
						
				  </div>
				</div>
				<div class="box">
					<h3><?=$this->validation->error_string; ?></h3>
					<div class="boxContent">
						
					</div>
				</div>
<div class="box">
					<h3></h3>
					<div class="boxContent">
						
					</div>
				</div>
				<div class="box">
					<h3></h3>
					<div class="boxContent">
						
					</div>
				</div>
			</div>
		</div>
		<div id="secondaryContent">
		  <div class="box">
            <h3>Mensajes recibidos</h3>
		    <div class="boxContent">
              <ul>
                <?	
			$Vector1= $this->session->userdata['Vector'];
			foreach($Vector1 as $r)
			{
				$i=0;
				foreach($r as $val){
				$i++;
				if($i==7)
					echo "<li><a href=mensajes target=_blank>  $val</a></li>";
				}
			}?>
              </ul>
		<a href=Master/Mensajes/scaffolding target=_blank>Gestor de mensajes</a>
	        </div>
	      </div>
		  <div class="box boxB">
            <div class="boxContent">
              <?=form_open('Master/Crear_Mensaje'); ?><span><h2>Crear mensaje:</h2></span>
<br><span>Asunto:</span>
                  <input type="text" class="text" maxlength="32" name="Asunto" />                  
<br><span>Texto:</span>
<textarea name="msj" cols="15" class="text">
                  </textarea>
                   <span>A:</span>
		<select name="email">
					<option value=Todos>Todos</option>
					<option value=Profesor>Profesor</option>
					<option value=Alumno>Alumno</option>
					<option value=Master>Master</option>
					</select>
                  <input type="text" class="text" maxlength="32" name="to" />
                  <input type="submit" class="button" value="Enviar" />
              </form>
            </div>
	      </div>
		  <div class="box boxB">
            <div class="boxContent">
              
            </div>
	      </div>
		  <div class="box">
            <h3>Enlaces</h3>
		    <div class="boxContent">
<p> <a href="http://www.itesm.mx">ITESM</a></p>
              <p> <a href="http://cursos.itesm.mx">Blackboard</a></p>
	        </div>
	      </div>
	  </div>
	  <div class="clear"></div>
	</div>
	<div id="footer">
		<p>Copyright &copy; 2008 ProjectCoord</p>
	</div>
</div>
</body>
</html>

