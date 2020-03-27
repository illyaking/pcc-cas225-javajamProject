<?php

include  '../includes/db.inc.html.php';

/* Modify the If statement so the try only runs if the First Name field was submitted by form.html.php */


if (isset($_POST['myName'])) {
  $myName = $_POST['myName'];
  $myEmail = $_POST['myEmail'];
  $myExperience = $_POST['myExperience'];
  /* And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the
  form filed values to the database. */
  try {
    $sql = 'INSERT INTO jobs SET
            name = :name,
            email = :email,
            experience = :experience';
    $s = $pdo->prepare($sql);
    $s->bindValue(':name', $myName);
    $s->bindValue(':email', $myEmail);
    $s->bindValue(':experience', $myExperience);
    $s->execute();
  } catch (PDOException $e) {
    $error = 'Error adding submitted joke: ' . $e->getMessage();
    include '../includes/error.html.php'; /* edit the include file path that works for the current site folder and file structure */
    exit();
  }

  include 'success.html.php';

} else {
  include 'jobs.html.php';
}

/* Close the else statement */

?>
