@extends('admin.admin_master')
@section('admin')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center" style="font-family: 'Noto Sans Thai', sans-serif;">
                    <div class="col"><br>
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h3 class="mb-sm-0" style="font-family: 'Noto Sans Thai', sans-serif; font-weight: 700;">
                                รายการจองที่พัก</h3>
                            <a href="{{ route('form.bookingcreate') }}"
                                class="btn btn-primary float-right veiwbutton">เพิ่มการจอง</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-table">
                        <div class="card-body booking_card" style="font-family: 'Noto Sans Thai', sans-serif;">
                            <div class="table-responsive">
                                <table class="table table-stripped table table-hover table-center mb-0">
                                    {{-- datatable table table-stripped table table-hover table-center mb-0 --}}
                                    <thead>
                                        <tr>
                                            <th>รหัสการจอง</th>
                                            <th>ชื่อ - นามสกุล</th>
                                            <th>ห้องพัก</th>
                                            <th>ประเภทของห้อง</th>
                                            <th>ราคา</th>
                                            <th>จำนวน</th>
                                            <th>วันที่เข้าพัก</th>
                                            <th>วันที่ออก</th>
                                            <th>อีเมล</th>
                                            <th>เบอร์โทร</th>
                                            <th>วัน/เวลาที่จอง</th>
                                            <th>สถานะ</th>
                                            <th>หมายเหตุ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allBooking as $item)
                                            <tr>
                                                <td>{{ $item->booking_id }}</td>
                                                <td>{{ $item->booking_name }}</td>
                                                <td>{{ $item->room_id }}</td>
                                                <td>{{ $item->room_type }}</td>
                                                <td>{{ $item->room_price }}</td>
                                                <td>{{ $item->total_numbers }}</td>
                                                <td>{{ $item->arrival_date }}</td>
                                                <td>{{ $item->depature_date }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->ph_number }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <div class="actions">
                                                        @if ($item->status = 1)
                                                            <button type="button"
                                                                class="btn btn-outline-warning mr-2" id="fire">รอการยืนยัน</button>
                                                        @else
                                                            <button type="button"
                                                                class="btn btn-outline-success mr-2">ยืนยันแล้ว</button>
                                                        @endif
                                                    </div>
                                                </td>
                                                {{-- <td><div class="">
                                                    <div class="p-3">
                                                        <button type="button" class="btn btn-outline-warning waves-effect waves-light" id="sa-warning">รอการยืนยัน</button>
                                                    </div>
                                                </div></td> --}}
                                                <td class="text-right">
                                                    <a href="{{ route('form.bookingedit',$item->id)}}" class="btn btn-info sm" title="แก้ไข"><i class="fas fa-edit"></i></a>
                                                    <a href="{{ route('delete.record',$item->id)}}" class="btn btn-danger sm" title="ลบข้อมูล" id="delete"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table><br>
                               <div class="row float-end"> {{ $allBooking->links() }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="delete_asset" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50"
                            height="46">
                        <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                        <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>


    <script>
        Swal.fire(
            'The Internet?',
            'That thing is still around?',
            'question'
            )
    </script>

@endsection
