function upLoadArquivo(){
    
    var x = document.getElementById("arquivo");
    var txt = "";
    var ext = "";
    if ('files' in x) {
        if (x.files.length == 0) {
            txt = "selecione o arquivo.";
        } else {
            txt += "<div align='center' class='alert alert-success'><span class='alert alert-info'>Informação do Arquivo</span>";            
            for (var i = 0; i < x.files.length; i++) {                
                txt += "<br><br>&nbsp&nbsp<strong>" + (i+1) + ". file</strong><br>&nbsp&nbsp";
                var file = x.files[i];
                if ('name' in file) {
                    txt += "name: " + file.name + "<br>&nbsp&nbsp";
                    ext = file.name.substring(file.name.lastIndexOf('.') + 1);
                }   
                
                if(ext != "mp3"){
                   
                    txt += "<br><span class='alert alert-warning'>Faça upload de outro arquivo</span><br><br>"; 
                    alert("o arquivo precisa ser mp3");
                }
                if ('size' in file) {
                    txt += "size: " + file.size + " bytes <br><br></div>";
                }
            }
        }
    }
    else {
        if (x.value == "") {
            txt += "Select one or more files.";
        } else {
            txt += "The files property is not supported by your browser!";
            txt  += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead.
        }
    }
    document.getElementById("infoArquivo").innerHTML = txt;
}