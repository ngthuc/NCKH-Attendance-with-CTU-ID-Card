<?php

$content = json_decode(file_get_contents('http://127.0.0.1/RESTfulCI/api/example/users/id/1'), true);

echo 'My name is '.$content['name'].'. My email is '.$content['email'].'. My slogan: '.$content['fact'];

?>
