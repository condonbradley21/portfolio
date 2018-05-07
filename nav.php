 <?php echo '<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">

            <div class="navbar-header page-scroll">
                <button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand">Brads Portfolio</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>' .
                        date_default_timezone_set("America/Los_Angeles");
                        echo "<li class='white timerpadding'>Today is " . date("Y/m/d") . "&nbsp" . date("h:i:sa") . "</li>" .



           ' </ul>
            </div>
        </div>
    </nav> '; ?>
