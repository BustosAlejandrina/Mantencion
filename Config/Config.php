<?php 
	
	//define("BASE_URL", "http://localhost/mantencion/");
	const BASE_URL = "http://localhost/mantencion";

	//Zona horaria
	date_default_timezone_set('America/Santiago');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "mantencion";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

//Datos envio de correo
const NOMBRE_REMITENTE = "Tienda Virtual";
const EMAIL_REMITENTE = "no-reply@abelosh.com";
const NOMBRE_EMPESA = "Tienda Virtual";
const WEB_EMPRESA = "www.abelosh.com";

?>