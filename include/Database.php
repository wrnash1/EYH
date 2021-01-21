<?php

Class Database {
    private $host;
    private $user;
    private $pass;
    private $dbname;

    private $dbh;
    private $error;

    private $stmt;

    public function __construct($host, $user, $pass, $dbname){

		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->dbname = $dbname;

		if($this->dbh === null){
			$this->reconnect();
		}
    }

	private function reconnect(){
		// Set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        // Set options
        $options = array(
            PDO::ATTR_PERSISTENT    => false,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );
        // Create a new PDO instanace
        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        }
        // Catch any errors
        catch(\PDOException $e){
            $this->error = $e->getMessage();
			return $this->error;
        }
	}

	/* Prepare query */
    public function query($query){
		try{
			$this->stmt = $this->dbh->prepare($query);
		}
		catch(\PDOException $e){
			$this->reconnect();

			try{
				$this->stmt = $this->dbh->prepare($query);
			}
			catch(\PDOException $e){
				$this->error = $e->getMessage();
				return $this->error;
			}
		}
    }

	/* Bind parameters */
    public function bind($param, $value, $type = null){
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

		try{
			$this->stmt->bindValue($param, $value, $type);
		}
		catch(\PDOException $e){
			$this->reconnect();

			try{
				$this->stmt->bindValue($param, $value, $type);
			}
			catch(\PDOException $e){
				$this->error = $e->getMessage();
				return $this->error;
			}
		}
    }

	/* Execute query */
    public function execute(){
		try{
			return $this->stmt->execute();
		}
		catch(\PDOException $e){
			$this->reconnect();

			try{
				return $this->stmt->execute();
			}
			catch(\PDOException $e){
				$this->error = $e->getMessage();
				return $this->error;
			}
		}
    }

	/* Fetch column */
    public function column(){
		try{
			$this->execute();
		}
		catch(\PDOException $e){
			$this->reconnect();

			try{
				$this->execute();
			}
			catch(\PDOException $e){
				$this->error = $e->getMessage();
				return $this->error;
			}
		}
        return $this->stmt->fetchAll(PDO::FETCH_COLUMN);
    }

	/* Fetch multiple rows */
    public function resultset(){
		try{
			$this->execute();
		}
		catch(\PDOException $e){
			$this->reconnect();

			try{
				$this->execute();
			}
			catch(\PDOException $e){
				$this->error = $e->getMessage();
				return $this->error;
			}
		}
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

	/* Fetch single row */
    public function single(){
		try{
			$this->execute();
		}
		catch(\PDOException $e){
			$this->reconnect();

			try{
				$this->execute();
			}
			catch(\PDOException $e){
				$this->error = $e->getMessage();
				return $this->error;
			}
		}
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

	/* Fetch number of rows */
    public function rowCount(){
		try{
			return $this->stmt->rowCount();
		}
		catch(\PDOException $e){
			$this->reconnect();

			try{
				return $this->stmt->rowCount();
			}
			catch(\PDOException $e){
				$this->error = $e->getMessage();
				return $this->error;
			}
		}
    }

	/* Fetch last inserted id */
    public function lastInsertId(){
		try{
			return $this->dbh->lastInsertId();
		}
		catch(\PDOException $e){
			$this->reconnect();

			try{
				return $this->dbh->lastInsertId();
			}
			catch(\PDOException $e){
				$this->error = $e->getMessage();
				return $this->error;
			}
		}
    }

	/* Start transaction */
    public function beginTransaction(){
		try{
			return $this->dbh->beginTransaction();
		}
		catch(\PDOException $e){
			$this->reconnect();

			try{
				return $this->dbh->beginTransaction();
			}
			catch(\PDOException $e){
				$this->error = $e->getMessage();
				return $this->error;
			}
		}
    }

	/* Finish transaction */
    public function endTransaction(){
		try{
			return $this->dbh->commit();
		}
		catch(\PDOException $e){
			$this->reconnect();

			try{
				return $this->dbh->commit();
			}
			catch(\PDOException $e){
				$this->error = $e->getMessage();
				return $this->error;
			}
		}
    }

	/* Cancel transaction */
    public function cancelTransaction(){
		try{
			return $this->dbh->rollBack();
		}
		catch(\PDOException $e){
			$this->reconnect();

			try{
				return $this->dbh->rollBack();
			}
			catch(\PDOException $e){
				$this->error = $e->getMessage();
				return $this->error;
			}
		}
    }

	/* Debug parameters */
    public function debugDumpParams(){
		try{
			return $this->stmt->debugDumpParams();
		}
		catch(\PDOException $e){
			$this->reconnect();

			try{
				return $this->stmt->debugDumpParams();
			}
			catch(\PDOException $e){
				$this->error = $e->getMessage();
				return $this->error;
			}
		}
    }
}

?>
