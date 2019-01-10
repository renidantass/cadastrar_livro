<?php 
include 'model/Manager.class.php';

$errors = [
	"book_added" => "Livro adicionado com sucesso ao banco de dados, obrigado :')",
	"book_deleted" => "Livro apagado com sucesso!"
];

$Manager = new Manager();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Página inicial</title>
	<?php include_once 'view/dependencias.php'; ?>
</head>
<body>
	<div class="container">
		<div class="row mt-2">
			<div class="col-md-12">
				<?php
					echo (!empty($_GET)) ? "<div class='alert alert-warning'>".$errors[array_keys($_GET)[0]]."</div>" : "";
				?>
				<div class="card">
					<div class="card-header">
						<a href="view/registro.php">
							<button class="btn btn-secondary"><i class="fa fa-book"></i> Cadastrar livro</button>
						</a>
					</div>
					<div class="card-body">
						<h5 class="card-title">Aqui estarão os 5 livros mais recentes</h5>
						<ul class="list-group">
							<?php foreach($Manager->listBooks("livros") as $book): ?>
								<li class="list-group-item">
									<a href="<?=$book['url']?>" target='_blank'><?=$book['nome']?></a> do ISBN <a href='https://www.google.com/search?q=<?=$book['isbn']?>' target='_blank'><?=$book['isbn']?></a> por <?=$book['autor']?>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<!-- end of scripts -->
</body>
</html>