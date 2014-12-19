var moduleNavigation = "advertising";
var defaultPage = 'View__Edit_Advert_Pop_Up';

var pageNavigation = {
    "advertising":{
        "Back_End_Advertisments":{
            'container':"#displayed",
            'layout': 'admin',
            'callbackFunction': function(){
                Back_End_Music_callback();
            }

        },
		"Back_End_Advertisments_Settings":{
            'container':"#displayed",
            'layout': 'admin',
            'callbackFunction': function(){
                
            }
        },
        "Review_Publish_Advert_Pop_Up":{
            'container':"#displayed",
            'layout': 'admin',
            'callbackFunction': function(){

            }
        },
        "View__Edit_Advert_Pop_Up":{
            'container':"#displayed",
            'layout': 'admin',
            'callbackFunction': function(){

            }
        }
    }
}

$(document).ready(function(){
    var hash = top.location.hash.replace('#', '');
    if(hash.length > 1){
        $(window).trigger('hashchange');
    }else{
        top.location.hash = defaultPage;   
    }
})

function setHash(hash,module){
    moduleNavigation = module; 
    
    top.location.hash = hash;
}


/**
 * on hash chage what we should do
 */
$(window).on('hashchange',function(){ 
    if(top.location.hash.length > 1){
        var hash = top.location.hash.replace('#', '');
        //favorite page
        loadWholePage('layout/' + pageNavigation[moduleNavigation][hash]['layout'] + '.html',pageNavigation[moduleNavigation][hash]['container']);
        $("body").fadeOut(1);
       
        setTimeout(function(){
            $('#storage').html('');
            $('#mainDiv').load(moduleNavigation+'/'+hash + '.html')

            $('.pull-left img').mouseover(function(){
                $(this).css('opacity','.6');
                $(this).next('span').show();
            }).mouseout(function(){
                $(this).css('opacity','1');
                $(this).next('span').hide(); 
            });
            $(window).trigger('resize');
            $("body").css({
                'position': 'relative',
                'overflow-x': 'hidden'
            })
            
            $("body").fadeIn(600);
            //            console.log(pageNavigation[moduleNavigation][hash]['callbackFunction'])
            setTimeout(function(){
                pageNavigation[moduleNavigation][hash]['callbackFunction']();
            },100)
        
        }, 1500);
    }
});