(function () {
    var userId = document.getElementById("userIdInput").value;

    if (userId) {
        var crud_req = "user";

        const formData = {
            userId: userId,
            crud_req: crud_req
        };

        const queryString = Object.keys(formData)
            .map(key => encodeURIComponent(key) + '=' + encodeURIComponent(formData[key]))
            .join('&');

        fetch(base_url + 'API/functions.php?' + queryString, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
            mode: 'cors',
            credentials: 'include'
        })
        .then(response => {
            console.log("Fetch response:", response);
            return response.json();
        })
        .then(data => {
            console.log("Data received:", data);
            if (data && data.error) {
                alert(data.error);
            } else {
                displayUser(data);
            }
        })
        .catch(error => {
            console.error("Error:", error);
        });
    } else {
        console.log("User ID is missing");
    }

    function displayUser(data) {
        // Assuming data is an array of user objects
        data.forEach(function (user) {
            console.log("Data in function: ", user);

            // Update HTML content with the received data
            document.getElementById("name").innerText = user.name;
            document.getElementById("profileName").innerText = user.name;
            document.getElementById("profileMobile").innerText = user.phone;
            document.getElementById("profileEmail").innerText = user.userName;
            document.getElementById("profileInstitution").innerText = user.institution;
        });
    }


})();
