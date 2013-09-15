<?php

/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 */
?>
<?php //print_r($user_profile); ?>
<div class="profile"<?php print $attributes; ?>>
	<div id="user-bar">
		<?php if (isset($user_profile['user_picture']['#markup'])): ?>
			<div id="user-image">
				<?php print $user_profile['user_picture']['#markup']; ?>
			</div>
		<?php endif; ?>
	</div>
  	<div id="user-main">
  		<div id="user-info">
  			<h1>
  				<?php print $user_profile['field_ind_first_name'][0]['#markup'] . ' ' .
  					$user_profile['field_ind_last_name'][0]['#markup']; ?>
  			</h1>
  			<?php if (isset($user_profile['field_offer_training'])): ?>
  				<div id="user_training"><?php print['field_offer_training'] ?></div>
  			<div id="user-desc">
  				<p><?php print $user_profile['field_ind_descr'][0]['#markup']; ?></p>
  			</div>
  			<a href="http://twitter.com/<?php print $user_profile['field_ind_twitter_id']['twitter_user_name']; ?>">
  				<?php print $user_profile['field_ind_twitter_id'][0]['#markup']; ?>
  			</a>
  			</div>
  		</div>
  	</div>
</div>

group_audience
field_ind_location
field_ind_site
field_ind_proj_interests
field_ind_descr
field_ind_assets