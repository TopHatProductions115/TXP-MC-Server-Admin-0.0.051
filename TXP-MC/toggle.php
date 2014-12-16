<?php

$method = $_GET["method"];

    if($method == "start"){
        exec("/jdk1.8.0_20/jre/bin/java -jar /TXP-MC/server/minecraft_server.jar");
    }else if($method == "stop"){
		exec("killall /jdk1.8.0_20/jre/bin/java");
        
    }else if($method == "restart"){
	    exec("pkill /jdk1.8.0_20/jre/bin/java");
	    sleep(7);
		exec("/jdk1.8.0_20/jre/bin/java -jar /TXP-MC/server/minecraft_server.jar");
	}
	
	header("Location: /TXP-MC/index.php");
?>