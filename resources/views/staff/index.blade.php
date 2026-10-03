@extends('../layouts.app')

@section('title','ebd-w04 - Staff')

@section('header')
    <h1 class="text-center text-4xl text-red-600 my-4">Staff (บุคลากร)</h1>
@endsection

@section('content')
    <div class="container mx-auto">
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>คำนำหน้า</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>หน่วยงาน</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($staffs as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title->title_name }}</td>
                        <td>{{ $item->first_name }}</td>
                        <td>{{ $item->last_name }}</td>
                        <td>{{ $item->organization->org_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
