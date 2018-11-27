<?php

class zipViewPlugin extends PluginBase{
	function __construct(){
		parent::__construct();
	}
	public function regiest(){
		$this->hookRegiest(array(
			'user.commonJs.insert' => 'zipViewPlugin.echoJs',
		));
	}
	public function unzipList(){
		$path = $this->filePath($this->in['path']);
		if(isset($this->in['index'])){
			$download = isset($this->in['download'])?true:false;
			KodArchive::filePreview($path,$this->in['index'],$download,$this->in['name']);
		}else{
			$cacheFile = TEMP_PATH.'zipView/'.hash_path($path).'.log';
			if(file_exists($cacheFile)){
				$data = json_decode(file_get_contents($cacheFile),true);
				show_json($data); 
			}
			mk_dir(get_path_father($cacheFile));
			$result = KodArchive::listContent($path);
			$data = json_encode($result['data']);
			if($result['code'] && $data){
				file_put_contents($cacheFile,$data);
				show_json($result['data'],$result['code']);
			}else{
				show_json($result['data'],false);
			}
		}
	}
	public function echoJs($st,$act){
		if($this->isFileExtence($st,$act)){
			$this->echoFile('static/main.js');
		}
	}
}