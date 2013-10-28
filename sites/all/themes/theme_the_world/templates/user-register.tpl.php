 <div id="user-reg">
  <div id="hybridauth-reg" class="grid-6">
    <?php
      // print hybrid auth widgets
      if (module_exists('hybridauth')) : ?>
        <h3>Connect with your accounts:</h3>
        <?php $element['#type'] = 'hybridauth_widget';
        print drupal_render($element);
      endif;
    ?>
  </div>
  <div id="email-reg" class="grid-6">
    <h3>Register with your email address:</h3>
    <?php print drupal_render($form['account']['name']); // prints the username field ?>
    <?php unset($form['account']['mail']['#description']);
    print drupal_render($form['account']['mail']); // prints the mail field ?>
    <?php print drupal_render($form['account']['pass']); // prints the password fields ?>
    <?php print drupal_render($form['actions']['submit']); // print the submit button ?>
  </div>
</div>
