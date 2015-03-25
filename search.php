<?php
header("Content-type: text/html; charset=utf-8"); 
$image =$_POST['image'];
$length = $_POST['length'];
abstract class figure{
	public $length = null;
	const PI = 3.14;
	public function _construct(){

	}
	abstract function area($length);
	abstract function perimeter($length);
	public function  _destruct(){

	}
}

class square extends figure{

	function area($length){
		$a = $length *$length;
		echo "面积：".$a."</br>";
	}
	function perimeter($length){
		$a = 4*$length;
		echo "周长：".$a."</br>";
	}
}

class circle extends figure{
	function area($length){
		$a = $length *$length*self::PI;
		echo "面积：".$a."</br>";
	}
	function perimeter($length){
		$a = 2*$length*self::PI;
		echo "周长：".$a."</br>";
	}
}
interface stereoscopic{
	public function superficial_area($length);
	public function volume($length);
}
class cubic extends square implements stereoscopic{
	public function superficial_area($length){
		$a = $length *$length *6;
		echo "表面积：".$a."</br>";
	}
	public function volume($length){
		$a = $length*$length*$length;
		echo "体积：".$a."</br>";
	}
	function area($length){
		parent::area($length);
	}
	function perimeter($length){
		parent::perimeter($length);
	}
}
class ball extends circle implements stereoscopic{
	public function superficial_area($length){
		$a = 4*self::PI*$length*$length;
		echo "表面积：".$a."</br>";
	}
	public function volume($length){
		$a = 4/3*self::PI*$length*$length*$length;
		echo "体积：".$a."</br>";
	}
	function area($length){
		parent::area($length);
	}
	function perimeter($length){
		parent::perimeter($length);
	}
}
if($length == ""){
	echo"<script type='text/javascript'>alert('请输入长度');history.back(-1);</script>"; 
}elseif($image=="square"){
	$square = new square($length);
	$square->area($length);
	$square ->perimeter($length);
}elseif($image=="circle"){
	$circle = new circle($length);
	$circle->area($length);
	$circle ->perimeter($length);
}elseif($image=="cubic"){
	$cubic = new cubic($length);
	$cubic->area($length);
	$cubic ->perimeter($length);
	$cubic ->superficial_area($length);
	$cubic-> volume($length);
}else{
	$ball = new ball($length);
	$ball->area($length);
	$ball ->perimeter($length);
	$ball ->superficial_area($length);
	$ball-> volume($length);
}
?>