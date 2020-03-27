<!DOCTYPE html>
<html lang="en">
<head>
    <title>JavaJam Coffee House Jobs</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../styles/javajam.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
    </script>
    <![endif]-->
</head>
    <body>
        <div id="wrapper">
            <?php include '../includes/header.inc.html.php'; ?>
            <?php include '../includes/nav.inc.html.php'; ?>
            <main>
                <div id="heroroad"></div>
                <h2>Success</h2>
                <p>A cheerful member of our staff will be in contact with you soon:<br> 
                Name: <?php echo htmlspecialchars($myName, ENT_QUOTES, 'UFT-8'); ?><br>
                Email: <?php echo htmlspecialchars($myEmail, ENT_QUOTES, 'UFT-8'); ?><br>
                Question: <?php echo htmlspecialchars($myQuestion, ENT_QUOTES, 'UFT-8'); ?>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>
