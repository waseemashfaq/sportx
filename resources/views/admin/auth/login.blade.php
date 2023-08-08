@extends('admin.auth.auth')
@section('title', __('Admin Login'))
@section('content')
<div class="main-wrapper">
	<div class="page-wrapper full-page">
		<div class="page-content d-flex align-items-center justify-content-center">

			<div class="row w-100 mx-0 auth-page">
				<div class="col-md-8 col-xl-6 mx-auto">
					<div class="card">
						<div class="row">
              <div class="col-md-4 pe-md-0">
                <div class="auth-side-wrapper">

                </div>
              </div>
              <div class="col-md-8 ps-md-0">
                <div class="auth-form-wrapper px-4 py-5">
                  <a href="#" class="noble-ui-logo d-block mb-2">Grab<span>4u</span></a>
                  <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                  <form class="forms-sample" id="loginform">
                    @csrf
                    <div class="mb-3">
                      <label for="userEmail" class="form-label">Email address</label>
                      <input type="email" class="form-control" name="email" id="userEmail" placeholder="Email">
                      <label id="email"  class="error invalid-feedback" for="name"></label>
                    </div>
                    <div class="mb-3">
                      <label for="userPassword" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" id="userPassword" autocomplete="current-password" placeholder="Password">
                      <label id="password"  class="error invalid-feedback" for="name"></label>
                    </div>
                    <div class="form-check mb-3">
                      <input type="checkbox" class="form-check-input" name="remember" id="authCheck">
                      <label class="form-check-label" for="authCheck">
                        Remember me
                      </label>
                    </div>
                    <div>
                      <button href="#" class="btn btn-primary me-2 mb-2 mb-md-0 text-white" >Login</button>
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
@endsection

@push('scripts')

<script type="text/javascript">


$(document).ready(function () {
  $("#loginform").submit(function (event) {
    event.preventDefault();
    var data = new FormData($('#loginform')[0]);
    $.ajax({
      type:'POST',
      url:'loginSubmit',
      data:data,
      processData: false,
      contentType: false,
      success:function(data) {
        if (data.success) {
          toastr.info('You Are Loged In Successfully')
           window.location.href = "{{route('admin/dashboard')}}";
        }else{
          toastr.warning('The provided credentials do not match our records.');
        }
      },
      error:function(jqXHR, exception) {

        $.each(jqXHR.responseJSON.errors, function (key, value) {
          $("input[name="+key+"]").addClass("is-invalid");
          $("#"+key).text(value[0]);
        });
      }
    });
  });
});
</script>
    
@endpush