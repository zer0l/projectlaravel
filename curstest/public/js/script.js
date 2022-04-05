const header = document.querySelector('#header');
const rad1 = document.querySelector('#rad1');
const rad2 = document.querySelector('#rad2');
const rad3 = document.querySelector('#rad3');
const rad4 = document.querySelector('#rad4');
const btn_svyz = document.querySelector('#btn-svyz');

rad1.addEventListener('change',(event)=>{
    header.classList.remove('slid1');
    header.classList.remove('slid2');
    header.classList.remove('slid3');
    header.classList.remove('slid4');
if(rad1.checked){
    header.classList.toggle('slid1');
}
});

rad2.addEventListener('change',(event)=>{
    header.classList.remove('slid1');
    header.classList.remove('slid2');
    header.classList.remove('slid3');
    header.classList.remove('slid4');
if(rad2.checked){
    header.classList.toggle('slid2');
}
});

rad3.addEventListener('change',(event)=>{
    header.classList.remove('slid1');
    header.classList.remove('slid2');
    header.classList.remove('slid3');
    header.classList.remove('slid4');
if(rad3.checked){
    header.classList.toggle('slid3');
}
});

rad4.addEventListener('change',(event)=>{
    header.classList.remove('slid1');
    header.classList.remove('slid2');
    header.classList.remove('slid3');
    header.classList.remove('slid4');
if(rad4.checked){
    header.classList.toggle('slid4');
}
});

// btn_svyz.addEventListener('click',(event)=>{
//     let number_client = document.querySelector('#number_client');

//     alert(number_client.textContent);
// })