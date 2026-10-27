@extends('main/main_form')
@section('content')  
    <div class="col-md-12">
        <div class="card">
            <form class="form-valide" action="{{ url('/system/user-crud') }}" role="form" name="frm_system" id="frm_system" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="txt_code" id="txt_code">
                <div class="card-body">
                    <x-form-header>
                         User Management
                    </x-form-header>
                    @session('success')
                        <div class="alert alert-success auto-close-alert" role="alert"> 
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>               
                             {{ $value }}	
                        </div>
                    @endsession
                    @session('error')
                        <div class="alert alert-danger auto-close-alert" role="alert"> 
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            {{ $value }}
                        </div>
                    @endsession
                    <!-- Nav tabs -->
                    <div class="default-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item" id="link_data"><a id="link_data2" class="nav-link active" data-toggle="tab" href="#tab_data">Data</a>
                                        </li>
                                        <li class="nav-item" id="link_detail"><a id="link_detail2" class="nav-link disabled" data-toggle="tab" href="#tab_detail">Detail</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tab_data" role="tabpanel">
                                            <!-- <div class="p-t-15"> -->
                                                <!-- <div class="row"> -->
                                                    <div class="col-sm-12">
                                                        <!-- <div class="card"> -->
                                                            <!-- <div class="card-body"> -->
                                                                <!-- <h4 class="card-title">Data Table</h4> -->
                                                                <div class="table-responsive">
                                                                    <table id="dynamic-table" width="100%"  class="table table-striped table-bordered zero-configuration">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>ID</th>
                                                                                <th>User</th>
                                                                                <th>Full Name</th>
                                                                                <th>Email</th>
                                                                                <th>Role</th>
                                                                                <th>Created at</th>
                                                                                <th>Updated at</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                    </table>
                                                                    <!-- <br />
                                                                    <button id="btn-new" type="button" class="btn mb-1 btn-success">New</button> -->
                                                                <!-- </div> -->
                                                            <!-- </div> -->
                                                        </div>
                                                    <!-- </div> -->
                                                <!-- </div> -->
                                                <hr />
                                                <x-button-new />
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab_detail" role="tabpanel">
                                            <br />
                                            <div class="form-validation">
                                                <!-- <form class="form-valide" action="#" method="post"> -->
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label text-md-right" for="txt_mode">Action</label>
                                                        <div class="col-sm-4">
                                                            <input readonly="readonly" type="text" name="txt_mode" id="txt_mode" class="form-control form-control-sm input-default">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label text-md-right" for="txt_username">Username</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" name="txt_username" id="txt_username" class="form-control form-control-sm input-default">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label text-md-right" for="txt_fullname">Fullname</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="txt_fullname" id="txt_fullname" class="form-control form-control-sm input-default">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label text-md-right" for="txt_email">Email</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control form-control-sm input-default" id="txt_email" name="txt_email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label text-md-right" for="txt_password">Password</label>
                                                        <div class="col-sm-5">
                                                            <input type="password" class="form-control form-control-sm input-default" id="txt_password" name="txt_password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label text-md-right" for="sel_role">Role</label>
                                                        <div class="col-sm-4">
                                                            <select id="sel_role" name="sel_role" class="form-control form-control-sm select2">
                                                                <option value="" selected="selected"></option>
																@foreach($datasystem as $sys)
                                                                    @if($sys->group==='role')
                                                                        <option value={{ $sys->code }}>{{ $sys->name }}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label text-md-right" for="txt_photo">Photo</label>
                                                        <div class="col-sm-4">
                                                            <input type="file"  name="txt_photo" id="txt_photo" accept="image/png, image/gif, image/jpeg" onchange="file_changed()"/>
																		<span class="profile-picture">
																			<img id="img_photo" class="editable img-responsive" width="100" height="100" src="{{ url('/quixlab-master/images-custom/noimage.jpg') }}"/>
																		</span>
                                                                        <button style="display:none;" id="btnReset" type="button">Reset file</button>
                                                        </div>
                                                        <label class="col-sm-2 col-form-label text-md-right" for="txt_signature">Signature</label>
                                                        <div class="col-sm-4">
                                                            <input type="file"  name="txt_signature" id="txt_signature" accept="image/png, image/gif, image/jpeg" onchange="file_changed2()"/>
																		<span class="profile-picture">
																			<img id="img_signature" class="editable img-responsive" width="100" height="100" src="{{ url('/quixlab-master/images-custom/noimage.jpg') }}">
																		</span>
                                                                        <button style="display:none;" id="btnReset2" type="button">Reset file</button>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label text-md-right"></label>
                                                        <div class="col-sm-4">
                                                            <label class="pull-left">
															    <input type="checkbox" class="ace" name="cb_reset" id="cb_reset" value="Y" />
															    <span class="lbl"> Reset </span>    
															</label> 
                                                        </div>
                                                        <label class="col-sm-2 col-form-label text-md-right"></label>
                                                        <div class="col-sm-4">
                                                            <label class="pull-left">
															    <input type="checkbox" class="ace" name="cb_reset2" id="cb_reset2" value="Y" />
															    <span class="lbl"> Reset </span>
															</label>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <x-button-save type="submit" id="btnSave"/>
                                                    <x-button-delete id="btnDelete" />
                                                    <x-button-back id="btnBack"/>
                                                <!-- </form> -->
                                            </div>
                                            
                                        </div>
                                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
   
@endsection
@section('javascript')
    <!--set focus mode edit or new-->
    <script>
        window.pageConfig = {
            focusOnNew: '#txt_username',
            focusOnEdit: '#txt_username'
        };
    </script>
    <script src="{{ asset('quixlab-master/js-custom/ui-actions.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('body').on('click', '.edit-data', function () {
			    var id = $(this).data('id');
			    var _url= '{{ url('/system/user/execbycode' ) }}' + '/' + id
			    //debugger;
			    $.get( _url, function (data) {
                $('#txt_code').val(data[0].id);
                $('#txt_username').val(data[0].name);
                $('#txt_fullname').val(data[0].fullname);
                $('#txt_email').val(data[0].email);
                $('#txt_password').val('');
                $('#sel_role').val(data[0].role_code).trigger('change');
                if (data[0].photo== null){
                    $('#img_photo').attr('src', "{{ url('/quixlab-master/images-custom/noimage.jpg' ) }}");
                }else{
                    $('#img_photo').attr('src', 'data:image/png;base64,' + data[0].photo);	
                }
                if (data[0].signature== null){
                    $('#img_signature').attr('src', "{{ url('/quixlab-master/images-custom/noimage.jpg' ) }}");
                }else{
                    $('#img_signature').attr('src', 'data:image/png;base64,' + data[0].signature);
                }
                $("#txt_name").focus();
                }) 
            }); 

            $('body').on('click', '.view-data', function () {
			    var id = $(this).data('id');
			    var _url= '{{ url('/system/user/execbycode' ) }}' + '/' + id
			    //debugger;
			    $.get( _url, function (data) {
                $('#txt_code').val(data[0].id);
                $('#txt_username').val(data[0].name);
                $('#txt_fullname').val(data[0].fullname);
                $('#txt_email').val(data[0].email);
                $('#txt_password').val('');
                $('#sel_role').val(data[0].role_code).trigger('change');
                if (data[0].photo== null){
                    $('#img_photo').attr('src', "{{ url('/quixlab-master/images-custom/noimage.jpg' ) }}");
                }else{
                    $('#img_photo').attr('src', 'data:image/png;base64,' + data[0].photo);	
                }
                if (data[0].signature== null){
                    $('#img_signature').attr('src', "{{ url('/quixlab-master/images-custom/noimage.jpg' ) }}");
                }else{
                    $('#img_signature').attr('src', 'data:image/png;base64,' + data[0].signature);
                }
                $("#txt_name").focus();
                }) 
            }); 

            $('#btnDelete').on('click', function () {
                let username = $('#txt_username').val();

                $('#modalText').text("Delete User \"" + username + "\" ? ");
                $('#modalID').val(username);
            });

            $('#sel_role').select2({
                //theme: 'bootstrap4',
                placeholder: 'Pilih Role',
                allowClear: true,
                width: '100%'
            });

            $('#sel_role').on('select2:open', function () {
                $('.select2-dropdown').css('z-index', 9999);
            });  

            // ADD RULES
            $("#txt_username").rules("add", {
                required: true,
                minlength: 3,
                messages: {
                    required: "Username wajib diisi",
                    minlength: "Minimal 3 karakter"
                }
            });
            $("#txt_fullname").rules("add", {
                required: true,
                minlength: 3,
                messages: {
                    required: "Fullname wajib diisi",
                    minlength: "Minimal 3 karakter"
                }
            });
            $("#txt_password").rules("add", {
                required: true,
                minlength: 3,
                messages: {
                    required: "Password wajib diisi",
                    minlength: "Minimal 3 karakter"
                }
            });
            $("#txt_email").rules("add", {
                required: true,
                email: true,
                messages: {
                    required: "Email wajib diisi",
                    email: "Format email tidak valid"
                }
            });

            $("#sel_role").rules("add", {
                required: true,
                messages: { required: "Role wajib dipilih" }
            }); 
            $(document).on('change.select2', '.select2-hidden-accessible', function () {
                $(this).valid();               // re-validate
                $(this)
                    .removeClass('is-invalid')
                    .tooltip('dispose');       // close tooltip
            });
        });
    </script>

    <script type="text/javascript">
        //DATATABLE
        var myTable = $('#dynamic-table').DataTable({
            processing: true,
            serverside: true,
            responsive: true,
            autowidth: true,
            paging:true,
            info:true,
            ajax: {
                "url"   : "{{ route('system.user') }}",
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'fullname', name: 'fullname'},
                {data: 'email', name: 'email'},
                {data: 'role', name: 'role'},
                {data: 'created_at', name: 'created_at'},
                {data: 'updated_at', name: 'updated_at'},
                {
                    data: 'action', 
                    name: 'action', 
                    orderable: false, 
                    searchable: false
                }, 
            ]
	    });  

        //BEHAVIOR
        setTimeout(function () {
            $('.auto-close-alert').alert('close');
        }, 10000);

        $(document).on('click', function (e) {
            if (!$(e.target).closest('.auto-close-alert').length) {
                $('.auto-close-alert').alert('close');
            }
        });
        $('#btnReset2').on('click', function() {     
			$('#txt_signature').val('');
		});

		$('#btnReset').on('click', function() {     
			$('#txt_photo').val('');
		});

		$('#cb_reset').on('change', function() {     
			if (this.checked) {
				$('#img_photo').attr('src', "{{ url('/quixlab-master/images-custom/noimage.jpg') }}");
                $('#txt_photo').val('');
			}
		});
		
		$('#cb_reset2').on('change', function() {     
			if (this.checked) {
				$('#img_signature').attr('src', "{{ url('/quixlab-master/images-custom/noimage.jpg') }}");
                $('#txt_signature').val('');
			}
		});
        
        function file_changed2(){
                var selectedFile = document.getElementById('txt_signature').files[0];
                var img = document.getElementById('img_signature')
                
                var reader = new FileReader();
                reader.onload = function(){
                img.src = this.result}
                reader.readAsDataURL(selectedFile);
            }
        function file_changed(){
                var selectedFile = document.getElementById('txt_photo').files[0];
                var img = document.getElementById('img_photo')
                
                var reader = new FileReader();
                reader.onload = function(){
                img.src = this.result}
                reader.readAsDataURL(selectedFile);
            }

        function delete_data() {
            $('#modal-delete').modal('hide');

            var id_ = 'delete-data_' + $("#txt_code").val();

            $.ajax({
                data: { 
                    _token: "{{ csrf_token() }}" 
                },
                url: '{{ url('/system/user/execbycode') }}/' + id_,
                type: "POST",
                dataType: 'json',

                success: function (data) {
                    $("#btnSave, #btnDelete").prop("disabled", true);

                    if (data.errorInfo === undefined) {
                        toastr.success('Great! data has been deleted');
                        $("#btnBack").focus();
                    } else {
                        toastr.error(data.errorInfo[2]);
                        $("#btnBack").focus();
                    }
                },

                error: function (jqXHR) {
                    console.error(jqXHR.responseText);
                    toastr.error('Failed delete data!');
                    $("#btnDelete").focus();
                }
            });
        }
    </script>
   
@endsection