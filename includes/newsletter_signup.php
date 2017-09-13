<?php
//[newsletter_signup] Shortcode
function create_newsletter_signup_shortcode() {

 
return '<form class="include-newsletter_signup" action="//4pt0.us2.list-manage.com/subscribe/post?u=302452cbab507fde2dcba4705&amp;id=823a9e1e52" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form">
  <label class="newsletter_singup-label" for="newsletter_signup">Newsletter Signup:</label>
  <div class="newsletter_singup-input_group">
    <input class="input_group-input" id="newsletter_signup" placeholder="Enter Email" type="text" id="mce-EMAIL" name="EMAIL" required><div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_302452cbab507fde2dcba4705_823a9e1e52" tabindex="-1" value=""></div><button name="subscribe"  class="input_group-button" type="submit">Subscribe</button>
  </div>
</form>';


}
add_shortcode( 'newsletter_signup', 'create_newsletter_signup_shortcode' );
?>