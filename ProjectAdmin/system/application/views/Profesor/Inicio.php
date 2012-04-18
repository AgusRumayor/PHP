<?php
$this->load->view('header');
?>
	<div id="content">
		<div id="primaryContentContainer">
			<div id="primaryContent">
				<div class="box">
					<h2>Bienvenido 
					<?php
					$this->load->library('session');
					if(isset($this->session->userdata['Nombre']))
					{
						echo $this->session->userdata['Nombre'];
						$foto=$this->session->userdata['Foto'];
						$tipo=$this->session->userdata['Tipo'];
						$foto1= $foto[0];
						echo "   ";
						foreach($foto1 as $v)
						{
						echo "<img src=".'"http://localhost/ProyectoFinal/archivos/'.$tipo."/".$v.'"'."WIDTH=40 HEIGHT=40>";}
					}
					else echo "Por favor registrate de nuevo";
					?></h2>
					<?php
					$this->load->library('session');
					if(isset($this->session->userdata['Nombre']))
					{
						
					}
					else echo "Por favor registrate de nuevo";
					?>
					<div class="boxContent">
						<p><strong>Proyectos actuales:</strong> 
                        <ul>
                        <?	
			$Vector1= $this->session->userdata['Proy'];
			foreach($Vector1 as $r)
			{
				$i=0;
				foreach($r as $val){
				$i++;
				if($i==2)
					echo "<li><a href=proyectos target=_blank>  $val</a></li>";
				}
			}?>
                        </ul>
            	</p>
					</div>
				</div>
				<div class="box">
					<h3><?=$this->validation->error_string; ?>Panel de control</h3>
					<div class="boxContent">
						<blockquote>
								<p><a href="http://localhost/ProyectoFinal/index.php/Profesor/Editar" target=_blank>Editar mi perfil</a></p>
<p><a href="http://localhost/ProyectoFinal/index.php/Profesor/Alumnos/scaffolding" target=_blank>Alumnos</a></p>
						</blockquote>
					</div>
				</div>
<div class="box">
					<h3>Mi equipo</h3>
					<div class="boxContent">
						<ul>
							<?	
							$Vector1= $this->session->userdata['Equipo'];
								foreach($Vector1 as $r)
								{
									$i=0;
									foreach($r as $val){
									$i++;
									if($i==2)
									echo "<li><a href=Equipos target=_blank>  $val</a></li>";
								}
							}?>
						</ul>
					</div>
				</div>
				<div class="box">
					<h3>Tabla de actividades</h3>
					<div class="boxContent">
						<table>
							<tr>
								<th>Descripción</th>
								<th>Proyecto</th>
								<th>Fecha de entrega</th>
							</tr>
							
								<?	
							$Vector1= $this->session->userdata['Act'];
								foreach($Vector1 as $r)
								{
									echo '<tr class="rowA">';
									$i=0;
									foreach($r as $val){
									$i++;
									if($i==6){
									echo "<td> $val</td>";
								}
									if($i==5){
									echo "<td><a href=proyectos target=_blank>  $val</a></td>";
								}
									if($i==2){
									echo "<td> $val</td>";
								}
							}
								echo "</tr>";}?>
								
						</table>
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
	        </div>
	      </div>
		  <div class="box boxB">
            <div class="boxContent">
              <?=form_open('Crear_Mensaje'); ?><span><h2>Crear mensaje:</h2></span>
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
              <?=form_open('Actividad'); ?><span><h2>Crear actividad:</h2></span>
<br><span>Proyecto:</span>
                  <input type="text" class="text" maxlength="32" name="pro" />                  
<br><span>Descripción:</span>
<textarea name="desc" cols="15" class="text">
                  </textarea>
<br><span>Fecha de entrega:</span>
                  <input type="text" class="text" value=<?echo date('Y/m/d');?> maxlength="32" name="fec" />
                  <input type="submit" class="button" value="Enviar" />
              </form>
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
		<p>Copyright &copy; 2008 ProjectCoord </p>
	</div>
</div>

</body>
</html>
