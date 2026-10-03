@extends('../layouts.app')

@section('title','ebd-w04 - Title')

@section('header')
    <h1 class="text-center text-4xl text-red-600 my-4">Title (คำนำหน้าชื่อ)</h1>
@endsection

@section('content')
    <div class="container mx-auto">
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>คำนำหน้าชื่อ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($titles as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
