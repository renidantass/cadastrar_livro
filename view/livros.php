<?php 

include 'dependencias.php';
include '../model/Manager.class.php';

$Manager = new Manager();

?>

<ul class="list-group">
    <?php foreach($Manager->listBooks("livros") as $book): ?>
        <li class="list-group-item">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <a class="mr-1" href="<?=$book['url']?>" target='_blank'><?=$book['nome']?></a> do ISBN <a href='https://www.google.com/search?q=<?=$book['isbn']?>' target='_blank'><?=$book['isbn']?></a> por <?=$book['autor']?>
                    </div>
                    <div class="col-md-2 text-center">
                        
                        <a href="view/editar.php?z=<?=$book['id']?>"><button class="btn btn-sm btn-outline-info active"><i class="fa fa-pen"></i></button></a>
                        <a id="<?=$book['id']?>" onclick="deleteBook(this)"><button class="btn btn-sm btn-outline-danger active"><i class="fa fa-times"></i></button></a>
                    </div>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
</ul>