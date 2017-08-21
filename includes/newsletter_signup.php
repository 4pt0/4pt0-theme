<?php
//[newsletter_signup] Shortcode
function create_newsletter_signup_shortcode() {

 
return '<form class="include-newsletter_signup">
  <label class="newsletter_singup-label" for="newsletter_signup">Newsletter Signup:</label>
  <div class="newsletter_singup-input_group">
    <input class="input_group-input" id="newsletter_signup" placeholder="Enter Email" type="text"><button class="input_group-button" type="submit">Subscribe</button>
  </div>
</form>';


}
add_shortcode( 'newsletter_signup', 'create_newsletter_signup_shortcode' );
?>