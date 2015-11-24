<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<style>

div{height:80px;
width:100%;
background:#3CF;
font:"Courier New", Courier, monospace;
font-size:16px;
padding-top:5px;

}
input{
	margin:10px;
	
	
	}
#fo{background:#96F;
height:60px;
padding-top:5px;
font-size:18px;}

#end{height:50px;}

.zero{background:#CCC;height:50px;}

.one{background:#FFF;height:50px;}
</style>

<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div id='fo'> Name: <input type="text" name="name" id="name" value="">
   

  <input type="submit" name="submit" value="Submit"> 
</div>

<?php
function startsWith($haystack, $needle) {
    // search backwards starting from haystack length characters from the end
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
}

	


if(!empty($_POST['name'])){
 $name = $_POST['name']; 
 
 echo "<div ><h2>Your Input: " . $name ."</h2></div>";

$str = file_get_contents('http://localhost/dictionary.json');
$json = json_decode($str, true); 
//print_r($json['DIPLOBLASTIC']);

$i=0;
foreach($json as $x => $x_value) {
	
    if ((substr($x, 0, strlen($name)))== strtoupper($name)){
		$offset = 30 - (strlen($x)) ;
		$spaces = str_repeat(".", $offset );
		
		if($i==0){
	 echo "<div class='zero'>" . $x . " " . $spaces.$x_value."</div>";
     
	 $i=1;}
	 if($i==1){
	 echo "<div class='one'>" . $x . " " . $spaces.$x_value."</div>";
     
	 $i=0;
	 }
		
		} 

}


}

?>
<div id="end"></div>
</form>
</body>
</html>