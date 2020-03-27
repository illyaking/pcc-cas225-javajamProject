<!DOCTYPE html>
<html lang="en">
<head>
    <title>JavaJam Coffee House Music</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/javajam.css">
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
        <div id="heroguitar"></div>
        <h2>Music at JavaJam</h2>
        <p>The first Friday night each month at JavaJam is a special night. Join us from 8 pm to 11 pm for some music
            you won&#39;t want to miss!</p>
        <h4>January</h4>
        <div class="details">
            <a href="images/melanie.jpg"><img src="images/melaniethumb.jpg" class="floatleft" alt="Melanie Morris"
                                              width="80" height="80"></a>Melanie Morris entertains with her melodic folk
            style.
            <audio controls="controls">
                <source src="melanie.mp3" type="audio/mpeg">
                <source src="melanie.ogg" type="audio/ogg">
                <a href="melanie.mp3">Download</a> (MP3)
            </audio>
        </div>
        <h4>February</h4>
        <div class="details">
            <a href="images/greg.jpg"><img src="images/gregthumb.jpg" class="floatleft" alt="Tahoe Greg" width="80"
                                           height="80"></a>
            Tahoe Greg is back from his tour. New songs. New stories.
            <audio controls="controls">
                <source src="greg.mp3" type="audio/mpeg">
                <source src="greg.ogg" type="audio/ogg">
                <a href="greg.mp3">Download</a> (MP3)
            </audio>
        </div>
    </main>
    <?php include 'includes/footer.inc.html.php'; ?>
</div>
</body>
</html>
