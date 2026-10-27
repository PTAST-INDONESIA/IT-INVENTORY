<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>{{ $reportname}}-{{ $datefrom}}</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('quixlab-master/images/ast/ast_indonesia_logo.jpg') }}">
        <link href="{{ asset('/DataTables/datatables.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/bootstrap431/css/bootstrap.min.css') }}">
        <style>
            html { margin: 10px}
            table, td, th {  
                border: 2px solid #ddd;
                text-align: left;
            }
            table.dataTable th  {
                height: 25px;
                font-size: 12px;
            }
            table.dataTable tr td  {
                height: 20px;
                font-size: 12px;
            }
        </style>
        <style>
            /* ===============================
            GLOBAL
            =============================== */
            html {
                margin: 10px;
                font-family: Arial, Helvetica, sans-serif;
            }

            body {
                /*background-color: #f4fbf7;  soft green background */
                /* color: #1e4635; */
            }

            /* ===============================
            TABLE BASE
            =============================== */
            /* table {
                width: 100%;
                border-collapse: collapse;
                background-color: #ffffff;
            }

            table, td, th {
                border: 1px solid #b7e4c7;
                text-align: left;
            } */

            /* ===============================
            HEADER INFO TABLE
            =============================== */
            /* table:first-of-type td {
                background-color: #ffffff;
            }

            h6 {
                margin: 4px 0;
                color: #000000;
            }  */

            /* TABLE GLOBAL */
            table {
                width: 100%;
                border-collapse: collapse;
                background-color: #ffffff;
            }

            table, td, th {
                border: 1px solid #9fd3b8;
            }

            /* ===============================
            DATATABLE HEADER
            =============================== */
            table.dataTable thead th {
                background-color: #198754; /* Bootstrap green */
                color: #ffffff;
                text-align: center;
                vertical-align: middle;
                font-size: 12px;
                height: 30px;
            }

            /* SUB HEADER */
            table.dataTable thead tr:nth-child(2) th {
                background-color: #20c997;
            }

            /* ===============================
            DATATABLE BODY
            =============================== */
            table.dataTable tbody td {
                height: 22px;
                font-size: 12px;
                color: #1e4635;
            }
            
            table.dataTable tbody tr:nth-child(even) {
                background-color: #f0faf5;
            }

            table.dataTable tbody tr:hover {
                background-color: #d8f3dc;
            } 

            /* ===============================
            HR LINE
            =============================== */
            hr {
                border: 0;
                height: 1px;
                background: linear-gradient(to right, #95d5b2, #2d6a4f, #95d5b2);
                margin: 12px 0;
            }

            /* ===============================
            DATATABLE BUTTONS
            =============================== */
            .dt-button,
            .buttons-print,
            .buttons-excel {
                background-color: #2d6a4f !important;
                color: #ffffff !important;
                border: none !important;
                border-radius: 4px;
                padding: 4px 10px;
                font-size: 12px;
            }

            .dt-button:hover {
                background-color: #40916c !important;
            }

            /* ===============================
            PAGINATION
            =============================== */
            .page-item.active .page-link {
                background-color: #2d6a4f;
                border-color: #2d6a4f;
            }

            .page-link {
                color: #2d6a4f;
                font-size: 10px;
            }

            .page-link:hover {
                background-color: #d8f3dc;
                color: #1b4332;
            }

            /* ===============================
            PRINT MODE
            =============================== */
            @media print {
                body {
                    background-color: #ffffff;
                }

                table.dataTable thead th {
                    background-color: #2d6a4f !important;
                    color: #ffffff !important;
                    -webkit-print-color-adjust: exact;
                    print-color-adjust: exact;
                }
            }
        </style>


    </head>
<body class="no-skin">
    <div class="content">
        <div class="container-fluid">
                <table>
                    <tr>
                        <td>
                            <h6> <b>&nbsp;Report Name &nbsp;</b></h6>
                        </td>
                        <td>
                            <h6> <b>&nbsp;:&nbsp;</b></h6>
                        </td>
                        <td>
                            <h6><b>&nbsp;{{ $reportname}}&nbsp;</b></h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6> <b>&nbsp;Date&nbsp;</b></h6>
                        </td>
                        <td>
                            <h6> <b>&nbsp;:&nbsp;</b></h6>
                        </td>
                        <td>
                            <h6><b>&nbsp;{{ $datefrom }}&nbsp;</b>
                            </h6>
                        </td>
                    </tr>
                </table>
                <br />
                <table id="tdynamic" class="table-striped table-bordered table-hover no-margin-bottom no-border-top">
                    <thead id="thdynamic">
                        <tr>
                            <th rowspan="2">No</th>
                            <th colspan="3">Dokumen Pabean</th>
                            <th colspan="2">Bukti Penerimaan Barang</th>
                            <th rowspan="2">Pengirim Barang</th>
                            <th rowspan="2">Kode Barang</th>
                            <th rowspan="2">Nama Barang</th>
                            <th rowspan="2">Jumlah</th>
                            <th rowspan="2">Sat</th>
                            <th rowspan="2">No F.Pajak</th>
                            <th rowspan="2">Tgl F.Pajak</th>
                            <th rowspan="2">Curr</th>
                            <th rowspan="2">Nilai</th>
                        </tr>
                        <tr>
                            <th>Jenis</th>
                            <th>Nomor</th>
                            <th>Tanggal</th>
                            <th>Nomor</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody id="tbdynamic">
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->dp_jenis }}</td>
                                <td>{{ $item->dp_nomor }}</td>
                                <td>{{ $item->dp_tanggal }}</td>
                                <td>{{ $item->bpb_nomor }}</td>
                                <td>{{ $item->bpb_tanggal }}</td>
                                <td>{{ $item->pengirim_barang }}</td>
                                <td>{{ $item->kode_barang }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->satuan }}</td>
                                <td>{{ $item->faktur_pajak }}</td>
                                <td>{{ $item->tanggal_faktur }}</td>
                                <td>{{ $item->currency }}</td>
                                <td>{{ $item->nilai }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
    <script src="{{ asset('/bootstrap431/js/jquery.min.js') }}" ></script>
    <script src="{{ asset('/bootstrap431/js/popper.min.js') }}" ></script>
    <script src="{{ asset('/bootstrap431/js/bootstrap.min2.js') }}" ></script>
    <script src="{{ asset('/bootstrap431/js/dataTables.js') }}" ></script>
    <script src="{{ asset('/bootstrap431/js/dataTables.bootstrap4.js') }}" ></script>
    <script src="{{ asset('/bootstrap431/js/dataTables.buttons.js') }}" ></script>
    <script src="{{ asset('/bootstrap431/js/buttons.bootstrap4.js') }}" ></script>
    <script src="{{ asset('/bootstrap431/js/jszip.min.js') }}" ></script>
    <script src="{{ asset('/bootstrap431/js/pdfmake.min.js') }}" ></script>
    <script src="{{ asset('/bootstrap431/js/vfs_fonts.js') }}" ></script>
    <script src="{{ asset('/bootstrap431/js/buttons.html5.min.js') }}" ></script>
    <script src="{{ asset('/bootstrap431/js/buttons.print.min.js') }}" ></script>
    <script src="{{ asset('/bootstrap431/js/buttons.print.min.js') }}" ></script>
    <script src="{{ asset('/bootstrap431/js/buttons.colVis.min.js') }}" ></script>
    <script>
        var myreportname = @json($reportname);
        var myreportdate = @json($datefrom);
        $(function () {
            $("#tdynamic").DataTable({
                layout: {
                    bottomStart: {
                      //buttons: ['copy', 'excel', 'pdf','print']
                    buttons: [
                                { 
                                    extend:'print'
                                },
                                {
                                    extend:'excel',
                                    filename: myreportname + ' - ' + myreportdate,
                                    title: null,    
                                },
                                {
                                    //extend: '',
                                    split: [
                                        {
                                        extend:'copy',
                                        }, 
                                        //{
                                        //  extend:'csv',
                                        //  filename: myreportname + ' - ' + myreportdate
                                        // }, 
                                        //{ 
                                            //extend:'pdfHtml5',
                                            ////orientation: 'landscape',
                                            ////pageSize: 'A1',
                                            //filename: myreportname + ' - ' + myreportdate,
                                            //title: null
                                        //}, 
                                    ]
                                },  
                            ],
                    }
                },
                autoWidth: true,
                responsive: true,
                paging:true,
                pageLength: 20,
                lengthMenu: [ [10, 20, 50, -1], [10, 20, 50, 'All'] ] 
            });
        });
    </script>
</body>
</html>
