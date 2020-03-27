<!DOCTYPE html>
<html lang="en">
<head>
    <title>JavaJam Coffee House Menu</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../styles/javajam.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style>
        <?php foreach ($contents as $content): ?>
        #heromugs {background-image: url ('../<?php echo $content['image']; ?>');}
        <?php endforeach; ?>
    </style>
</head>
<body>
<div id="wrapper">
    <?php include '../includes/header.inc.html.php'; ?>
    <?php include '../includes/nav.inc.html.php'; ?>
    <main>
        <div id="heromugs"></div>
        <?php foreach ($contents as $content): ?>
        <h2><?php echo htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
        <p><?php echo htmlspecialchars($content['body'], ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endforeach; ?>
        <h2>Prices </h2>

        <table class="price">
            <?php foreach ($menuItems as $menuItem): ?>
            <tr>
                <th><?php echo htmlspecialchars($menuItem['title'], ENT_QUOTES, 'UTF-8'); ?></th>
                <td><?php echo htmlspecialchars($menuItem['price'], ENT_QUOTES, 'UTF-8'); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <h2>Description</h2>
        <?php foreach ($menuItems as $menuItem): ?>
        <h3><?php echo htmlspecialchars($menuItem['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
        <p><?php echo htmlspecialchars($menuItem['description'], ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endforeach; ?>
    </main>
    <?php include '../includes/footer.inc.html.php'; ?>
</div>
</body>
</html>
