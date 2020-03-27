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
        <h2>Jobs at JavaJam</h2>
        <p>Want to work at JavaJam? Fill out the form below to start your application. Required fields are
            marked with an asterisk (*).</p>
        <form method="post" action=" ">
            <label for="myName">*Name: </label>
            <input type="text" id="myName" name="myName" required="required">
            <label for="myEmail">*E-mail: </label>
            <input type="email" id="myEmail" name="myEmail" required="required">
            <label for="myExperience">*Experience: </label>
            <textarea name="myExperience" id="myExperience" rows="2" cols="20" required="required"></textarea>
            <input type="submit" value="Apply Now">
        </form>
    </main>
    <?php include '../includes/footer.inc.html.php'; ?>
</div>
</body>
</html>
