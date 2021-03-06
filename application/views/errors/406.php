<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <title>Error 406 - Not Acceptable</title>

    <style>
        @import url(http://fonts.googleapis.com/css?family=Ubuntu);

        body {
            background: #eee;
            color: #6d6d6d;
            font: normal normal normal 14px/1.253 Ubuntu, sans-serif;
            margin: 0 0 25px 0;
            min-width: 800px;
            padding: 0;
        }

        #main {
            background-clip: padding-box;
            background-color: #fff;
            border:1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px #cdcdcd;
            margin: 25px auto 0;
            padding: 30px;
            width: 700px;
            position: relative;
        }

        #main h1 {
            font-family: 'Ubuntu';
            font-size: 38px;
            letter-spacing: 2px;
            margin: 0 0 10px 0;
            padding: 0;
        }

        #main h2 {
            color: #999;
            font-size: 18px;
            letter-spacing: 3px;
            margin: 0 0 25px 0;
            padding: 0 0 0 0;
        }

        #main h3 {
            color: #999;
            margin-top: 24px;
            padding: 0 0 0 0;
        }

        #main h3 {
            font-size: 18px;
        }

        #main p {
            line-height: 25px;
            margin: 10px 0;
        }

        #main pre {
            background-color: #333;
            border-left: 1px solid #d8d8d8;
            border-top: 1px solid #d8d8d8;
            border-radius: 5px;
            color: #eee;
            padding: 10px;
        }

        #main ul {
            margin: 10px 0;
            padding: 0 30px;
        }

        #main li {
            margin: 5px 0;
        }
    </style>
</head>
<body>
<div id="main">
    <?php $messages = array('We need a map.', 'I think we\'re lost.', 'We took a wrong turn.'); ?>

    <h1><?php echo $messages[mt_rand(0, 2)]; ?></h1>

    <h2>Not Acceptable: 406</h2>

    <h3>What does this mean?</h3>

    <p>
        The data sent is not acceptable therefore it has been rejected.
    </p>

    <p>
        Perhaps you would like to go to our <?php echo HTML::link('http://localhost/metroticket/', 'home page'); ?>?
    </p>
</div>
</body>
</html>