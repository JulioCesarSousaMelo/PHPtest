<form class="row align-items-center" method="POST"> 
  <div class="col-9">
    <input type="text" name="cep" id="cep" class="form-control form-control-lg" placeholder="Informe o CEP desejado" maxlength="10" onkeyup="mascara('#####-###',this,event,true)" required>
  </div>
  <div class="col-3">
    <button type="submit" class="btn btn-success btn-lg">Pesquisar</button>
  </div>
</form>