
$(document).ready(function(){
   
    
    var $a=$('.a'),
     $b=$('.b'),
     $c=$('.c'),
     $d=$('.d'),
     $Upload=$('.Upload'),
     $gallery=$('.gallery')

     

     $b.click(function(){
         $Upload.fadeIn();
         $gallery.fadeOut();

});
     $c.click(function(){
        $gallery.fadeIn();
         $Upload.fadeOut();
     });



 });

