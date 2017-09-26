<html>
<header>
<title>Trabalho Cálculo II</title>

<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


<script language="Javascript">
        function gerarTabela(){

          //Pegando os valores dos inputs
            var valor_x = $("#valor_x").val();
            var media = $("#media").val();
            var variancia = $("#variancia").val();
			
			

            /*//Enviando para o php calcular
            $.ajax({
              method: 'GET',
              url: 'calcular.php',
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



            $.get( "ajax/test.html", function( data ) {
			  $( ".result" ).html( data );
			  alert( "Load was performed." );
			});*/
			
			$.get( "calcular.php" );


        


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

            <a href="" class="btn btn-outline-primary my-3" onclick="gerarTabela();">Gerar Tabela</a>
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