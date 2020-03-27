<?php

    include  'includes/db.inc.html.php';

    try
{
    $sql = 'SELECT * FROM content WHERE id=1';
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    $error = 'Error fetching jokes: ' . $e->getMessage();
    include 'includes/error.html.php';
    exit();
}
while ($row = $result->fetch())
{
    $contents[] = array(
        'title' => $row['title'],
        'body' => $row['body'],
        'image' => $row['image']
    );
}
include 'home/home.html.php';
?>