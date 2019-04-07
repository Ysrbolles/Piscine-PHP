<?php

function is_valid($tab, $user) {
	$number = 0;
	foreach ($tab as $cur) {
		$number++;
        if ($user['login'] == $cur['login'] && $user['passwd'] === $cur['passwd']) 
            return ($number);
    }
	return (0);
}

function auth($login, $passwd) {
	$tab = unserialize(file_get_contents("../private/passwd"));
	return (is_valid($tab, ['login' => $login, 'passwd' => hash('whirlpool', $passwd)]) > 0);
}

?>