<!-- Import class for to handle data input -->
<?php use Src\Helpers\Handler; ?>

<section class="col-10 col-md-6 bg-light border border-secondary rounded-right shadow p-3 mb-5 bg-white rounded" style="padding: .5em;margin-top: .5em">
	<legend class="text-center">Beneficiário</legend>
	<div class="form-row align-items-center">
		<div class="col-md">
			<div class="col-md" style="margin-bottom: .5em">
				<select id="recipient" name="idRecipient" class="custom-select col-md" required>
					<option value="" selected disabled>--------------------------- Conta Corrente ---------------------------</option>
					<!-- Running the list and handling with class Service -->
					<?php foreach ($account as $a) : ?>
						<option value="<?php echo $a->getId() ?>"><?php echo Handler::account($a->getNumberAccount()) ?></option>
					<?php endforeach ?>
					<!-- end of running -->
				</select>
			</div>
			<button class="btn btn-primary btn-lg btn-block">Efetuar</button>
		</div>
	</div>
</section>