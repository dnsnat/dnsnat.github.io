$(function(){
  
  $(".anim-input input").each(function(){
    
    $(this).on('focus', function() {
      $(this).parent().addClass('active-input-anim');
    });

    $(this).on('blur', function() {
      if ($(this).val().length == 0) {
        $(this).parent().removeClass('active-input-anim');
      }
    });
  });
  
  // Code for Ripple Effect
  
  $('.ripple').on('click', function (event) {
      event.preventDefault();
      
      var $div = $('<div/>'),
          btnOffset = $(this).offset(),
      		xPos = event.pageX - btnOffset.left,
      		yPos = event.pageY - btnOffset.top;
      

      
      $div.addClass('ripple-effect');
      var $ripple = $(".ripple-effect");
      
      $ripple.css("height", $(this).height());
      $ripple.css("width", $(this).height());
      $div
        .css({
          top: yPos - ($ripple.height()/2),
          left: xPos - ($ripple.width()/2),
          background: $(this).data("ripple-color")
        }) 
        .appendTo($(this));

      window.setTimeout(function(){
        $div.remove();
      }, 2000);
    });
  
})