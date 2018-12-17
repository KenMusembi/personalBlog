

<html>
<P>Who logged into the site?</p>

</html>

<?php
$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);

$myfile = fopen("visitors.log", "r") or die("Unable to open file!");
echo fread($myfile,filesize("visitors.log"));
fclose($myfile);

?>
