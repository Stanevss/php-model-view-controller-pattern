<p>Hello <?php echo $data['name']; ?></p>

<?php if(!empty($data['food'])): ?>

    <?php foreach($data['food'] as $food):?>

        <?php echo $food?><br>

    <?php endforeach;?>

<?php endif;?>