<?php
function make_dirs()
{
	if (!file_exists('../private')) {
		mkdir('../private', 0777, true);
	}
}

function is_valid($tab, $user)
{
	foreach ($tab as $cur) {
		if ($user['login'] == $cur['login']) {
			return false;
		}
	}
	return true;
}

if ($_POST['submit'] == 'OK' && $_POST['login'] && $_POST['passwd'])
{
	$user[] = [
		'login' => $_POST['login'],
		'passwd' => hash('whirlpool', $_POST['passwd']),];
		    make_dirs();
	if (file_exists('../private/passwd')) {
		$tab = unserialize(file_get_contents('../private/passwd'));
		if (is_valid($tab, $user[0])) {
			$tab[] = $user[0];
			if (file_put_contents('../private/passwd', serialize($tab))) {
				echo "OK\n";
			} 
			else {
				echo "ERROR\n";
			}
		} 
		else {
			echo "ERROR\n";
		}
	} 
	else 
	{
		if (file_put_contents('../private/passwd', serialize($user))) {
			echo "OK\n";
		} 
		else {
			echo "ERROR\n";
		}
	}
} 
else
{
	echo "ERROR\n";
}
?>
