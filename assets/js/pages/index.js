(function () {
    var crud_req = "dataset";
    var displayedLimit = 8;
    var totalData = [];

    const formData = {
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
            return response.json();
        })
        .then(data => {
            if (data && data.error) {
                alert(data.error);
            } else {
                totalData = data;
                datasets();
            }
        })
        .catch(error => {
            console.error("Error:", error);
        });

    function datasets() {
        var datasetContainer = document.getElementById("datasetContainer");
        
        // Clear existing content
        datasetContainer.innerHTML = "";

        if (totalData.length > 0) {
            var limit = Math.min(totalData.length, displayedLimit);

            for (var i = 0; i < limit; i++) {
                displayDatasets(totalData[i]);
            }

            // Add the "See More" button if there are more datasets
            if (totalData.length > displayedLimit) {
                var seeMoreButton = document.createElement("button");
                seeMoreButton.type = "button";
                seeMoreButton.className = "btn btn-lg btn-primary waves-effect waves-light w-100";
                seeMoreButton.textContent = "See More Datasets";
                seeMoreButton.addEventListener("click", function () {
                    displayedLimit += 8;
                    datasets();
                });

                var seeMoreContainer = document.createElement("div");
                seeMoreContainer.className = "mt-2 d-grid see-more-dataset-button";
                seeMoreContainer.appendChild(seeMoreButton);

                datasetContainer.appendChild(seeMoreContainer);
            }
        } else {
            var card = document.createElement("div");
            card.className = "card mb-3 p-3 text-center";

            card.innerHTML = `
                <h4>No available dataset to show</h4>
            `;

            datasetContainer.appendChild(card);
        }
    }

    function displayDatasets(dataset) {
        var card = document.createElement("div");
        card.className = "card mb-3 p-3";

        card.innerHTML = `
            <a href="dataset-details.php?id=${dataset.id}" class="card-link">
                <div class="row g-0">
                    <div class="col-md-1 col-sm-3 text-center m-auto">
                        <img src="assets/images/database.png" alt="..." class="card-custom-img">
                    </div>
                    <div class="col-md-11 col-sm-9">
                        <div class="card-body px-4">
                            <h4 class="card-title">${dataset.title}</h4>
                            <p class="card-text">${dataset.summery}</p>
                        </div>
                        <div class="row px-4">
                            <div class="col-md-3 col-sm-6 col-6 dataset-details">
                                <h6>Characteristics</h6>
                                <p class="card-text text-muted">${dataset.characteristics}</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6 dataset-details">
                                <h6>Associated Tasks</h6>
                                <p class="card-text text-muted">${dataset.task}</p>
                            </div>
                            <div class="col-md-2 col-sm-6 col-6 dataset-details">
                                <h6>Subject Area</h6>
                                <p class="card-text text-muted">${dataset.subject}</p>
                            </div>
                            <div class="col-md-2 col-sm-6 col-6 dataset-details">
                                <h6>Feature Type</h6>
                                <p class="card-text text-muted">${dataset.type}</p>
                            </div>
                            <div class="col-md-2 col-sm-6 col-6 dataset-details">
                                <h6>Uploaded On</h6>
                                <p class="card-text text-muted">${dataset.uploadDate}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        `;

        document.getElementById("datasetContainer").appendChild(card);
    };

    // Add an event listener to the select element
    document.getElementById("demo-foo-filter-status").addEventListener("change", function () {
        // Get the selected value from the dropdown
        var selectedValue = this.value;

        // Sort the datasets based on the selected value
        if (selectedValue) {
            sortDatasets(selectedValue);
        } else {
            // If no option is selected, display the datasets without sorting
            datasets();
        }
    });

    var defaultSortOption = "";

    // Add an event listener to the select element
    document.getElementById("demo-foo-filter-status").addEventListener("change", function () {
        // Get the selected value from the dropdown
        var selectedValue = this.value;

        // Sort the datasets based on the selected value
        if (selectedValue) {
            sortDatasets(selectedValue);
        } else {
            // If no option is selected, use the default sort option
            sortDatasets(defaultSortOption);
        }
    });

    // Set the default sort option on page load
    sortDatasets(defaultSortOption);

    function sortDatasets(sortOption) {
        // Sort the datasets based on the selected option
        switch (sortOption) {
            case "data-title-a-z":
                totalData.sort((a, b) => (a.title.toLowerCase() > b.title.toLowerCase()) ? 1 : -1);
                break;
            case "data-title-z-a":
                totalData.sort((a, b) => (a.title.toLowerCase() < b.title.toLowerCase()) ? 1 : -1);
                break;
            case "more-download":
                totalData.sort((a, b) => new Date(b.uploadDate) - new Date(a.uploadDate));
                break;
            case "less-download":
                totalData.sort((a, b) => new Date(a.uploadDate) - new Date(b.uploadDate));
                break;
            default:
                // If the selected option is not recognized, display the datasets without sorting
                datasets();
                return;
        }

        // Display the sorted datasets
        datasets();
    }

    document.getElementById("resetBtn").addEventListener("click", function () {
        // Reset all checkboxes
        resetCheckboxes();

        // Display all datasets
        datasets();
    });

     // Add an event listener to the reset button
    document.getElementById("resetBtn").addEventListener("click", function () {
        // Reset all checkboxes
        resetCheckboxes();

        // Display all datasets
        datasets();
    });

    // Add event listeners to the checkboxes for filtering
    addCheckboxListeners("character");
    addCheckboxListeners("subject");
    addCheckboxListeners("task");
    addCheckboxListeners("feature");

    function addCheckboxListeners(checkboxName) {
        var checkboxes = document.getElementsByName(checkboxName);
        
        checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener("change", function () {
                filterDatasets();
            });
        });
    }

    function resetCheckboxes() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        
        checkboxes.forEach(function (checkbox) {
            checkbox.checked = false;
        });
    }

    function filterDatasets() {
        var filteredData = totalData.filter(function (dataset) {
            return (
                checkFilter("character", dataset.character) &&
                checkFilter("subject", dataset.subject) &&
                checkFilter("task", dataset.task) &&
                checkFilter("feature", dataset.feature)
            );
        });

        // Display the filtered datasets
        displayFilteredDatasets(filteredData);
    }

    function checkFilter(checkboxName, value) {
        var checkboxes = document.getElementsByName(checkboxName);
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked && checkboxes[i].value === value) {
                return true;
            }
        }
        return false;
    }
})();
