@extends('admin.layout.app')
@section('title', __('Add off Date'))
@section('content')
<div class="page-content">
  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Off Date</a></li>
      <li class="breadcrumb-item active" aria-current="page">Add new Off Date</li>
    </ol>
  </nav>

  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Add New Blog</h6>
          {{-- <p class="text-muted mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p> --}}
          <form class="forms-sample" id="addForm" method="post" action="#" role="form"  enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
              <div class="col-md-6">
                 <div class="input-group flatpickr" id="flatpickr-date">
                     <label class="form-label">Start Date</label>
                  <input type="date" class="form-control" placeholder="Select date" data-input name="start_date"  min="{{ date('Y-m-d') }}"required>
                  <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                </div>
              </div>
              <div class="col-md-6">
                   <div class="input-group flatpickr" id="flatpickr-date">
                       <label class="form-label">End Date</label>
                  <input type="date" class="form-control" placeholder="Select date" data-input name="end_date" min="{{ date('Y-m-d') }}" required>
                  <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                </div>
              </div>  
             
            </div>
            <div class="col-md-6">
                <button  class="btn btn-primary addForm" type="button">Submit</button>
                {{-- <input class="btn btn-primary addCarForm" type="submit" value="Submit"> --}}
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')

	
<script type="text/javascript">


$(document).ready(function () {
    $('.addForm').click(function () {
      var formData = new FormData($('#addForm')[0]);
              
        $.blockUI({
            css: {
                border: 'none',
                padding: '15px',
                backgroundColor: '#000',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                opacity: .5,
                color: '#fff'
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{route("offday-save")}}',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response, status) {

                if (response.result == 'success') {
                    $.unblockUI();
                    successMsg(response.message);

                    setTimeout(function () {
                      window.location.href ='{{route("offday-list")}}';
                        }
                        , 2000);
                } else if (response.result == 'error') {
                    $.unblockUI();
                    errorMsg(response.message);
                }


            },
            error: function (data) {
                $.each(data.responseJSON.errors, function (key, value) {
                    $.unblockUI();
                  
                    // $("input[name="+key+"]").addClass("is-invalid");
                    // $("#"+key).text(value[0]);
                    // $("#"+key).css("display","block");
                    errorMsg(value);
                });
            }


        });
    });

  $(function() {
  'use strict';

  $('.myDropify').dropify();

});
});
</script>

@endpush