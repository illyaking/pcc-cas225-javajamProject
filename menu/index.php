<?php

    include  '../includes/db.inc.html.php';

    //First query for small block of content from content table
    try {
        $sql = 'SELECT title, body, image FROM content WHERE id=2';
        $result = $pdo->query($sql);
    }
    catch (PDOException $e)
    {
        $error = 'Error fetching jokes: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }

    //Second query for menu items to display in the Price and Description area
    try
    {
        $menu = 'SELECT title, description, price FROM menu';
        $menuResults = $pdo->query($menu);
    }
    catch (PDOException $e)
    {
        $error = 'Error fetching jokes: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }

    //ForEach loop for content
    foreach ($result as $row)
    {
        $contents[] = array(
            'title' => $row['title'],
            'body' => $row['body'],
            'image' => $row['image']
        );
    }

    //ForEach loop for menu items
    foreach ($menuResults as $row)
    {
        $menuItems[] = array(
            'title' => $row['title'],
            'description' => $row['description'],
            'price' => $row['price']
        );
    }

    include 'menu.html.php';
?>