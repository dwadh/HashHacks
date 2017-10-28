<?
$uname = $_POST['uname'];
$passw = $_POST['passw'];
$result = exec('python signin.py '.$uname.' '.$passw);
if ($result != '0')
{
	setcookie('login', $result, time() + (86400 * 30), "/");
	$link = 'investorCompany.php?user='.$result; 
	header('Location: '.$link);
}
else
{
	header('Location: '.'index.html');
}