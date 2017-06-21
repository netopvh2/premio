<label style=" font-family:  'Trebuchet MS'; font-weight: bold; color: rgb(29, 87, 167);">Dados
    Pesssoais:</label><br><br>
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Nome:</label>
            <input type="text" name="NOME" id="tNome" class="form-control" autocomplete="off" required>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">CPF:</label>
            <input type="text" name="CPF" class="form-control" placeholder="Somente Numero"
                   onkeypress="formatar(this,'000.000.000-00')" id="dta" maxlength="14" required>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Endereço:</label>
            <input type="text" name="ENDERECO" id="tEndereco" class="form-control" autocomplete="off"
                   required>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Numero:</label>
            <input type="text" name="NUMERO" class="form-control" autocomplete="off"
                   maxlength="5" required>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Bairro:</label>
            <input type="text" name="BAIRRO" id="tBairro" class="form-control" autocomplete="off"
                   required>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Complemento:</label>
            <input type="text" name="COMPLEMENTO" id="tComplemento" class="form-control"
                   autocomplete="off">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">CEP:</label>
            <input type="text" name="CEP" class="form-control" placeholder="Somente Numero"
                   onkeypress="formatar(this,'00.000-000')" maxlength="10" required>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-2">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Estado:</label>
            <select name="ESTADO" class="select2 form-control" required>
                <option value=""></option>
                @foreach($estados as $estado)
                    <option value="{{ $estado->CODIGO }}">{{ $estado->NOME }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">

            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Município:</label>

            <select name="MUNICIPIO" class="select2 form-control" required>

            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Telefone
                Celular:</label>
            <input type="text" name="TELEFONE" class="form-control" required>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Telefone
                Fixo:</label>
            <input type="text" name="TELEFONEFIXO" class="form-control">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Email:</label>
            <input type="email" name="EMAIL" class="form-control" autocomplete="off"
                   required>
        </div>
    </div>

</div>
