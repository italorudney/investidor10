var destinoPHP = `${url}/listaNoticiasFiltro`;
$(document).ready(function () {
    listaTodos();
});

function filtraNoticias(valor_digitado) {
    if (valor_digitado.length > 3) {
        $("#noticias").html("<img src='assets/img/loading.gif'>");
        var dados = `busca=${valor_digitado}`;
        $.post(destinoPHP, dados, function (data) {
            montaNoticias(data);
        });
    } else if (valor_digitado.length == 0) {
        listaTodos();
    }
}
function listaTodos() {
    $("#noticias").html("<img src='assets/img/loading.gif'>");
    fetch(`${url}/listaNoticias`,{
        headers: new HttpHeaders({
             'Content-Type':  'application/json',
           })
      }).then((r) => r.json()).then((json) => {
        montaNoticias(json);
    });
}

function montaNoticias(json) {
    $("#noticias").html("");
    if (json.length == 0) {
        $("#noticias").html("Nenhuma noticia Encontrada, sentimos muito :(");
    } else {
        json.map((item) => {
            $("#noticias").append(`<article id="${item.id}" class="posts"><strong class="titulo">${item.titulo}</strong><p class="subtitulo">${item.subTitulo}</p><p class="texto">${item.noticia}</p><p class="categoria">Categoria: ${item.descricao}</p><a class="botao" href='alert(":)")'>Acessar</a></article>`);
        });
    }
}