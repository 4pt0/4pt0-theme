<?php
//[newsletter_signup] Shortcode
function create_newsletter_signup_shortcode() {

 
return '<form class="include-newsletter_signup" action="//4pt0.us2.list-manage.com/subscribe/post?u=302452cbab507fde2dcba4705&amp;id=823a9e1e52">
  <label class="newsletter_singup-label" for="newsletter_signup">Newsletter Signup:</label>
  <div class="newsletter_singup-input_group">
    <input class="input_group-input" id="newsletter_signup" placeholder="Enter Email" type="text"  name="EMAIL"><button class="input_group-button" type="submit">Subscribe</button>
  </div>
</form>';


}
add_shortcode( 'newsletter_signup', 'create_newsletter_signup_shortcode' );
?>