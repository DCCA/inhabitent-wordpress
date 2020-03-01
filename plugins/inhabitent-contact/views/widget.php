<!-- This file is used to markup the public-facing widget. -->
<div class="text-widget">
    <?php if (strlen(trim($email)) > 0) : ?>
        <p>
            <i class="fas fa-envelope"></i> 
            <a href="mailto:<?php echo $email; ?>"> <?php echo $email; ?> </a>
        </p>
    <?php endif; ?>
    <?php if (strlen(trim($telephone)) > 0) : ?>
        <p>
            <i class="fas fa-phone-alt"></i> 
            <a href="tel:<?php echo $telephone; ?>"> <?php echo $telephone; ?></a>
        </p>
    <?php endif; ?>
    <?php if (strlen(trim($address)) > 0) : ?>
        <p><i class="fas fa-map-marker-alt"></i> <?php echo $address; ?></p>
    <?php endif; ?>
    <div class="social-media-icons">
        <?php if (strlen(trim($facebook_link)) > 0) : ?>
            <a href="<?php echo $facebook_link; ?>"><i class="fab fa-facebook-square"></i> </a>
        <?php endif; ?>
        <?php if (strlen(trim($twitter_link)) > 0) : ?>
            <a href=" <?php echo $twitter_link; ?>"><i class="fab fa-twitter-square"></i></a>
        <?php endif; ?>
        <?php if (strlen(trim($googleplus_link)) > 0) : ?>
            <a href="<?php echo $googleplus_link; ?>"><i class="fab fa-google-plus-square"></i></a>
    </div>
<?php endif; ?>
</div>