
<div class="row container">
    <div class="col s12">
        <h3 class="light">Cadastro Proprietario</h3>
    </div>

    <div class="col s12">
        <form action="?router=Site/cadastrar" method="post">
            <div class="input-field col s6">
                <input name="nomeProprietario" placeholder="Nome do Proprietario" type="text" class="validate" required>
                <label>Nome do Proprietario</label>
            </div>        
            <div class="input-field col s6">
                <input name="cidade" placeholder="Cidade" type="text" class="validate" required>
                <label>Cidade</label>
            </div>
            <div class="input-field col s6">
                <input name="bairro" placeholder="Nome do Bairro" type="text" class="validate" required>
                <label>Nome do Bairro</label>
            </div>
            <div class="input-field col s6">
                <input name="rua" placeholder="Nome da Rua" type="text" class="validate" required>
                <label>Nome da Rua</label>
            </div>
            <div class="input-field col s6">
                <input name="numeroImovel" placeholder="Número do Imovel" type="number" class="validate" required>
                <label>Número do Imovel</label>
            </div>
            <div class="input-field col s6">
                <input name="cep" placeholder="Cep do Imovel" type="number" class="validate" required>
                <label>Cep do Imovel</label>
            </div>
            <div class="input-field col s6">
                <input name="valorAluguel" placeholder="Valor do Aluguel" type="number" class="validate" required>
                <label>Valor do Aluguel</label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
        </form>


    </div>
</div>