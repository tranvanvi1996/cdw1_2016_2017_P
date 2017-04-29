$(document).ready(function () {
    $("#sp1").click(function () {
        $(this).css("color", "#CB7152");
        $(this).css("border-bottom", "2px solid #CB7152");
        $("#sp2").css("border-bottom", "none");
        $("#sp2").css("color", "black");
        $("#sp3").css("color", "black");
        $("#sp3").css("border-bottom", "none");
        $(".one").show();
        $(".two").hide();
        $(".three").hide();
    });
    $("#sp2").click(function () {
        $(this).css("color", "#CB7152");
        $("#sp1").css("color", "black");
        $("#sp3").css("color", "black");
        $(this).css("border-bottom", "2px solid #CB7152");
        $("#sp1").css("border-bottom", "none");
        $("#sp3").css("border-bottom", "none");
        $(".one").hide();
        $(".two").show();
        $(".three").hide();
    });
    $("#sp3").click(function () {
        $(this).css("color", "#CB7152");
        $("#sp2").css("color", "black");
        $("#sp1").css("color", "black");
        $(this).css("border-bottom", "2px solid #CB7152");
        $("#sp1").css("border-bottom", "none");
        $("#sp2").css("border-bottom", "none");
        $(".one").hide();
        $(".two").hide();
        $(".three").show();
    });
});