<?php if($data['user']): ?>
    This is <?php echo $data['user']->username; ?>'s profile.
<?php else: ?>
    <p>User not found.</php>
<?php endif; ?>