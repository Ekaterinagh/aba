<?php 
class Employer{
	public $surname;
	public $name;	
	public $patronymic;
	private $age;
	private $str="15:1:10,16:2:20";
	public function get_age(){
		return $this->age; //ссылка на текущий обект класса
	}
	public function set_age($val){
		$val=intval($val);
		if($val>=18 && $val<=65){
			$this->age=$val;
			return true;
		}
		else{
			return false;
		}
	}
	public function get_info(){
		$str= $this->surname." "
				.$this->name." "
				.$this->patronymic." ";
		return $str;
	}
	public function get_full_info(){
		return $this->get_info()." ("
				.$this->get_age().")";
	}
	public function get_ids($string){
		$string=$this->str;
		$atr=explode(',', $string);
		echo"<pre>";
		print_r($atr);
		echo"</pre>";
		$ids="";
		foreach($atr as $res=>$value){
			if($value!=""){
				$arr2=explode(":",$value);
				$ids.=$arr2[1].",";
			}
		}
		return $ids;
		
	}
	public function __construct($surname=null, $name=null, $patronymic=null, $age=19){
		$this->surname=$surname;
		$this->name=$name;
		$this->patronymic=$patronymic;
		$this->age=$age;
	}
}

