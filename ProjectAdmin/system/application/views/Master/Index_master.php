<?php
$this->load->view('Master/header');
?>
	<div id="content">
		<div id="primaryContentContainer">
			<div id="primaryContent">
				<div class="box">
					<h2>Bienvenidos Masters</h2>
					<div class="boxContent">
						<p><strong>Project Coord</strong> es un portal que permite la coordinacion y administracion de proyectos. Crea tu equipo y asesora las actividades, comparte informacion y mejora los resultados de tus proyectos. Disfrutenlo :).</p>
						<p>El sitio es desarrollado por alumnos del Tecnologico de Monterrey Campus Zacatecas, dentro de la materia de Desarrollo de Aplicaciones Avanzadas en Internet</p>
					</div>
				</div>
				<div class="box">
					<h3><?=$this->validation->error_string; ?></h3>
				</div>
<div class="box"><div class="boxContent"></div>
				</div>
				<div class="box">
				  <div class="boxContent"></div>
			  </div>
			</div>
		</div>
		<div id="secondaryContent">
		  <div class="box boxA">
            <div class="boxContent">
              <?=form_open('form_master'); ?>
                <div> 
                	<span>Matricula:</span>
                    <input type="text" class="text" maxlength="32" name="username" />
                    <span>Password:</span>
                    <input type="password" class="text" maxlength="32" name="password" />
                    <input type="hidden" name="passconf" value="1" size="50" />
                    <input type="submit" class="button" value="Entrar" />
                  </div>
              </form>
            </div>
	      </div>
		  <div class="box"></div>

			<div class="box"><div class="boxContent"></div>
			</div>

		</div>
		<div class="clear"></div>
	</div>
	<div id="footer">
		<p>Copyright &copy; 2008 ProjectCoord<a href="http://www.freecsstemplates.org"></a></p>
	</div>
</div>
</body>
</html>
