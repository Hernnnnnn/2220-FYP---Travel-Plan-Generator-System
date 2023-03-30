Let passwd = document.getElementsById('passwd');
Let toggleBtn = document.getElementsById('toggleBtn');

//Show hide password
toggleBtn.onclick = function(){
    if(passwd.type === 'password'){
        passwd.setAttribute('type','text');
        toggleBtn.classList.add('hide');
    } else {
        passwd.setAttribute('type','text');
        toggleBtn.classList.remove('hide');
    }
}