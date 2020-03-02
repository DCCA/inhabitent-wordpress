<!-- This file is used to markup the public-facing widget. -->
<div class="text-widget">
    <?php if (strlen(trim($weekdays)) > 0) : ?>
        <p><span class='days-of-the-week'>Monday-Fridays: </span> <?php echo $weekdays; ?></p>
    <?php endif; ?>
    <?php if (strlen(trim($saturdays)) > 0) : ?>
        <p><span class='days-of-the-week'>Saturday: </span><?php echo $saturdays; ?></p>
    <?php endif; ?>
    <?php if (strlen(trim($sundays)) > 0) : ?>
        <p><span class='days-of-the-week'>Sundays: </span><?php echo $sundays; ?></p>
    <?php endif; ?>
</div>