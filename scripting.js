
login.addEventListener('click',() => {
    document.querySelector('.contain_in').classList.add("showoff");
    document.querySelector('.search').classList.add("hide");
});
document.querySelector('.fa-circle-xmark').addEventListener('click',() => {
    document.querySelector('.contain_in').classList.remove("showoff")
    document.querySelector('.search').classList.remove("hide");
});
document.querySelector('.b').addEventListener('click',() => {
    document.querySelector('.contain_in').classList.remove("showoff")
    document.querySelector('.search').classList.remove("hide");
});
function loginshow(){
    document.querySelector('.sign_in').classList.toggle("scrol_login")
    document.querySelector('.sign_up').classList.toggle("scrol_signup")
}
function showsignup(){
    document.querySelector('.sign_up').classList.toggle("scrol_signup1")
    document.querySelector('.sign_in').classList.toggle ("intoup")
}   