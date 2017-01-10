<?php
  require 'vendor/autoload.php';

  $options = array(
    'encrypted' => true
  );
  $pusher = new Pusher(
    'dc514049ab943e8684a2',
    '1ef9d5fb9c4c56065a33',
    '288323',
    $options
  );

  $data['message'] = 'Kaixo mundua';
  $pusher->trigger('my-channel', 'my-event', $data);
?>