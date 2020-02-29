<!-- This file is used to markup the public-facing widget. -->
<div class="text-widget">
    <?php if (strlen(trim($weekdays)) > 0) : ?>
        <p>Monday-Fridays: <?php echo $weekdays; ?></p>
    <?php endif; ?>
    <?php if (strlen(trim($saturdays)) > 0) : ?>
        <p>Saturday: <?php echo $saturdays; ?></p>
    <?php endif; ?>
    <?php if (strlen(trim($sundays)) > 0) : ?>
        <p>Sundays: <?php echo $sundays; ?></p>
    <?php endif; ?>
</div>