@extends("layouts.front")

@section('content')
<div class="">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action={{ route('session.set') }} method="POST">
        @csrf
        <div>
            <p>Nama: </p>
            <input type="text" name="nama" id="nama" class="form-control"/>
        </div>
        <div>
            <p>Tempat Tinggal</p>
            <input type="text" name="alamat" id="alamat" class="form-control"/>
        </div>
        <div>
            <p>No Telpon</p>
            <input type="text" name="telepon" id="telepon" class="form-control"/>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Submit Data</button>
        </div>
    </form>
</div>
@endsection