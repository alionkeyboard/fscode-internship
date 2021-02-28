var resim=document.getElementsByClassName('resim');
var index=0;
function galery(){
    if(index >=resim.length){
        index=0 ;
    }
    else if(index<0){
        index=resim.length-1;
    }
    for(i=0; i<resim.length;i++){
        resim[i].classList.remove('aktif');
    }
    resim[index].classList.add('aktif');
console.log(index);
}

function ileri(){
    index++;
    galery();
}
function geri(){
    index--;
    galery();
}
