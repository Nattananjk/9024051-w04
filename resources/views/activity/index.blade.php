@extends('../layouts.app')

@section('title','ebd-w04 - Activities')

@section('header')
    <h1 class="text-center text-4xl text-red-600 my-4">Activities (กิจกรรม)</h1>
@endsection

@section('content')
    <div class="container mx-auto">
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ชื่อกิจกรรม</th>
                        <th>วันที่จัดกิจกรรม</th>
                        <th>ชุมชน</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($activities as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->activity_name }}</td>
                        <td>{{ $item->activity_date }}</td>
                        <td>{{ $item->community->community_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
