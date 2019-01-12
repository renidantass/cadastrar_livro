<?php 
include '../model/Manager.class.php';
include 'dependencias.php';

$Manager = new Manager();

if ((isset($_GET['z']) && (!empty($_GET['z'])))) {
    $id = filter_var($_GET['z'], FILTER_SANITIZE_STRING);
} else {
    header("Location: ../index.php");
}

?>

<div class="container">
	<div class="row my-2">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<p class="h4 font-weight-light">Editar livro</p>
				</div>
				<div class="card-body">
                    <?php foreach($Manager->getInfo('livros', $id) as $bookInfo): ?>
					<form action="../controller/editar.php" method="POST">
						<div class="form-group">
							<label for="nome">Nome do livro</label>
							<input type="text" name="nome" id="nome" class="form-control" placeholder="Mulheres..." value="<?=$bookInfo['nome']?>" required>
						</div>
						<div class="form-group">
							<label for="autor">Autor</label>
							<input type="text" name="autor" id="autor" class="form-control" placeholder="Ex.: Charles Bukowski" value="<?=$bookInfo['autor']?>" required>
						</div>
						<div class="form-group">
							<label for="pubilcado">Data publicado</label>
							<input type="date" name="data_publicado" id="publicado" class="form-control" value="<?=$bookInfo['data_publicado']?>" required>
						</div>
						<div class="form-group">
							<label for="isbn">ISBN</label>
							<input type="number" name="isbn" id="isbn" class="form-control" placeholder="Ex.: 12321321382" value="<?=$bookInfo['isbn']?>" required>
						</div>
						<div class="form-group">
							<label for="edicao">Edição</label>
							<input type="number" name="edicao" id="edicao" class="form-control" placeholder="Ex.: 1" value="<?=$bookInfo['edicao']?>" required>
						</div>
						<div class="form-group">
							<label for="url">Link do livro</label>
							<input type="text" name="url" id="url" class="form-control" placeholder="Ex.: www.drive.google.com/fDSAdsz8" value="<?=$bookInfo['url']?>" required>
						</div>
                        <input type="hidden" name="id" value="<?=$bookInfo['id']?>">
						<button class="btn btn-light active" onclick="javascript:history.back()-1">Voltar</button>
						<input type="submit" value="Editar" class="btn btn-info active float-right">
					</form>
                    <?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>