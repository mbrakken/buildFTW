<div class="panel-display omega-grid buildftw-2-10" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div id="inside-top">
    <div class="panel-panel grid-12 top">
      <div class="inside"><?php print $content['top']; ?></div>
    </div>
  </div>
  <div class="panel-panel grid-2 alpha">
    <div class="inside"><?php print $content['left']; ?></div>
  </div>
  <div class="panel-panel grid-10 omega">
    <div class="inside"><?php print $content['right']; ?></div>
  </div>
  <div class="panel-panel grid-12">
    <div class="inside"><?php print $content['bottom']; ?></div>
  </div>
</div>
