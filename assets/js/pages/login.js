const login = document.querySelector('button')
login.addEventListener('click', async () => {
    // const formData = new FormData(document.querySelector('form'))
    var form = new FormData(document.getElementById("form"));
    var email = form.get("email");
    var password = form.get("password");
    var crud_req = form.get("crud_req");
    
    try{
        const formData = {
            email: email,
            password: password,
            crud_req: crud_req
        };

        const response = await fetch( base_url + 'API/functions.php', {
            method: 'POST',
            body: JSON.stringify(formData),
            mode: 'cors',
            credentials: 'include'
        });

        const status = response.status;
        const data = await response.text();

        if (status === 200) {
            try {
                const responseData = JSON.parse(data);
                    
                    // Redirect or perform other actions
                    location.href = base_url;
                } catch (error) {
                    console.error("Error parsing JSON response:", error);
                }
            }
        else {
            const responseData = JSON.parse(data);
            alert(responseData.error);
        }
    } catch (error) {
        console.error(error);
    }

});