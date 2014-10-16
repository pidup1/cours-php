<?php

function doSqlInsert($db,$sql)
        
	{
    global $dbConfig;
                        $type = $dbConfig[$db]['type'];
			$host = $dbConfig[$db]['host'];
			$base = $dbConfig[$db]['base'];
			$user = $dbConfig[$db]['user'];
			$pass = $dbConfig[$db]['pass'];
			$dbc = new PDO($type.':host='.$host.';dbname='.$base, $user, $pass);
			$count = $dbc->exec($sql);
			$dbc = null;
			return $count;
	}
