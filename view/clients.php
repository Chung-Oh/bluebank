<?php

require_once '../vendor/autoload.php';

use Src\Dao\AccountDao;
use Src\Helpers\Handler;

$accounts = AccountDao::list();

?>
<?php require_once 'templates/header.php' ?>

<h1 class="jumbotron text-center mt-5">Correntistas</h1>
<section class="table-responsive-sm">
	<table class="table table-hover shadow p-3 mb-5 bg-white rounded">
		<thead class="thead-dark">
			<tr>
				<th class="text-center">Agência</th>
				<th class="text-center">Conta</th>
				<th class="text-center">CPF</th>
				<th class="text-center">Saldo</th>
			</tr>
		</thead>
		<tbody>
			<!-- Using Handler class for manipulate data for view -->
			<?php foreach ($accounts as $a) : ?>
				<tr>
					<td class="text-center  font-weight-bold"><?php echo $a->getAgency() ?></td>
					<td class="text-center"><?php echo Handler::account($a->getNumberAccount()) ?></td>
					<td class="text-center"><?php echo Handler::cpf($a->getCpf()) ?></td>
					<td class="text-center">R$ <?php echo Handler::value($a->getBalance()) ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</section>

<?php require_once 'templates/footer.php' ?>