// Get the user ID from the input field
var userId = document.getElementById("userIdInput").value;

// Cancel button functionality
const cancel = document.querySelector('.cancel');
cancel.addEventListener('click', () => {
    location.href = document.referrer;
});

// Function to get values of checked checkboxes
function getCheckboxValues(selector) {
    var values = [];
    var checkboxes = document.querySelectorAll(selector + ":checked");
    checkboxes.forEach(function (checkbox) {
        values.push(checkbox.value);
    });
    return values;
}

// Function to get selected radio button value
function getVisibilityValue(selector) {
    var selectedVisibility;
    var radios = document.querySelectorAll(selector + ":checked");
    radios.forEach((radio) => {
        if (radio.checked) {
            selectedVisibility = radio.value;
        }
    });
    return selectedVisibility;
}

// Append checkbox values to FormData as arrays
function appendCheckboxValues(form, selector, name) {
    var checkboxes = document.querySelectorAll(selector + ":checked");
    checkboxes.forEach(function (checkbox, index) {
        form.append(`${name}[]`, checkbox.value); // Append as an array
    });
}

// Save button functionality
const upload = document.querySelector('.save');
upload.addEventListener('click', async () => {
    var form = new FormData(document.getElementById("dataseUploadForm"));

    // Append additional data to FormData
    form.append('visibility', getVisibilityValue(".visibility"));
    appendCheckboxValues(form, ".character", "characteristics");
    appendCheckboxValues(form, ".subject", "subjects");
    appendCheckboxValues(form, ".task", "tasks");
    appendCheckboxValues(form, ".type", "types");

    // API call to upload dataset
    try {
        const response = await fetch(base_url + 'API/functions.php', {
            method: 'POST',
            body: form,
            mode: 'cors',
            credentials: 'include',
        });

        if (!response.ok) {
            console.error(`Server responded with status ${response.status}`);
            const errorText = await response.text();
            console.error("Server response:", errorText);
            throw new Error("Server error");
        }

        const responseData = await response.json();
        console.log("Server response data:", responseData);

        if (response.status === 200) {
            alert("Dataset uploaded successfully. Dataset ID: " + responseData.dataset_id);
            location.href = base_url;
        } else {
            alert(responseData.error);
        }
    } catch (error) {
        console.error("Error during API call:", error);
    }
});
