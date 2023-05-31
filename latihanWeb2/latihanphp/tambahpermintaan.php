<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta  name="description" content=""/>
    <meta name="author" content=""/>

    <title>SB Admin 2 - Master</title>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> -->
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" 
    rel="stylesheet" 
    type="text/css"/>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet"/>

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" 
    rel="stylesheet"/>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Headings-->
                    
                    <!-- DataTales Example -->
                    <div class="shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row p-3 flex justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Tambah Permintaan</h6>
                                </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- Tambah Pembelian-->
                <div class="modal-body">
                    <!-- INPUT PEMBELIAN -->
                    <div id="formPembelian">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Tanggal</span>
                            <input id="tgl" type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo date('Y-m-d'); ?>">

                            <span class="input-group-text" id="basic-addon1">Konsumen</span>
                            <input type="text" id="konsumen" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div> 

                        <div class="input-group mb-3">
                            <span class="input-group-text" >Karyawan</span>

                            <div class="col-sm-4">
                                <select class="custom-select" id="karyawan">
                                <option value="0">Select Karyawan</option>
                                <option value="1">Ali</option>
                                <option value="2">Budi</option>
                                <option value="3">Ceri</option>
                                </select>
                            </div>
                            
                                <span class="input-group-text" >Telepon</span>
                                <input type="text" class="form-control"id="telp">
                            </div>
                            <div class="input-group mb-3">

                            <span class="input-group-text" >Alamat</span>
                            <input type="text" class="form-control" id="alamat">
                            </div>
                            <div class="input-group mb-3">
                            <span class="input-group-text" >Keterangan</span>
                            <input  type="text" class="form-control" id="keterangan">
                            </div>
                        
                    </div>
                    <br>
                    <!-- INPUT KODE BARANG  BELI -->
                    
                    <div id="formPembelian">
                      <div class="input-group mb-3">
                        <input id="kodebrg" type="text" class="form-control" data-bs-toggle="modal" 
                        data-bs-target="#modalKodeBarang" placeholder="Kode" readonly>                   
                        <input id="namabrg" type="text" class="form-control"  placeholder="Nama" readonly>     
                        <input id="satuanbrg" type="text" class="form-control" placeholder="Satuan" readonly>     
                        <input id="hargabrg" type="text" class="form-control"  placeholder="Harga" readonly>     
                        <input id="jmlbrg" type="text" class="form-control"  placeholder="Jumlah">
                        <button type="button" id="save" class="btn btn-info">Add</button>
                        </div>
                    </div>
                    <!-- SAVE /TAMBAH KE TABLE -->
                    
                    <br>
                    <!-- TABEL PEMBELIAN -->
                    <table class="table table-striped">
                        <theader>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                        </theader>
                        <tbody id="tbody">

                        </tbody>
                        <tfoot>
                            <th colspan="5">Total</th>
                            <th colspan="2" id="total">0</th>
                        </tfoot>
                    </table>
                    <br /><br />
                    <!-- <label for="tagtotal">Total : </label>   <label for="total" id="total">0</label> -->
                    <button class="btn btn-info" id="savemasterdetail">
                        Save
                    </button>
                    <button class="btn btn-info" id="cancelmasterdetail">
                        Cancel
                    </button>
                    <!----------------------->
        <!-- ---------------------------- -->
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Modal Tambah Barang-->
    <div class="modal fade" id="modalAddBarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddBarang" aria-hidden="true">
        <div  class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Barang</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="formBarang">
                    <form target="_blank" method="post" autocomplete="on">
                        
                        <label for="kode" class="form-label">Kode:</label>
                        <input type = "text" id="kodeadd"  class="form-control">
                        
                        <label for="nama" class="form-label">Nama:</label>
                        <input type = "text" id="namaadd" class="form-control"><br>
                        
                      
                        
                        <label for="satuan" class="form-label">Satuan:</label>
                        <input type = "text" id="satuanadd" class="form-control"><br>
                        
                        <label for="harga" class="form-label">Harga:</label>
                        <input type = "text" id="hargaadd" class="form-control"><br><br>
                    
                    </form>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Save</button>
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                
                <!-- <button type="button" class="btn btn-success" data-bs-dismiss="modal" name="save" id="save" >Save</button> -->
            </div>
        </div>
        </div>
    </div>
    <!-- ---------------------------- -->

    <!-- Modal Pilih Kode Tambah PErmintaan-->
    <div class="modal fade" id="modalKodeBarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddBarang" aria-hidden="true">
        <div  class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Daftar Barang</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered" id="tabelDaftarBarang" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Pilih</th>
                        </tr>
                    </thead>
                    <?php
                        include 'koneksi.php';
                        $sql = "select * from barang";
                        $hasil =  mysqli_query($conn,$sql);
                    ?>
                    <tbody id="tbodypilih">
                    <?php                                        
if(mysqli_num_rows($hasil)>0)
{
    while($isi=mysqli_fetch_assoc($hasil))
    {
        $idkodebr=$isi["kodebr"];
        echo '<tr><td>';
        echo $isi["kodebr"];
        echo '</td><td>';
        echo $isi["namabr"];
        echo '</td><td>';
        echo $isi["satuan"];
        echo '</td><td>';
        echo $isi["hargajual"];
        echo '</td><td align="left">';
        echo '<button id='.$idkodebr.' class="tambahpilih btn btn-success" data-bs-dismiss="modal">✓</button>';
        echo '</td></tr>';     
    }
}
?>
                        
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
                
                <!-- <button type="button" class="btn btn-success" data-bs-dismiss="modal" name="save" id="save" >Save</button> -->
            </div>
        </div>
        </div>
    </div>
    <!-- ---------------------------- -->

    <!-- Modal Update Barang-->
    <div class="modal fade" id="ModalUpdateBarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div  class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Barang</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="formBarang">
                    <form action="tugas1tabelbarang.html" target="_blank" method="post" autocomplete="on">
                        <div>
                            <label for="kode" class="form-label">Kode:</label>
                            <input type = "text" id="kodebrg"  class="form-control">
                        </div>
                        
                        <label for="nama" class="form-label">Nama:</label>
                        <input type = "text" id="namabrg" class="form-control"><br>
                        
                      
                        
                        <label for="satuan" class="form-label">Satuan:</label>
                        <input type = "text" id="satuanbrg" class="form-control"><br>
                        
                        <label for="harga" class="form-label">Harga:</label>
                        <input type = "text" id="hargabrg" class="form-control"><br><br>
                                        </form>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
                    <button class="btnHapusBarang btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalHapusBarang" data-kode="M001">Delete</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" name="update" id="update" >Update</button>
                </div>
        </div>
        </div>
    </div>
    <!-- ---------------------------- -->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <script>
// ------------------------- JS ADD ------------------------------------------------------
//FUNGSI GET TGL DAN KODE
    $(document).ready(function () {
      let kode = "";
      let tanggal = "";
      let tgl = new Date();
      kode =
        tgl.getFullYear() +
        "" +
        tgl.getMonth() +
        tgl.getHours() +
        tgl.getMinutes();
      // console.log(kode);
      tanggal = tgl;
      $("#kodetransaksi").val(kode);
     
      // return false;
      

  //------------------ FUNGSI UBAH BARANG
        $("#tabelDaftarBarang").on("click", ".btnPilihgBrg", function () {
            let closestTR = $(this).closest("tr").children(0);
			let kodebrg = closestTR.eq(0).text();
			let nama = closestTR.eq(1).text();
			let satuan = closestTR.eq(2).text();
			let harga = closestTR.eq(3).text();
			
			$("#kodebrg").val(kodebrg);
			console.log($("#kodebrg").val());

			// ambil value (id) dari select
			let currentSelect = $(this);
			let id = currentSelect.val();

			$("#namabrg").val(nama);
			$("#satuanbrg").val(satuan);
			$("#hargabrg").val(harga);

        });
      //-----------------------------------------------------

      //FUNGSI TOMBOL SAVE(ADD) SET TEXT KE TABLE-----------------
      $("#save").click(function () {
        let grandTotal = 0;
  
        let panjang = $("#tbody tr").length;
        let kode = $("#kodebrg").val();
        let nama = $("#namabrg").val();
        let satuan = $("#satuanbrg").val();
        let harga = $("#hargabrg").val();
        let jumlah = $("#jmlbrg").val();
        let total = Number(+harga) * Number(+jumlah);
        // console.log(total);
  
        $("#tbody").append(
          "<tr><td>" +
            kode +
            "</td><td>" +
            nama +
            "</td><td>" +
            satuan +
            "</td><td>" +
            harga +
            "</td><td>" +
            jumlah +
            "</td><td>" +
            total +
            '</td><td><button backgroun id="id' +
            panjang +
            '" class="remove btn btn-success">x</button></tr>'
        );
        // console.log(panjang);

    //FUNGSI HITUNG GRAND TOTAL
        $("#tbody tr").each(function () {
          let currentRow = $(this);
          grandTotal += Number(currentRow.find("td:eq(5)").text());
          // console.log(total);
          $("#total").text(grandTotal);

        });
        reset();
      });

    //------------REMOVE DARI TABEL
      $("#tbody").on("click", ".remove", function () {
        grandTotal = 0;
        var id = $(this).attr("id");
        console.log(id);
        $(this).closest("tr").remove();
        $("#tbody tr").each(function () {
          var currentRow = $(this);
          grandTotal += Number(currentRow.find("td:eq(5)").text());
          // console.log(total);
        });
  
        $("#total").text(grandTotal);
      });

      $("#tbodypilih").on("click", ".tambahpilih", function () {
        var id = $(this).attr("id");
        console.log(id);
         var currentRow=$(this).closest("tr");          
         $('#kodebrg').val(currentRow.find("td:eq(0)").text()); 
         $('#namabrg').val(currentRow.find("td:eq(1)").text()); 
         $('#satuanbrg').val(currentRow.find("td:eq(2)").text()); 
         $('#hargabrg').val(currentRow.find("td:eq(3)").text()); 
         $("#jmlbrg").val("1");
        
      });

      $("#savemasterdetail").click(function () {

        let kodeper1 = <?php echo date('YmdHis');  ?>;
        let tanggal1 = $("#tgl").val();
        let konsumen1 = $("#konsumen").val();
        let karyawan1 = $("#karyawan").val();
        let telp1 = $("#telp").val();
        let alamat1 = $("#alamat").val();
        let keterangan1 = $("#keterangan").val();
        let total1 = $("#total").text();

        console.log(kodeper1 );
        console.log(tanggal1 );
        console.log(konsumen1 );
        console.log(karyawan1 );
        console.log(telp1 );
        console.log(alamat1 );
        console.log(keterangan1 );
        console.log(total1);

        

        $("#tbody tr").each(function () {
          let currentRow = $(this);
          let kodebr1=currentRow.find("td:eq(0)").text();
          let hargajual1=currentRow.find("td:eq(3)").text();
          let jumlah1=currentRow.find("td:eq(4)").text();

          console.log(kodeper1);
          console.log(hargajual1);
          console.log(jumlah1);

          $.post("simpandetailpermintaan.php",{kodeper:kodeper1,kodebr:kodebr1,
            hargajual:hargajual1,jumlah:jumlah1
        },function(data,status)
       {    
       });

        });


        $.post("simpanmasterpermintaan.php",{kodeper:kodeper1,tanggal:tanggal1,konsumen:konsumen1,
            telp:telp1,alamat:alamat1,keterangan:keterangan1,karyawan:karyawan1,total:total1
        },function(data,status)
       {
         alert("sukses");    
         $('#isi').load("tabelpermintaan.php");
       });



      });
    
      });

      function reset(){
        $("#kodebrg").val("");
        $("#namabrg").val("");
        $("#satuanbrg").val("");
        $("#hargabrg").val("");
        $("#jmlbrg").val("");
    }
    </script>
</body>

</html>