<?php
// Set the session cookie with SameSite=None
session_set_cookie_params([
    'samesite' => 'None',
    'secure' => true, // This ensures the cookie is sent only over HTTPS
    'httponly' => true,
]);

// Add this line to set the correct content type
header('Content-Type: application/json');


// Use session_start() at the beginning of the file to initialize the session
session_start();

include_once "connection.php";
include_once "http-reply.php";

// Set the appropriate CORS headers
header("Access-Control-Allow-Origin: http://localhost");
header("Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE");
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Origin, Access-Control-Allow-Credentials, Authorization, X-Requested-With");

// Get raw JSON data from the request
$json_data = file_get_contents("php://input");

// Decode JSON data
$data = json_decode($json_data, true);

error_log('Registration attempt: ' . json_encode($data));

error_log('Raw JSON Data: ' . $json_data);

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['crud_req']) && $_GET['crud_req'] == 'user') {
        // Call getUser function
        getUser($conn, $_GET);  // Pass $_GET directly
    }
    else if (isset($_GET['crud_req']) && $_GET['crud_req'] == 'dataset') {
        getDatasets($conn, $_GET);
    }
    else{
        exit();
    }

}

else if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($data['crud_req']) && $data['crud_req'] == 'register') {
    registerUser($conn, $data);
}

else if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['crud_req'] == 'upload') {
    $file = isset($_FILES['doc_file']) ? $_FILES['doc_file'] : null;

    uploadDataSet($conn, $_POST, $file);
}

else if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($data['crud_req']) && $data['crud_req'] == 'login') {
    login($conn, $data);
}

else if ($_SERVER['REQUEST_METHOD'] == 'POST' && $data['crud_req'] == 'logout') {
    logout($conn);
}

else if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($data['crud_req']) && $data['crud_req'] == 'upload') {
    // Check if 'file' parameter is set in $data
    $file = isset($_FILES['file']['doc_file']) ? $_FILES['file']['doc_file'] : null;

    uploadDataSet($conn, $data, $file);
}
else if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($data['crud_req']) && $data['crud_req'] == 'datasetDetails') {
    getDatasetsDetails($conn, $data);
}

// *****************Login function **********************
function login($conn, $data)
{

    $username = $data['email'];
    $pwd = $data['password'];

    // Check if the email exists in the database
    $checkUserExistQuery = "SELECT COUNT(*) FROM `users` WHERE `userName` = ?";
    $checkStmt = $conn->prepare($checkUserExistQuery);
    $checkStmt->bind_param('s', $username);
    $checkStmt->execute();
    $checkStmt->bind_result($userCount);
    $checkStmt->fetch();
    $checkStmt->close();

    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        http_response_code(402);
        echo json_encode(["error" => "Bad email address"]);
        exit();
    }

    if ($userCount < 1) {
        // Email already exists, return an error
        header('Content-Type: application/json');
        http_response_code(403);
        echo json_encode(["error" => "You are not register user!!! Register first"]);
        exit();
    }

    // Continue with user registration
    $sql = "SELECT * FROM users WHERE userName=?;";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        // Output the specific error message from MySQL
        header('Content-Type: application/json');
        http_response_code(500);
        echo json_encode(["error" => "Prepare failed: (" . $conn->errno . ") " . $conn->error]);
        exit();
    }

    $stmt->bind_param('s', $username);
    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $data = $result->fetch_assoc();
            $dbPassword = $data['password'];

            // Use password_verify to check the password
            if (password_verify($pwd, $dbPassword)) {
                // Set the username in the session
                $_SESSION['user_id'] = $data['id'];
                $_SESSION['name'] = $data['name'];
                $_SESSION['user_role'] = $data['userRole'];

                http_response_code(200);
                echo json_encode(["message" => "Login successful"]);
            } else {
                http_response_code(401);
                echo json_encode(["error" => "Invalid username or password"]);
            }
        } else {
            http_response_code(401);
            echo json_encode(["error" => "Invalid username or password"]);
        }
    }
    else {
        // Send a JSON response for failure with error details
        header('Content-Type: application/json');
        http_response_code(500);
        echo json_encode(["error" => "Execute failed: (" . $stmt->errno . ") " . $stmt->error]);
    }
}

// **************** Get User Data ****************
function getUser($conn, $data)
{
    // Check if the request method is GET
    if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Invalid request method. Use GET.']);
        exit();
    }

    // Get the userId from the URL parameters
    $userId = isset($_GET['userId']) ? $_GET['userId'] : null;

    if ($userId === null) {
        header('Content-Type: application/json');
        echo json_encode(['error' => 'User ID is required.']);
        exit();
    }

    // Prepare and execute the SQL query
    $sql = "SELECT * FROM users WHERE id = ?;";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Prepare failed: (' . $conn->errno . ') ' . $conn->error]);
        exit();
    }

    $stmt->bind_param('s', $userId);
    
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $user = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // Return datasets as JSON
        header('Content-Type: application/json');
        echo json_encode($user);
    } else {
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Error fetching user']);
    }

    // Close the MySQLi connection
    $stmt->close();
    mysqli_close($conn);
    exit();
}


// **************** Register User ****************
function registerUser($conn, $data)
{
    $name = $data['name'];
    $email = $data['email'];
    $password = $data['password'];
    $userRole = $data['userRole'];
    $phone = $data['phone'];
    $institution = $data['institution'];
    $rePassword = $data['rePassword'];

    // Check if the email already exists in the database
    $checkEmailQuery = "SELECT COUNT(*) FROM `users` WHERE `userName` = ?";
    $checkStmt = $conn->prepare($checkEmailQuery);
    $checkStmt->bind_param('s', $email);
    $checkStmt->execute();
    $checkStmt->bind_result($emailCount);
    $checkStmt->fetch();
    $checkStmt->close();

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(402);
        echo json_encode(["error" => "Bad email address"]);
        exit();
    }

    if ($password !== $rePassword) {
        http_response_code(400);
        echo json_encode(["error" => "Password Not Match!!!"]);
        exit();
    }

    if ($emailCount > 0) {
        // Email already exists, return an error
        header('Content-Type: application/json');
        http_response_code(403);
        echo json_encode(["error" => "Email already exists"]);
        exit();
    }

    // Continue with user registration
    $sql = "INSERT INTO `users`(`name`, `userName`, `password`, `userRole`, `phone`, `institution`) VALUES (?,?,?,?,?,?);";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        // Output the specific error message from MySQL
        header('Content-Type: application/json');
        http_response_code(500);
        echo json_encode(["error" => "Prepare failed: (" . $conn->errno . ") " . $conn->error]);
        exit();
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $stmt->bind_param('ssssss', $name, $email, $password, $userRole, $phone, $institution);
    $stmt->execute();

    if ($stmt->affected_rows) {

        $userId = $stmt->insert_id;
        $_SESSION['user_id'] = $userId;
        $_SESSION['name'] = $name;

        // Send a JSON response for success
        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode(["message" => "Registration successful", "user_id" => $userId]);
    } else {
        // Send a JSON response for failure with error details
        header('Content-Type: application/json');
        http_response_code(500);
        echo json_encode(["error" => "Execute failed: (" . $stmt->errno . ") " . $stmt->error]);
    }
}


// **************** Update User ****************
function logout()
{
    unset($_SESSION['user_id']);
    unset($_SESSION['name']);
    session_destroy();
    echo "You are logged out!!! " . session_status();
    exit();
}
// **************** Upload DataSet ****************
// Function to handle file uploads
function uploadFile($inputName, $file) {
    // Ensure the file array is structured as expected
    if (!isset($file[$inputName]) || !is_array($file[$inputName])) {
        throw new Exception("Invalid file data");
    }
    $targetDirectory = __DIR__ . "/uploads/"; // Use __DIR__ to get the absolute path of the current directory
    $targetPath = $targetDirectory . basename($file[$inputName]['name']);

    // Check if file already exists
    if (file_exists($targetPath)) {
        throw new Exception("File already exists");
    }

    // Check file size (example: 5MB limit)
    if ($file[$inputName]['size'] > 5000000) {
        throw new Exception("File size exceeds the allowed limit");
    }

    // Allow only certain file formats
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'txt', 'pdf', 'doc', 'docx', 'json', 'csv', 'xlsx', 'xls'];
    $fileExtension = strtolower(pathinfo($targetPath, PATHINFO_EXTENSION));
    if (!in_array($fileExtension, $allowedExtensions)) {
        throw new Exception("Invalid file format. Allowed formats: " . implode(', ', $allowedExtensions));
    }

    // Move the uploaded file to the desired location
    if (!move_uploaded_file($file[$inputName]['tmp_name'], $targetPath)) {
        throw new Exception("Failed to move uploaded file");
    }

    return $targetPath; // Return the path of the uploaded file
}


// Function to insert dataset into the database
function uploadDataSet($conn, $data, $file) {
    error_log('File Array: ' . print_r($file, true));

    // Check if 'uploads' directory exists and is writable
    $targetDirectory = __DIR__ . "/uploads/";
    if (!file_exists($targetDirectory) || !is_writable($targetDirectory)) {
        http_response_code(500);
        echo json_encode(["error" => "Uploads directory does not exist or is not writable"]);
        return; // Stop the execution if the directory check fails
    }

    // Debug: Print the $_FILES array
    error_log(print_r($file, true));
    // Validate required fields
    $requiredFields = ['datasetTitle', 'datasetSummary', 'visibility'];
    foreach ($requiredFields as $field) {
        if (empty($data[$field])) {
            http_response_code(400);
            echo json_encode(["error" => "Missing required field: $field"]);
            exit();
        }
    }

    // Extract and implode checkbox values, ensure they are arrays
    $characteristics = isset($data['characteristics']) && is_array($data['characteristics']) ? implode(', ', $data['characteristics']) : '';
    $subjects = isset($data['subjects']) && is_array($data['subjects']) ? implode(', ', $data['subjects']) : '';
    $tasks = isset($data['tasks']) && is_array($data['tasks']) ? implode(', ', $data['tasks']) : '';
    $types = isset($data['types']) && is_array($data['types']) ? implode(', ', $data['types']) : '';

    // Extract other data from the $data array
    $title = $data['datasetTitle'];
    $summary = $data['datasetSummary'];
    $visibility = $data['visibility'];

    // Extract user ID from the session
    $userID = $_SESSION['user_id'] ?? null; // Fallback to null if not set

    // Handle file upload
    $filePath = null;
    if (isset($file['doc_file']) && $file['doc_file']['error'] == UPLOAD_ERR_OK) {
        try {
            $filePath = uploadFile('doc_file', $file);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(["error" => $e->getMessage()]);
            exit();
        }
    }

        // Direct file upload handling
    $filePath = null;
    if (isset($file['doc_file']) && $file['doc_file']['error'] == UPLOAD_ERR_OK) {
        $targetDirectory = __DIR__ . "/uploads/";
        $targetPath = $targetDirectory . basename($file['doc_file']['name']);
        
        // Perform necessary file validations here

        if (move_uploaded_file($file['doc_file']['tmp_name'], $targetPath)) {
            $filePath = $targetPath;
        } else {
            throw new Exception("Failed to move uploaded file");
        }
    }

    // SQL query
    $sql = "INSERT INTO `datasets` (title, summery, characteristics, subject, task, type, file, userID, visibility, status, uploadDate) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 1, NOW())"; // Assuming status is 1 for new entries

        // File upload handling
    $filePath = null;
    if (isset($file['doc_file']) && $file['doc_file']['error'] == UPLOAD_ERR_OK) {
        try {
            // Call uploadFile function to handle the file upload
            $filePath = uploadFile('doc_file', $file);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(["error" => $e->getMessage()]);
            exit();
        }
    }

    // Prepare the statement
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        http_response_code(500);
        echo json_encode(["error" => "Prepare failed: (" . $conn->errno . ") " . $conn->error]);
        exit();
    }

    // Bind parameters
    $stmt->bind_param('sssssssis', $title, $summary, $characteristics, $subjects, $tasks, $types, $filePath, $userID, $visibility);

    // Execute the statement
    if ($stmt->execute()) {
        $datasetId = $stmt->insert_id;
        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode(["message" => "Dataset uploaded successfully", "dataset_id" => $datasetId]);
    } else {
        header('Content-Type: application/json');
        http_response_code(500);
        echo json_encode(["error" => "Execute failed: (" . $stmt->errno . ") " . $stmt->error]);
    }

    // Close the statement
    $stmt->close();
}

// **************** Get Datasets ****************
function getDatasets($conn, $data)
{
    // Check if the request method is GET
    if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Invalid request method. Use GET.']);
        exit();
    }

    // Prepare and execute the SQL query
    $sql = "SELECT * FROM `datasets` WHERE visibility = '1' and status = '2' ORDER BY id DESC;";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Prepare failed: (' . $conn->errno . ') ' . $conn->error]);
        exit();
    }
    
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $dataset = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // Return datasets as JSON
        header('Content-Type: application/json');
        echo json_encode($dataset);
    } else {
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Error fetching datasets']);
    }

    // Close the MySQLi connection
    $stmt->close();
    mysqli_close($conn);
    exit();
}



?>
