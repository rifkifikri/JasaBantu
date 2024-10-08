@extends('layouts.main')

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">
            Daftar Testimoni
        </h4>
    </div>
    
    <div class="d-flex align-items-center flex-wrap text-nowrap">
        <a href="/testimoniForm">
            <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0" id="btn-create-form">
                New
            </button></a>
    </div>
</div>
<div class="row">
    <div class="col col-xl-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <div style="overflow-x: auto">
                    <table id="datatable" class="table table-striped datatable">
                        <thead>
                            <tr>
                                <th style="width:10%;">NO</th>
                                <th>Nama</th>
                                <th>Testimoni</th>
                                <th style="width:10%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testimonis as $testimoni)
                                <tr>
                                    <td>{{$testimoni->id}}</td>
                                    <td>{{$testimoni->name}}</td>
                                    <td>{{$testimoni->testimoni}}</td>
                                    <td>
                                        <a href="/testimoni/update/{{ $testimoni->id }}"><button id="edit-testimoni" class="btn btn-primary btn-icon btn-xs edit-testimoni"> <i class="mdi mdi-pencil" ></i></button></a>
                                        <a href="/testimoni/delete/{{ $testimoni->id }}">
                                        <button id="delete-testimoni" class="btn btn-danger btn-icon btn-xs delete-testimoni"> <i class="mdi mdi-delete"></i></button></a>
                                    </td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection