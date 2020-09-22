<?php 
$hierarquia = array(
	array(
		'nome_cargo'=> 'CEO',
		'subordinados'=>array(
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					'nome_cargo'=>'Aerente de vendas')
			),
			array(
				'nome_cargo'=>'diretor financeiro',
				'subordinados'=> array(
					array(
						'nome_cargo'=>'gerente de contas a pagar',
						'subordinados'=>array(
							'nome_cargo'=>'Super')
					),
					array(
						'nome_cargo'=>'gerente de compras',
						'subordinados'=>
						array(
							array(
								'nome_cargo'=>'Supervisor de suprimentos',
								array(
									array('nome_cargo'=>'funcionario'))
							))
					))
			))
		));
var_dump($hierarquia);


function exibe($cargos){
	$html = '<ul>';
	foreach ($cargos as $cargo ) {
		$html .= "<li>";
		$html .= $cargo['nome_cargo'];
		
		if(isset($cargo['subordinados']) && count($cargo['subordinados'])>0){
			$html .= exibe($cargo['subordinados']);
		}
		$html .= "</li>";
	}
	$html.='</ul>';
	return $html;
}

echo exibe($hierarquia);


 ?>
