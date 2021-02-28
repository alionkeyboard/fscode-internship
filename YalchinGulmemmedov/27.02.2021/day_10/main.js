var img=document.getElementsByClassName('photo');
var index=0;
function galery(){
    if(index >=img.length){
        index=0 ;
    }
    else if(index<0){
        index=img.length-1;
    }
    for(i=0; i<img.length;i++){
        img[i].classList.remove('active');
    }
    img[index].classList.add('active');
console.log(index);
}

function next(){
    index++;
    galery();
}
function prev(){
    index--;
    galery();
}
