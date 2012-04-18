<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Basededatos{
	//Constructor de la libreria
	function Basededatos(){

	}
	//Funcion que regresa el numero de filas de la tabla (valores insertados)
	function get_rows($tabla){
		$CI= & get_instance();
		$CI->load->database();
		$query=$CI->db->query("SELECT * FROM $tabla");
		$num= $query->num_rows();
		return $num;
	}
	//Funcion que regresa el numero de columnas de la tabla (campos)
	function get_cols($tabla){
		$CI= & get_instance();
		$CI->load->database();
		$query=$CI->db->query("SELECT * FROM $tabla");
		$num= $query->num_fields();
		return $num;
	}
	//Funcion que regresa el vector de nombres de las columnas de la tabla (campos)
	function get_names($tabla){
		$CI= & get_instance();
		$CI->load->database();
		$query=$CI->db->query("SELECT * FROM $tabla");
		$num= $query->list_fields();
		return $num;
	}
	//Funcion que regresa la matriz los valores de la tabla
	//Deprecated de mysql_result.php funcion: field_data()
	function get_values($tabla){
		$CI= & get_instance();
		$CI->load->database();
		$query=$CI->db->query("SELECT * FROM $tabla");
		$i=0;
		$row= array();
		foreach($query->result_array() as $r){
		$row[$i]=$r;
		$i++;
		}
		return $row;
	}
	//Funcion que regresa la matriz los valores de la tabla de acuerdo a un campo
	function get_value($tabla, $campo, $valor){
		$CI= & get_instance();
		$CI->load->database();
		$query=$CI->db->query("SELECT * FROM $tabla WHERE $campo = '$valor'");
		$i=0;
		$row= array();
		foreach($query->result_array() as $r){
		$row[$i]=$r;
		$i++;
		}
		return $row;
	}
	//Funcion que regresa la matriz de los valores de la columna especificada
	function get_field($tabla, $campo){
		$CI= & get_instance();
		$CI->load->database();
		$query=$CI->db->query("SELECT $campo FROM $tabla");
		$i=0;
		$row= array();
		foreach($query->result_array() as $r){
		$row[$i]=$r;
		$i++;
		}
		return $row;
	}
	//Funcion para insertar los datos (vector)
	/*Ejemplo de los datos
		$valor = array(
               'Nombre' => 'Agus' ,
               'Apellido' => 'Ruba' ,
               'Email' => 'agus@chido.com'
            );
	*/
	function set_field($tabla, $valor){
		$CI= & get_instance();
		$CI->load->database();
		$query=$CI->db->insert($tabla, $valor);
	}
	//Funcion para insertar los datos (vector)
	function update_field($tabla, $valor, $campo, $val){
		$CI= & get_instance();
		$CI->load->database();
		$campo1="'".$campo."'";
		$CI->db->where($campo, $val);
		$query=$CI->db->update($tabla, $valor);
	}
}
?>