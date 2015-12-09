/**
 * Created by Dan on 10/21/14.
 */

jQuery(document).ready(function(){
    /*
     * Header stuff
     */
    var header = jQuery('#main-nav');
    //var distance = $('#store-badges').offset().top;
    var $window = jQuery(window);
    var visible = false;
    $window.scroll(function() {
        if ( $window.scrollTop() >= 1 ) {
            if (!visible){
                visible = true;
                header.css('opacity','.99')
            }
        } else{
            if (visible){
                visible = false;
                header.css('opacity','0')
            }
        }
    });
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
        $.src='//v2.zopim.com/?2cNYEojBfOTKQSTbKcu0XusKJk9DgG2p';z.t=+new Date;$.
            type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');

    jQuery('.sign-up-button').on('click', function(){
        ga('send', 'event', 'landingPage', 'signup', 'Sign Up', 1);
    })
});
