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