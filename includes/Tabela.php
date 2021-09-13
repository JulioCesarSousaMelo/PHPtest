<?php

    $resultados = '<tr>
                        <td>' . $informacaos_cep[cep] . '</td>
                        <td>' . $informacaos_cep[logradouro] . '</td>
                        <td>' . $informacaos_cep[bairro] . '</td>
                        <td>' . $informacaos_cep[localidade] . '</td>
                        <td>' . $informacaos_cep[uf] . '</td>
                    </tr>';
                    
?>

<main>
    <section>
        <table class="table">
            <thead>
                <tr>
                    <th>CEP</th>
                    <th>Logradouro</th>
                    <th>Bairro</th>
                    <th>Localidade</th>
                    <th>UF</th>
                </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>
    </section>
</main>

<a href="index.php"><button class="btn btn-primary">Nova Pesquisa</button></a>