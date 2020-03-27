<!DOCTYPE html>
<html lang="en">
<head>
    <title>JavaJam Coffee House Menu</title>
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
        <div id="heromugs"></div>
        <h2>Coffee at JavaJam</h2>
        <p>Indulge in our locally roasted free-trade coffee and enjoy the aroma, the smooth taste, the caffeine! Join
            our Mug Club and get a 10% discount on each cup of coffee you purchase &mdash; ask the barista for
            details.</p>
        <table>
            <tr>
                <th>Just Java</th>
                <td>Regular house blend, decaffeinated coffee, or flavor of the day.<br>Endless Cup $2.00</td>
            </tr>
            <tr>
                <th>Cafe au Lait</th>
                <td>House blended coffee infused into a smooth, steamed milk.<br>Single $2.00 Double $3.00</td>
            </tr>
            <tr>
                <th>Iced Cappuccino</th>
                <td>Sweetened espresso blended with icy-cold milk and served in a chilled glass.<br>Single $4.75 Double
                    $5.75
                </td>
            </tr>
        </table>
    </main>
    <?php include 'includes/footer.inc.html.php'; ?>
</div>
</body>
</html>
