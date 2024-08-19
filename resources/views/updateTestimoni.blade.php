@extends('layouts.main')

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">
            Form Edit Testimoni
        </h4>
    </div>
</div>
<div class="row">
        <div class="col col-xl-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div style="overflow-x: auto">
                        <Form action="/testimoni/updatePost/{{$getTestimoni->id}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Asal</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$getTestimoni->name}}" />
                            </div>
                            <div class="mb-3">
                                <label for="testimoni" class="form-label">testimoni</label>
                                <input type="text" class="form-control" id="testimoni" name="testimoni" value="{{$getTestimoni->testimoni}}" />
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </Form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection