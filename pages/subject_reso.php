<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Resources</title>
    <link rel="stylesheet" href="../assets/css/resources.css">
    <style>
    .button-container {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 80px;
            text-decoration: none;
        }
        .button-container :hover {
            background-color: red;
            cursor: pointer;
        }
        .button1 {
            background-color: darkblue;
            padding: 30px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 20px;
            margin: 40px;
            border-color: white;
            color: white;
            margin-bottom: 50px;
            text-decoration: none;

        }

        .button2 {
            background-color: darkblue;
            padding: 30px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 20px;
            margin: 40px;
            border-color: white;
            color: white;
            margin-bottom: 50px;
            text-decoration: none;
        }

        .button3 {
            background-color: darkblue;
            padding: 30px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 20px;
            margin: 40px;
            border-color: white;
            color: white;
            margin-bottom: 50px;
            text-decoration: none;
        }

        .button4 {
            background-color: darkblue;
            padding: 30px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 20px;
            margin: 40px;
            border-color: white;
            color: white;
            margin-bottom: 50px;
            text-decoration: none;
        }

    </style>
</head>

<body>
<div class="back-btn">
        <div class="empty"></div>
        <button class="back"><a href="./stu_dashboard.php">Go Back</a></button>
    </div>
<div class="container">
<h1>Subject Resources</h1>
</div>
    <div class="button-container">
        <a href="https://drive.google.com/drive/folders/1EkHP0K-UWHOg7dcAFn5Oki_q0TWtFZnG?usp=drive_link" class="button1">Lec Material</a>
        <a href="https://drive.google.com/drive/folders/1sWKJ48Li7UXcKe2pEDpQsYZ7zhA6x94u?usp=drive_link" class="button2">Pass Papers</a>
        <a href="https://drive.google.com/drive/folders/1sWKJ48Li7UXcKe2pEDpQsYZ7zhA6x94u?usp=drive_link" class="button3">Model Papers</a>
        <a href="https://drive.google.com/drive/folders/1KePd7JLgYSEj-2NNsCSkxVjiTym2VRMu?usp=drive_link" class="button4">Learning Resources</a>
    </div>
    <div>
    
    <div class="container">
        <h3>Here are the resources related to the subject</h3>
        <?php
        include_once "../inc/db_connect.php";

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT le.enroll_id, le.subject_id, le.link, le.enrollment_date, s.subject_name 
            FROM lecture_enroll le 
            INNER JOIN subject s ON le.subject_id = s.subject_id";

        $result = $conn->query($sql);

        if ($result === false) {
            die("Error executing query: " . $conn->error);
        }

        if ($result->num_rows > 0) {
            echo "<table class='table table-striped'>";
            echo "<thead><tr><th>Subject Name</th><th>Resource Link</th><th>Enrollment Date</th><th>Action</th></tr></thead><tbody>";

            while ($row = $result->fetch_assoc()) {
                $enroll_id = $row['enroll_id'];
                $link = htmlspecialchars($row['link']);
                $subject_name = htmlspecialchars($row['subject_name']);
                $enrollment_date = htmlspecialchars($row['enrollment_date']);

                $button_disabled = isset($_SESSION['referred'][$enroll_id]) ? 'disabled' : '';

                echo "<tr>
                    <td>$subject_name</td>
                    <td><a href='$link' target='_blank'>$link</a></td>
                    <td>$enrollment_date</td>
                    <td>
                        <form method='post'>
                            <button type='submit' name='mark_as_referred' value='$enroll_id' class='btn btn-primary' $button_disabled>Mark as Referred</button>
                        </form>
                    </td>
                  </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<p>No resources found.</p>";
        }

        if (isset($_POST['mark_as_referred'])) {
            $enroll_id = $_POST['mark_as_referred'];

            if (!isset($_SESSION['referred'])) {
                $_SESSION['referred'] = [];
            }
            $_SESSION['referred'][$enroll_id] = true;

            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }

        $conn->close();
        ?>
    </div>





</body>

</html>