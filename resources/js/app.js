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


// document.getElementById('classification').addEventListener('change', function() {
//     console.log(this.value);
//     let externalSide = document.getElementById('external_side');
//     let area = document.getElementById('area');
//     if (this.value === 'opportunity') {
//         console.log(this.value)
//         externalSide.classList.remove('hidden');
//         area.classList.remove('hidden');
//     } else {
//         externalSide.classList.add('hidden');
//         area.classList.add('hidden');
//     }
// });

// console.log(document.getElementById('classification'));