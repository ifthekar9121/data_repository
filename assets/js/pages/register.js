const register = document.querySelector('button');
register.addEventListener('click', async () => {
    var form = new FormData(document.getElementById("registerForm"));
    var email = form.get("email");
    var password = form.get("password");
    var rePassword = form.get("rePassword");
    var name = form.get("name");
    var phone = form.get("phone");
    var institution = form.get("institution");
    var userRole = form.get("userRole");
    var crud_req = form.get("crud_req");
    if (email || password || rePassword || name || phone || institution) {
        try {
            const formData = {
                email: email,
                password: password,
                rePassword: rePassword,
                name: name,
                phone: phone,
                institution: institution,
                userRole: userRole,
                crud_req: crud_req,

            };

            const response = await fetch( base_url + 'API/functions.php', {
                method: "POST",
                body: JSON.stringify(formData),
                mode: 'cors',
                credentials: 'include'
            });

            const status = response.status;
            const data = await response.text();

            if (status === 200) {
                try {
                    const responseData = JSON.parse(data);
                    // Access the user ID from the response
                    const userId = responseData.user_id;
                        
                        // Perform further actions with the user ID if needed
                        
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
    }
});