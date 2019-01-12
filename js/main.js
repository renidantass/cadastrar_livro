function deleteBook(el) {
    let id = el.id;
    let deleteConfirm = confirm("Você deseja mesmo excluir o registro desse livro? ");
    if (deleteConfirm) {
        fetch(`controller/deletar.php?z=${id}`);
        updateList();   
    }
}

function addBook() {
    let formData = new FormData(document.querySelector('#formAdd'));
    fetch('controller/registrar.php', {
        method: 'POST',
        body: formData
    });
    updateList();
}

function updateList() {
    const livrosDiv = document.querySelector('#livros');
    livrosDiv.innerHTML = '';
    fetch('view/livros.php')
        .then(response => response.text())
            .then(response => livrosDiv.innerHTML = response)
}

window.onload = function () {
    updateList();
}