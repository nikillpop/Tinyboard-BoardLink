<?php
// Comment this line if your synchronization isn't part of VICHAN Federation
$config['vichan_federation'] = true;
// Comment this line if your installation IS in English or your synchronized
// board SHOUDN'T be in English
$config['locale'] = 'en';

require_once("boardlink/main.php");

$b = new BoardLink(basename(dirname(__FILE__)),
	'http://int.vichan.net/de/', // Origin. Basically, URL of the board.
	array( // Linked boards
		'password' => 'http://int.vichan.net/uk/',
	)
);
$b->configure_board();
?>
