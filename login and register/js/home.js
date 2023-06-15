const greeting = document.querySelector('.greeting');

window.onload = () => {
    if(!sessionStorage.name){
        location.href = '/login';
    } else{
        greeting.innerHTML = `hello ${sessionStorage.name}`;
    }
}

const logOut = document.querySelector('.logout');

logOut.onclick = () => {
    sessionStorage.clear();
    location.reload();
}
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
