<?php	
class f{
	protected $error;
	public function _construct($str='Error')
	{
		$this->error=$str;
	}
}

function run($obj, $objlog){
	$obj=$obj."Connect";
	$_log=ILogger::Create($obj::get()->connect());
	$_log->log($objlog);
	$_log->write();
}

run("File", 'e');
run("File", new f('Error'));

?>

	
