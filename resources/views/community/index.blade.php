@extends('../layouts.app')

@section('title','ebd-w04 - Community')

@section('header')
    <h1 class="text-center text-4xl text-red-600 my-4">Community (ชุมชน)</h1>
@endsection

@section('content')
    <div class="container mx-auto">
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ชื่อชุมชน</th>
                        <th>ที่ตั้ง</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($communities as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->community_name }}</td>
                        <td>{{ $item->community_location }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
