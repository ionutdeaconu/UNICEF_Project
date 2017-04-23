<!-- Add thia after the body tag-->
    
       
<!-- Login Modal -->
    <div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign In</h4>
      </div>
      <div class="modal-body">
           <h1>Sign In with Google: <div class="g-signin2" data-onsuccess="onSignIn"></div> </h1>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>
        </div>
    </div>

<!-- Resize scripts-->
    <script>
        (function($) {
    var $window = $(window),
        $html = $('html');

    function resize() {
        if ($window.width() < 768) {
            
            collapsed = 1;
              $("#wrapper").toggleClass("toggled");
                
            document.getElementById("element1").innerHTML = '<span class="glyphicon glyphicon-home center-icons"></span>';
            document.getElementById("element2").innerHTML = '<span class="glyphicon glyphicon-th-list center-icons"></span>';
            document.getElementById("element3").innerHTML = '<span class="glyphicon glyphicon-search center-icons"></span>';
            document.getElementById("element4").innerHTML = '<span class="glyphicon glyphicon-home center-icons"></span>';
            document.getElementById("element5").innerHTML = '<span class="glyphicon glyphicon-calendar center-icons "></span>';
            document.getElementById("element6").innerHTML = '<span class="glyphicon glyphicon-question-sign center-icons"></span>';
            document.getElementById("element7").innerHTML = '<span class="glyphicon glyphicon-earphone center-icons"></span>';
            document.getElementById("element8").innerHTML = '<span class="glyphicon glyphicon-plus-sign center-icons"></span>';
            document.getElementById("element9").innerHTML = '<span class="glyphicon glyphicon-log-in center-icons"></span>';
            
          
            return;
        }
        
            document.getElementById("element1").innerHTML = 'MoonLight Engine' ;
            document.getElementById("element2").innerHTML = 'Dashboard';
            document.getElementById("element3").innerHTML = 'Search';
            document.getElementById("element4").innerHTML = 'Overview';
            document.getElementById("element5").innerHTML = 'Events';
            document.getElementById("element6").innerHTML = 'About';
            document.getElementById("element7").innerHTML = 'Contact Us';
            document.getElementById("element8").innerHTML = 'Add Event';
            document.getElementById("element9").innerHTML = 'Log In - Register';
          

    }

    $window
        .resize(resize)
        .trigger('resize');
})(jQuery);
    </script>