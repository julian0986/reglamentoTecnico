//document.oncontextmenu = function(){return false}

let barra= document.getElementById('tituloreglamento');
let barra2=document.getElementById('option2')
let altura= barra.offsetTop;
let altura2=barra2.offsetTop;

window.addEventListener('scroll', function(){
    if (window.scrollY > altura){
        barra.classList.add('styky')
    }else{
        barra.classList.remove('styky')
    } 
        
    
})

   window.addEventListener('scroll', function(){
    if(window.scrollY>altura2){
        barra.classList.remove('styky')
        
    }
    
})
