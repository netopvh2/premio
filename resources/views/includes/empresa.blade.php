<label style=" font-family:  'Trebuchet MS'; font-weight: bold; color: rgb(29, 87, 167);">Dados da
    Empresa:</label><br><br>
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Empresa:</label>
            <input type="text" name="EMPRESA" id="tEmpresa" class="form-control" autocomplete="off"
                   required>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Endereço:</label>
            <input type="text" name="EMPENDERECO" id="tEmpEndereco" class="form-control"
                   autocomplete="off" required>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Numero:</label>
            <input type="text" name="EMPNUMERO" id="tEmpNumero" class="form-control" autocomplete="off"
                   maxlength="5" required>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Bairro:</label>
            <input type="text" name="EMPBAIRRO" id="tEmpBairro" class="form-control" autocomplete="off"
                   required>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Complemento:</label>
            <input type="text" name="EMPCOMPLEMENTO" id="tEmpComplemento" class="form-control"
                   autocomplete="off">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">CEP:</label>
            <input type="text" name="EMPCEP" class="form-control" id="tEmpCep"
                   placeholder="Somente Numero" onkeypress="formatar(this,'00.000-000')" id="dta"
                   maxlength="10" required>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-2">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Estado:</label>
            <select name="EMPESTADO" class="select2 form-control" id="tEmpEstado" required>
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
            <select name="EMPMUNICIPIO" class="select2 form-control" id="resultadoMunicipio2" required>

            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Telefone
                Celular:</label>
            <input type="text" name="EMPTELEFONE" id="tEmpTelefone" class="form-control">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Telefone
                Fixo:</label>
            <input type="text" name="EMPTELEFONEFIXO" id="tEmpTelefoneFixo" class="form-control"
                   required>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Email:</label>
            <input type="email" name="EMPEMAIL" id="tEmpEmail" class="form-control" autocomplete="off"
                   required>
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Registro
                do Profissional:</label>
            <input type="text" name="REGISTROPROF" id="tRegistroProf" class="form-control"
                   autocomplete="off" required>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Titulo
                do Trabalho:</label>
            <input type="text" name="TITULOTRAB" id="tTituloTrab" class="form-control"
                   autocomplete="off" required>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Modalidade
                para inscrição no Prêmio:</label>
            <select name="MODALIDADE" id="tModalidade" class="select2 form-control"
                    onchange="redirecionar(this)" required>
                <option value=""></option>
                <option value="Jornalismo Impresso">Jornalismo Impresso</option>
                <option value="Radiojornalismo">Radiojornalismo</option>
                <option value="Telejornalismo">Telejornalismo</option>
                <option value="Webjornalismo">Webjornalismo</option>


            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label style="font-family:  'Trebuchet MS'; font-weight: normal; color: rgb(87, 88, 90)">Nome
                do Editor:</label>
            <input type="text" name="EDITOR" id="tNomeEditor" class="form-control" autocomplete="off"
                   required>
        </div>
    </div>
    <br>
    <input type="hidden" name="DATA" value="{{ date('Y-m-d H:i:s') }}">

</div>