<!DOCTYPE html>
<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1332.less', 'css/1332.css');
        ?>
        <link href="css/font.css" rel="stylesheet" type="text/css" />
        <link href="css/1332.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-1332">
            <div class="news">
                <div class="dropcap-wrapper">
                    <div class="dropcap-left">
                        <span class="dropcap">Q</span>
                    </div>
                    <h>Is Gordon available to attend or speak at our event?</h> 
                </div>
                <span class="dropcap ">A</span>
                <p>As we’re sure you can understand, Gordon’s diary is very busy and often booked very far in advance. He is therefore simply unable to attend or speak at all the events that he is invited to.</p>
                <div class="sep"></div>
            </div>
            <div class="news">
                <div class="dropcap-wrapper">
                    <div class="dropcap-left">
                        <span class="dropcap">Q</span>
                    </div>
                    <h>We are visiting one of the restaurants. Is Gordon available to say hello?</h> 
                </div>
                <span class="dropcap ">A</span>
                <p>Unfortunately Gordon is unable to make individual appearances but you may be lucky and catch him when he is visiting the teams in the restaurants. However, if you have special requests then do please do contact the restaurant reservations team ahead of your booking who will be delighted to help make your time with us extra special.</p>
                <div class="sep"></div>
            </div>
            <div class="news">
                <div class="dropcap-wrapper">
                    <div class="dropcap-left">
                        <span class="dropcap">Q</span>
                    </div>
                    <h>Could Gordon please record a special message for us?</h> 
                </div>
                <span class="dropcap ">A</span>
                <p>Gordon is always flattered by the requests he receives of this nature from friends and family members of his fans. However, as we’re sure you can imagine, he is unable to record personalised messages due to his busy schedule.</p>
                <div class="sep"></div>
            </div>
          
            <div class="news">
                <div class="dropcap-wrapper">
                    <div class="dropcap-left">
                        <span class="dropcap">Q</span>
                    </div>
                    <h>Please can you send me a signed autograph from Gordon?</h> 
                </div>
                <span class="dropcap ">A</span>
                <p>Unfortunately we are not able to send signed autographs, simply due to logistical reasons and to the high volume of requests.</p>
                <div class="sep"></div>
            </div>
            <div class="news">
                <div class="dropcap-wrapper">
                    <div class="dropcap-left">
                        <span class="dropcap">Q</span>
                    </div>
                    <h>Would Gordon like to become a patron of our charity?</h> 
                </div>
                <span class="dropcap ">A</span>
                <p>Gordon is a patron and supporter of a handful of charities with which he has a personal or longstanding connection and he is currently unable to take on any more charitable commitments.</p>
                <div class="sep"></div>
            </div>
        </div>
    </body>

</html>