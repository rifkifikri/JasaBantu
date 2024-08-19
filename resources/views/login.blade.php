<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @notifyCss
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Login</title>
   
</head>
<body>
        <!--  Noble Template-->
        <div class="main-wrapper" style="margin-top: 10%;">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                                <div class="col-md-4 pe-md-0">
                                <div class="auth-side-wrapper">
                                    <lottie-player
                                        src="public/json/Animation.json"
                                        background="transparent"
                                        speed="1"
                                        style="width: 100%; height: 100%"
                                        loop
                                        autoplay
                                    ></lottie-player>
                                </div>
                                </div>
                                <div class="col-md-8 ps-md-0">
                                <div class="auth-form-wrapper px-4 py-5">
                                    <a href="#" class="noble-ui-logo d-block mb-2">JASA<span>BANTU</span></a>
                                    <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                                    @if(session()->has('message'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                    <form class="forms-sample" action="sesi/login" method="POST">
                                        @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="userPassword" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" autocomplete="current-password" placeholder="Password">
                                    </div>
                                    <div class="form-check mb-3">
                                   
                                        <input type="checkbox" class="form-check-input" id="authCheck">
                                        <label class="form-check-label" for="authCheck">
                                        Remember me
                                        </label>
                                    </div>
                                    <div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="/" class="btn btn-danger me-2 mb-2 mb-md-0 text-white">Back</a>
                                    </div>
                                    
                                    </form>
                                </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
        <!-- End Template -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @notifyJs
</body>
</html>