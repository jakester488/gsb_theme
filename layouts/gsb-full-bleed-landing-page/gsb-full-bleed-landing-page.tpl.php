<?php
/**
 * @file
 * Template for GSB Full Bleed Landing Page.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display gsb-full-bleed-landing-page clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <?php if ($content['full_bleed_header']): ?>
    <div class="full-bleed-header full-view">
      <?php print $content['full_bleed_header']; ?>
    </div>
  <?php endif; ?>
  <div class="content-wrapper">
    <div class="main-wrapper">
      <?php if ($content['top_full']): ?>
        <div class="top-full full-view">
          <?php print $content['top_full']; ?>
        </div>
      <?php endif; ?>
      <?php if ($content['top_left_third'] || $content['top_center_third'] || $content['top_right_third']): ?>
        <div class="top-left-third narrow-view">
          <?php print $content['top_left_third']; ?>
        </div>
        <div class="top-center-third narrow-view">
          <?php print $content['top_center_third']; ?>
        </div>
        <div class="top-right-third narrow-view">
          <?php print $content['top_right_third']; ?>
        </div>
      <?php endif; ?>
      <?php if ($content['top_left'] || $content['top_right']): ?>
        <div class="top-left wide-view">
          <?php print $content['top_left']; ?>
        </div>
        <div class="top-right wide-view">
          <?php print $content['top_right']; ?>
        </div>
      <?php endif; ?>
      <?php if ($content['middle_gray_full'] || $content['middle_gray_left'] || $content['middle_gray_right']): ?>
        <div class="middle-gray-full full-view">
          <?php print $content['middle_gray_full']; ?>
        </div>
        <?php if ($content['middle_gray_left'] || $content['middle_gray_right']): ?>
          <div class="middle-gray-left wide-view">
            <?php print $content['middle_gray_left']; ?>
          </div>
          <div class="middle-gray-right wide-view">
            <?php print $content['middle_gray_right']; ?>
          </div>
        <?php endif; ?>
      <?php endif; ?>
      <?php if ($content['middle_green_full'] || $content['middle_green_left'] || $content['middle_green_right']): ?>
        <div class="middle-green-full full-view">
          <?php print $content['middle_green_full']; ?>
        </div>
        <?php if ($content['middle_green_left'] || $content['middle_green_right']): ?>
          <div class="middle-green-left wide-view">
            <?php print $content['middle_green_left']; ?>
          </div>
          <div class="middle-green-right wide-view">
            <?php print $content['middle_green_right']; ?>
          </div>
        <?php endif; ?>
      <?php endif; ?>
      <?php if ($content['bottom_full'] || $content['bottom_left'] || $content['bottom_right']): ?>
        <div class="bottom-full full-view">
          <?php print $content['bottom_full']; ?>
        </div>
        <?php if ($content['bottom_left'] || $content['bottom_right']): ?>
          <div class="bottom-left wide-view">
            <?php print $content['bottom_left']; ?>
          </div>
          <div class="bottom-right wide-view">
            <?php print $content['bottom_right']; ?>
          </div>
        <?php endif; ?>
      <?php endif; ?>
      <?php if ($content['last_full']): ?>
        <div class="last-full full-view">
          <?php print $content['last_full']; ?>
        </div>
      <?php endif; ?>
    </div><!-- /.main-wrapper -->
  </div><!-- /.content-wrapper -->
</div><!-- /.full-bleed-header -->
