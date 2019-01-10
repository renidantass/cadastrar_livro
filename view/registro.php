<?php include_once 'dependencias.php' ?>

<div class="container">
	<div class="row mt-2">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<p class="h4 font-weight-light">Registrar livros</p>
				</div>
				<div class="card-body">
					<form action="../controller/registrar.php" method="POST">
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
						<input type="submit" value="Cadastrar" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>