//nhan dien cac phan tu se tac dong
var fruit=document.getElementById('txtFruit');
var ShowFruit=document.getElementById('btnShowFruit');
var imgfruit=document.getElementById('imgFruit');
//bat su kien
showfruit.addEventListener('click', showResult);
//viet ham xu li su kien
function showResult(){
    var getfruit=fruit.value;
    imgFruit.setAttribute('src','images/'+getfruit+'.jpg');
}


