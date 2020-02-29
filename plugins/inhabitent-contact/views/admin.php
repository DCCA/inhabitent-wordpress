<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>
   <p><label for="<?php echo $this->get_field_id('email'); ?>">E-mail:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>">
   </p>
   <p><label for="<?php echo $this->get_field_id('telephone'); ?>">Tel</label>
      <input class="widefat" id="<?php echo $this->get_field_id('telephone'); ?>" name="<?php echo $this->get_field_name('telephone'); ?>" type="text" value="<?php echo $telephone; ?>">
   </p>
   <p><label for="<?php echo $this->get_field_id('address'); ?>">Address:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" type="text" value="<?php echo $address; ?>">
   </p>
   <p><label for="<?php echo $this->get_field_id('facebook_link'); ?>">Facebook URL:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('facebook_link'); ?>" name="<?php echo $this->get_field_name('facebook_link'); ?>" type="text" value="<?php echo $facebook_link; ?>">
   </p>
   <p><label for="<?php echo $this->get_field_id('twitter_link'); ?>">Twitter URL:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('twitter_link'); ?>" name="<?php echo $this->get_field_name('twitter_link'); ?>" type="text" value="<?php echo $twitter_link; ?>">
   </p>
   <p><label for="<?php echo $this->get_field_id('googleplus_link'); ?>">Google+ URL:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('googleplus_link'); ?>" name="<?php echo $this->get_field_name('googleplus_link'); ?>" type="text" value="<?php echo $googleplus_link; ?>">
   </p>
</div>