$(document).ready(function () {
    fetch(`${url}/listaCategorias`).then((r) => r.json()).then((json) => {
        json.map((item) => {
            $("#cat_id").append(`<option value='${item.id}'>${item.descricao}</option>`);
        });
    });
});

$("#formNoticias").submit(function(e) {
    e.preventDefault();
    var destinoPHP = `${url}/novaNoticia`;
    var parametros = $("#formNoticias").serialize();
    $.post(destinoPHP, parametros, function (data) {
        var retorno = JSON.parse(data);
     alert("Noticia Salva Com Sucesso!!!")
    });
  });

