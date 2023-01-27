
window.onload = () => {
    // localStorage.removeItem('q_access_token');
    // localStorage.removeItem('q_access_token_expiration_date');
    // console.log(localStorage.getItem('q_access_token'));
    // console.log(localStorage.getItem('q_access_token_expiration_date'));
    setupToken();
};

let getTheToken = () =>{
    fetch("https://symfony-skeleton.q-tests.com/api/v2/token", {
    method: "POST",
    body: JSON.stringify({
        email: "ahsoka.tano@q.agency",
        password: "Kryze4President",
    }),
    headers: {
        "Content-type": "application/json; charset=UTF-8"
    }
    })
    .then((response) => response.json())
    .then((json) => q_save_token(json))
    .catch(error => console.error('Error:', error));
}

let q_save_token = (token) =>{
    if(token.token_key && token.expires_at){
        localStorage.setItem('q_access_token', token.token_key) ;
        localStorage.setItem('q_access_token_expiration_date', token.expires_at);
        console.info("The Q token has been updated");
    }
}

let setupToken = () =>{
    let token        = localStorage.getItem('q_access_token');
    let expiration   = localStorage.getItem('q_access_token_expiration_date');
    let today        = new Date();

    if (token && expiration){
        expiration = new Date(expiration.toString());
        
        if(expiration < today){
            getTheToken();
        }    
    }else{
        getTheToken();
    }  
}



