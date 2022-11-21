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
	['PGA', 'Humanidades'] ,  
	['Quimica','Humanidades '] 
] ; 

const opt = (array) => {
	console.log(array) ;
	let options =  `
		<option value="${array[0]}">${array[0]}</option>
		<option value="${array[1]}">${array[1]}</option>

	` ; 



	return options ; 

};

let grupo  = $('#grupo') ; 
grupo.addEventListener('change' , () => {
	let group = grupo.value ; 
	let  opc = -1  ; 
	if(group  == '502A'  ||  group == '502B'){
		opc = 1 ; 
	}else if(group  == '522A'  ||  group == '522B'){
		opc  =2 ;
	}else if(group  == '530A'  ||  group == '530B'){
		opc = 0 ; 
	}
	bh.innerHTML  = opt(bachilleratos[opc]) ; 

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