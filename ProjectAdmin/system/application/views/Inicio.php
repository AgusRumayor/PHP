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
					if(isset($this->session->userdata['Nombre']))echo $this->session->userdata['Nombre'];
					else echo "Por favor registrate de nuevo";
					?></h2>
					<div class="boxContent">
						<p><strong>Proyectos actuales:</strong> 
                        <ul>
                        Aqui van los proyectos
                        </ul>
            	</p>
					</div>
				</div>
				<div class="box">
					<h3><?=$this->validation->error_string; ?>Example Blockquote</h3>
					<div class="boxContent">
						<blockquote>
								<p><a href="http://localhost/ProyectoFinal/index.php/Alumno/Editar">Editar mi perfil</p>
						</blockquote>
					</div>
				</div>
<div class="box">
					<h3>Example Unordered List</h3>
					<div class="boxContent">
						<ul>
							<li><a href="#">Suspendisse quis gravida massa felis.</a></li>
							<li><a href="#">Vivamus sagittis bibendum erat.</a></li>
							<li><a href="#">Nullam et orci in erat viverra ornare.</a></li>
							<li><a href="#">Suspendisse quis gravida massa felis.</a></li>
							<li><a href="#">Curabitur malesuada turpis nec ante.</a></li>
						</ul>
					</div>
				</div>
				<div class="box">
					<h3>Example Table</h3>
					<div class="boxContent">
						<table>
							<tr>
								<th>Date</th>
								<th>Title</th>
								<th>Description</th>
							</tr>
							<tr class="rowA">
								<td>December 1, 2006</td>
								<td>Sed vestibulum blandit</td>
								<td>Vivamus sollicitudin dolor sit amet eros. Vivamus ligula. Sed pretium turpis eu ipsum. Sed rutrum sapien id arcu.</td>
							</tr>
							<tr class="rowB">
								<td>November 28, 2006</td>
								<td>Augue non nibh</td>
								<td>Nam adipiscing urna ac consequat dignissim massa est sodales sem.</td>
							</tr>
							<tr class="rowA">
								<td>November 23, 2006</td>
								<td>Fusce ut diam bibendum</td>
								<td>Vestibulum quis urn nulla facilis nam malesuada cursus turpis.</td>
							</tr>
							<tr class="rowB">
								<td>November 21, 2006</td>
								<td>Maecenas et ipsum</td>
								<td>Vivamus mi lectus gravida scelerisque, ultrices vitae cursus in neque.</td>
							</tr>
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
					<option value=Coordinador>Coordinador</option>
					<option value=Master>Master</option>
					</select>
                  <input type="text" class="text" maxlength="32" name="to" />
                  <input type="submit" class="button" value="Enviar" />
              </form>
            </div>
	      </div>
		  <div class="box boxB">
            <div class="boxContent">
              <form method="post" action=""><span>Buscar mensaje:</span>
                  <input type="text" class="text" maxlength="32" name="keywords3" />
                  <input type="submit" class="button" value="Buscar" />
              </form>
            </div>
	      </div>
		  <div class="box">
            <h3>Fusce dolor tristique</h3>
		    <div class="boxContent">
              <p>Sed eu eros imperdiet eros interdum blandit. Vivamus sagittis bibendum erat. Curabitur malesuada. <a href="#">More&#8230;</a></p>
	        </div>
	      </div>
	  </div>
	  <div class="clear"></div>
	</div>
	<div id="footer">
		<p>Copyright &copy; 2006 Sitename.com. Designed by <a href="http://www.freecsstemplates.org">Free CSS Templates</a></p>
	</div>
</div>
</body>
</html>
