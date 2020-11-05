@include('master.master')
<title>form</title>

	<div id="form" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="form-cta">
							<p>Isilah Form Berikut</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="form-form">
                            <form method="POST" action="/data">
                                @csrf
								<div class="form-group">
									<span class="form-label">Your Name</span>
									<input class="form-control" name="nama" type="text" placeholder="Enter Your Name">
								</div>
								<div class="form-group">
									<span class="form-label">alamat</span>
									<input class="form-control" name="alamat" type="text" placeholder="Enter Your Email">
								</div>
								<div class="form-group">
									<span class="form-label">telepon</span>
									<input class="form-control" name="telepon" type="text" placeholder="Enter Your Phone Number">
								</div>

								<div class="form-btn">
									<button class="submit-btn">Submit</button>
								</div>
							</form>
