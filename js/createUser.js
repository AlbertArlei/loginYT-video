async function createUser(){
    const name = document.getElementById('createUser-name');
    const email = document.getElementById('createUser-email');
    const password = document.getElementById('createUser-password');
    const form = {};

    form.name = name.value;
    form.email = email.value;
    form.password = password.value;
    
    const response = await fetch('./php/createUser.php',{
        method: 'POST',
        headers:{
            'Content-Type':'application/json'
        },
        body: JSON.stringify(form)
    });
    console.log(await response.json());
}

document.getElementById('createUser-btn').addEventListener('click', (e)=>{
    e.preventDefault();
    createUser();
})