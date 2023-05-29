<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>DataTables | Minia - Minimal Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- preloader css -->
    <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />--}}
{{--    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">--}}
{{--    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>--}}
{{--    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>--}}
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>--}}
{{--    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>--}}

</head>

<body>

<!-- <body data-layout="horizontal"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    <!-- ========== Header Start ========== -->
    <x-navbar/>
    <!-- ========== Header End ========== -->

    <!-- ========== Left Sidebar Start ========== -->
    <x-sidebar/>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Sessions</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Sessions</a></li>
                                    <li class="breadcrumb-item active">Session</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <h5 class="card-title">Session List <span class="text-muted fw-normal ms-2">(834)</span></h5>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                            <div>
                                                <a class="btn btn-primary btn-rounded waves-effect waves-light" href="javascript:void(0)" id="createNewSession"><i class="fas fa-plus"></i>  Ajouter Une Session</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table data-table">
                                    <thead>
                                    <tr class="table-dark">
                                        <th>No</th>
                                        <th>Date Debut</th>
                                        <th>Date Fin</th>
                                        <th>Montant</th>
                                        <th>Formation</th>
                                        <th>Promotion</th>
                                        <th>Status</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card body -->
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- Start Footer -->
        <x-footer/>
        <!-- End Footer -->

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Modal -->
<div class="modal fade" id="largeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modelHeading"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <form id="sessionForm" name="sessionForm">
                        <input type="hidden" name="session_id" id="session_id">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="start-date">Date debut</label>
                                    <input name="start_date" type="date" class="form-control" id="start-date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="end-date">Date fin</label>
                                    <input name="end_date" type="date" class="form-control" id="end-date">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="promotion" class="form-label">Montant</label>
                                <div class="input-group mb-3">
                                    <input name="amount" type="number" class="form-control" id="amount">
                                    <label class="input-group-text">MAD</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <label for="promotion" class="form-label">Promotion</label>
                                    <input name="promotion" class="form-control" type="number" min="2023" max="2099" id="promotion">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <label for="status" class="form-label">Status</label>
{{--                                    <input name="status" type="text" class="form-control" id="stat">--}}
                                    <select name="status" class="form-select" aria-label="Default select example">
                                        <option value="Publier" selected>Publier</option>
                                        <option value="Non Publier">Non Publier</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="formation">Formation</label>
                            <input name="formation_id" type="text" class="form-control" id="formation">
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-md" id="saveBtn" value="create"></button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>





<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center bg-dark p-3">

            <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>

        <!-- Settings -->
        <hr class="m-0" />

        <div class="p-4">
            <h6 class="mb-3">Layout</h6>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout"
                       id="layout-vertical" value="vertical">
                <label class="form-check-label" for="layout-vertical">Vertical</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout"
                       id="layout-horizontal" value="horizontal">
                <label class="form-check-label" for="layout-horizontal">Horizontal</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-mode"
                       id="layout-mode-light" value="light">
                <label class="form-check-label" for="layout-mode-light">Light</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-mode"
                       id="layout-mode-dark" value="dark">
                <label class="form-check-label" for="layout-mode-dark">Dark</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-width"
                       id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                <label class="form-check-label" for="layout-width-fuild">Fluid</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-width"
                       id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                <label class="form-check-label" for="layout-width-boxed">Boxed</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-position"
                       id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                <label class="form-check-label" for="layout-position-fixed">Fixed</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-position"
                       id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="topbar-color"
                       id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                <label class="form-check-label" for="topbar-color-light">Light</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="topbar-color"
                       id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                <label class="form-check-label" for="topbar-color-dark">Dark</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-size"
                       id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                <label class="form-check-label" for="sidebar-size-default">Default</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-size"
                       id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                <label class="form-check-label" for="sidebar-size-compact">Compact</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-size"
                       id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-color"
                       id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                <label class="form-check-label" for="sidebar-color-light">Light</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-color"
                       id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                <label class="form-check-label" for="sidebar-color-dark">Dark</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-color"
                       id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                <label class="form-check-label" for="sidebar-color-brand">Brand</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Direction</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-direction"
                       id="layout-direction-ltr" value="ltr">
                <label class="form-check-label" for="layout-direction-ltr">LTR</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-direction"
                       id="layout-direction-rtl" value="rtl">
                <label class="form-check-label" for="layout-direction-rtl">RTL</label>
            </div>

        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Scripts Start -->
<x-scripts/>
<!-- Scripts End -->

</body>
<script type="text/javascript">
    $(function () {

        /*------------ Pass Header Token -------------*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        /*-------------- Render DataTable --------------*/
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('sessions.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'start_date', name: 'start_date'},
                {data: 'end_date', name: 'end_date'},
                {data: 'amount', name: 'amount' },
                {data: 'formation_id', name: 'formation_id'},
                {data: 'promotion', name: 'promotion'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        /*-------------- Click Add Session --------------*/
        $('#createNewSession').click(function() {
            $('#modelHeading').html("Créer une nouvelle Session");
            $('#saveBtn').html("Create Session")
            $('#session_id').val('');
            $('#sessionForm').trigger("reset");
            $('#largeModal').modal('show');
        });

        /*-------------- Click Edit Formation --------------*/
        $('body').on('click', '.editSession', function(){
            var session_id = $(this).data('id');
            $.get("{{ route('sessions.index') }}" + '/' + session_id + '/edit', function (data) {
                console.log(data);
                $('#modelHeading').html("Modifier la session");
                $('#saveBtn').html('Edit Session')
                $('#largeModal').modal('show');
                $('#session_id').val(data.id);
                $('#start-date').val(data.start_date);
                $('#end-date').val(data.end_date);
                $('#amount').val(data.amount);
                $('#formation').val(data.formation.title);
                $('#promotion').val(data.promotion);
                $('#stat').val(data.status);
            })
        });

        /*-------------- Create Session --------------*/

        $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('<i class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i> Sending..');

            $.ajax({
                data: $('#sessionForm').serialize(),
                url: "{{ route('sessions.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    $('#sessionForm').trigger("reset");
                    $('#largeModal').modal('hide');
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            })
        })



        /*-------------- Delete Session --------------*/
        $('body').on('click', '.deleteFormation', function(){
            var formation_id = $(this).data("id");
            confirm("Are you sure you want to delete!");
            $.ajax({
                type: "DELETE",
                {{--url: {{ route('formations.destroy') }} + '/' + formation_id,--}}
                url: '/formations/' + formation_id,
                success: function (data) {
                    // console.log(data);
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

        $('body').on('click', '.deleteSession', function() {
            var session_id = $(this).data("id");
            // console.log(session_id);
            confirm("Are you sure you want to delete!");
            $.ajax({
                type: "DELETE",
                url: '/sessions/' + session_id,
                success: function(data) {
                    console.log(data);
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        })

    })

</script>

</html>
