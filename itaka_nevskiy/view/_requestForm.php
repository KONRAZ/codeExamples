<?php ?>

<div class="row new">
	<div class="col-lg-12 ">
		<form class="form request-form" id="request-form" >
			<div class="row">
				<div class="col-lg-12 mt-3">
					<div class="f-24 fc-blue text-center">
						<span>Вы можете оставить заявку, и мы с вами свяжемся, или позвоните по телефону 8 (921) 867-07-57</span>
					</div>
				</div>
			</div>
			<hr/>

			<div class="row">
				<div class="col-lg-12">
					<div class="block">
						<label class="label ">
							<span>Как вас зовут</span>
							<input name="name" type="text" class="form-control" required />
						</label>
					</div>
					<div class="block">
						<label class="label ">
							<span>Ваш телефон</span>
							<input name="phone" type="text" class="form-control" required />
						</label>
					</div>
				</div>

				<div class="col-lg-12">
					<div class="block">
						<label class="label ">
							<span>Ваша почта</span>
							<input name="email" type="email" class="form-control" />
						</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="block">
						<label>
							<span>Сообщение</span>
							<textarea name="message" class="form-control" rows="5" required></textarea>
						</label>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="text-center float-right">
						<button type="button" onclick="landingInner.submitForm('#request-form')" class="btn btn-danger btn-big">
							<span>Отправить</span>
						</button>
					</div>
					<div class="text-center float-left">
						<button type="button" onclick="landingInner.closeDialog()" class="btn btn-danger btn-big">
							<span>Закрыть</span>
						</button>
					</div>
				</div>
			</div>

			<input type="hidden" name="type" value="kalininskiy" />
		</form>
	</div>
</div>
