<?
$class_var = $_GET['class'];
if($class_var != "")
{
    include 'header.php';
    include $class_var . '.php';
    include 'footer.php';
}
else
{
?>
   

   <head>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>


    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            var scroll_pos = 0;
            $(document).scroll(function () {
                scroll_pos = $(this).scrollTop();
                if (scroll_pos > 100) {
                    $("header").css('background-color', 'white');
                    $("header").css('border-bottom', '1px solid  rgba(237, 30, 121, 1)');

                } else {
                    $("header").css('background-color', 'rgba(255,255,255,.5)');
                }
            });
        });
    </script>
</head>

<body>
    <header>
        <img src="logo.png" class="logo">
        <a href="/menu.html" class="menubutton pink">Access</a>
    </header>
    <div class="panel1"></div>
    <div class="panel2 pink">
        Learn about Lincoln Douglas Debate for free.
    </div>
    <div class="panel3">Debatecademy provides avid debaters with tutorials and resources that are integral to the progressive Lincoln Douglas debate circuit.</div>
    <div class="panel4 pinkbg">
        <div class="title">WHAT WILL I LEARN?</div>
        <div class="smallbox">
            <img class="icons" src="icons/timer16.png">Understand the General Rules
        </div>
        <div class="smallbox">
            <img class="icons" src="icons/books2.png">Discover Diverse Research Texts
        </div>
        <div class="smallbox">
            <img class="icons" src="icons/small115.png">Learn Terminology and Common Jargon

        </div>

        <div class="smallbox">
            <img class="icons" src="icons/electric6.png">Explore Popular Strategies
        </div>


        <div class="smallbox">
            <img class="icons" src="icons/condenser3.png">Find Active Tournaments
        </div>


    </div>
    <div class="panel5">
        <div class="title grey">WHY LINCOLN DOUGLAS?</div>

        <img src="images/greytrophy.png" class="trophy">
        <div class="trophycaption">Great leaders are almost always great simplifiers, who can cut through argument, debate and doubt, to offer a solution everybody can understand.
            <br>
            <div style="font-size:20px;">-COLIN POWELL</div>
        </div>
        <div class="trophycaption">Lincoln Douglas (LD) debate focuses on ethics and moral issues with the progressive debate circuit tackling modern racism, sexism, debate norms, and global crises. LD Debate especially is an activity where the debaters opposed to the judges set the norms in the round.</div>
    </div>


</body>
<?php
}
    
    ?>