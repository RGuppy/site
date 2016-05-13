<?

	function db_connect()
	{
		$host = 'localhost';
		$user = 'tmp_user';
		$pswd = '1234';
		$db = 'tmpforyou';

		$connection = mysql_connect($host, $user, $pswd);
		if(!$connection || !mysql_select_db($db,$connection))
		{
			return false;
		}
		return $connection;
	}

	function db_result_to_array($result)
	{
		$res_array = array();
		$count =  0;
		while ($row = mysql_fetch_array($result))
		{
			$res_array[$count] = $row;
			$count++;
		}
		return $res_array;
	}

	function get_products()
	{
		db_connect();
		$query = "SELECT * FROM product ORDER BY id DESC";
		$result = mysql_query($query);
		$result = db_result_to_array($result);
		return $result;
	}

?>
