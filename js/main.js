(function (){
        
var contador=1;
var conta=1;
var divbotonmenu=document.getElementById("btn-menu-class");
var menu=document.getElementById("menu-class");
var submenu=document.getElementById("submenu");
var children=document.getElementById("children");
var contaDetalle=1;
var verDetalle=document.getElementById("detalles-mini");
var infoDetallada=document.getElementById("capa-muestra").getElementsByClassName("capa");
var contaImagen=1;
var verImagen=document.getElementsByClassName("muestra-imagen");
var imagenDetallada=document.getElementsByClassName("img-producto");
var activa=function activa(){

    if(contador==1){
menu.style.right=menu.style.right.replace("100%","");
menu.style.left="0";
contador=0;
    }
    else{
        contador=1;
        menu.style.left="-100%";
    }
  
}

divbotonmenu.addEventListener("click",activa);

var activasub=function activasub(){

    if(conta==1){
children.style.display="block";
conta=0;
}
else{
conta=1;
children.style.display="none";
}
}

submenu.addEventListener("click",activasub);




var detalles=function detalles(){

if (contaDetalle==1){
infoDetallada[0].style.transform="scale(1)";
infoDetallada[1].style.transform="scale(1)";
infoDetallada[2].style.transform="scale(1)";
contaDetalle=0;
verDetalle.textContent="Ocultar Detalles";

}else {
    contaDetalle=1;
infoDetallada[0].style.transform="scale(0)";
infoDetallada[1].style.transform="scale(0)";
infoDetallada[2].style.transform="scale(0)";
verDetalle.textContent="Mostrar Detalles";
}


}

verDetalle.addEventListener("click",detalles);


var imagen=function imagen(e){

if(contaImagen==1){
    if(e.target.id=="section4"){
 imagenDetallada[0].style.display="block";
 verImagen[0].textContent="Ocultar Imagen"; }
    if(e.target.id=="section5"){
    imagenDetallada[1].style.display="block";
    verImagen[1].textContent="Ocultar Imagen";}
    if(e.target.id=="section6"){
        imagenDetallada[2].style.display="block";
        verImagen[2].textContent="Ocultar Imagen";  }
contaImagen=0;

}else{
    if(e.target.id=="section4"){
        imagenDetallada[0].style.display="none";
        verImagen[0].textContent="Mostrar Imagen";}
    if(e.target.id=="section5"){
           imagenDetallada[1].style.display="none";
           verImagen[1].textContent="Mostrar Imagen";} 
    if(e.target.id=="section6"){
               imagenDetallada[2].style.display="none";
               verImagen[2].textContent="Mostrar Imagen";} 
 contaImagen=1;


}

}


verImagen[0].addEventListener("click",imagen);
verImagen[1].addEventListener("click",imagen);
verImagen[2].addEventListener("click",imagen);


})();



