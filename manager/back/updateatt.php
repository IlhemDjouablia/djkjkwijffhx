 <?php
// Check if the form is submitted

    // Retrieve the values from the form
    $attendance = $_POST['attendance'];
    $id = $_POST['id'];
    $currentDate = $_POST['date']; // Get the current date

    // Include the database connection file
    include('../../config/conn.php');

    // Initialize a flag variable to track errors during updates
    $hasError = false;

    // Loop through the attendance values and update them in the att table
    foreach ($attendance as $key => $value) {
        $state = $value;
        $intern_name = $id;
        $idst = $_POST['idst'][$key]; // Retrieve the corresponding idst value

        // Update the values in the att table
        $sql = "UPDATE att SET state='$state' WHERE date='$currentDate' AND intern_name='$intern_name' AND id_student='$idst'";
        if (!mysqli_query($conn, $sql)) {
            echo"done";
        }
    }

        header("Location: ../att.php?id=$id&date=$currentDate");
        exit();


    // Close the database connection
    mysqli_close($conn);

?>