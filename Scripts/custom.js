$(document).ready(function () {


});

function openBox(id, el) {
    $(".btn-menu").removeClass("active");
    $(".white-box-menu").removeClass("active");
    $(id).toggleClass("active");
    $("#" + el).toggleClass("active");

}


$(document).mouseup(function (e) {
    var container = $(".navigation-menu");
    if (!container.is(e.target) && container.has(e.target).length === 0) {

        $('.white-box-menu').removeClass("active");
        $('.menu-item-setting li a').removeClass("active");

    }
});

function ChangeTab(id, el) {
    $(el).parent().siblings().removeClass("active");
    $("#" + id).siblings().removeClass("active");
    $("#" + id).addClass("active");
    $(el).parent().addClass('active');
}