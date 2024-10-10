<?php
// Database connection
$servername = "localhost";
$username = "root"; // Change this if needed
$password = ""; // Change this if needed
$dbname = "quiz_db"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch 5 random questions
$sql = "SELECT * FROM quiz_questions ORDER BY RAND() LIMIT 5";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Question Paper</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Random Question Paper</h1>

        <?php if ($result->num_rows > 0): ?>
            <form>
                <?php while($row = $result->fetch_assoc()): ?>
                    <div class="mb-4">
                        <h5><?php echo $row['question']; ?></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_<?php echo $row['id']; ?>" value="1">
                            <label class="form-check-label">
                                <?php echo $row['option_1']; ?>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_<?php echo $row['id']; ?>" value="2">
                            <label class="form-check-label">
                                <?php echo $row['option_2']; ?>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_<?php echo $row['id']; ?>" value="3">
                            <label class="form-check-label">
                                <?php echo $row['option_3']; ?>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_<?php echo $row['id']; ?>" value="4">
                            <label class="form-check-label">
                                <?php echo $row['option_4']; ?>
                            </label>
                        </div>
                    </div>
                <?php endwhile; ?>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php else: ?>
            <p>No questions found in the database.</p>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
