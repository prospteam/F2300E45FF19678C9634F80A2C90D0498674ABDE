$(document).ready(function(){
     var base_url = $(".base_url").val();
     $(document).on("click","ul.list-unstyled li a",function(e){

          if($(this).hasClass('dropdown-toggle')){
               e.preventDefault();
               var sub_menu = $(this).siblings('ul').toggle();
          }
     });
});
