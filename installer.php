<?php
//hi from Hdansk
class programs
{
	/* 	here we save wanted name of programs 
	separated by newline \n 	
	*/
	var $file_progname = 'programs.txt';

	var $version = '0/01 (10/03/2019 by jezik kachinskiy)';

	/*next vars work on armbian*/
	var $install_cmd = 'sudo apt-get --force-yes -y install';

	public function install_all(){
		return 0;
	}

	public function cheking_list(){
		$list = explode("\n",file_put_contents($this->file_progname));
		$count = count($list)-1;
		$return = array();

		$iter = 0;
		while($iter <= $count && isset($list[$iter])){
			if($this->checker($list[$iter])){
				$return[$iter] = $list[$iter];
			}
			$iter++;
		}
		return $return;
	}

	private function installer($array = null){

		if($array){
			$list = $array;
		}else{
			$list = explode("\n",file_put_contents($this->file_progname));
		}
		
		$count = count($list)-1;

		$iter = 0;
		while($iter <= $count && isset($list[$iter])){
			if($this->checker($list[$iter])){
				shell_exec($this->$install_cmd.' '.$list[$iter],$p);
			}
			$iter++;
		}
		return 0;
	}

	private function checker($name){
		return 'boolean, 1 if not installed';
	}

	public function helps(){
		return "
		If some programms not installing ,please check youre system,
		that script work only on armbian. You can try install deadly prog 
		if it error of packet manager or systems. 
		Check youre connection to ethernet, you mother or pornhub acc!
		Prog created jezik kachinskiy.";
	}

}
?>
