<?php

include '../../config/config.php';

?>

<html>
<head>
    <title>Standalone Form Component</title>
</head>
<body>
<form action="#" method="post">
    {{ form_widget(form) }}
    <input type="submit" />
</form>
</body>
</html>
