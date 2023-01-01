<div class="row container">
    <div class="col s12">
        <h3 class="light">Consulta Inquilinos</h3>

        <table class="striped">
            <thead>
                <tr>
                    <th>Nome Inquilino</th>
                    <th>Outros Inquilinos</th>
                    <th>cpf</th>
                    <th>telefone</th>
                    <th>Data Nascimento</th>
                    <th>Editar</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach ($consulta as $registro) : ?>
                    <tr>
                        <td><?php echo $registro['nomeInquilino'] ?></td>
                        <td><?php echo $registro['outrosInquilinos'] ?></td>
                        <td><?php echo $registro['cpf'] ?></td>
                        <td><?php echo $registro['telefone'] ?></td>
                        <td><?php echo $registro['dataNascimento'] ?></td>                      
                    </tr>
                <?php endforeach; ?>
                </tr>
                </tbody>
        </table>

    </div>
</div>