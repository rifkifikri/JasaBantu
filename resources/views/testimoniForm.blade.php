@extends('layouts.main')

@section('content')
<div id="create-form">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">
                Form Tambah Testimoni
            </h4>
        </div>
    </div>
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @elseif(session()->has('gagal'))
            <div class="alert alert-danger">
                {{ session()->get('gagal') }}
            </div>
        @endif
    <div class="row">
            <div class="col col-xl-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div style="overflow-x: auto">
                            <Form action="/testimoni/post" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Asal</label>
                                    <input type="text" class="form-control" id="name" name="name" />
                                </div>
                                <div class="mb-3">
                                    <label for="testimoni" class="form-label">testimoni</label>
                                    <input type="text" class="form-control" id="testimoni" name="testimoni" />
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="daftarTestimoni"><button type="button" class="btn btn-danger">Back</button></a>
                                    
                                </div>
                                <div>
                                    
                                </div>
                            </Form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection

<script>
    //button create post event
    $('body').on('click', '#btn-create-form', function () {

    //open modal
    $('#create-form').modal('show');
    });
</script>