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
                <h2>Success</h2>
                <p>Your application has been added to our database. A member of our staff will contact you when we have an opening.
                    Our records show you submitted the following:<br>
                Name: <?php echo htmlspecialchars($myName, ENT_QUOTES, 'UFT-8'); ?><br>
                Email: <?php echo htmlspecialchars($myEmail, ENT_QUOTES, 'UFT-8'); ?><br>
                Experience: <?php echo htmlspecialchars($myExperience, ENT_QUOTES, 'UFT-8'); ?>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>
