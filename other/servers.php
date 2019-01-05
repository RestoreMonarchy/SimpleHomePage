<?php
		error_reporting(0);
		require_once('vendor\gameq\src\GameQ\Autoloader.php');
		require_once('config.php');
	
		$GameQ = new \GameQ\GameQ();
		$GameQ->addServers($servers);
		$GameQ->setOption('timeout', 5);
		$results = $GameQ->process();
		
		foreach ( $results as $var ) {
			if ($var['game_dir'] == "Unturned") {
				$game = "unturned";
			} else {
				$game = "rust";
			}

			if ($var['gq_online'] == "1") {
				$status = '<center><i style="color: green;" class="fas fa-circle"></i></center>';
			} else {
				$status = '<center><i style="color: red;" class="fas fa-circle"></i></center>';
			}
			echo "<tr><th scope='row'><img class='game' src='img/" .$game. ".png'></th><td>" 
			.$var["gq_hostname"]. "</td><td>" 
			.$var["gq_mapname"]. "</td><td>"
			.$var["gq_numplayers"]. "/" .$var["max_players"]. "</td><td>" 
			.$var["gq_address"]. ":" 
			.$var["gq_port_client"]. "</td><td>" 
			.$status. "</td></tr>";
		}
?>