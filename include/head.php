<!DOCTYPE html>
<html>
<head>
	<link href="/images/favicon.ico" type="image/png" rel="shortcut icon" />
    <link href="/styles/style.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet"> 
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/stopwatch.js"></script>
    <script src="/js/timezone.js"></script>

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