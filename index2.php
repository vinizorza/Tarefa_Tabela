<html>
<header>
<title>Trabalho Cálculo II</title>

<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script>
	$(document).ready(function() {
			// Verificar se os campos de usuário e senha foram devidamente preenchidos.
			$('#btn_calcular').click(function() {
				
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
		
		<form method="get" action="calcular.php">
            <label class="col-form-label">Valor de X</label>
            <input type="number" class="form-control" id="campo_valor_x" name="x" placeholder="Digite o valor de X" />

            <label class="col-form-label">Média</label>
			<input type="number" class="form-control" id="campo_media" name="media" placeholder="Digite a média" />

            <label class="col-form-label">Variância</label>
			<input type="number" class="form-control" id="campo_variancia" name="variancia" placeholder="Digite a variância" />

			<button type="buttom" class="btn btn-primary" id="btn_calcular">Calcular</button>
		</form>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>



    <div class="row">
        <div class="col-md-12">
          <hr class="">
    </div>



        <div class="col-md-2"></div>
        <div class="col-md-8">
		 <div class="container">
            
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



    

</body>
</html>