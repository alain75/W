<?php
	namespace Manager;
	class TermManager extends \W\manager\Manager
	/* Récupère le mot du jour actuel */ 
	{
		public function getCurrentWordOfTheDay()
		{
			// $dbh = $this->dbh;
			// $table = $this->table;

			$sql = "SELECT * FROM $this->table terms WHERE is_wotd = 1";
			$sth = $this->dbh->prepare($sql);
			$sth->execute();

			return $sth->fetch();
		}

		public function getRandomWord()
		{
			$sql = "SELECT * FROM $this->table 
					WHERE is_wotd = 0
					ORDER BY LIMIT 1";
					
			$sth = $this->dbh->prepare($sql);
			$sth->execute();

			return $sth->fetch();
		}
	}
