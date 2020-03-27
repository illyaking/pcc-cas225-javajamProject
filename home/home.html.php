<!DOCTYPE html>
<html lang="en">

<head>
    <title>JavaJam Coffee House</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/javajam.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
    </script>
    <![endif]-->
</head>

<body>
<div id="wrapper">
    <?php include 'includes/header.inc.html.php'; ?>
    <?php include 'includes/nav.inc.html.php'; ?>
    <main>
        <div id="heroroad"></div>
        <?php foreach ($contents as $content): ?>
            <h2><?php echo htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
            <?php echo $content['body']; ?>
        <?php endforeach; ?>
        <?php include 'includes/address.inc.html.php'; ?>
    </main>
    <?php include 'includes/footer.inc.html.php'; ?>
</div>
</body>
</html>
