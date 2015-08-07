var $menu = $('#nav'), // replace #menu with your selector
    menuOffsetTop = $menu[0].offsetTop;

$(document).bind('ready scroll', function () {
    var docScroll = $(this).scrollTop();

    if (docScroll >= menuOffsetTop) {
        $menu.addClass('fixed');
    } else {
        $menu.removeClass('fixed');
    }
});