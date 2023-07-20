<div class="container" style="margin-top: 80px;">
	<div class="section-header" style="margin-top: 30px;">
		<h2 class="section-title wow fadeInDown" data-wow-duration="200ms">Booking Ruangan!</h2>
	</div>

	<div class="row container">
		<div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-duration="200ms" data-wow-delay="0ms">
			<div class="media service-box">
				<div class="pull-left">
					<i style="padding-right: 65px; color: white;"><?= $roomdata->no ?></i>
				</div>
				<div class="media-body">
					<h4 class="media-heading" style="font-size: 20pt;"><?= $roomdata->id ?></h4>
					<p class="media-body-text <?= strtolower($roomdata->status) ?>"><i class="<?php if ($roomdata->status == 'AVAILABLE') {
																									echo $status['available'];
																								} else {
																									echo $status['unavailable'];
																								} ?>"> <?= $roomdata->status ?></i></p>
				</div>
				<div>
					<div class="contact-form">
						<form id="main-contact-form" method="post" action="#">
							<!-- Nama -->
							<div class="form-group">
								<input type="text" name="nama" class="form-control" placeholder="Nama" value="<?= $this->session->userdata['auth_data']['nama'] ?>" required>
							</div>

							<!-- E-Mail -->
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email" required>
							</div>


							<!-- Waktu -->
							<div class="row">
								<div class="col-md-1 col-sm-2">
									<p class="time-text">Masuk:</p>
								</div>
								<div class="col-md-1 col-sm-4">
									<div class="form-group">
										<input type="number" id="h_input" name="in_h" class="form-control hide-arrows" placeholder="HH" min="7" max="18" required>
									</div>
								</div>
								<div class="col-md-1 col-sm-4">
									<div class="form-group">
										<input type="number" id="m_input" name="in_m" class="form-control hide-arrows" placeholder="MM" min="00" max="59" required>
									</div>
								</div>
								<div class="col-md-2"></div>
								<div class="col-md-1 col-sm-2">
									<p class="time-text">Keluar:</p>
								</div>
								<div class="col-md-1 col-sm-4">
									<div class="form-group">
										<input type="number" id="h_input" name="out_h" class="form-control hide-arrows" placeholder="HH" min="7" max="18" required>
									</div>
								</div>
								<div class="col-md-1 col-sm-4">
									<div class="form-group">
										<input type="number" id="m_input" name="out_m" class="form-control hide-arrows" placeholder="MM" min="00" max="59" required>
									</div>
								</div>
							</div>

							<!-- Nama Dosen -->
							<div class="form-group">
								<input type="text" name="nama_dosen" class="form-control" placeholder="Nama Dosen" required>
							</div>

							<!-- Mata Kuliah -->
							<div class="form-group">
								<input type="text" name="matkul" class="form-control" placeholder="Mata Kuliah" required>
							</div>

							<style>
								.time-text {
									/* font-weight: 600; */
									font-size: 12pt;
									padding-top: 4px;
								}

								.hide-arrows::-webkit-inner-spin-button,
								.hide-arrows::-webkit-outer-spin-button {
									-webkit-appearance: none;
									margin: 0;
								}
							</style>

							<script>
								var h_input = document.getElementById("h_input");
								h_input.addEventListener("input", function() {
									var value = parseInt(h_input.value);

									if (value < h_input.min) {
										h_input.value = h_input.min;
									} else if (value > h_input.max) {
										h_input.value = h_input.max;
									}
								});

								var m_input = document.getElementById("m_input");
								m_input.addEventListener("input", function() {
									var value = parseInt(m_input.value);

									if (value < m_input.min) {
										m_input.value = m_input.min;
									} else if (value > m_input.max) {
										m_input.value = m_input.max;
									}
								});
							</script>

							<button type="submit" class="btn btn-primary" style="border-radius: 4px;">Booking</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>