@extends('layouts.front')

{{-- @section('title', '') --}}

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mb-3">
            <h2>
                Portofolio
            </h2>
        </div>
        <div>
            <a href={{ route('portofolio.create') }} class="btn btn-success">
                Bikin Portofolio Baru
            </a>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <th>
                    Title    
                </th>
                <th>
                    Category
                </th>
                <th>
                    Actions
                </th>
            </tr>
            @foreach ($portofolios as $portofolio)
            <tr>
                <td>
                    {{ $portofolio->title }}
                </td>
                <td>
                    {{ $portofolio->category->name }}
                </td>
                <td>
                    <a href="" class="btn btn-info">
                        Detail
                    </a>
                    <a href="#" class="btn btn-primary">
                        Update
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $portofolios->links() !!}
    </div>
</div>
@endsection