
<link rel="stylesheet" href="<?php echo base_url('assets/vendors/datatable/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendors/datatable/css/responsive.bootstrap4.min.css'); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/css/custom-css.css'); ?>" media="screen">

<div class="modal fade" id="create-produk" tabindex="-1" role="dialog" aria-labelledby="create-product" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Produk</h5>
            </div>
            <div class="modal-body">
                <div class="alert alert-dismissible fade show" role="alert" id="alertDismissible" style="display: none;">
                    <p class="mb-0" id="alertMessage" style="font-size: 13px; margin: 0;text-align: left !important;"></p>
                    <button type="button" class="close" onclick="closeAlert()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="px-3" method="post">
                  <input type="hidden" name="" value="">
                     <div class="form-group">
                        <label for="produk_id" >ID<label class="star">*</label></label>
                        <input type="number" class="form-control" id="id_insert" name="id_insert" placeholder="ID">
                    </div>
                    <div class="form-group">
                        <label for="produk_name" >Nama Produk<label class="star">*</label></label>
                        <input type="text" class="form-control" id="nama_insert" name="nama_insert" placeholder="Nama Produk">
                    </div>
                    <div class="form-group">
                        <label for="produk_harga" >Harga<label class="star">*</label></label>
                        <input type="number" class="form-control" id="harga_insert" name="harga_insert" placeholder="Harga">
                    </div>
                    <div class="form-group">
                        <label for="produk_kategori" >Kategori<label class="star">*</label></label>
                        <input type="text" class="form-control" id="kategori_insert" name="kategori_insert" placeholder="Kategori">
                    </div>
                    <div class="form-group">
                        <label for="produk_status" >Status<label class="star">*</label></label>
                        <select class="form-control" id="status_insert">
                          <option value="tidak bisa dijual">Tidak bisa dijual</option>
                          <option value="bisa dijual">Bisa dijual</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" type="button" class="btn btn-md btn-light" data-dismiss="modal">Cancel</a>
                <a href="#" type="button" class="btn btn-md btn-primary" onclick="createProduct()">Save</a>
            </div>
        </div>
    </div>
</div>
<!-- content -->

<!-- modal edit workspace -->
<div class="modal fade" id="edit-produk" tabindex="-1" role="dialog" aria-labelledby="edit-product" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
            </div>
            <div class="modal-body">
                <div class="alert alert-dismissible fade show" role="alert" id="alertDismissible-edit" style="display: none;">
                    <p class="mb-0" id="alertMessage-edit-produk" style="font-size: 13px; margin: 0;text-align: left !important;"></p>
                    <button type="button" class="close" onclick="closeAlert2()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="px-3" id="product_edit" method="post">
                    <input type="hidden" name="" value="">
                    <div class="form-group">
                        <label for="produk_name_edit" >Nama Produk<label class="star">*</label></label>
                        <input type="text" class="form-control" id="nama_edit" name="nama_edit" placeholder="Nama Produk">
                    </div>
                    <div class="form-group">
                        <label for="produk_harga_edit" >Harga<label class="star">*</label></label>
                        <input type="number" class="form-control" id="harga_edit" name="harga_edit" placeholder="Harga">
                    </div>
                    <div class="form-group">
                        <label for="produk_kategori_edit" >Kategori<label class="star">*</label></label>
                        <input type="text" class="form-control" id="kategori_edit" name="kategori_edit" placeholder="Kategori">
                    </div>
                    <div class="form-group">
                        <label for="produk_status_edit" >Status<label class="star">*</label></label>
                        <select class="form-control js-example-basic-single w-100" name="status_edit" id="status_edit">
                            <option value="tidak bisa dijual">Tidak bisa dijual</option>
                            <option value="bisa dijual">Bisa dijual</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" type="button" class="btn btn-md btn-light" data-dismiss="modal">Cancel</a>
                <a href="#" type="button" class="btn btn-md btn-primary" onclick="editProduct()">Save</a>
            </div>
        </div>
    </div>
</div>
<!-- modal edit workspace -->

<!--Modal for delete-->
<div class="modal fade" id="delete-produk" tabindex="-1" role="dialog" aria-labelledby="delete-product"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete-produk">Delete Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <div class="alert alert-dismissible fade show" role="alert" id="alertDismissible-delete" style="display: none;">
                    <p class="mb-0" id="alertMessage-delete" style="font-size: 13px; margin: 0;text-align: left !important;"></p>
                    <button type="button" class="close" onclick="closeAlert1()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <p style="font-size: 14px;">Are you sure want to delete this produk?</p>

            </div>
            <div class="modal-footer">
                <a href="#" onclick="productDelete()" class="btn btn-danger d-xl-inline-block btn-sm mr-3"
                   id="delete">Delete</a>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!--Modal for delete end-->

<div class="pt-3">
    <div class="card">
        <div class="card-body p-4">
            <div class="mb-3" id="addproduct">
                <a href="#" type="button" class="btn btn-sm bg-darkblue text-white" data-toggle="modal" data-target="#create-produk">
                      Tambah Produk <i class="mdi mdi-plus"></i></a>
                </a>
            </div>
            <div class="table-responsive">
                <table id="ProdukList" class="table table-hover" width="100%" style="overflow-x: hidden;">
                    <thead>
                        <tr>
                            <th>ID Produk</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/js/jquery/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/popper/popper.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendors/datatable/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendors/datatable/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendors/datatable/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendors/datatable/js/responsive.bootstrap4.min.js'); ?>"></script>
<script type="text/javascript">
	
    $('#title-nav').html("");
    $('#title-nav').html("Produk Management");

    function closeAlert(){
         $('#alertDismissible').hide();
    }

    function closeAlert1(){
         $('#alertDismissible-delete').hide();
    }

    function closeAlert2(){
         $('#alertDismissible-edit').hide();
    }

</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#ProdukList').DataTable({
            ajax: {
                url: "<?php echo site_url('Admin/getDataProduct')?>",
                "dataSrc": "data"
            },
            "columns": [
                {
                    "data": "id_produk",
                    "searchable": true,
                    "className": "item",
                    "defaultContent": ""
                },
                {
                    "data": "nama_produk",
                    "searchable": true,
                    "className": "item",
                    "defaultContent": ""
                },
                {
                    "data": "harga",
                    "searchable": true,
                    "className": "item",
                    "defaultContent": ""
                },
                {
                    "data": "kategori",
                    "searchable": true,
                    "className": "item",
                    "defaultContent": ""
                },
                {
                    "data": "status",
                    "searchable": true,
                    "className": "item",
                    "defaultContent": ""
                },
                {
                   "data": 'null',
                    "orderable": false,
                    "sClass": "text-left",
                    render: function (data, type, row) {
                        var ret_value = ' <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +'<i class="mdi mdi-dots-horizontal"></i></a>' +
                            '<div class="dropright dropdown-menu" x-placement="bottom-start">';
                            ret_value += '<a class="dropdown-item edit" data-toggle="modal" id="' + row.id_produk + '" data-target="#edit-produk" name="'+row.nama_produk+'">'+
                                    '<i class="mdi mdi-pencil mr-2"></i>Edit</a>';
                            ret_value +='<div class="dropdown-divider"></div>'+
                                    '<a class="dropdown-item delete" data-toggle="modal" id="' + row.id_produk + '" data-target="#delete-produk" name="'+row.nama_produk+'">'+
                                    '<i class="mdi mdi-delete mr-2"></i>Delete</a>'
                                    '</div>';
                             return ret_value;
                    }

                }
            ],
            "fnDrawCallback": function( Settings ) {
                initDatatableAction()
            },
        });
    });

    function initDatatableAction() 
    {
        $(".edit").click(function () {
            productId = $(this).attr('id');
            sessionStorage.setItem('productId', productId);
            $.ajax({
                url: "<?php echo base_url();?>Admin/getDataProductDetail/",
                type: 'POST',
                dataType: 'json',
                async: false,
                data: {"id": productId},
                success: function (json) {
                    console.log(json)
                    $.each(json, function (index, value) {

                        $(".modal-body #nama_edit").val(value.nama_produk);
                        $(".modal-body #harga_edit").val(value.harga);
                        $(".modal-body #kategori_edit").val(value.kategori);
                        var status =value.status;
                        var items = "<option value='" + status + "' selected>" + status + "</option>";

                        if (status == 'bisa dijual') {
                            items += "<option  class='form-group' value='tidak bisa dijual'>Tidak bisa dijual</option>";
                        }else{
                            items += "<option  class='form-group' value='bisa dijual'>Bisa dijual</option>";
                        }
                        
                        $("#status_edit").html(items);
                    });

               }
           });
        });


        $(".delete").click(function () {
            idProduk = $(this).attr('id');
            sessionStorage.setItem('idProduk', idProduk);
        });
    }

    function createProduct(){
        var id          = $('#id_insert').val()
        var nama_produk = $('#nama_insert').val()
        var harga       = $('#harga_insert').val()
        var kategori    = $('#kategori_insert').val()
        var status      = $('#status_insert').val()

        if(id == '' || nama_produk == '' || harga == '' || kategori == '' || status == '') {
            $('#alertDismissible').addClass('alert-danger'); 
            $('#alertMessage').html('Data belum diisi dengan lengkap');
            $('#alertDismissible').css('display', 'block');
        }else{
            var data = {
                'id_produk'   : id,
                'nama_produk' : nama_produk,
                'harga'       : harga,
                'kategori'    : kategori,
                'status'      : status,
            }

            $.ajax({
                url     : "<?php echo base_url(); ?>Admin/insertProduct",
                type  : "POST",
                data    : data,
                async : true,
                success : function(response){
                    response = JSON.parse(response)

                    if (response.status_code == 200) {
                        $('#alertDismissible').addClass('alert-success');
                        $('#alertMessage').html('Insert Produk Berhasil');
                        $('#alertDismissible').css('display', 'block');
                           setTimeout(function(){
                            window.location.href = "<?php echo base_url(); ?>Admin";
                        }, 3000);
                    }else{
                        alert('Insert Produk Gagal')
                    }
                    
                }
            });
        }
    }

    function productDelete(){
        var id = sessionStorage.getItem("idProduk")
        $.ajax({
            url      :"<?php echo base_url(); ?>Admin/DeleteProduct",
            type     : "POST",
            data     : {id: id},
            dataType : 'json',
            async : true,
            success : function(response){
                if(response.status_code == 200) {
                    $('#alertDismissible-delete').addClass('alert-success');
                    $('#alertMessage-delete').html('Delete Produk Berhasil');
                    $('#alertDismissible-delete').css('display', 'block');
                       setTimeout(function(){
                        window.location.href = "<?php echo base_url(); ?>Admin";
                    }, 3000);
                } else {
                    alert('Delete Produk Gagal')
                }
            }
        });
    }

    function editProduct(){
        var id = sessionStorage.getItem("productId")
        var produk_id   = id;
        var nama_produk = $('#nama_edit').val();
        var harga       = $('#harga_edit').val();
        var kategori    = $('#kategori_edit').val();
        var status      = $('#status_edit').val();

        if(nama_produk == '' || harga == '' || kategori == '' || status == ''){
            $('#alertDismissible-edit').addClass('alert-danger'); 
            $('#alertMessage-edit-produk').html('Data belum diisi dengan lengkap');
            $('#alertDismissible-edit').css('display', 'block');
        }else{
            var data = {
                'id_produk'   : produk_id,
                'nama_produk' : nama_produk,
                'harga'       : harga,
                'kategori'    : kategori,
                'status'      : status,
            }

            $.ajax({
                url     : "<?php echo base_url(); ?>Admin/ProductEdit",
                type  : "POST",
                data    : data,
                async : true,
                success : function(response){
                    response = JSON.parse(response)

                    if (response.status_code == 200) {
                        $('#alertDismissible-edit').addClass('alert-success');
                        $('#alertMessage-edit-produk').html('Produk berhasil diUpdate');
                        $('#alertDismissible-edit').css('display', 'block');
                           setTimeout(function(){
                            window.location.href = "<?php echo base_url(); ?>Admin";
                        }, 3000);
                    }else{
                        alert('Edit Produk Gagal')
                    }
                    
                }
            });
        }
    }

</script>