<!DOCTYPE html>
<html>
<head>
	<link href="/images/favicon.ico" type="image/png" rel="shortcut icon" />
    <link href="/styles/style.css" type="text/css" rel="stylesheet" />

    <?php 
    if ($page == 'home') { ?>
        <title>Practice Helper: Home</title> <?php
    } elseif ($page == 'login') { ?>
        <title>Practice Helper: Log In</title> <?php
    } elseif ($page == 'signup') {?>
        <title>Practice Helper: Sign Up</title> <?php
    } else { ?> 
        <title>Practice Helper: Practice Page</title> 
    <?php } ?>
</head>