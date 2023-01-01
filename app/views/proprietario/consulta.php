<div class="row container">
    <div class="col s12">
        <div>
            <h3 class="light">Consulta Proprietario</h3>
        </div>
        <div>
            <table class="striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cidade</th>
                        <th>Bairro</th>
                        <th>Rua</th>
                        <th>Nº Casa</th>
                        <th>CEP</th>
                        <th>Valor Aluguel</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach ($consulta as $registro) : ?>
                    <tr>
                        <td><?php echo $registro['nomeProprietario'] ?></td>
                        <td><?php echo $registro['cidade'] ?></td>
                        <td><?php echo $registro['bairro'] ?></td>
                        <td><?php echo $registro['rua'] ?></td>
                        <td><?php echo $registro['numeroImovel'] ?></td>
                        <td><?php echo $registro['cep'] ?></td>
                        <td><?php echo $registro['valorAluguel'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>