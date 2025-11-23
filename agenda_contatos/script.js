window.onload = function() {
    var form = document.getElementById('formContato');
    if (form) {
        form.addEventListener('submit', function() {
            alert('Contato cadastrado com sucesso!');
        });
    }
};
