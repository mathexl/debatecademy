<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Resource-type" content="Document" />

    <link rel="stylesheet" type="text/css" href="animate.css" />
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="examples.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script>
        /*        $(function () {
            while ($('#card div').height() >
                $('#card').height()) {
                $('#card div').css('font-size', (parseInt($('#card div').css('font-size')) - 1) + "px");
            }
        }); */
    </script>
    <style>
        /* Sections
		 * --------------------------------------- */
        #section0 img,
        #section1 img {
            margin: 20px 0 0 0;
        }
        #section2 img {
            margin: 20px 0 0 52px;
        }
        #section3 img {
            bottom: 0px;
            position: absolute;
            margin-left: -420px;
        }
        .intro p {
            width: 50%;
            margin: 0 auto;
            font-size: 1.5em;
        }
        .twitter-share-button {
            position: absolute;
            z-index: 99;
            right: 149px;
            top: 9px;
        }
    </style>
    <!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="jquery.fullPage.js"></script>
    <script type="text/javascript" src="examples.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#fullpage').fullpage({
                anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', '5thpage','6thpage','7thpage','8thpage','9thpage','10thpage'],
                menu: '#menu',
                scrollingSpeed: 1000
            });

        });
    </script>

</head>

<body>


