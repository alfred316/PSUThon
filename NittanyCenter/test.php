<? 
if (isset($_POST['submit']) && $_POST['submit']=="Submit" && !empty($_POST['name'])) {//if submit button clicked and name field is not empty 
$name = $_POST['name']; //the entered name 
$l = $name{0}; // the first letter of the name 

// Create the subdirectory: 
// this creates the subdirectory, $l, if it does not already exists 
// Note: this subdirectory is created in current directory that this php file is in. 
if(!file_exists($l))  
{  
mkdir($l);  
} 
// End create directory 

// Create the file: 
$fileName = dirname(__FILE__)."/$l/$name.html"; // names the file $name 
$fh = fopen($fileName, 'w') or die("can't open file"); 
// The html code: 
// this will outpout: My name is (name) ! 
$str = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"> 
<html xmlns=\"http://www.w3.org/1999/xhtml\"> 
<head> 
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" /> 
<title>Untitled Document</title> 
</head> 
<body> 
My name is " . $name . " !<br /> 
</body> 
</html>"; 
fwrite($fh, $str); 
fclose($fh); 
// End create file 

echo "Congradualations!<br /> 
The file has been created. 
Go to it by clicking <a href=\"$l/$name.html\">here</a>."; 
die(); 
} 

// The form: 
?> 