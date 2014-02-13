<?php

// Create a class for make connection
class createConnection {
    var $host="localhost";
    var $username="group11";    // specify the sever details for mysql
    var $password="group11";
    var $database="group11";
    var $myconn;

	// Create a function for connect database
    function connectToDatabase() {
        $conn = mysql_connect($this->host,$this->username,$this->password);
        if(!$conn)// testing the connection
            die ("Cannot connect to the database");
        else {
            $this->myconn = $conn;
            //echo "Connection established";
        }
        return $this->myconn;
    }
	
	function runSql($sql) {
		$query = mysql_query($sql, $myconn);
		return mysql_fetch_assoc($query);
	}

    /*function selectDatabase() // selecting the database.
    {
        mysql_select_db($this->database);  //use php inbuild functions for select database

        if(mysql_error()) // if error occured display the error message
        {

            echo "Cannot find the database ".$this->database;

        }
         echo "Database selected..";       
    }*/

	// Close the connection
    function closeConnection() {
        mysql_close($this->myconn);
        //echo "Connection closed";
    }
}

?>
