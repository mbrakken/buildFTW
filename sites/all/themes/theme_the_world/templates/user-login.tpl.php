 <div id="user-login">
  <div id="hybridauth-reg" class="grid-6">
    <?php
      // print hybrid auth widgets
      if (module_exists('hybridauth')) : ?>
        <h3>Login with one of these accounts:</h3>
        <?php $element['#type'] = 'hybridauth_widget';
        print drupal_render($element);
      endif;
    ?>
  </div>
  <div id="email-reg" class="grid-6">
    <h3>Login with your email address:</h3>
    <?php print drupal_render($form['name']); // prints the username field ?>
    <?php print drupal_render($form['pass']); // prints the password fields ?>
    <?php print drupal_render($form['lost_password']); // prints the password recovery link ?>
    <?php print drupal_render($form['actions']); // print the submit button ?>
  </div>
</div>
