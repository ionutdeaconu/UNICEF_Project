  <script>
      //Loads only when signed in && at start of page.  
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
    var emailUs = profile.getEmail();
    alert("Logged email is " + emailUs);
  
    
    /*console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.*/
}
</script>
    
<script>
$(window).on('load', onSignIn(googleUser));

</script>