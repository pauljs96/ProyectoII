(function (){
        
var contador=1;
var conta=1;
var divbotonmenu=document.getElementById("btn-menu-class");
var menu=document.getElementById("menu-class");
var submenu=document.getElementById("submenu");
var children=document.getElementById("children");


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

})();



