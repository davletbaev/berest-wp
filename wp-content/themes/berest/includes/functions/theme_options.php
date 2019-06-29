<?php
/*
 * Adding theme options page
 */

function my_appearance_menu_item() {
	add_menu_page("Theme Options", "Theme Options", "manage_options", "theme-options", "theme_option_page", null, 99);
}
add_action('admin_menu', 'my_appearance_menu_item');


function theme_option_page() {
  ?>
  <div class="wrap">
  <h1>Proof of Review Theme Options Page</h1>
  <form method="post" action="options.php">
  <?php
  // display settings field on theme-option page
  settings_fields("theme-options-grp");
  
  // display all sections for theme-options page
  do_settings_sections("theme-options");
  submit_button();
  ?>
  </form>
  </div>
  <?php
  }

  function theme_section_description(){
    echo '';
  }

  function discord_field(){
    ?>
      <input type="url" name="por_discord" size="40" id="por_discord" value="<?php echo get_option('por_discord'); ?>" />
    <?php
  }
  
  function medium_field(){
    ?>
      <input type="url" name="por_medium" size="40" id="por_medium" value="<?php echo get_option('por_medium'); ?>" />
    <?php
  }

  function linkedin_field(){
    ?>
      <input type="url" name="por_linkedin" size="40" id="por_linkedin" value="<?php echo get_option('por_linkedin'); ?>" />
    <?php
  }

  function twitter_field(){
    ?>
      <input type="url" name="por_twitter" size="40" id="por_twitter" value="<?php echo get_option('por_twitter'); ?>" />
    <?php
  }

  function email_field(){
    ?>
      <input type="email" name="por_email" size="40" id="por_email" value="<?php echo get_option('por_email'); ?>" />
    <?php
  }
  
  function test_theme_settings(){
  add_option('por_discord', '');
  add_option('por_medium', '');
  add_option('por_linkedin', '');
  add_option('por_twitter', '');
  add_option('por_email', '');

  add_settings_section( 'first_section', 'Footer Socials Block',
  'theme_section_description','theme-options');
  
  add_settings_field('por_discord','Discord','discord_field',
  'theme-options','first_section');
  add_settings_field('por_medium','Medium','medium_field',
  'theme-options','first_section');
  add_settings_field('por_twitter','Twitter','twitter_field',
  'theme-options','first_section');
  add_settings_field('por_linkedin','LinkedIn','linkedin_field',
  'theme-options','first_section');
  add_settings_field('por_email','Email','email_field',
  'theme-options','first_section');

  register_setting( 'theme-options-grp', 'por_discord');
  register_setting( 'theme-options-grp', 'por_medium');
  register_setting( 'theme-options-grp', 'por_linkedin');
  register_setting( 'theme-options-grp', 'por_twitter');
  register_setting( 'theme-options-grp', 'por_email');
  }

  add_action('admin_init','test_theme_settings');