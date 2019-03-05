<?php

require_once 'vendor/autoload.php';

use Src\Dao\AccountDao;

$account = AccountDao::list();

?>
<?php require_once 'view/templates/header.php' ?>

<h1 class="jumbotron text-center mt-5">Transferência</h1>
<!-- Message of the validation bellow -->
<?php showAlert('danger'); showAlert('success') ?>
<form class="row d-flex justify-content-center" action="src/Controller/transaction.php" method="post">
	<?php require_once 'view/templates/depositor.php' ?>
	<?php require_once 'view/templates/recipient.php' ?>
</form>

<?php require_once 'view/templates/footer.php' ?>