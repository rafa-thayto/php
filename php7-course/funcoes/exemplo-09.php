<?php


$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            // Inicio: Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    // Inicio: Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                    // Término: Gerente de Vendas
                )
            ),
            // Término: Diretor Comercial

            // Inicio: Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    // Inicio: Gerente de Contas a Pagas
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            // Inicio: Surpevisor de Pagamentos
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos'
                            )
                            // Término: Surpevisor de Pagamentos
                        )
                    ),
                    // Término: Gerente de Contas a Pagas

                    // Inicio: Gerente de Compras
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(

                            // Inicio: Supervisor de Suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos',
                                'subordinados' => array(

                                    array(
                                        'nome_cargo' => 'Funcionário'
                                    )
                                )
                            )
                            // Término: Supervisor de Suprimentos
                        )
                    )
                    // Término: Gerente de Compras
                )
            )
            // Término: Diretor Financeiro
        )
    )
);

function exibe($cargos) {

    $html = '<ul>';

    foreach ($cargos as $cargo) {

        $html .= "<l1>";

        $html .= $cargo['nome_cargo'];

        // Verifica se o array existe e se tem mais de 0 itens
        if (isset($cargo['subordinados']) && count($cargo['subordinados'] > 0)) {
            $html .= exibe($cargo['subordinados']);
        }

        $html .= "</l1>";

    }

    $html .= '</ul>';

    return $html;

}

echo exibe($hierarquia);
?>