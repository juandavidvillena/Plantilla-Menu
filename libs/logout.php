<?php

	require_once "Sesion.php" ;

	// obtenemos la instancia de la sesión
	$ses = Sesion::getInstance() ;

	// cerramos la sesión
	$ses->close() ;

	// redirigimos al inicio
	$ses->redirect("../index.php") ;
	