<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Página inicial</title>
	<?php include_once 'view/dependencias.php'; ?>
</head>
<body>
	<!-- MODAL PARA REGISTRO DE LIVROS -->
	<div class="modal fade" id="addBook" tabindex="-1" role="dialog" aria-labelledby="addBookLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="addBookLabel">Adicionar livro</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<form method="POST" id="formAdd">
								<div class="form-group">
									<label for="nome">Nome do livro</label>
									<input type="text" name="nome" id="nome" class="form-control" placeholder="Mulheres..." required>
								</div>
								<div class="form-group">
									<label for="autor">Autor</label>
									<input type="text" name="autor" id="autor" class="form-control" placeholder="Ex.: Charles Bukowski" required>
								</div>
								<div class="form-group">
									<label for="pubilcado">Data publicado</label>
									<input type="date" name="data_publicado" id="publicado" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="isbn">ISBN</label>
									<input type="number" name="isbn" id="isbn" class="form-control" placeholder="Ex.: 12321321382" required>
								</div>
								<div class="form-group">
									<label for="edicao">Edição</label>
									<input type="number" name="edicao" id="edicao" class="form-control" placeholder="Ex.: 1" required>
								</div>
								<div class="form-group">
									<label for="url">Link do livro</label>
									<input type="text" name="url" id="url" class="form-control" placeholder="Ex.: www.drive.google.com/fDSAdsz8" required>
								</div>
								<input onclick="addBook()" value="Cadastrar" class="btn btn-primary active float-right">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- MODAL PARA REGISTRO DE LIVROS -->


	<div class="container">
		<div class="row my-2">
			<div class="col-md-12">
				<?php
					echo (!empty($_GET)) ? "<div class='alert alert-warning'>".$errors[array_keys($_GET)[0]]."</div>" : "";
				?>
				<div class="card">
					<div class="card-header">
						<button class="btn btn-success active" data-toggle="modal" data-target="#addBook"><i class="fa fa-book"></i> Cadastrar livro</button>
					</div>
					<div class="card-body">
						<h5 class="card-title">Aqui estarão os 5 livros mais recentes</h5>
						<div class="col-md-12" id="livros">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	<!-- end of scripts -->
</body>
</html>