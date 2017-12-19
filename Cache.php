<?php 
namespace Wnet;
	class Cache {

	    function read($fileName) {
	    	$fileName = 'tmp/'.$fileName;

		    if (file_exists($fileName)) {
		        $handle = fopen($fileName, 'rb');
		        $variable = fread($handle, filesize($fileName));
		        fclose($handle);
		        return unserialize($variable);
		    } else {
		        return null;
		    }

	}

	    function write($fileName, $variable) {
	        $fileName = 'tmp/'.$fileName;
	        $handle = fopen($fileName, 'a');
	        fwrite($handle, serialize($variable));
	        fclose($handle);
	    }
	 
	    function delete($fileName) {
	        $fileName = 'tmp/'.$fileName;
	        @unlink($fileName);
	    }
	}


?>