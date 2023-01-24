<div class="container-fluid">
    <h1 class="h3 text-gray-800 mb-4">Halo, Admin!</h1>
    
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow border-left-warning h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Laporan Masuk
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($data['laporan'])?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-inbox fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow border-left-info h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Petugas
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($data['petugas'])?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>