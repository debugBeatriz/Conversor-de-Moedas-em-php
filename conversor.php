<?php
if (!empty($_GET)){

$v1 = @$_GET['v1'];
if (!empty($_GET)) {
	$selecao = $_GET['selecao'];
	switch ($selecao) {
		case 'op1':
			$total = $v1 * 4.08;
			number_format($total,2);
			echo "$v1 reais = $total dolares";
			break;
		case 'op2':
			$total = $v1 * 4.48;
			number_format($total,2);
			echo "$v1 R$ = $total euros";
			break;
		case 'op3':
			$total = $v1 * 5.11;
			number_format($total,2);
			echo "$v1 R$ = $total libras";
			break;
		
		default:
			echo "por favor, selecione uma opção!";
			break;
	}
}else{
	echo "digite no campo";
}
}

?>