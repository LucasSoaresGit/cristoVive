function abreview(v){        
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("resultado").innerHTML = xmlhttp.responseText;
            }
        };
        
        if(v == 1){
            xmlhttp.open("GET", "ajax/retornaViewMinistracao.php", true);
            xmlhttp.send();
        }
        if(v == 2){
            xmlhttp.open("GET", "ajax/retornaViewFotos.php", true);
            xmlhttp.send();
        }
        if(v == 3){
            xmlhttp.open("GET", "ajax/retornaViewLouvores.php", true);
            xmlhttp.send();
        }

}


function deletar(id,op){
    
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("crud").innerHTML = xmlhttp.responseText;
            }
        };
        
    if(op == 0){    
            xmlhttp.open("GET", "ajax/ajaxController.php?id="+id, true);
            xmlhttp.send();
    }        
    if(op == 1){
        
        xmlhttp.open("GET", "ajax/ajaxController.php?id="+id+"&op="+op, true);
            xmlhttp.send();
    }    
}

function sair(){    
    
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("sair").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "ajax/ajaxLogout.php?sair=true", true);
        xmlhttp.send();
    
}

function logar(){
    var cpf = document.getElementById("cpf").value;
    var senha = document.getElementById("senha").value;
    
    
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("logar").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "ajax/ajaxLogin.php?cpf="+cpf+"&senha="+senha, true);
        xmlhttp.send();
    }



function downloadMinistracao(nomeArquivo){
    var baixar = nomeArquivo;
    alert(baixar);
    baixar.href = "uploads/ministracoes/"+baixar+"";
    baixar.innerHTML = "Baixar imagem Stack Exchange";
}

 // Mascaras Javascript

function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}

function id( el ){
	return document.getElementById( el );
}

// aqui começa as mascaras 

function mtel(v){ //MASCARA PARA TELEFONE

    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}


function mcpf(v){  //MASCARA PARA CPF

    v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
                                             //de novo (para o segundo bloco de números)
    v=v.replace(/(\d{3})(\d{1,2})$/,"$1.$2") //Coloca um hífen entre o terceiro e o quarto dígitos
    return v;
}

function mcnpj(v){  //MASCARA PARA CNPJ

    v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
	
	 v=v.replace(/(\d{2})(\d)/,"$1.$2")
	 v=v.replace(/(\d{3})(\d)/,"$1.$2")
     v=v.replace(/(\d{3})(\d)/,"$1/$2")       	 
     v=v.replace(/(\d)(\d{2})$/,"$1-$2");    //Coloca o . antes dos últimos 3 dígitos, e antes do verificador 
    return v;
}

function mie(v){  //MASCARA PARA CNPJ

    v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito      	 
     v=v.replace(/(\d{3})(\d)/,"$1.$2")
	  v=v.replace(/(\d{3})(\d)/,"$1.$2")
	  v=v.replace(/(\d{3})(\d)/,"$1.$2")
    return v;
}


function mrg(v){  //MASCARA PARA RG

    //  v=v.replace( /\s/g, '' );                  //Remove tudo o que não é dígito
	//	v=v.replace(/(\d)(\d{7})$/,"$1.$2");   	 //Coloca o . antes dos últimos 3 dígitos, e antes do verificador
    //  v=v.replace(/(\d)(\d{4})$/,"$1.$2");    //Coloca o . antes dos últimos 3 dígitos, e antes do verificador
    //  v=v.replace(/(\d)(\d)$/,"$1-$2");       //Coloca o - antes do último dígito
		
	v=v.replace(/(\d{2})(\d)/,"$1.$2")       //Coloca um ponto entre o segundo e o terceiro dígitos
    v=v.replace(/(\d{3})(\d)/,"$1.$2")     
	v=v.replace(/(\d{5})(\d)/,"$1.$2")     
	v=v.replace(/(\d{9})(\d)/,"$1-$2")       
    return v;
}

function mcep(v){  //MASCARA PARA CEP

    v=v.replace(/\D/g,"")                      //Remove tudo o que não é dígito
    v=v.replace(/^(\d{5})(\d)/,"$1-$2")         //Esse é tão fácil que não merece explicações
    return v;
}

function mcartao(v){ //MASCARA PARA CARTAO

    v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
    v=v.replace(/(\d{4})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
    v=v.replace(/(\d{4})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
	v=v.replace(/(\d{4})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
	v=v.replace(/(\d{4})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
    return v;
}

function mdata(v){ // MASCARA PARA DATA 

    v=v.replace(/\D/g,"");                    //Remove tudo o que não é dígito
    v=v.replace(/(\d{2})(\d)/,"$1/$2");
    v=v.replace(/(\d{2})(\d)/,"$1/$2");
    return v;
}

function mvalor(v){  //MASCARA PARA VALOR EM $$

    v=v.replace(/\D/g,"");//Remove tudo o que não é dígito
    v=v.replace(/(\d)(\d{8})$/,"$1.$2");//coloca o ponto dos milhões
    v=v.replace(/(\d)(\d{5})$/,"$1.$2");//coloca o ponto dos milhares
 
    v=v.replace(/(\d)(\d{2})$/,"$1,$2");//coloca a virgula antes dos 2 últimos dígitos
    return v;
}

function mvalor(v){  //MASCARA PARA VALOR EM $$

    v=v.replace(/\D/g,"");//Remove tudo o que não é dígito
    v=v.replace(/(\d)(\d{8})$/,"$1.$2");//coloca o ponto dos milhões
    v=v.replace(/(\d)(\d{5})$/,"$1.$2");//coloca o ponto dos milhares
 
    v=v.replace(/(\d)(\d{2})$/,"$1,$2");//coloca a virgula antes dos 2 últimos dígitos
    return v;
}

function memail(v){

		v=v.replace( /\s/g, '' );
		return v;
}

window.onload = function(){ // FUNCAO QUE É ACIONADO AO CARREGAR A PAGINA ( WINDOW.ONLOAD )

	id('cpf').onkeyup = function(){ //ATRIBUI O CAMPO COM ID txtCel A MASCARA DE TELEFONE            
		mascara( this, mcpf );
	}	
	
}


