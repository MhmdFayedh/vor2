import './bootstrap';

const menu = document.querySelector('#menu'); 
const sideBar = document.querySelector('#sidebar');
const close = document.querySelector('#close')

// This event will open the mnue
menu.addEventListener('click', () => {
    sideBar.classList.remove('hidden');
});

close.addEventListener('click', () => {
    sideBar.classList.add('hidden');
});

//Loader functionality

