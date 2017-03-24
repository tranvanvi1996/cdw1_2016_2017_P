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
        $less->compileFile('less/1306.less', 'css/1306.css');
        ?>
        <link href="css/1306.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-1306">
            <div class="bt-newletter">
                <div class="container">
                    <div class="row">
                        <div class="newletter">
                            <div class="title-newsletter col-sm-6 col-xs-12">
                                <h3>Newsletter Sign Up</h3>
                                <p class="text-title">We will only send good news</p>
                            </div>
                            <div class="newletter-content col-sm-6 col-xs-12">
                                <div class="frm_subscribe">
                                    <form name="subscribe">
                                        <table>
                                            <tr>
                                                <td>
                                                    <input class="form-control" size="50" type="text" value="Put your email address here" name="" onfocus="if (this.value == this.defaultValue)
                                                                    this.value = ''" onblur="if (this.value == '')
                                                                                this.value = this.defaultValue">
                                                    <a class="btn" onclick="email_subscribe(66, '.frm_subscribe')">Subscribe</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>