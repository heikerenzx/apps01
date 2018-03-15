<?php 
	class db
	{
		/**
		 * @varname1 主机名
		 * @varname2 用户名
		 * @varname3 数据库密码
		 * @varname4 数据库名
		 * @varname5 编码格式
		 */
		private $hostname;
		private $root;
		private $password;
		private $dbname;
		private $charset;
		
		public function __construct()
		{
			inlcude "./configs/db.configs.php";
			$this->hostname = $dbconfigs["localhost"];
			$this->root     = $dbconfigs["root"];
			$this->password = $dbconfigs["password"];
			$this->dbname   = $dbconfigs["dbname"];
			$this->charset  = $dbconfigs["charset"];
		}
	}
?>
