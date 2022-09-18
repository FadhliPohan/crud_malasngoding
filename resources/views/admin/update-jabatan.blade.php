@extends('layout.add')
@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-primary">
                <h6 class="m-0 font-weight-bold text-light">Form Jabatan</h6>
            </div>
            <div class="card-body">
                @foreach ($jabatan as $j)
                    
                @endforeach
                <form action="/jabatan/update" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}    
                    
                    <input type="hidden" name="id" value="{{ $j->jabatan_id }}"> <br/>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Jabatan" value="{{ $j ->jabatan_nama }}" required>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Gaji jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" name="gaji" class="form-control" id="nama" placeholder="Jabatan" value="{{ $j ->jabatan_gaji }}" required>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Deskripsi jabatan</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="deskripsi" class="form-control" id="nama" placeholder="Deskripsi Jabatan"  required>{{ $j ->jabatan_deskripsi }}</textarea>

                        </div>
                    </div>

                   
                   
                    <div class="form-actions">
                        <a href="/jabatan" class="btn btn-info mt-2"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-success mt-2"> <i class="fa fa-check"></i> Simpan</button>
                        <button type="reset" class="btn btn-danger mt-2"><i class="fa fa-times"></i> Hapus</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Content Row -->


    </div>
    <!-- /.container-fluid -->

    </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


@endsection