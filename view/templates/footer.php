		<hr>
		<footer class="row fixed-bottom bg-dark rounded d-flex justify-content-center">
			<p class="text-white mb-0" style="font-size: 75%">&copy BlueBank</p>
		</footer>
	</div>
	<script>
		/*
		** Manipulate content on selection element of account
		*/
		let screen = window.innerWidth;
		let depositor = document.getElementById("depositor");
		let recipient = document.getElementById("recipient");

		if (screen <= 576) {
			depositor[0].innerHTML = '------ Conta Corrente ------';
			recipient[0].innerHTML = '------ Conta Corrente ------';
		} else if (screen <= 700) {
			depositor[0].innerHTML = '------------------- Conta Corrente -----------------';
			recipient[0].innerHTML = '------------------- Conta Corrente -----------------';
			}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>