<?php

/**
* データベースクラス
*
* @author satoshi kurihara
* @since PHP 5.3
* @version 1.0
*/

class DataBase extends Singleton
{
	protected $dsn;
	protected $stmt;

	protected function __construct()
	{
		try
		{
			$this->dsn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHAR, DB_USER, DB_PASS);
			$this->dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->dsn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			$this->dsn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		}
		catch(PDOException $e)
		{
			throw new Exception($e->getMessage());
		}
	}

	public function getRow($query, $params=array())
	{
		try
		{
			$this->stmt = $this->dsn->prepare($query);
			$this->stmt->execute($params);
			return $this->stmt->fetch();
		}
		catch(PDOException $e)
		{
			throw new Exception($e->getMessage());
		}
	}

	public function getRows($query, $params=array())
	{
		try
		{
			$this->stmt = $this->dsn->prepare($query);
			$this->stmt->execute($params);
			return $this->stmt->fetchAll();
		}
		catch(PDOException $e)
		{
			throw new Exception($e->getMessage());
		}
	}

	public function executeRow($query, $params)
	{
		try
		{
			$this->stmt = $this->dsn->prepare($query);
			$this->stmt->execute($params);
		}
		catch(PDOException $e)
		{
			throw new Exception($e->getMessage());
		}
	}

	public function updateRow($query, $params)
	{
		return $this->ExecuteRow($query, $params);
	}

    public function deleteRow($query, $params)
    {
        return $this->ExecuteRow($query, $params);
    }

}