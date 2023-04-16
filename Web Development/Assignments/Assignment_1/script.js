// Toggle buttton script

$(document).ready(function() {
    $("#nav_button").click(function(e){
        $(".header_nav").toggleClass("active");
    })
})

//---------------------------------------------

// $(".submit_btn").click(function() {
//     $(this).closest("form").attr("action","./admin_page.php"); 
// });