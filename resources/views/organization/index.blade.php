@extends('../layouts.app')

@section('title','ebd-w04 - Organization')

@section('header')
    <h1 class="text-center text-4xl text-red-600 my-4">Organization (หน่วยงาน)</h1>
@endsection

@section('content')
    <div class="container mx-auto">
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ชื่อหน่วยงาน</th>
                        <th>ที่อยู่</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($organizations as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->org_name }}</td>
                        <td>{{ $item->org_address }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
