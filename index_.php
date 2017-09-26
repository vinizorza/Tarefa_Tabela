<html>
<header>
<title>Trabalho Cálculo II</title>

<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


<script language="Javascript">
  // aqui eu defino que o JS só será executado após a página carregar, assim, o jQuery estará disponível pra uso
  jQuery(function ($) {
    // aqui, ao o elemento com id gerar-tabela ser clicado, irá rodar a função definida
    $("#gerar-tabela").on("click", function (event) {
      console.log("rodando");

      var valor_x = $("#valor_x").val();
      var media = $("#media").val();
      var variancia = $("#variancia").val();

      //Enviando para o php calcular

      // Alternativa 01 - Passando as variáveis via GET para o arquivo php
      $.ajax({
        method: 'GET',
        url: 'calcular.php?x=' + valor_x +'&media=' + media + '&variancia=' + variancia,
        beforeSend: function(){
          alert('retorno');
        },
        complete: function(){
          alert('retorno2');
        },
        success: function(retorno){
          alert(retorno);
        }
      });

      // Alternativa 02
      $.get("calcular.php", function(data){
        alert(valor_x);
        alert("Retorno: " +data);
      });

      // aqui previne que a página atualize ao clicar no botão
      event.preventDefault();
    });
  });
</script>



</header>
<body>
<div class="p-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <label class="col-form-label">Valor de X</label>
            <input class="form-control" type="number" value="" id="valor_x">

            <label class="col-form-label">Média</label>
            <input class="form-control" type="number" value="" id="media">

            <label class="col-form-label">Variância</label>
            <input class="form-control" type="number" value="" id="variancia">

  					<a href="#" class="btn btn-outline-primary my-3" id="gerar-tabela">Gerar Tabela</a>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>



    <div class="row">
        <div class="col-md-12">
          <hr class="">
    </div>



    <div class="p-1">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            
            <table class="table" id="tabela">
  <thead>
    <tr>
      <th>#</th>
      <th>0</th>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
      <th>6</th>
      <th>7</th>
      <th>8</th>
      <th>9</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>0,423654</td>
      <td>0,423654</td>
      <td>0,423654</td>
      <td>0,423654</td>
      <td>0,423654</td>
      <td>0,423654</td>
      <td>0,423654</td>
      <td>0,423654</td>
      <td>0,423654</td>
      <td>0,423654</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </div>



    

</body>
</html>