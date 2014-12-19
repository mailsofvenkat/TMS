var moduleNavigation = "Blog";
var defaultPage = 'Profile_Blogs_Favourites';
var pageNavigation = {
    "Blog":{
        "Profile_Blogs_Favourites":{
            'container':"#displayed",
            'callbackFunction': function(){
                
            }
        },
        "Profile_BlogPage_Thumbs":{
            'container':"#displayed",
            'callbackFunction': function(){
                
            }
        },
        "Profile_BlogPage_Expanded":{
            'container':"#displayed",
            'callbackFunction': function(){
                
            }
        },
        "Profile_BlogPage_Carousel":{
            'container':"#displayed",
            'callbackFunction': function(){
                $('.carousel').carousel();
            }
        },
        "ProfileAdmin_MyFavourites_Blogs":{
            'container':"#displayed",
            'callbackFunction': function(){
                $(window).resize(function() {
                    
                    if($(window).width() > 1200){
                        if($('.demo.in').length == 0){
                            $(".demo").collapse('show');
                            $(".archive").collapse('show');
                            $(".editprofile").collapse('show');
                            $(".mymusicsite").collapse('show');
                            $(".premiumservices").collapse('show');
                            $(".accountpages").collapse('show');
                        }
                    }else{
                        $(".demo").collapse('hide');
                        $(".archive").collapse('hide');
                        $(".editprofile").collapse('hide');
                        $(".mymusicsite").collapse('hide');
                        $(".premiumservices").collapse('hide');
                        $(".accountpages").collapse('hide');
                    }
                });
            
                $('.blogRow').mouseover(function(){
                    if($(window).width() > 520){
                        $(this).css('opacity','.6');
                        $(this).find('.textObacity').show();
                    }
                }).mouseout(function(){
                    if($(window).width() > 520){
                        $(this).css('opacity','1');
                        $(this).find('.textObacity').hide(); 
                    }
                });
                $(window).trigger('resize');
            }
        },
        "EditProfile_Blogs":{
            'container':"#displayed",
            'callbackFunction': function(){
                console.log('sshena');
                $(window).resize(function() {
                    if($(window).width() > 1200){
                        if($('.demo.in').length == 0){
                            $(".demo").collapse('show');
                            $(".archive").collapse('show');
                            $(".editprofile").collapse('show');
                            $(".mymusicsite").collapse('show');
                            $(".premiumservices").collapse('show');
                            $(".accountpages").collapse('show');
                        }
                    }else{
                        $(".demo").collapse('hide');
                        $(".archive").collapse('hide');
                        $(".editprofile").collapse('hide');
                        $(".mymusicsite").collapse('hide');
                        $(".premiumservices").collapse('hide');
                        $(".accountpages").collapse('hide');
                    }
                });
            
                $('.blogRow').mouseover(function(){
                    $(this).css('opacity','.6');
                    $(this).find('.textObacity').show();
                }).mouseout(function(){
                    $(this).css('opacity','1');
                    $(this).find('.textObacity').hide(); 
                });
                $(window).trigger('resize');
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

/**
 * get hash params 
 * return json
 * author: Micheal.Mouner
 */
function getHashParams(){
    var hash = top.location.hash.replace('#', '');
    var params = hash.split('&');
    var result = {};
    for(var i = 0; i < params.length; i++){
        var propval = params[i].split('=');
        result[propval[0]] = propval[1];
    }
    
    return result;

}
    
/**
 * get hash param by key
 * return String
 * author: Micheal.Mouner
 */
function getHashParam(key){
    var hash = top.location.hash.replace('#', '');
    var params = hash.split('&');
    var result = "";
    for(var i = 0; i < params.length; i++){
        var propval = params[i].split('=');
        if(propval[0] == key){
            result = propval[1];
        }
    }
    
    return result;
}

function setHash(hash,module){
    moduleNavigation = module; 
    
    top.location.hash = hash;
}
/**
 * set hash param 
 * return true if done
 * author: Micheal.Mouner
 */
function setHashParam(key,value){
    if(key.length > 0 && value.length > 0){
        if(top.location.hash.length < 2){
            top.location.hash = "#" + key + '=' + value;
        }else{
            var newHash = "#";
            var hash = top.location.hash.replace('#', '');
            var params = hash.split('&');
            replaced = false;
            for(var i = 0; i < params.length; i++){
                var propval = params[i].split('=');
                if(propval[0] != key){
                    newHash +=   propval[0] + '=' + propval[1] + '&';  
                }else{
                    replaced = true;
                    newHash +=   propval[0] + '=' + value + '&';  
                }
            }
            newHash = newHash.substring(0, newHash.length - 1);
            if(!replaced){
                newHash += '&' + key + '=' + value; 
            }
            top.location.hash = newHash;
        }
        return true;
    }else{
        return false;
    }
    
}

/**
 * set hash params
 * Params in json array of keys and values
 * keepOld to update the new hash or create new one
 * author: Micheal.Mouner
 */
function setHashParams(params,keepOld){
    var oldHash = "#";
    if(keepOld){
      
        var hash = top.location.hash.replace('#', '');
        var oldHash = hash.split('&');
        
        for(var i = 0; i < oldHash.length; i++){
            var propval = oldHash[i].split('=');
            var index = jQuery.inArray(propval[1], params)
            if(index != -1){
                newHash +=   propval[0] + '=' + params[index] + '&';  
                params.splice( $.inArray(params[index], params), 1 );
            }
        }  
    }
    for (var key in params) {
        oldHash += key + "=" + params[key] + "&";
    }
    top.location.hash = oldHash.substring(0, oldHash.length - 1);
}

/**
 * remove hash params
 * author: Micheal.Mouner
 */
function removeHashParams(key){
    var newHash = "#";
    if(top.location.hash.length >= 2){
        var hash = top.location.hash.replace('#', '');
        var params = hash.split('&');
        for(var i = 0; i < params.length; i++){
            var propval = params[i].split('=');
            if(propval[0] != key){
                newHash +=   propval[0] + '=' + propval[1] + '&';  
            }
        }
    }
    top.location.hash = newHash.substring(0, newHash.length - 1);

}
/**
 * on hash chage what we should do
 */
$(window).on('hashchange',function(){ 
    if(top.location.hash.length > 1){
        var hash = top.location.hash.replace('#', '');
        //favorite page
        loadWholePage(moduleNavigation+'/'+hash + '.html',pageNavigation[moduleNavigation][hash]['container']);
        
        pageNavigation[moduleNavigation][hash]['callbackFunction']();
        setTimeout(function(){
            $('.pull-left img').mouseover(function(){
                $(this).css('opacity','.6');
                $(this).next('span').show();
            }).mouseout(function(){
                $(this).css('opacity','1');
                $(this).next('span').hide(); 
            });
            $(window).trigger('resize');
            $("body").css({
                'position': 'relative'
            })
            $("body").animate({
                'left': "-"+$(window).width()+"px"
            }, 1 );  
            $("body").animate({
                'left': "0px"
            }, 1100 );
            pageNavigation[moduleNavigation][hash]['callbackFunction']();
        
        }, 50);
    }
});
$(window).resize(function() {
    //    if($(window).width() > 1200){
    //        if($('.demo.in').length == 0){
    //            $(".demo").collapse('show');
    //            $(".archive").collapse('show');
    //        }
    //    }else{
    //        $(".demo").collapse('hide');
    //        $(".archive").collapse('hide');
    //    }
    })
            