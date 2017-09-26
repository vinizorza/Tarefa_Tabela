<html>
<header>
<title>Trabalho Cálculo II</title>

<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


<script language="Javascript">

  function gerarTabela(){

    //Pegando os valores dos inputs
      var valor_x = $("#valor_x").val();
      var media = $("#media").val();
      var variancia = $("#variancia").val();

      //Enviando para o php calcular
      
      $.ajax({
        method: 'GET',
        url: 'calcular.php?x=' + valor_x +'&media=' + media + '&variancia=' + variancia,
        success: function(retorno){

          var array = JSON.parse(retorno);

          var tabela = '';
          tabela = tabela + '<thead><tr>';
          for(var y in array[0]){
            tabela = tabela + '<th>' + array[0][y] + '</th>';
          }
          tabela = tabela + '</tr></thead>';


          tabela = tabela + '<tbody>';
            for(var i = 1; i < array.length; i++){
              tabela = tabela + '<tr>' +'<th scope="row">' + array[i][0] + '</th>';
              for(var j = 1; j < array[i].length; j++){
                tabela = tabela + '<td>' + array[i][j] + '</td>';
              }
              tabela = tabela + '</tr>';
            }
          tabela = tabela + '</tbody>';
          

          jQuery("#tabela").html(tabela);
        }
      });

  }

        
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

            <button name="button" class="btn btn-outline-primary my-3" onclick="gerarTabela();">Gerar Tabela</button>
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
            </table>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </div>
</body>
</html>