<?php

	// Desarrollo Web en Entorno Servidor
	// curso 2019/20

	class pdoDatabase 
	{
		private $host = "localhost" ;

		private $dbName ;
		private $dbUser ;
		private $dbPass ;

		private $sqli = null ;
		private $result = null ;
		private static $instance = null ;

		/**
		 * @param $hos 	- host 
		 * @param $dbu  - usuario
		 * @param $dbp  - contraseña
		 * @param $dbn  - nombre de la base de datos
		 */
		private function __construct($dbu, $dbp, $dbn) 
		{
			$this->dbUser = $dbu ;
			$this->dbPass = $dbp ;
			$this->dbName = $dbn ;

			//
			$this->connect() ;
		}


		public function exit(){
			$this->sqli = null ;
		}

		/**
		 * utilizamos el patrón de diseño SINGLETON que nos permitirá
		 * tener una única instancia de la clase DATABASE.
		 *
		 * @param $dbu 
		 * @param $dbp
		 * @param $dbn
		 */
		public static function getInstance($dbu, $dbp, $dbn)
		{
			// si no existe instancia la creamos
			if (pdoDatabase::$instance==null) 
				pdoDatabase::$instance = new pdoDatabase($dbu, $dbp, $dbn) ;

			// devolvemos la instancia
			return pdoDatabase::$instance ;
		}

		/*
		 * hacemos privado el método para evitar clonaciones
		 */
		private function __clone() { }

		/**
		 * Establecer una conexión con el motor de bases de datos
		 */
		private function connect()
		{
            try{

                $this->sqli = new PDO("mysql:host=$this->host;dbname=$this->dbName","$this->dbUser","$this->dbPass")
                                        or die("ERROR: Ha fallado la conexión con la base de datos.") ; 
            }catch(PDOException $e){
                die(“ERROR:: “.$e->getMessage());
            }

		}

		/**
		 * realizamos una consulta y devolvemos: true si la consulta
		 * se ha hecho con éxito y/o hay resultado; false en otro caso.
		 * 
		 * @param $sql
		 * @return 
		 */
		public function queryPdo($sql,$parametros):bool
		{

            $this->result = $this->sqli->prepare($sql);
            $this->result->execute($parametros);

			if (is_object($this->result))
				return ($this->result->rowCount() > 0);
			// si no es un objeto
			return $this->result ;
		}

		/**
		 * devuelve el resultado de la consulta en formato
		 * de objeto.
		 *
		 * @param $cls (optativo, valor por defecto stdClass)
		 * @return
		 */
		public function getObject($cls = "StdClass")
		{
			if (is_null($this->result)) return null ;

			// si tenemos un resultado, lo devolvemos
			return $this->result->fetchObject($cls) ;
		}


		/**
		 * Cuando el objeto se deserializa, conectamos de nuevo
		 * con el motor de base de datos.
		 */
		public function __wakeup()
		{
			$this->connect() ;
		}

	}