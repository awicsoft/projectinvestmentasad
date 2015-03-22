<?php

	function incrypt($str){
			return ((md5(md5(md5($str)))));
		
		}
	
?>