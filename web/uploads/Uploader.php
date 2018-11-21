<?php
if( $_FILES['file']['name'] != "" )
{
	$target_path = "uploads/";
	$target_path = $target_path.basename( $_FILES['file']['name']); 
	if(move_uploaded_file($_FILES['file']['name'], $target_path)) 
	{
		echo "The file ".basename( $_FILES['file']['name'])." has been uploaded";
	} 
	else
	{
		echo "There was an error uploading the file, -----".$target_path."/".$_FILES['file']['name']."----- please try again!";
	}

	  // copy( $_FILES['file']['name'], "/SendEmail" ) or 
		//       die( "Could not copy file!");
}
else
{
    die("No file specified!");
}
?>
<html>
<head>
<title>Uploading Complete</title>
</head>
<body>
<h2>Uploaded File Info:</h2>
<ul>
<li>Sent file: <?php echo $_FILES['file']['name'];  ?>
<li>File size: <?php echo $_FILES['file']['size'];  ?> bytes
<li>File type: <?php echo $_FILES['file']['type'];  ?>
</ul>
</body>
</html>