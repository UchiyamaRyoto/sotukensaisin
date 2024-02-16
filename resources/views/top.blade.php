<pre>
    <?php print_r($user); ?>
    <?php print_r(get_class_methods($user)); ?>
    </pre>
    <?php echo $user->getId(); ?><br />
    <?php echo $user->getName(); ?><br />
    <?php echo $user->getFirstName(); ?><br />
    <?php echo $user->getLastName(); ?><br />
    <?php echo $user->getEmail(); ?><br />
    <img src="<?php echo $user->getAvatar(); ?>" /><br />