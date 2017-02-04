var req;
 
// FUNÇÃO PARA BUSCA NOTICIA
function buscarCrimesOficial() {
 
// Verificando Browser
if(window.XMLHttpRequest) {
   req = new XMLHttpRequest();
}
else if(window.ActiveXObject) {
   req = new ActiveXObject("Microsoft.XMLHTTP");
}
 
// Arquivo PHP juntamente com o valor digitado no campo (método GET)

var concatenador;
var array=[];
var valorRecebido = document.getElementById("id").value;
if (valorRecebido!=null){
 valorRecebido ="crime_id LIKE "+valorRecebido;
array.push(valorRecebido); 
}

var valorRecebido = document.getElementById("cidade").value;
if (valorRecebido!=null){
valorRecebido ="cidade LIKE "+ '"%"'+"'"+valorRecebido+"%'";
array.push(valorRecebido); 
}


valorRecebido = document.getElementById("data_ocorrencia").value;
if (valorRecebido!=null){
valorRecebido ="data_ocorrencia LIKE '"+valorRecebido+"'";
array.push(valorRecebido);
}


valorRecebido = document.getElementById("idade").value;
if (valorRecebido!=null){
    valorRecebido=valorRecebido ="idade LIKE "+valorRecebido;
array.push(valorRecebido);
}

valorRecebido = document.getElementById("nome_vitima").value;
if (valorRecebido!=null){
    valorRecebido ="nome_vitima LIKE "+"'%"+valorRecebido+"%'"
array.push(valorRecebido);
}

valorRecebido = document.getElementById("objeto_utilizado").value;
if (valorRecebido!=null){
    valorRecebido ="objeto_utilizado LIKE "+"'%"+valorRecebido+"%'";
array.push(valorRecebido);
}

valorRecebido = document.getElementById("qtd_vitimas").value;
if (valorRecebido!=null){
    valorRecebido ="qtd_vitimas LIKE "+valorRecebido;
array.push(valorRecebido);
}

valorRecebido = document.getElementById("sexo").value;
if (valorRecebido!=null){
    valorRecebido ="sexo LIKE "+"'%"+valorRecebido+"%'";
array.push(valorRecebido);
}


valorRecebido = document.getElementById("tipo_crime").value;
if (valorRecebido!=null){
    valorRecebido ="tipo_crime LIKE "+"'%"+valorRecebido+"%'";
array.push(valorRecebido);
}
i=0;

while (i<array.length){
if (i==0){
    concatenador= array[i]
}
else{
    concatenador=concatenador+array[i];
}

if (i!=array.length-1){
        concatenador+=" and ";

    }
i+=1;
}


var url = "buscarStatusCrime.php?valor="+concatenador;
 
// Chamada do método open para processar a requisição
req.open("Get", url, true);
 
// Quando o objeto recebe o retorno, chamamos a seguinte função;
req.onreadystatechange = function() {
 
    // Exibe a mensagem "Buscando crimes..." enquanto carrega
    if(req.readyState == 1) {
        document.getElementById('resultado').innerHTML = 'Buscando crimes...';
    }
 
    // Verifica se o Ajax realizou todas as operações corretamente
    if(req.readyState == 4 && req.status == 200) {
 
    // Resposta retornada pelo busca.php
    var resposta = req.responseText;
 
    // Abaixo colocamos a(s) resposta(s) na div resultado
    document.getElementById('resultado').innerHTML = resposta;
    }
}
req.send(null);
}