<div class="row container">
    <div class="col s12">
        <h3 class="light">Cadastro Inquilino</h3>
    </div>

    <div class="col s12">
        <form actionn="??router=Sitte/cadastra" method="post">
            <div class="input-field col s6">
                <input name="nomeInquilino" placeholder="Nome do Inquilino" type="text" class="validate" required>
                <label>Nome do Inquilino</label>
            </div>
            <div class="input-field col s6">
                <input name="outrosInquilinos" placeholder="Outros Inquilinos" type="text" class="validate" required>
                <label>Outros Inquilinos </label>
            </div>
            <div class="input-field col s6">
                <input name="cpf" placeholder="CPF" type="number" class="validate" required>
                <label>CPF</label>
            </div>
            <div class="input-field col s6">
                <input name="telefone" placeholder="Numero de Telefone" type="number" class="validate" required>
                <label>Numero de Telefone</label>
            </div>
            <div class="input-field col s6">
                <input name="dataNascimento" placeholder="Data de Nascimento" type="date" class="validate" required>
                <label>Data de Nascimento</label>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="actionn">Enviar</button>
        </form>
      
    </div>
</div>


</div>