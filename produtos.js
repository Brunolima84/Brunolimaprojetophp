// Inicio exibir produtos por categoria 
function exibir_eletro(produtos) {
    let itens = document.getElementsByClassName('fotos_produtos');
    console.log(itens);
    for (let i = 0; i < itens.length; i++) {
        console.log(itens[i].id)
        if (produtos == itens[i].id)
            itens[i].style = "display:block";
        else
            itens[i].style = "display:none";
    }
}
function exibir_todos(produtos) {
    let itens = document.getElementsByClassName('fotos_produtos');
    for (let i = 0; i < itens.length; i++) {
        itens[i].style = "display:block";
    }
}
// Fim exibir produtos por categoria 



//Inicio aumentar produtos 
function exibir_produtos(img) {
    if (img.width == 120) {
        img.width = 200;
    }
    else {
        img.width = 120
    }
}
// Fim aumentar produtos 