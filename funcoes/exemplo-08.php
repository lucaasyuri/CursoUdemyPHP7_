<?php 
//função recurrsiva, quando uma função chama a si mesma

$hierarquia = array(

	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			//inicio: Diretor
			array(
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' => array(
					//inicio: Gerende de vendas
					array(
						'nome_cargo' => 'Gerente de Vendas'
					)
					//termino: Gerente de vendas
				)
			),

			//término: Diretor Comercial

			//inicio: Diretor Financeiro
			array(
				'nome_cargo' => 'Diretor Financeiro',
				'subordinados' => array(
					//inicio: Gerente de contas a Pagar
					array(
						'nome_cargo' => 'Gerente de Contas a Pagar',
						'subordinados' => array(
							//inicio: Supervisor de pagamentos
							array(
								'nome_cargo' => 'Supervisor de Pagamentos'
							)

							//termino: Supervisor de Pagamentos
						)
					),
					//termino: Gerente de contas a Pagar

					//inicio: Gerente de compras
					array(
						'nome_cargo' => 'Gerente de Compras',
						'subordinados' => array(
							//inicio: Supervisor de Suprimentos
							array(
								'nome_cargo' => 'Supervisor de Suprimentos'
							)
							//termino: Supervisor de Suprimentos
						)
					)
					//termino: Gerente de compras
				)
			)
			//termino: Diretor Financeiro
		)		
	)

);

function exibe($cargos) {
//.=: ir acumulando

	$html = '<ul>';

		foreach ($cargos as $cargo) {

			$html .= "</li>";

				$html .= $cargo['nome_cargo'];

				if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
					//isset: se a variavel ja foi criada ou não
					//count(): conta quantos elementos dentro de uma chave de array		

					$html .= exibe($cargo['subordinados']);

				}

			$html .= "</li>";

		}

	$html .= "</ul>";

	return $html;

}

echo exibe($hierarquia);

 ?>