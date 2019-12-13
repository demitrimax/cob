<?php
	
$output = "Showtime!\n";

if ($_SERVER ['SERVER_NAME'] == 'devr2m.tobb.com.mx')
{
	$output = $output . "Setting branch to DEV\n";
	$output = $output . shell_exec ('/usr/bin/git checkout dev');
}
elseif ($_SERVER ['SERVER_NAME'] == 'respalda2m.tobb.com.mx')
{
	$output = $output . "Setting branch to MASTER\n";
	$output = $output . shell_exec ('/usr/bin/git checkout master');
}

$output = $output . shell_exec ('/usr/bin/git pull');
echo ("<pre>$output</pre>");
