jQuery(".acf-field[data-name='image_du_bloc'] img").click(function(e){
   var parentOffset = jQuery(this).offset(); 
   //or $(this).offset(); if you really just want the current element's offset
   var relX = e.pageX - parentOffset.left;
   var relY = e.pageY - parentOffset.top;
   console.log('X='+relX+ ' Y='+relY);
   var posX = (parseInt(100*relX)/$(this).width());
   var posY = (parseInt(100*relY)/$(this).height());
   alert("X=" +posX+ " Y=" + posY );
});