<h1>Sorry, something went wrong!</h1>
<?php
    $status = empty($data['status']) ? '404' : $data['status'];
    $description = empty($data['description']) ? 'Something went wrong' : $data['description'];
?>
<p>The application quit with statuscode <?= $status ?>: <?= $description ?></p>
<p>Please go back to the <a href="<?= url('/') ?>">Homesite</a></p>
