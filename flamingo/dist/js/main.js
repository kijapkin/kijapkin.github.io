$(document).ready(function() {
    var $picAll = $('.halfSlide'),
        picLength = $('.halfSlide').length,
        picCur = 0,
        topDefault = 35,
        topCur = 0;
    $picAll.not(":eq(0)").css({ 'top': '100%' });
    $('body').on('mousewheel', function(e) {
        if (e.originalEvent.wheelDelta / 120 > 0) {
            if (picCur > 0) {
                topCur = 100;
                $picAll.eq(picCur).css({ 'top': topCur + '%' });
                picCur--;
            }
        } else {
            if (picCur < picLength - 1) {
                picCur++;
                topCur = topDefault;
                if ($picAll.eq(picCur).hasClass('slide')) {
                    topCur = 0;
                }
                $picAll.eq(picCur).css({ 'top': topCur + '%' });
            }
        }
    });
});
