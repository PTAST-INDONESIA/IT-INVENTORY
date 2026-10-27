@extends('main/main_form')
@section('content')         
<div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">IT Inventory - Report</h4> 
                                <hr/>
                                <div class="form-validation">
                                    <form class="form-valide" action="{{route('report.itinventory.getdata')}}" target="_blank" role="form" name="frm_report" id="frm_report" method="post">
                                        @csrf
                                        <input type="hidden" name="txt_report" id="txt_report">
                                        <input type="hidden" name="txt_query" id="txt_query">
                                        <input type="hidden" name="txt_url" id="txt_url">
                                        <input type="hidden" name="txt_type" id="txt_type">
                                        <!--
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-md-right">Plant</label>
                                            <div class="col-sm-4">
                                                <select id="sel_plant" name="sel_plant" class="form-control form-control-sm">
                                                     <option value=""selected="selected">Choose Plant...</option>
                                                    <option value="AST1">AST 1</option>
                                                    <option value="AST2">AST 2</option> 
                                                </select>
                                            </div>
                                        </div>
                                        -->
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-md-right" for="sel_report">Report</label>
                                            <div class="col-sm-4">
                                                <select id="sel_report" name="sel_report" class="form-control form-control-sm select2">
                                                    <option value="" selected="selected">Choose Report...</option>
                                                    @foreach($masterdata as $rpt)
                                                        @if($rpt->group==='IT Inventory')
                                                            <option value={{ $rpt->code }}>{{ $rpt->name }}</option>
                                                        @endif
                                                    @endforeach	
                                                </select>
                                            </div>
                                            <label class="col-sm-2 col-form-label text-sm-right" for="sel_subreport">Sub Report</label>
                                            <div class="col-sm-4">
                                                <select id="sel_subreport" name="sel_subreport" class="form-control form-control-sm" >
                                                    <option value="" selected="selected">Choose Sub Report...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-sm-right" for="datepicker_datefrom">Date From</label>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm datepicker-autoclose" id="datepicker_datefrom" name="datepicker_datefrom" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text form-control-sm"><i class="mdi mdi-calendar-check"></i></span></span>
                                                </div>
                                            </div>
                                            <label class="col-sm-2 col-form-label text-sm-right" for="datepicker_dateto">Date To</label>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm datepicker-autoclose" id="datepicker_dateto" name="datepicker_dateto" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text form-control-sm"><i class="mdi mdi-calendar-check"></i></span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-md-right" for="sel_doc">Document</label>
                                            <div class="col-sm-4">
                                                <select id="sel_doc" name="sel_doc" class="form-control form-control-sm select2">
                                                    <option value="" selected="selected">Choose Document...</option>
                                                    @foreach($jenisDokumen as $doc)
                                                        <option value="{{ $doc->P01JNSDOK }}">
                                                            {{ $doc->P01JNSDOK }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <label class="col-sm-2 col-form-label text-sm-right" for="sel_plant">Plant</label>
                                            <div class="col-sm-4">
                                                <select id="sel_plant" name="sel_plant" class="form-control form-control-sm select2">
                                                    <option value="" selected="selected">Choose Plant...</option>
                                                    @foreach($masterdata as $plant)
                                                        @if($plant->group==='Plant')
                                                            <option value={{ $plant->code }}>{{ $plant->name }}</option>
                                                        @endif
                                                    @endforeach	
                                                </select>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-sm-right" style="text-align:center;"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" id="btnPriview" name="btnPriview" value="preview_data" class="btn btn-outline-success btn-sm"><i class="fa fa-table"></i> Priview </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>                
</div>
@endsection
@section('javascript')
    <script>
        $(document).ready(function () {
            $('#sel_report').select2({
                //theme: 'bootstrap4',
                placeholder: 'Choose Report...',
                allowClear: true,
                width: '100%'
            }); 

            $('#sel_subreport').select2({
                //theme: 'bootstrap4',
                placeholder: 'Choose Report...',
                allowClear: true,
                width: '100%'
            }); 

            $('#sel_doc').select2({
                //theme: 'bootstrap4',
                placeholder: 'Choose Document...',
                allowClear: true,
                width: '100%'
            }); 

            $('#sel_plant').select2({
                //theme: 'bootstrap4',
                placeholder: 'Choose Plant...',
                allowClear: true,
                width: '100%'
            }); 

            $('#sel_report').on('select2:open', function () {
                $('.select2-dropdown').css('z-index', 9999);
            });  

            // ADD RULES
            $("#sel_report").rules("add", {
                required: true,
                messages: { required: "Report wajib dipilih" }
            }); 

            $("#sel_report").rules("add", {
                required: true,
                messages: { required: "Report wajib dipilih" }
            });

            $("#sel_subreport").rules("add", {
                required: true,
                messages: { required: "Sub Report wajib dipilih" }
            });

            $("#datepicker_datefrom").rules("add", {
                required: true,
                messages: { required: "Date From wajib diisi" }
            });

            $("#datepicker_dateto").rules("add", {
                required: true,
                greaterThan: "#datepicker_datefrom",
                messages: { required: "Date To wajib diisi" }
            });

            $(document).on('change.select2', '.select2-hidden-accessible', function () {
                $(this).valid();               // re-validate
                $(this).removeClass('is-invalid').tooltip('dispose');       // close tooltip
            });
        });
    </script>

    <script>
        $('#sel_report').on('change', function () {
            var id = $(this).val() || '';

            $('#sel_subreport').find('option').not(':first').remove();
            $('#sel_subreport').val('').trigger('change');

            var id_ = 'list-subreport_' + id;

            $.ajax({
                url: '{{ url('/it-inventory/report/responsebycode') }}/' + id_,
                type: 'GET',
                dataType: 'json',

                success: function (response) {
                    //$("#sel_subreport").append("<option value=''></option>");

                    if (response.data && response.data.length > 0) {
                        $.each(response.data, function (i, row) {
                            $("#sel_subreport").append(
                                "<option value='" + row.setup_report_code + "'>" + row.name + "</option>"
                            );
                        });
                    } else {
                        toastr.error('No data available');
                    }
                },

                error: function (jqXHR) {
                    console.error(jqXHR.responseText);
                    toastr.error('Failed load sub report!');
                }
            });
        });

        $('#sel_subreport').change(function(){
            var id = $(this).val();
            if (id==''){
                id='';
            } 
            var id_= 'setup-report_' + id;
            //console.log(id_);
            $.ajax({  
                url: '{{ url('/it-inventory/report/responsebycode') }}'+'/'+id_,
                type: 'get',
                dataType: 'json',
                success: function(response){
                    //console.log(response['data']);
                    var len = 0;
                    if(response['data'] != null){
                        len = response['data'].length;
                    }
                    if(len > 0){
						$("#txt_date").datepicker("setDate", new Date());
						$("#txt_daterange").datepicker("setDate", new Date());
						$("#txt_daterange2").datepicker("setDate", new Date());
						if(response['data'][0].use_doctype=='N'){
							$("#sel_doctype").val("").trigger('change');
							$("#sel_doctype").prop("disabled", true);
						}else{
							$("#sel_doctype").prop("disabled", false);
						}

                        if(response['data'][0].use_daterange=='N'){
							$("#datepicker_datefrom").prop("disabled", true);
							$("#datepicker_dateto").prop("disabled", true);
						}else{
							$("#datepicker_datefrom").prop("disabled", false);
							$("#datepicker_dateto").prop("disabled", false);
						}

                        if(response['data'][0].use_date=='N'){
							$("#datepicker_datefrom").prop("disabled", true);
						}else{
							$("#datepicker_dateto").prop("disabled", false);
						}

						$("#txt_report").val(response['data'][0].header_name + ' - ' + response['data'][0].description);
						$("#txt_query").val(response['data'][0].query);
						$("#txt_type").val(response['data'][0].type);
						$("#txt_url").val(response['data'][0].url);
                    }
                },
                error: function(jqXHR, ajaxOptions, thrownError) {
					var myObj = JSON.parse(jqXHR.responseText);
					var title_ = jqXHR.responseText;
					//console.log(jqXHR.responseText);
                    toastr.error(title_);
				}
		
            });
        
		});
	
    </script>

   <!--  <script>
        $(function () {
            $('#sel_plant').select2({
                // theme: 'bootstrap4',
                width: '100%',
                placeholder: 'Choose Plant...',
                allowClear: true,
                ajax: {
                    url: "{{ route('plant.select2') }}",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: data
                        };
                    }
                }
            });  
           
        });
    </script> -->
   
@endsection