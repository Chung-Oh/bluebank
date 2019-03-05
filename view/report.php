<?php

require_once '../vendor/autoload.php';

use Src\Helpers\Date;
use Src\Helpers\Handler;
use Src\Dao\TransactionDao;

$transactions = TransactionDao::list();

?>
<?php require_once 'templates/header.php' ?>

<h1 class="jumbotron text-center mt-5">Transações Realizadas</h1>
<section class="table-responsive-sm">
	<table class="table table-hover shadow p-3 mb-5 bg-white rounded">
		<thead class="thead-dark">
			<tr>
				<th class="text-center align-middle">Data</th>
				<th class="text-center">Depositante (c/c)</th>
				<th class="text-center">Beneficiário (c/c)</th>
				<th class="text-center align-middle">Valor</th>
			</tr>
		</thead>
		<tbody>
			<!-- Running the list and handling with class Date and Handler -->
			<?php foreach ($transactions as $t) : ?>
				<tr>
					<td class="text-center font-weight-bold"><?php echo Date::dateFull($t->getDate()) ?></td>
					<td class="text-center"><?php echo Handler::account($t->getDepositor()) ?></td>
					<td class="text-center"><?php echo Handler::account($t->getRecipient()) ?></td>
					<td class="text-center">R$ <?php echo Handler::value($t->getValue()) ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</section>

<?php require_once 'templates/footer.php' ?>