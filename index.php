<?php 
declare(strict_types=1);

require 'currency.php';

require 'main.php';

require 'doc.php';

$tracker->fetchRecords($page);

require 'form.php';

require 'pagination.php';

require 'javascript.php';

?>

