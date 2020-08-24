$(document).ready(function(){
    $(".welcome-form-input").each(function(){
        $(this).click(function(){
            // hide placeholder
            $(this).attr("placeholder","");

            // animate placeholder
            var parent = this.parentElement;
            var lable = parent.getElementsByTagName("label")[0];
            $(lable).removeClass("d-none");
            $(lable).addClass("animate__animated animate__fadeInUp");



          })
      })
  })