<!DOCTYPE html>
<html>
<head>
<title>CSV file upload</title>
</head>
<body>
<?php
if ($_FILES && $_FILES["filename"]["error"] == UPLOAD_ERR_OK)
{
	$name = $_FILES["filename"]["name"];
	move_uploaded_file($_FILES["filename"]["tmp_name"], $name);
	$dir = "/upload/";
	mkdir($dir, 0755);
	$row = 1;
	if (($handle = fopen($_FILES["filename"]["name"], "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$fnw = fopen($dir . $data[0], "w");
			fwrite($fnw, $data[1]);
			fclose($fnw);
			$row++;
		}
	}
	fclose($handle);
	echo "Uploaded file parsed, new files produced.";
}
?>
<h2>Uploading a File</h2>
<form method="post" enctype="multipart/form-data">
Select CSV file: <input type="text/csv" name="filename" /><br /><br />
<input type="submit" value="Upload" />
</form>
</body>
</html>
