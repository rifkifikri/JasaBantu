@extends('layouts.main')
<title>Super Admin</title>
@section('content')
               
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">
            Welcome to Dashboard Admin Jasa Bantu
        </h4>
    </div> 
</div>
<div class="row">
        <div class="col col-xl-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div style="overflow-x: auto">
                         <!-- Notifikasi -->
                        
                            <x-notify::notify />
                        @notifyJs
                        <!-- EndNotifikasi -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
