<!-- core:js -->


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('admin/vendors/core/core.js')}}"></script>
  <script src="{{ asset('admin/vendors/jquery-validation/jquery.validate.min.js')}}"></script>
  <script src="{{ asset('admin/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
 


  {{-- <script src="{{ asset('vendors/inputmask/jquery.inputmask.min.js')}}"></script> --}}
  <script src="{{ asset('admin/vendors/select2/select2.min.js')}}"></script>
  {{-- <script src="{{ asset('vendors/typeahead.js/typeahead.bundle.min.js')}}"></script> --}}
  <script src="{{ asset('admin/vendors/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
  {{-- <script src="{{ asset('vendors/dropzone/dropzone.min.js')}}"></script> --}}
  <script src="{{ asset('admin/vendors/dropify/dist/dropify.min.js')}}"></script>
  <script src="{{ asset('vendors/dropify/dist/dropify.min.js')}}"></script>
  
  {{-- <script src="{{ asset('vendors/pickr/pickr.min.js')}}"></script> --}}
  {{-- <script src="{{ asset('vendors/moment/moment.min.js')}}"></script> --}}

  <script src="{{asset('admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('admin/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  {{-- <script src="{{ asset('admin/vendors/flatpickr/flatpickr.min.js')}}"></script> --}}
  {{-- <script src="{{ asset('admin/vendors/apexcharts/apexcharts.min.js')}}"></script> --}}
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  {{-- <script src="{{ asset('admin/vendors/feather-icons/feather.min.js')}}"></script> --}}
  {{-- <script src="{{ asset('admin/js/template.js')}}"></script> --}}
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="{{ asset('admin/js/dashboard-light.js')}}"></script>

  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}
  
  <script src="{{ asset('admin/js/form-validation.js')}}"></script>
  <script src="{{ asset('admin/js/bootstrap-maxlength.js')}}"></script>
  {{-- <script src="{{ asset('admin/js/inputmask.js')}}"></script> --}}
  <script src="{{ asset('admin/js/select2.js')}}"></script>
  {{-- <script src="{{ asset('admin/js/typeahead.js')}}"></script> --}}
  {{-- <script src="{{ asset('admin/js/tags-input.js')}}"></script> --}}
  {{-- <script src="{{ asset('admin/js/dropzone.js')}}"></script> --}}
  <script src="{{ asset('admin/js/pickr.js')}}"></script>
  <script src="{{ asset('admin/js/flatpickr.js')}}"></script>

  <script src="{{asset('admin/js/jquery.blockUI.js')}}"></script>
  <script src="{{asset('admin/js/toastr.min.js')}}"></script>

<!-- Plugin js for this page -->
	<script src="{{ asset('admin/vendors/tinymce/tinymce.min.js')}}"></script>
	<script src="{{ asset('admin/vendors/easymde/easymde.min.js')}}"></script>
	<script src="{{ asset('admin/vendors/ace-builds/src-min/ace.js')}}"></script>
	<script src="{{ asset('admin/vendors/ace-builds/src-min/theme-chaos.js')}}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{ asset('admin/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{ asset('admin/js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
	<script src="{{ asset('admin/js/tinymce.js')}}"></script>
	<script src="{{ asset('admin/js/easymde.js')}}"></script>
	<script src="{{ asset('admin/js/ace.js')}}"></script>
	<!-- End custom js for this page -->




    <script src="{{asset('admin/vendor/summernote/js/summernote.min.js')}}"></script>
  <!-- Summernote init -->
  <script src="{{asset('admin/js/plugins-init/summernote-init.js')}}"></script>

  	<!-- core:js -->
	{{-- <script src="../../../assets/vendors/core/core.js"></script> --}}
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="{{ asset('admin//vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('admin//vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	{{-- <script src="../../../assets/vendors/feather-icons/feather.min.js"></script> --}}
	{{-- <script src="../../../assets/js/template.js"></script> --}}
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="{{ asset('admin//js/data-table.js')}}"></script>
	<!-- End custom js for this page -->

 
  <!-- End custom js for this page -->
  @stack('scripts')
  <script>


    function successMsg(_msg) {
        window.toastr.success(_msg);
    }

    function errorMsg(_msg) {
        window.toastr.error(_msg);
    }

    function warningMsg(_msg) {
        window.toastr.warning(_msg);
    }

    @foreach ($errors->all() as $error)
        toastr.error("{{$error}}")
    @endforeach

    @if(Session::has('success'))
        successMsg('{{Session::get("success")}}');
    @endif

    @if(Session::has('error'))
        errorMsg("{{Session::get('error')}}");
    @endif
</script>