@extends('admin.admin_master')
@section('admin')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center" style="font-family: 'Noto Sans Thai', sans-serif;">
                <div class="col"><br>
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">รายการจองที่พัก</h4>
                        <a href="{{ route('form.bookingcreate')}}" class="btn btn-primary float-right veiwbutton">เพิ่มการจอง</a>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body booking_card" style="font-family: 'Noto Sans Thai', sans-serif;">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>รหัสการจอง</th>
                                        <th>ชื่อ - นามสกุล</th>
                                        <th>ประเภทของห้อง</th>
                                        <th>จำนวน</th>
                                        <th>วันที่เข้าพัก</th>
                                        <th>วันที่ออก</th>
                                        <th>อีเมล</th>
                                        <th>เบอร์โทร</th>
                                        <th>วัน/เวลาที่จอง</th>
                                        <th>สถานะ</th>
                                        <th class="text-right">หมายเหตุ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allBooking as $item )
                                        <tr>
                                            <td>{{ $item->booking_id }}</td>
                                            <td>{{ $item->booking_name }}</td>
                                            <td>{{ $item->room_type }}</td>
                                            <td>{{ $item->total_numbers }}</td>
                                            <td>{{ $item->arrival_date }}</td>
                                            <td>{{ $item->depature_date }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->ph_number }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td></td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-booking.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{-- <tr>
                                        <td>BKG-0002</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="User Image"></a>
                                                <a href="profile.html">Richard Brobst <span>#0002</span></a>
                                            </h2>
                                        </td>
                                        <td>Single</td>
                                        <td>8</td>
                                        <td>21-03-2020</td>
                                        <td>09.00 AM</td>
                                        <td>22-03-2020</td>
                                        <td>23-03-2020</td>
                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fd8f949e959c8f999f8f929f8e89bd98859c908d9198d39e9290">[email&#160;protected]</a></td>
                                        <td>830-468-1042</td>
                                        <td>
                                            <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Inactive</a> </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-booking.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
                                            </div>
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="delete_asset" class="modal fade delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50" height="46">
                    <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                    <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
