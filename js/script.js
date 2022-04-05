const sel = document.querySelector('#sel');
const inp1 = document.querySelector('#inp1');
const inp2 = document.querySelector('#inp2');
const btn = document.querySelector('#btn');
const sel2 = document.querySelector('#sel2');
const out = document.querySelector('#out');
const testblock = document.querySelector('#testblock');

// inp1.style.display = 'none';
// inp2.style.display = 'none';

// sel.addEventListener('change', (event)=>{

//     if(sel.value == ''){
//     inp1.style.display = 'none';
//     inp2.style.display = 'none';

//     }

//     if (sel.value == 1) {
//        inp1.style.display = 'block';
//     }
//     if(sel.value == 2){
//         inp1.style.display = 'none';
//         inp2.style.display = 'block';
//     }
// });

sel.addEventListener('change', (event)=>{

    if(sel.value == ''){
        inp1.hidden = true;
        inp2.hidden = true;
    }
    if (sel.value == 1) {
        inp1.hidden = false;
        inp2.hidden = true;
    }
    if(sel.value == 2){
        inp1.hidden = true;
        inp2.hidden = false;
    }
});

btn.addEventListener('click',(evrn)=>{
    let content = inp1.value;
    out.textContent = content;
});

sel2.addEventListener('change',(eb)=>{
    if(sel2.value == '1'){
    let d = document.createElement('input');
    d.className = "jack";
    testblock.appendChild(d);
    }
    if(sel2.value == '2'){
    const d = document.querySelector('.jack');
    d.remove();
    }

});