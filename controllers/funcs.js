var req;

function semReajuste(id) {

    // Verificando Browser
    if(window.XMLHttpRequest) {
        req = new XMLHttpRequest();
    }
    else if(window.ActiveXObject) {
        req = new ActiveXObject("Microsoft.XMLHTTP");
    }

    let url = "../models/semReajuste.php?id="+id;

    req.open("Get", url, true);

    req.onreadystatechange = function() {
        

        // Verifica se o Ajax realizou todas as operações corretamente
        if(req.readyState == 4 && req.status == 200) {
     
        // Resposta retornada pelo semReajuste.php
        var resposta = req.responseText;
        
        console.log(resposta);

        // adicionando a resposta de volta
        document.getElementById("valorNovo"+id).innerHTML = resposta;
        document.getElementById("proporcional"+id).innerHTML = 0;


        }
    }
    req.send(null);

}

function excluir(id, table){

    if (confirm("Deseja realmente deletar este item?")){
        // Verificando Browser
        if(window.XMLHttpRequest) {
            req = new XMLHttpRequest();
        }
        else if(window.ActiveXObject) {
            req = new ActiveXObject("Microsoft.XMLHTTP");
        }

        let url = "../models/excluir.php?id="+id+"&table="+table;
        
        req.open("Get", url, true);

        req.onreadystatechange = function() {
            
            // Verifica se o Ajax realizou todas as operações corretamente e esconde a row na página
            if(req.readyState == 4 && req.status == 200) {
                
                document.getElementById(id).style.display = "none";

            }
        }
        req.send(null);
    }
}

function abrirModal(id){
    
    locastyle.modal.open("#myAwesomeModal");

    // Verificando Browser
    if(window.XMLHttpRequest) {
        req = new XMLHttpRequest();
    }
    else if(window.ActiveXObject) {
        req = new ActiveXObject("Microsoft.XMLHTTP");
    }

    let url = "../models/abrirModal.php?id="+id;

    req.open("Get", url, true);

    req.onreadystatechange = function() {

        // Verifica se o Ajax realizou as operações corretamente e preenche os campos da modal aberta
        if(req.readyState == 4 && req.status == 200) {
            
            var resposta = req.responseText.split(",");

            console.log(resposta);

            document.querySelector("[name='contrato']").value = resposta[0];
            document.querySelector("[name='propNome']").value = resposta[1];
            document.querySelector("[name='inqNome']").value = resposta[2];
            document.querySelector("[name='valorNovo']").value = resposta[3];
            document.querySelector("[name='valorAntigo']").value = resposta[4];
            document.querySelector("[name='proporcional']").value = resposta[5];
            document.querySelector("[name='data']").value = resposta[6] + '/' + resposta[7] + '/' + resposta[8];
            document.querySelector("[name='id']").value = resposta[9];
            document.querySelector("[name='observacoes']").value = resposta[10];
            
        }
    }
    req.send(null);

}

function editar(){
    
    //pegando os campos da modal
    let codigo = document.querySelector("[name='contrato']").value;
    let proprietario = document.querySelector("[name='propNome']").value;
    let inquilino = document.querySelector("[name='inqNome']").value;
    let valorNovo = document.querySelector("[name='valorNovo']").value;
    let valorAntigo = document.querySelector("[name='valorAntigo']").value;
    let proporcional = document.querySelector("[name='proporcional']").value;
    let data = document.querySelector("[name='data']").value.split("/");
    let id = document.querySelector("[name='id']").value;
    let observacao = document.querySelector("[name='observacoes']").value;

    // Verificando Browser
    if(window.XMLHttpRequest) {
        req = new XMLHttpRequest();
    }
    else if(window.ActiveXObject) {
        req = new ActiveXObject("Microsoft.XMLHTTP");
    }

    let url = "../models/editar.php?id="+id+"&cod="+codigo+"&prop="+proprietario+"&inq="+inquilino+"&novo="+valorNovo+"&ant="+valorAntigo+"&proporcional="+proporcional+"&dia="+data[0]+"&mes="+data[1]+"&ano="+data[2]+"&obs="+observacao;

    req.open("Get", url, true);

    req.onreadystatechange = function() {

        // Verifica se o Ajax realizou as operações corretamente e preenche os campos da modal aberta
        if(req.readyState == 4 && req.status == 200) {
            
            var resposta = req.responseText.split(",");

            console.log(resposta);

            document.getElementById("codigo"+id).innerHTML = resposta[0];
            document.getElementById("proprietario"+id).innerHTML = resposta[1];
            document.getElementById("locatario"+id).innerHTML = resposta[2];
            document.getElementById("valorNovo"+id).innerHTML = resposta[3];
            document.getElementById("valorAntigo"+id).innerHTML = resposta[4];
            document.getElementById("proporcional"+id).innerHTML = resposta[6];

            //document.getElementById("dia"+id).innerHTML = resposta[7];
            //document.getElementById("mes"+id).innerHTML = resposta[8];
            //document.getElementById("ano"+id).innerHTML = resposta[9];
            //document.getElementById("obs"+id).innerHTML = resposta[10];

        }
    }
    req.send(null);
    
}

function listaBrindes(total) {

    // Verificando Browser
    if(window.XMLHttpRequest) {
        req = new XMLHttpRequest();
    }
    else if(window.ActiveXObject) {
        req = new ActiveXObject("Microsoft.XMLHTTP");
    }

    let url = "../models/listarBrindes.php?total="+total;


    req.open("Get", url, true);

    req.onreadystatechange = function() {
        

        // Verifica se o Ajax realizou todas as operações corretamente
        if(req.readyState == 4 && req.status == 200) {
     
            var resposta = req.responseText;
            

            // caso a resposta seja verdadeira, ele recarrega a página
            if(resposta){
                window.location.reload();
            } else {
                console.log("Esperando atualização..");
            }

        }
    }
    req.send(null);

}