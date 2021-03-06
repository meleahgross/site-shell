<?php
/**
 * Roger Dickey, Jr
 * http://rogerdickeyjr.com/
 * http://github.com/rogerd330/
 * 11/15/12 9:59 PM
 */

require_once("includes/functions.php");

$site_name = "Site Shell";
$page_title = empty($page_title) ? "Home" : $page_title;
list($page_name, $page_extension) = explode(".", basename($_SERVER["PHP_SELF"]));

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title><?php echo sprintf("%s - %s", $page_title, $site_name) ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/text.css">
        <link rel="stylesheet" href="css/960.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>

    <div id="<?php echo $page_name ?>" class="container_12">