<x-head/>

<body>

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <!-- ========== Header Start ========== -->
        <x-navbar />

        <!-- ========== Header End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <x-sidebar />
        <!-- Left Sidebar End -->




        <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                                        <h4 class="card-title">Services:</h4>

                                        <div>
                                            <a href="#" class="btn btn-primary btn-rounded waves-effect waves-light" onclick="addservice()"   data-bs-toggle="modal" data-bs-target="#myModal"><i
                                                    class="bx bx-plus me-1 "></i> Add New</a>

                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>العنوان</th>
                                                        <th>Titre </th>
                                                        <th>الوصف </th>
                                                        <th>description </th>
                                                        <th>Status</th>
                                                        <th>Montant</th>
                                                        <th>Date d'ajoute</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="service_table">


                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


              <x-footer/>
            <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- Right Sidebar -->
    <x-right-sidebar/>
    <!-- /Right-bar -->

    <!-- sample modal content -->
    <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">Add new service:</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="service_form" action="/service" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="hidden" id="id" name="id">
                                            <input type="hidden" id="crated_at" name="created_at">
                                            <div class="mb-3">
                                                <label for="title_fr" class="form-label">Title</label>
                                                <input type="text" class="form-control" id="title_fr" name="title_fr" placeholder="Enter the title">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="title_ar" class="form-label d-flex justify-content-end">العنوان</label>
                                                <input type="text" class="form-control" name="title_ar" id="title_ar" placeholder="أدخل العنوان">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="montant" class="form-label d-flex">Montant</label>
                                                <input type="number" class="form-control" name="montant" id="montant" placeholder="Montant">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="description_fr" class="form-label">Description</label>
                                                <textarea id="description_fr" name="description_fr" class="form-control" rows="2" placeholder="Enter the description ...."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="description_ar" class="form-label d-flex justify-content-end">الوصف</label>
                                                <textarea id="description_ar" name="description_ar" class="form-control" rows="2" placeholder=".... أدخل الوصف"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="status" class="form-label d-flex">Status</label>
                                            <div>
                                                <label class="pe-5">
                                                    <input class="form-check-input" type="radio" name="status" value="publier" checked> Publier
                                                </label>
                                                <label>
                                                    <input class="form-check-input" type="radio" name="status" value="non publier"> Non Publier
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" id="add-service-btn" class="btn btn-primary waves-effect waves-light">Save</button>
                                    <button type="submit" id="update-service-btn" class="btn btn-primary waves-effect waves-light">Update</button>
                                </div>
                            </form>

                            </div>
                            <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <x-scripts />


    <script>


        function addservice() {
            $('#service_form').attr('method', 'POST');
            $('#service_form').attr('action', '/service');
            $('#service_form').trigger("reset");

            $('#myModalLabel').text('Add new service');
            $('#update-service-btn').hide();
            $('#add-service-btn').show();
        }


        // get service information to update
        function editeservice(id) {

            $('#myModalLabel').text('Update service');
            $('#add-service-btn').hide();
            $('#update-service-btn').show();

            $.ajax({
                url: '/service/' + id,
                type: 'GET',
                dataType: 'json',
                complete: function(data) {
                    console.log(data)
                },
                success: function(data) {
                    $('#id').val(data.id);
                    $('#service_form').append('@method('PUT')');
                    $('#service_form').attr('action', '/service/' + data.id);
                    $('#id').val(data.id);
                    $('#title_ar').val(data.title_ar);
                    $('#title_fr').val(data.title_fr);
                    $('#description_ar').val(data.description_ar);
                    $('#description_fr').val(data.description_fr);
                    if (data.status == 'publier') {
                        $('#Status').val('publier');
                    } else {
                        $('#Status').val('non publier');
                    }
                    $('#montant').val(data.montant);
                    $('#created_at').val(data.created_at);

                }
            });
        }

        // update service
            $('#update-service-btn').click(function(e) {
                e.preventDefault();
                var id = $('#id').val();
                var title_ar = $('#title_ar').val();
                var title_fr = $('#title_fr').val();
                var description_ar = $('#description_ar').val();
                var description_fr = $('#description_fr').val();
                var status = $("input[name='status']:checked").val();
                var montant = $('#montant').val();
                var _token = $('input[name=_token]').val();

                $.ajax({
                    url: '/service/' + id,
                    type: 'PUT',
                    dataType: 'json',
                    data: {
                        id: id,
                        title_ar: title_ar,
                        title_fr: title_fr,
                        description_ar: description_ar,
                        description_fr: description_fr,
                        status: status,
                        montant: montant,
                        _token: _token
                    },
                    success: function(data) {
                        console.log(data)
                        reloadtable();
                        $('#myModal').modal('hide');
                        $('#service_form').trigger("reset");

                        const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                        })

                        Toast.fire({
                        icon: 'info',
                        title: 'Service updated successfully'
                        })
                    }
                });
            });

            // delete service
        function deleteservice(id) {
            var _token = $('input[name=_token]').val();

            $.ajax({

                url: '/service/' + id,
                type: 'DELETE',
                dataType: 'json',
                data: {
                    _token: _token
                },
                success:
                function(data) {
                    reloadtable();

                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                        })

                        Toast.fire({
                        icon: 'error',
                        title: 'Service deleted successfully'
                        })
                }
            });
        }

        // add service
        $('#add-service-btn').click(function(e) {
        e.preventDefault();
             var formData = $('#service_form').serialize();

                $.ajax({
                    // url route store.service
                    url:'/service',
                    type: 'POST',
                    data: formData,
                    success: function(data) {
                        console.log(data)
                        // alert('service added successfully');
                        $('#service_form').trigger("reset");
                        $('#myModal').modal('hide');
                        console.log(data)
                        const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                        })

                        Toast.fire({
                        icon: 'success',
                        title: 'Service added successfully'
                        })

                        reloadtable();


        }
    })
})


function reloadtable() {

$.ajax({
    url: '/service',
    type: 'GET',
    dataType: 'json',
    success: function(data) {
        // vider le tableau
        console.log(data)
        $('#service_table').html("");
        $.each(data, function(index, service) {
            var newRow =
            `<tr  id="ser-${service.id }">
             <td>${ service.title_ar }</td>
             <td>${ service.title_fr }</td>
             <td> <p class="text-truncate" style="max-width: 160px;" data-bs-toggle="tooltip" data-bs-placement="left" title="${service.description_ar }">${service.description_ar }</p> </td>
             <td> <p class="text-truncate" style="max-width: 160px;" data-bs-toggle="tooltip" data-bs-placement="left" title="${service.description_fr }">${service.description_fr }</p> </td>
            <td><p class="badge rounded-pill ${service.status == 'publier' ? 'badge-soft-success' : 'badge-soft-danger'} font-size-16">${service.status }</p></td>
             <td><p class="badge rounded-pill badge-soft-dark font-size-16">${service.montant } DH</p></td>
             <td>${service.created_at }</td>
             <td>
             <div class="d-flex flex-wrap gap-2">
             <button type="button" class="btn btn-soft-warning waves-effect waves-light" onclick="editeservice('${service.id }')" data-bs-toggle="modal" data-bs-target="#myModal"><i class="bx bx-edit-alt font-size-16 align-middle"></i></button>
             <button type="button" class="btn btn-soft-danger waves-effect waves-light" onclick="deleteservice(' ${ service.id}')"><i class="bx bx-trash font-size-16 align-middle"></i></button>
             </div>
             </td>
             </tr>`;
            $('#service_table').prepend(newRow);


        });
        }
})
}

    reloadtable();

    </script>


</body>
</html>
