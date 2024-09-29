/*CONFIGURANDO MENU HAMBURGUER*/ 
const hamburguer = document.querySelector(".hamburguer")
const menu = document.querySelector(".menu")

hamburguer.addEventListener("click", () => menu.classList.toggle("active"));

/*CONFIGURANDO BACKGROUND DO CABEÇALHO NO SCROLL*/
window.addEventListener("scroll", () => {
    const header = document.querySelector(".cabecalho");

    if(window.scrollY > 50) {
        header.classList.add("scrolled");
    }else{
        header.classList.remove("scrolled");
    }
}) 