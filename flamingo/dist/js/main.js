$(document).ready(function() {
    if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
        $('html,body').css('owerflow', 'hidden');
        //return false;
        $('#fullpage').fullpage({
            //scrollOverflow: true
            autoScrolling: true,
            scrollHorizontally: true,
            slidesNavigation: true,
        });
        $.stellar();
    }
});
