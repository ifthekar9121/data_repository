const logout = document.getElementById('logout')
logout.addEventListener('click', async () => {
    var crud_req = "logout";
        const formData = {
            crud_req: crud_req
        };

        console.log(formData)

        const response = await fetch( base_url + 'API/functions.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
            body: JSON.stringify(formData),
            mode: 'cors',
            credentials: 'include'
        });

        const status = response.status;
        const data = await response.text();

        if (status === 200) {
            location.href = "./logout.php";
        }
        else {
            alert(data);
        }
});