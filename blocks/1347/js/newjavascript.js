 jQuery(document).ready(function ($) {

                var TopFixMenu = $("#abcd");
                var lu = $("#fixNav ul li");
                var right = $(".navbar-nav");

                $(window).scroll(function () {

                    if ($(this).scrollTop() > 150) {


                        TopFixMenu.css("position", "fixed");
                        TopFixMenu.css("top", "0");
                        lu.css("margin-right", "40px");
                        TopFixMenu.css("z-index", "999");
                        TopFixMenu.css("width", "100%");
                        TopFixMenu.css("opacity", ".8");
                    } else
                    {

                        TopFixMenu.css("position", "relative");
                        TopFixMenu.css("opacity", "1");
                    }
                }

                )
            })