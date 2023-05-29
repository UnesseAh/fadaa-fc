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
    <!-- dropzone css -->
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
{{--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />--}}
{{--        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">--}}
{{--        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">--}}
{{--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
{{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>--}}
{{--        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>--}}
{{--        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>--}}
{{--        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>--}}

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
                                    <h4 class="mb-sm-0 font-size-18">Formations</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Formations</a></li>
                                            <li class="breadcrumb-item active">Formations</li>
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
                                                    <h5 class="card-title">Formations List <span class="text-muted fw-normal ms-2">(834)</span></h5>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                                    <div>
{{--                                                        <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus"></i>  Ajouter Une Formation</button>--}}
                                                        <a class="btn btn-primary btn-rounded waves-effect waves-light" href="javascript:void(0)" id="createNewFormation"><i class="fas fa-plus"></i>  Ajouter Une Formation</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered data-table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Titre</th>
                                                    <th>Description</th>
                                                    <th>Niveau</th>
                                                    <th>Durée</th>
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
{{--                        <img style="width: fit-content" src="{{ asset('assets/images/formation-cover.jpg') }}" alt="">--}}
                        <form id="formationForm" name="formationForm">
                            <input type="hidden" name="formation_id" id="formation_id">
                            <div class="mb-3">
                                <label class="form-label" for="title">Titre</label>
                                <input name="title" type="text" class="form-control" id="title">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="level">Niveau</label>
                                <input name="level" type="text" class="form-control" id="level">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="duration">Durée</label>
                                <input name="duration" type="text" class="form-control" id="duration">
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary w-md" id="saveBtn" value="create">Save Changes</button>
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
        $(function (){
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
                ajax: "{{ route('formations.index') }}",
                columns: [
                    // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'description', name: 'description'},
                    {data: 'level', name: 'level'},
                    {data: 'duration', name: 'duration'},
                    {data: 'action', name: 'action'}
                ]
            });

            /*-------------- Click Add Formation --------------*/
            $('#createNewFormation').click(function () {
                console.log('test');
                // $('#saveBtn').val("create-formation");
                $('#saveBtn').html('Save Changes');
                $('#formation_id').val('');
                $('#formationForm').trigger("reset");
                $("#modelHeading").html("Créer une nouvelle formation");
                $('#largeModal').modal('show');
            });

            /*-------------- Click Edit Formation --------------*/
            $('body').on('click', '.editFormation', function(){
                var formation_id = $(this).data('id');
                $.get("{{ route('formations.index') }}" +'/' + formation_id +'/edit', function (data) {
                console.log(data);
                $('#modelHeading').html("Modifier la formation");
                // $('#saveBtn').val("edit-user");
                $('#saveBtn').html('Save Changes');
                $('#largeModal').modal('show');
                $('#formation_id').val(data.id);
                $('#title').val(data.title);
                $('#description').val(data.description);
                $('#level').val(data.level);
                $('#duration').val(data.duration);
                })
            });

            /*-------------- Create Formation --------------*/
            $('#saveBtn').click(function (e) {
                e.preventDefault();
                $(this).html('Sending..');

                $.ajax({
                    data: $('#formationForm').serialize(),
                    url: "{{ route('formations.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        $('#formationForm').trigger("reset");
                        $('#largeModal').modal('hide');
                        table.draw();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                    }
                });
            });

            /*-------------- Delete Formation --------------*/
            $('body').on('click', '.deleteFormation', function(){
                var formation_id = $(this).data("id");
                confirm("Are you sure you want to delete!");
                $.ajax({
                    type: "DELETE",
{{--                    url: {{ route('formations.destroy') }} + '/' + formation_id,--}}
                    url: '/formations/' + formation_id,
                    success: function (data) {
                        console.log(data);
                        table.draw();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            });

        });
    </script>
</html>
