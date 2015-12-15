<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>function table(gg){




alert ("hi");
alert(gg);





}</script>




<?php

require_once __DIR__ . '/db_connect.php';	// adding class for connection
	
	session_start();
$db = new DB_CONNECT();
$query_viewall = "SELECT * FROM credentials where login = '$_POST[Username]' AND password = '$_POST[Password]'";
$result = mysqli_query($db->connect(),$query_viewall) or die(mysql_error());

$rCount = $result->num_rows;
$status = $result->fetch_row();

if($rCount==1 ) 
{ 
echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 

$_SESSION["username"] ="".$_POST['Username'];
$_SESSION["password"] = "".$_POST['Password'];
$_SESSION["status"] = "1";
$_SESSION["role"] = "".$status[2];




}



 else 
{
	 echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
} 


if($status[2]=="teacher"){
$query_session = "SELECT * FROM sub_ses where teacher = '$_SESSION[username]'";
$result = mysqli_query($db->connect(),$query_session) or die(mysql_error());

$rCount = $result->num_rows;
	

	while ($output = $result->fetch_row())
{
	
	for($i = 1 ; $i < count($output)-1; $i++)
	{$hhh = "".$output[$i];
			//echo $hhh;
		  echo "<div><i onclick=\"table($hhh)\">$hhh</i>  </div>";
		
		
		
		}
}


}




?>

