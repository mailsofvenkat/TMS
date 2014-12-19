
var Back_End_Music_callback = function(){
    $('.blogRow').hover(function(){
        //$(this).css('opacity','.6');
        var imgwidth = $(this).find('img').width();
        var imgheight = $(this).find('img').height();

        var offset = findPos(this);
        var imgpostop = offset[0] ;
        var imgposleft = offset[1];

        $(this).find("ul:eq(0)").find("li:eq(0)").hoverIntent({
            sensitivity: 5,
            interval:10,
            timeout:50,
            over: function(){
                $(this).find('.hover_menu')
                    .css('width',imgwidth+'px')
                    .css('height',imgheight+'px')
                    .css('line-height',imgheight+'px')
                    .show();

               // $(this).css('line-height',imgheight+'px')
            },
            out: function(){
                $(this).find('.hover_menu').hide();
            }
        });





    })
        //.mouseout(function(){
//        //$(this).css('opacity','1');
//        $('.hover_menu').hide();
//    });



}

function findPos(obj) {
    var obj2 = obj;
    var curtop = 0;
    var curleft = 0;
    if (document.getElementById || document.all) {
        do  {
            curleft += obj.offsetLeft-obj.scrollLeft;
            curtop += obj.offsetTop-obj.scrollTop;
            obj = obj.offsetParent;
            obj2 = obj2.parentNode;
            while (obj2!=obj) {
                curleft -= obj2.scrollLeft;
                curtop -= obj2.scrollTop;
                obj2 = obj2.parentNode;
            }
        } while (obj.offsetParent)
    } else if (document.layers) {
        curtop += obj.y;
        curleft += obj.x;
    }
    return [curtop, curleft];
}   // end of findPos()