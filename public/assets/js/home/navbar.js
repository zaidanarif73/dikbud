// /*navbar animated transition*/
// $(window).scroll(function(){
//     var scroll = $(window).scrollTop();
//     var layanan = $("#layanan");
//     if (scroll > 0){
//         $("header").css('background-color','transparent');

//         if(scroll > layanan){
//             $("header").css('background-color','#388da8');
//         }
//     }else{
//         // $("header").removeAttr('data-aos','fade-down');
//     }
// });


$(window).scroll(function(){
    var scroll = $(window).scrollTop();
    var layananOffset = $("#layanan").offset().top;

    if (scroll >= layananOffset) {
        $("header").css('background-color', '#388da8');
    } else {
        $("header").css('background-color', 'transparent');
    }
});