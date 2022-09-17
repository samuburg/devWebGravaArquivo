let sit = true;

function verifica() {
  if (document.dados.nomesobrenome.value.length < 3){
    alert("Digite um nome válido");
    sit=false;
  }

  if (document.dados.email.value.indexOf('@')==-1){
    alert("Digite um email válido!");
    sit=false
  }
  if (sit==true){
    cadastraUsuario();
  }
}

function cadastraUsuario(){
  const formData = new FormData(document.querySelector('form'))
  const usuario = formData.get("nomesobrenome");
  const email = formData.get("email");
  const redeSocial = formData.get("redesocial");
  const telefone = formData.get("telefone");

  var dataUm = new Date (formData.get("data"));
  var dataDois = new Date(2022,09,16)
  var idade = parseInt((dataDois-dataUm) / (24 * 3600 * 1000*365));
  
  alert(
    "Nome: "+usuario+
    "\nEmail: "+email+
    "\nTelefone: "+telefone+
    "\nRede Social: "+redeSocial+
    "\nIdade: "+idade+" anos"
    
    );


}





