<?php
function gerarHash($tamanhoLinha=4096){

	$arrDic1 = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
				 'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
				 '0','1','2','3','4','5','6','7','8','9');

	$strArquivo = '';

	for($i=0;$i<$tamanhoLinha;$i++) {
		$strArquivo .= $arrDic1[rand(0,count($arrDic1)-1)];
	}
	return $strArquivo;
}

if($arc === 0){
	$lacos = 100;	
}else{
	$lacos = $argv[1];
}

$time_start = microtime(true);

$arrHash = array();

for($y=0;$y<$lacos;$y++){
	$arrHash[] = gerarHash();	
}

$objHash = json_encode($arrHash);

file_put_contents('log.txt',$objHash);

$time_end = microtime(true);
$time = $time_end - $time_start;

print("Tempo: ".sprintf('%f', $time).PHP_EOL); 
?>
