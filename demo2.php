<?php
//测试循环是否存在阻塞
	for($i=0;$i<=100000;$i++){
	   echo $i*10000;
	   sleep(2);
	}
