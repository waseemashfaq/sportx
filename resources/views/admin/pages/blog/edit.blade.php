@extends('admin.layout.app')
@section('title', __('Add Car'))
@section('content')
<div class="page-content">
  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Cars</a></li>
      <li class="breadcrumb-item active" aria-current="page">Add Car</li>
    </ol>
  </nav>

  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Input Mask</h6>
          {{-- <p class="text-muted mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p> --}}
          <form class="forms-sample" id="addForm" method="post" action="#" role="form"  enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" id="" value="{{$bolgData->id}}">
            <div class="row mb-3">
              <div class="col-md-12">
                <label class="form-label">Enter Title</label>
                <input class="form-control mb-4 mb-md-0" name="title" placeholder=" Enter title" value="{{$bolgData->title}}" />
                <label id="brand" class="error invalid-feedback" for="brand"></label>
              </div>
             
            </div>
       
            <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                              <div class="card-body">
                                    <h4 class="card-title">Enter Detail</h4>
                                    <textarea class="form-control summernote" name="detail" id="" rows="10"  value="{{$bolgData->detail}}">{{$bolgData->detail}}</textarea>
                              </div>
                        </div>
                  </div>
            </div>
           
            <div class="row mb-3">
              <div class="col-md-6">
                <label class="form-label">Blog Image</label>
                <input type="file" class="myDropify" name="image" />
              </div>
          
            </div>
          
            <div class="row mb-3">
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
            url: '{{route("blog-update")}}',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response, status) {

                if (response.result == 'success') {
                    $.unblockUI();
                    successMsg(response.message);

                    setTimeout(function () {
                      window.location.href ='{{route("blog-list")}}';
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