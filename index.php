<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
define('BASE_URI', str_replace('\\', '/', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))));
require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));
$app = new Core\Core();
$app->run();

?>
<pre>
<?php

echo "Contenu de \$_POST:\n";
print_r($_POST);

echo "\nContenu de \$_GET:\n";
print_r($_GET);

echo "\nContenu de \$_SERVER:\n";
print_r($_SERVER);

echo "\nErreur PHP:\n";
print_r(error_get_last());

?>
</pre>