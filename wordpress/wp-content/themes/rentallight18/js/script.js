//********** ON CONSOLE ITEMS **************//

console.log('Welcome to my final PHP and Wordpress Site Below are the Javascript and Jquery parts. )


//NAVIGATION CONTROL//

function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}



//********** jQUERY ITEMS **************//


// ALWAYS WRAP JQUERY IN THIS DOC READY FUNCTION //   
$(document).ready(function() {
        

//COLOR BOX PLUGIN - GROUP IMAGES//    
$(".group3").colorbox({rel:'group3', transition:"slow", width:"80%", height:"80%"});
    
    
//HEADER COLOR CHANGE//
$('#available h2').click(function (){
$("#available").css("background","aquamarine",);
});

    
//EAST SIDE - TOGGLE INFO//
$("h5.title1").click(function() {
$(".entry1" ).toggle("slow");
});                            

    
//BAYVIEW - TOGGLE INFO// 
$("h5.title2").click(function() {
$(".entry2" ).toggle("slow");
});                            

    
//CUDAHY - TOGGLE INFO//
$("h5.title3").click(function() {
$(".entry3" ).toggle("slow");
});

    
}); //THIS IS THE END OF THE CURLY BRACKET FOR ONREADY FUNCTION CODE   
    
    
//**********NOTES **************//

    
 

