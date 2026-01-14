<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library_management";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (!$conn->query($sql)) {
    echo "Error creating database: " . $conn->error;
}

// Select the database
$conn->select_db($dbname);

// Create tables if they don't exist
$sql = "CREATE TABLE IF NOT EXISTS books (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    isbn VARCHAR(50) UNIQUE,
    publication_year INT(4),
    available_copies INT(11) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS members (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE,
    phone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS book_issues (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    book_id INT(11),
    member_id INT(11),
    issue_date DATE NOT NULL,
    due_date DATE NOT NULL,
    return_date DATE DEFAULT NULL,
    status ENUM('issued', 'returned', 'overdue') DEFAULT 'issued',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (book_id) REFERENCES books(id) ON DELETE CASCADE,
    FOREIGN KEY (member_id) REFERENCES members(id) ON DELETE CASCADE
)";
$conn->query($sql);

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["action"])) {
        switch ($_POST["action"]) {
            case "add_book":
                addBook($conn);
                break;
            case "add_member":
                addMember($conn);
                break;
            case "update_book":
                updateBook($conn);
                break;
            case "update_member":
                updateMember($conn);
                break;
            case "delete_book":
                deleteBook($conn);
                break;
            case "delete_member":
                deleteMember($conn);
                break;
            case "issue_book":
                issueBook($conn);
                break;
            case "return_book":
                returnBook($conn);
                break;
        }
    }
}

// Add a new book
function addBook($conn) {
    $title = $conn->real_escape_string($_POST["title"]);
    $author = $conn->real_escape_string($_POST["author"]);
    $isbn = $conn->real_escape_string($_POST["isbn"]);
    $publication_year = $conn->real_escape_string($_POST["publication_year"]);
    $available_copies = $conn->real_escape_string($_POST["available_copies"]);

    $sql = "INSERT INTO books (title, author, isbn, publication_year, available_copies) 
            VALUES ('$title', '$author', '$isbn', '$publication_year', '$available_copies')";

    if ($conn->query($sql)) {
        echo "<div class='alert alert-success'>Book added successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}

// Add a new member
function addMember($conn) {
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $phone = $conn->real_escape_string($_POST["phone"]);

    $sql = "INSERT INTO members (name, email, phone) VALUES ('$name', '$email', '$phone')";

    if ($conn->query($sql)) {
        echo "<div class='alert alert-success'>Member added successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}

// Update book information
function updateBook($conn) {
    $id = $conn->real_escape_string($_POST["book_id"]);
    $title = $conn->real_escape_string($_POST["title"]);
    $author = $conn->real_escape_string($_POST["author"]);
    $isbn = $conn->real_escape_string($_POST["isbn"]);
    $publication_year = $conn->real_escape_string($_POST["publication_year"]);
    $available_copies = $conn->real_escape_string($_POST["available_copies"]);

    $sql = "UPDATE books SET 
            title='$title', 
            author='$author', 
            isbn='$isbn', 
            publication_year='$publication_year', 
            available_copies='$available_copies' 
            WHERE id=$id";

    if ($conn->query($sql)) {
        echo "<div class='alert alert-success'>Book updated successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}

// Update member information
function updateMember($conn) {
    $id = $conn->real_escape_string($_POST["member_id"]);
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $phone = $conn->real_escape_string($_POST["phone"]);

    $sql = "UPDATE members SET name='$name', email='$email', phone='$phone' WHERE id=$id";

    if ($conn->query($sql)) {
        echo "<div class='alert alert-success'>Member updated successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}

// Delete a book
function deleteBook($conn) {
    $id = $conn->real_escape_string($_POST["book_id"]);
    $sql = "DELETE FROM books WHERE id=$id";

    if ($conn->query($sql)) {
        echo "<div class='alert alert-success'>Book deleted successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}

// Delete a member
function deleteMember($conn) {
    $id = $conn->real_escape_string($_POST["member_id"]);
    $sql = "DELETE FROM members WHERE id=$id";

    if ($conn->query($sql)) {
        echo "<div class='alert alert-success'>Member deleted successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}

// Issue a book to a member
function issueBook($conn) {
    $book_id = $conn->real_escape_string($_POST["book_id"]);
    $member_id = $conn->real_escape_string($_POST["member_id"]);
    $issue_date = date("Y-m-d");
    $due_date = date("Y-m-d", strtotime("+2 weeks"));

    // Check if book is available
    $result = $conn->query("SELECT available_copies FROM books WHERE id=$book_id");
    $book = $result->fetch_assoc();
    
    if ($book["available_copies"] > 0) {
        // Start a transaction
        $conn->begin_transaction();
        
        try {
            // Update available copies
            $conn->query("UPDATE books SET available_copies = available_copies - 1 WHERE id=$book_id");
            
            // Insert book issue record
            $conn->query("INSERT INTO book_issues (book_id, member_id, issue_date, due_date) 
                         VALUES ($book_id, $member_id, '$issue_date', '$due_date')");
            
            // Commit transaction
            $conn->commit();
            echo "<div class='alert alert-success'>Book issued successfully</div>";
        } catch (Exception $e) {
            // Roll back transaction on error
            $conn->rollback();
            echo "<div class='alert alert-danger'>Error: " . $e->getMessage() . "</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Book not available</div>";
    }
}

// Return a book
function returnBook($conn) {
    $issue_id = $conn->real_escape_string($_POST["issue_id"]);
    $return_date = date("Y-m-d");
    
    // Start a transaction
    $conn->begin_transaction();
    
    try {
        // Get issue details
        $result = $conn->query("SELECT * FROM book_issues WHERE id=$issue_id");
        $issue = $result->fetch_assoc();
        
        // Update issue record
        $status = (strtotime($return_date) > strtotime($issue["due_date"])) ? "overdue" : "returned";
        $conn->query("UPDATE book_issues SET return_date='$return_date', status='$status' WHERE id=$issue_id");
        
        // Update book availability
        $conn->query("UPDATE books SET available_copies = available_copies + 1 WHERE id=" . $issue["book_id"]);
        
        // Commit transaction
        $conn->commit();
        echo "<div class='alert alert-success'>Book returned successfully</div>";
    } catch (Exception $e) {
        // Roll back transaction on error
        $conn->rollback();
        echo "<div class='alert alert-danger'>Error: " . $e->getMessage() . "</div>";
    }
}
?>