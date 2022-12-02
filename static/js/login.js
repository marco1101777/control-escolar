const id = ID => document.getElementById(ID) , $ = selector => document.querySelector(selector)  , $$ = selector => document.querySelectorAll(selector)



//simple boton input type text : password
let $btn_pass = $('#password') ; 
let statePass  = true ;
$btn_pass.addEventListener('click' , () => {
	let input_pass = $('#ps') ;
	input_pass.style.border = 'none' ;
	input_pass.type = statePass ? 'text' : 'password' ; 
	statePass = !statePass ;   

});   



// cabio de login  a registro < viseversa > 





let bh = id('bh');
let bachilleratos = [
	['Fisico-Matematico','Humanidades'] , 
	['Economico-Administrativo', 'Humanidades'] ,  
	['Quimico-Biologo','Humanidades '] 
] ; 

const opt = (array) => {
	let options =  `
		<option value="${array[0]}">${array[0]}</option>
		<option value="${array[1]}">${array[1]}</option>
	` ; 
	return options ; 

};


function  changeValueGroup(group){
		let  opc = -1  ; 
	if(group  == '602A'  ||  group == '602B'){
		opc = 2 ; 
	}else if(group  == '622A'  ||  group == '622B'){
		opc  =1 ;
	}else if(group  == '630A'  ||  group == '630B'){
		opc = 0 ; 
	}
	console.log(opc);
	bh.innerHTML  = opc  == -1 ? "Ups": opt(bachilleratos[opc])  ; 

}

let grupo  = $('#grupo') ; 
grupo.addEventListener('change' , () => {
	let group = grupo.value ; 
	changeValueGroup(group);	
});



let login = $('#log') ;
let registro = $('#reg') ;
let state_display = true ; 
let btn_registro = $$('#btn_registro') ; 
btn_registro.forEach((btn) => {
	btn.addEventListener('click' , e => {
		e.preventDefault() ;
		state_display = !state_display ; 
		login.style.display  = state_display ? 'flex' : 'none' ; 
		registro.style.display  = state_display ? 'none' : 'flex' ; 
 

	});

} );

	// notificacion Reindent
const noti_emoji = ["❌" , "✔️"] 
let noti_color_alert = ['rgb(255, 111, 104)', 'rgb(130, 224, 170)'] ; 
let nt  = document.getElementById('notificacion') ; 

function notificacio(type , text ){
  let color = type ? noti_color_alert[1]  : noti_color_alert[0] ; 
  let icon = type ?  noti_emoji[1] : noti_emoji[0] ; 
 nt.innerHTML = "" ; 
   let content  = `
   <div class="one" >
    <div class="type">
     <button class="Error" disabled style="--color:${color};">
      ${icon}
    </button>

  </div>
  <div class="mesage" id="sms">
    ${text}
  </div>
  ` ;
 

  nt.innerHTML  += content ; 
  
   
};



let isEmpty = (objet) =>{
	for(let i  in objet){
		if(objet[i].length == 0 ){
			notificacio(0 , `El campo ${i} esta vacio`) ; 
			return  true ; 
		}
	}
	return false ; 	
};


//  fetch   
let $form_registro = $('#registro') ; 
$form_registro.addEventListener('submit' , event =>{
	event.preventDefault() ; 
	let datos =  Object.fromEntries(new  FormData(event.target)); // recuperar datos ingresados 
	let  prueba  =  new FormData(event.target); 
	console.log(event.target) ;
	prueba.append("registro" , "") ; 
	if(!isEmpty(datos)){   // Estan vacios ?
		charget(true) ;
		fetch("php/registro.php", {method: "POST",body: prueba})
		.then(res => res.text())
		.then(res => { 
			charget(false) 
			window.location.assign("log.php") ;
			console.log(res);
		})
		.catch(e => console.log(e)) ;
	}  
 }) ;




// fetch login  numero control 
let $input_numero_control = $('#numeroControl') ;
$input_numero_control.addEventListener('keyup', (e) => {
	let value =  $input_numero_control.value ; 
	let  encontrado ;  
	if(value.length == 14){
		encontrado = buscarMatricula(value); 

	}
	console.log(encontrado);
	if(encontrado != null ){
		formDataValues(encontrado);
	}


}); 



function formDataValues(datos){
	id('Nombre').value = datos['Nombre'].replace(/(^\w{1})|(\s+\w{1})/g, letra =>  letra.toUpperCase())   ;
	id('Apellido_paterno').value = datos['Apellido_paterno'].replace(/(^\w{1})|(\s+\w{1})/g, letra => letra.toUpperCase()) ; 
	id('Apellido_materno').value = datos['Apellido_materno'].replace(/(^\w{1})|(\s+\w{1})/g, letra => letra.toUpperCase()) ; 
	id('grupo').value = datos['Grupo'].toUpperCase()  ;
	changeValueGroup(datos['Grupo'].toUpperCase());
}


function charget(ok = false ){
  let pantalla  =  document.getElementById('charget') 


  let  enter  = `<div
    style="
      background:white;
      height:200px;
      width:300px;
      border-radius:25px ;
      text-align:center;
      padding:10px; 
      box-sizing: border-box;
    " 
  >
    Registrando ... 
    Espere un momento 
    <br>
    <button 
    disabled 
    style="
      background:transparent;
      height:60px;
      width:60px;
      border-radius:50%;
      border:none ;
      animation:gira 2s  linear  infinite ; 
      margin-top:40px ;
      border-left:1px  solid blue;
    "
    >
     
    </button>
  
  
  </div>` ;   
  if(ok){
    pantalla.innerHTML  = enter  ; 
    pantalla.style.display = "flex" ; 

  }else{
    pantalla.style.display = "none" ; 
  }
  
}
