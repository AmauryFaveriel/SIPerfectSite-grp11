if(document.querySelector('.ranking') !== null){
    var itemS = document.querySelectorAll('.item');
    var btnTop = document.querySelector('.btn-moretop100');
    
    btnTop.addEventListener('click', function(event){
        for(var i = 0; i < itemS.length; i++){
            if(itemS[i].classList.contains('hide') == true){
                itemS[i].classList.remove('hide');
                itemS[i].classList.add('fade-custom');
            }
        }
        btnTop.remove();
        event.preventDefault();
    })
}

function stopthisshit(event){    
    event.preventDefault();
    return false;
}