<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thomas Nguyen</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="ytplayer/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/styles.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="ytplayer/jquery.mb.YTPlayer.min.js"></script>
    </head>
    <body>
        <div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/aYcZ5FvcQAA',containment:'body',autoPlay:true, mute:true, startAt:0, opacity:1}"></div>
        
        <div class="container">
            <div class="promo">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="well">
                            <h2><span class="text-red">"What is it like being an Asian American?"</span> I try to answer this question by reflecting on my life and those lives around me.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aYcZ5FvcQAA" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/u2VGQFZqiYQ" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/w90t-ZLA3AQ" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(function(){
                $(".player").YTPlayer();
            });
            
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-58048207-3', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>