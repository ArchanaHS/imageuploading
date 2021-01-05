$(document).ready(function(){
   
    
    var $a=$('.a'),
     $b=$('.b'),
     $c=$('.c'),
     $d=$('.d'),
     $Upload=$('.Upload'),
     $gallery=$('.gallery'),
     $contact=$('.contact')

     

     $b.click(function(){
         $Upload.fadeIn();
         $gallery.fadeOut();
         $contact.fadeOut();

});
     $c.click(function(){
        $gallery.fadeIn();
         $Upload.fadeOut();
          $contact.fadeOut();
     })
     $d.click(function(){
         $gallery.fadeOut();
         $Upload.fadeOut();
          $contact.fadeIn();
     })



 });
