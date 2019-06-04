$(document).ready(function(){
    var $picAll = $('.halfSlide'),
        picLength = $picAll.length,
        picCur = 0,
        topDefault = 0,
        topCur = 0;

    $picAll.not(":eq(0)").css({'top': '100%'});

    var lock = false;

    $(document).on('mousewheel', '#mainWrapper', function(e){
        if(lock){
            return false;
        };

        //console.log('offsetY: '+e.originalEvent.offsetY);
        console.log('pageY: '+e.originalEvent.pageY);
        return true;

        if(e.originalEvent.wheelDelta /120 > 0) {
            if (picCur > 0) {
                lock = true;

                //picCur--;

                if (!$picAll.eq(picCur).hasClass('slide')){
                    topCur = 150;
                }else{
                    topCur = 100;
                };

                $picAll.eq(picCur)
                .animate({
                    top: topCur+'%'
                }, 200, function() {
                    lock = false;
                });

                picCur--;

                //$picAll.eq(picCur).css({'top': topCur+'%'});
            }
        } else {
            if (picCur < picLength-1) {
                lock = true;

                picCur++;
                topCur = topDefault;

                if (!$picAll.eq(picCur).hasClass('slide')) {
                    topCur = 50;
                };

                $picAll.eq(picCur)
                .animate({
                    top: topCur+'%'
                }, 200, function() {
                    lock = false;
                });
                //$picAll.eq(picCur).css({'top': topCur+'%'});
            }
        };
        return false;
    });
});