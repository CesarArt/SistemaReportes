var capa=document.getElementById('mensaje');
function valida(formulario){
  
  var i,elem=0,bandera=0,flag=0,e=0;
 
  for(i=0;i<formulario.length;i++){
      if(formulario[i].type=="text"){
          if (formulario[i].value == null || formulario[i].value.length == 0){
          	capa.style.opacity="0.9";
            capa.innerHTML="Falta llenar el campo "+formulario[i].name;
             formulario[i].focus();
             return false;
          }
      }
  }
    
   	var j=document.getElementsByName("noticias");
     while(bandera<j.length){
       	 if(elem==0&&j[bandera].checked==false){//

          	   elem=1;
         }
         else if(elem>=1&&j[bandera].checked==false){
           	capa.style.opacity="0.9";
            capa.innerHTML="Falta llenar el campo "+j[bandera].name+" "+bandera;
            elem=0;
            bandera=0;
         	 return false;
       	}
      	  bandera++;
    }

var k=document.getElementsByName("valoras");

    do{
    for(flag=0;flag<k.length;flag++){
      if(k[flag].checked==true){
        flag=flag+k.length;
        e=0;
      }
      else if(e==0&&k[flag].checked==false){
           
           e=1;
      }
    }
    if(e==1&&flag>=k.length){
       capa.style.opacity="0.9";
       capa.innerHTML="Falta llenar un checkbox  ";
       e=0;
       
       return false;
     }
   }while(e==1);

    }

function desaparece(){
	capa.style.opacity="0.0";
}
