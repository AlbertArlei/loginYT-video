async function loginUser(){
    const email = document.getElementById('loginUser-email');
    const password = document.getElementById('loginUser-password');
    const form = {};

    form.email = email.value;
    form.password = password.value;
    
    const response = await fetch('./php/loginUser.php',{
        method: 'POST',
        headers:{
            'Content-Type':'application/json'
        },
        body: JSON.stringify(form)
    });
    if(response.status === 200){
        location.reload();
    
    }else{
        const message = await response.json();
        document.getElementById('message').innerText = message.message;
    }
}

document.getElementById('loginUser-btn').addEventListener('click', (e)=>{
    e.preventDefault();
    loginUser();
})