<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXZwQWcAAAAgAAAAIACH+pydAAABAUlEQVRIx+2VvQ3CMBBGPQojuKSkpMwYlJQpGYERMoJHSJkRKBkhpTvIZ+mss3MXnwSIAopPUeK79+z82YUQ3CfjfkPgvX9IeUlQgPazGItMhd93Y44EL8bdVZWI8DjGAjAdYgqHo4bXaZL1CpbCevZvE6xuzdLUuj1FLWIVEPw2zcVRk5CgXsVKkGciwDVJ7rEIzn7KgJYg1TL4yY9tAYq0974OBDwmwbHrCgnOKRqY4KgxCXiGYXklY0xHnEtQnk0BSfr+khsAp9QwHvSYPjQU4WECiKZ6BRIY9Ri3fcmChIJrUjR482+KRg1K4C14cz+gXzGB6lj2he9tOP9Nn/IEfN0fBbbre5sAAAAASUVORK5CYII=">
<title> TPP Logs </title>
<link href='https://fonts.googleapis.com/css?family=Inconsolata%7CUbuntu' rel='stylesheet' type='text/css'>
<link href='/resources/css/tpp.css' rel='stylesheet' type='text/css'>
</head>
<body>
<form action="file.php" method="get">
Query: <input type="text" name="query" required>
Page Number: <input type="text" name="page">
<input type="submit">
</form>
<br>
<p>
to search for people who have used "/me", just search
</p>
<pre>"__*_"</pre>
<p>(space space star space)</p>
<p>to search for usernames, type the username in lowercase followed by a "&gt;" like this:</p>
<pre>username&gt;</pre>
<p>Download the file:</p>
<a href="tpp.log" download>
<?php
$filename = 'tpp.log';
clearstatcache();
echo $filename . ': ' . filesize($filename) . ' bytes';
?>
</a>
<hr>
<div class="emotes">
<?php
$handle = fopen("tpp.log", "r");
if ($handle) {
    for ($i = 0; $i < 100; $i++) {
        if (($line = fgets($handle)) !== false) {
	echo '<p>'.htmlspecialchars($line).'</p>';echo "\r\n";
	flush();
}
    }
}

?>
</div>
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="/resources/js/kappa.js"></script>
	<script>
            $(function () {
                $('.emotes').kappa();
            });
        </script>
</body>
</html>