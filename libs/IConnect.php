<?php

interface IConnect {
    
	const HOST = DB_HOST;
	const PORT  = DB_PORT;
	const DBNAME = DB_NAME;
	const USER = DB_USER;
	const PASSWORD = DB_PASSWORD;
	
	public function __construct();
}