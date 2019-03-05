<!-- Import class for to handle data input -->
<?php use Src\Helpers\Handler; ?>

<section class="col-10 col-md-6 bg-light border border-secondary rounded-left shadow p-3 mb-5 bg-white rounded" style="padding: .5em;margin-top: .5em">
	<legend class="text-center">Depositante</legend>
	<div class="form-row align-items-center">
		<div class="col-md">
			<div class="col-md" style="margin-bottom: .5em">
				<select id="depositor" name="idDepositor" class="custom-select col-md" required>
					<option value="" selected disabled>--------------------------- Conta Corrente ---------------------------</option>
					<!-- Running the list and handling with class Service -->
					<?php foreach ($account as $a) : ?>
						<option value="<?php echo $a->getId() ?>"><?php echo Handler::account($a->getNumberAccount()) ?></option>
					<?php endforeach ?>
					<!-- end of running -->
				</select>
			</div>
			<div>
				<label class="col-md-2">Valor:</label>
				<input class="col-md-9 text-center border border-secondary" type="number" name="value" placeholder="R$ 0,00" required>
			</div>
		</div>
	</div>
</section>