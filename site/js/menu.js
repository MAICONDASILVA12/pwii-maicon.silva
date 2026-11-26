const btnMenu = document.getElementById('btn-menu');
const nav = document.getElementById('nav');

if (btnMenu && nav){
	btnMenu.addEventListener('click', ()=>{
		const estaABerto = nav.classList.toggle('mostrar');
		btnMenu.setAttribute('aria-expanded', estaAberto);
	});
}