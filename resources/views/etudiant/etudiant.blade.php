<x-head />

<body>

    <!-- Left Sidebar End -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== Header Start ========== -->
        <x-navbar />

        <!-- ========== Left Sidebar Start ========== -->
        <x-sidebar />
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
                                <h4 class="mb-sm-0 font-size-18">User List</h4>



                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h5 class="card-title">Contact List <span class="text-muted fw-normal ms-2">(834)</span>
                                </h5>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                <div>
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="apps-contacts-list.html"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i
                                                    class="bx bx-list-ul"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-contacts-grid.html" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Grid"><i
                                                    class="bx bx-grid-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-rounded waves-effect waves-light"
                                        onclick="addetudiant()" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg"><i class="bx bx-plus me-1 ">

                                        </i>
                                        Add
                                        New</a>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->

                    <div class="table-responsive mb-4">
                        <table class="table align-middle datatable dt-responsive table-check nowrap"
                            style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                            <thead>
                                <tr>

                                    <th scope="col">Nom complet</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">CIN</th>
                                    <th scope="col">Tel 1</th>
                                    <th scope="col">Tel 2</th>
                                    <th style="width: 80px; min-width: 80px;">Action</th>
                                </tr>
                            </thead>
                            <tbody id="etudiant_table">

                            </tbody>
                        </table>
                        <!-- end table -->
                    </div>
                    <!-- end table responsive -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <x-footer />
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- Right Sidebar -->
    <x-right-sidebar />
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>




    <!--  Large modal example -->
    <div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Add Student:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/etudiant" method="POST" id="etudiant_form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="hidden" id="id" name="id">
                                <input type="hidden" id="crated_at" name="created_at">
                                <div class="mb-3">
                                    <label for="first_name_fr" class="form-label">Prenom</label>
                                    <input type="text" class="form-control" id="first_name_fr" name="first_name_fr"
                                        placeholder="Entrer le prenom ...">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="first_name_ar"
                                        class="form-label d-flex justify-content-end">الإسم</label>
                                    <input type="text" class="form-control " name="first_name_ar" id="first_name_ar"
                                        placeholder="...أدخل الإسم">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="last_name_fr" class="form-label d-flex">Nom</label>
                                    <input type="text" class="form-control" name="last_name_fr" id="last_name_fr"
                                        placeholder="Entrer le nom ....">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="last_name_ar"
                                        class="form-label d-flex justify-content-end">النسب</label>
                                    <input type="text" class="form-control" name="last_name_ar" id="last_name_ar"
                                        placeholder="... أدخل النسب">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="telephone1" class="form-label">Tel 1</label>
                                    <input type="tel" class="form-control" name="telephone1" id="telephone1"
                                        placeholder="+212000000000">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="telephone2" class="form-label ">Tel 2</label>
                                    <input type="tel" class="form-control" name="telephone2" id="telephone2"
                                        placeholder="+212000000000">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="example@email.com">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label for="cin" class="form-label">CIN</label>
                                    <input type="text" class="form-control" name="cin" id="cin"
                                        placeholder="IA000000">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="img" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="img" id="img">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" id="add-etudiant-btn"
                                class="btn btn-primary waves-effect waves-light">Save</button>
                            <button type="submit" id="update-etudiant-btn"
                                class="btn btn-primary waves-effect waves-light">Update</button>
                        </div>
                    </form>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <x-scripts />

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function addetudiant() {
            $('#etudiant_form').attr('method', 'POST');
            $('#etudiant_form').attr('action', '/etudiant');
            $('#etudiant_form').trigger("reset");

            $('#myLargeModalLabel').text('Add new etudiant');
            $('#update-etudiant-btn').hide();
            $('#add-etudiant-btn').show();
        }


        // get etudiant information to update
        function editeetudiant(id) {

            $('#myLargeModalLabel').text('Update etudiant');
            $('#add-etudiant-btn').hide();
            $('#update-etudiant-btn').show();

            $.ajax({
                url: '/etudiant/' + id,
                type: 'GET',
                dataType: 'json',
                complete: function(data) {
                },
                success: function(data) {

                    console.log(data);
                    console.log(data.img)
                    $('#id').val(data.id);
                    $('#etudiant_form').append('@method('PUT')');
                    $('#etudiant_form').attr('action', '/etudiant/' + data.id);
                    $('#id').val(data.id);
                    $('#first_name_fr').val(data.first_name_fr);
                    $('#first_name_ar').val(data.first_name_ar);
                    $('#last_name_fr').val(data.last_name_fr);
                    $('#last_name_ar').val(data.last_name_ar);
                    $('#email').val(data.email);
                    $('#telephone1').val(data.telephone1);
                    $('#telephone2').val(data.telephone2);
                    $('#cin').val(data.cin);
                    // get image stored in database
                    $('#img').attr('src', data.img);


                }
            });
        }

        // update etudiant
        $('#update-etudiant-btn').click(function(e) {
            e.preventDefault();
            var id = $('#id').val();
            var first_name_fr = $('#first_name_fr').val();
            var first_name_ar = $('#first_name_ar').val();
            var last_name_fr = $('#last_name_fr').val();
            var last_name_ar = $('#last_name_ar').val();
            var email = $('#email').val();
            var telephone1 = $('#telephone1').val();
            var telephone2 = $('#telephone2').val();
            var cin = $('#cin').val();
            var image = $('#img').attr('src');
            var _token = $("input[name=_token]").val();

            $.ajax({
                url: '/etudiant/' + id,
                type: 'PUT',
                dataType: 'json',
                data: {
                    id: id,
                    first_name_fr: first_name_fr,
                    first_name_ar: first_name_ar,
                    last_name_fr: last_name_fr,
                    last_name_ar: last_name_ar,
                    email: email,
                    telephone1: telephone1,
                    telephone2: telephone2,
                    cin: cin,
                    image: image,
                    _token: _token
                },
                success: function(data) {
                    console.log(data)
                    reloadtable();
                    $('#myModal').modal('hide');
                    $('#etudiant_form').trigger("reset");

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
                        title: 'etudiant updated successfully'
                    })
                }
            });
        });

        // delete etudiant
        function deleteetudiant(id) {
            var _token = $('input[name=_token]').val();

            $.ajax({

                url: '/etudiant/' + id,
                type: 'DELETE',
                dataType: 'json',
                data: {
                    _token: _token
                },
                success: function(data) {
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
                        title: 'etudiant deleted successfully'
                    })
                }
            });
        }

        // add etudiant
        $('#add-etudiant-btn').click(function(e) {
                e.preventDefault();
                var formData = new FormData($('#etudiant_form')[0]);
                var storeEtudiantUrl = "{{ route('etudiants.store') }}";

                $.ajax({
                    url: storeEtudiantUrl,
                    type: 'POST',
                    dataType: 'json',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        console.log(data);
                        $('#etudiant_form').trigger("reset");
                        $('#myModal').modal('hide');
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        });
                        Toast.fire({
                            icon: 'success',
                            title: 'etudiant added successfully'
                        });
                        reloadtable();
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText); // Log any error response from the server
                    }
                });
            });




        function reloadtable() {

            $.ajax({
                url: '/etudiant',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // vider le tableau
                    console.log(data)
                    $('#etudiant_table').html("");
                    // ...
                    $.each(data, function(index, etudiant) {
                        var imageSrc =  etudiant.img;

                        var newRow =
                            `<tr id="ser-${etudiant.id}">
            <th scope="row" class="d-flex align-items-center">
                <img src="${imageSrc}" alt="" class="avatar-sm rounded-circle me-2">
                <div class="pl-3">
                    <div class="text-body">${etudiant.first_name_fr} ${etudiant.last_name_fr}</div>
                    <div class="font-weight-light font-italic">${etudiant.first_name_ar} ${etudiant.last_name_ar}</div>
                </div>
            </th>
            <td>${etudiant.email}</td>
            <td>${etudiant.cin}</td>
            <td>${etudiant.telephone1}</td>
            <td>${etudiant.telephone2}</td>
            <td>
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-soft-warning waves-effect waves-light" onclick="editeetudiant('${etudiant.id}')" data-bs-toggle="modal" data-bs-target="#myModal">
                        <i class="bx bx-edit-alt font-size-16 align-middle"></i>
                    </button>
                    <button type="button" class="btn btn-soft-danger waves-effect waves-light" onclick="deleteetudiant('${etudiant.id}')">
                        <i class="bx bx-trash font-size-16 align-middle"></i>
                    </button>
                </div>
            </td>
        </tr>`;

                        $('#etudiant_table').prepend(newRow);
                    });


                }

            });
        }

        reloadtable();
    </script>


</body>

</html>
