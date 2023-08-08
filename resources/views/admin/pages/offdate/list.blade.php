@extends('admin.layout.app')
@section('title', __('Add Blogs'))
@section('content')
	<div class="page-content">

            <nav class="page-breadcrumb">
                  <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Off Dates</li>
                  </ol>
            </nav>

		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                              <div class="card-body">
                              <h6 class="card-title">All Blogs </h6>
                              {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
                              <div class="table-responsive">
                                          <table id="dataTableExample" class="table">
                                          <thead>
                                          <tr>
                                                <th> start date</th>
                                                <th> End date</th>
                                                <th>Action</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                          @foreach ($alldata as $item)
                                                <tr>
                                                      <td>{{$item->start_date}}</td>
                                                      <td>{{$item->end_date}}</td>
                                                      
                                                      <td>
                                                      {{-- <i data-feather="edit-2"></i> edit-2 
                                                      <i data-feather="edit-3"></i> edit-3  --}}
                                                
                                                      
                                                      {{-- <i data-feather="trash"></i>   --}}

                                                      {{-- <a href="{{route('blog-edit',['id'=>$item->id])}}" data-id="{{$item->id}}" class="btn btn-primary shadow btn-xs sharp mr-1"> <i data-feather="edit"></i>  </a> --}}
                                                      <a href="javascript:void(0)"  data-id="{{$item->id}}" class="btn btn-danger shadow btn-xs sharp remove" > <i data-feather="trash-2"></i> </a>
                                                      </td>
                                                </tr>
                                          @endforeach
                                          </tbody>
                                          </table>
                              </div>
                        </div>
                  </div>
            </div>
	</div>
				

			
@endsection

@push('scripts')

	
<script type="text/javascript">


$(document).ready(function () {
    $('.remove').click(function () {
      var id=$(this).attr("data-id")
        var returnmessage=confirm("Are you sure you want to delete?")
        if(returnmessage)
      {
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
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{route("offday-delete")}}',
            data: {
                'id': id,
                'csrf-token': "{{csrf_token()}}"
            },
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
      }
       
    });

  $(function() {
  'use strict';

  $('.myDropify').dropify();

});
});

</script>

@endpush