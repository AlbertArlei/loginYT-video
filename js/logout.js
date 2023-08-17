async function logout(){
    await fetch('../php/logout.php');
    location.reload();
}

document.getElementById('logout').addEventListener('click', ()=>{
    logout()
});