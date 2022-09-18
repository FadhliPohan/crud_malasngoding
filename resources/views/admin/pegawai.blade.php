@extends('layout.main')
@section('container')
    
             <!-- Begin Page Content -->
             <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Data Pegawai</h1>
                <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                    For more information about DataTables, please visit the <a target="_blank"
                        href="https://datatables.net">official DataTables documentation</a>.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Tabel Pegawai</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="mb-2">
                                <a href="/pegawai/create" class="btn btn-primary">Tambah Pegawai <i class="fas fa-fw fa-plus-circle"></i> </a>
                            </div>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Umur</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Umur</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($pegawai as $p)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $p->pegawai_nama }}</td>
                                        <td>{{ $p->pegawai_jabatan }}</td>
                                        <td>{{ $p->pegawai_umur }}</td>
                                        <td>{{ $p->pegawai_alamat }}</td>
                                        <td>	
                                            <a href="/pegawai/edit-{{ $p->pegawai_id }}">Edit</a>
                                            |
                                            <a href="/pegawai/delete-{{ $p->pegawai_id }}">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

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

   