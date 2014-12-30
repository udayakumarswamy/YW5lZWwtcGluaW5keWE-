<!-- Custom user registration form -->

<p>Sign up with your Facebook account or e-mail address.</p>

<!-- Print Fb connect button if fboauth module loaded -->
<div>
 <?php if (module_exists('fboauth')) { print fboauth_action_display('connect'); } ?>
</div>

<!-- Print login form -->
<div>
 <?php print drupal_render_children($form) ?>
</div>

<div class="login-photo">
    <img src="<?php print base_path() . drupal_get_path('theme', 'pinindya')
        . '/images/login.jpg'; ?>"
         alt="Login" title="Login" width='327' height='221' />
</div>

<!-- Print create account and password reset links -->
<div>
 <a href="?q=user/login" title="Login to your account">Login</a> | 
 <a href="?q=user/password" title="Reset your password">Forgot your password?</a>
</div>