@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between" style="font-family: 'Noto Sans Thai', sans-serif;">
                    <h3 class="mb-sm-0" style="font-family: 'Noto Sans Thai', sans-serif;"><b>ประเภทห้องทั้งหมด</b></h3>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">ตาราง</a></li>
                            <li class="breadcrumb-item active">ข้อมูลประเภทห้องพัก</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" style="font-family: 'Noto Sans Thai', sans-serif;">

                        <h4 class="card-title" style="font-family: 'Noto Sans Thai', sans-serif;"><b>ประเภทห้องพัก</b></h4>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>รหัส</th>
                                <th>ประเภทห้อง</th>
                                <th>ราคา</th>
                                <th>หมายเหตุ</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if ($data)
                                    @foreach ($data as $d )
                                    <tr>
                                        <td>{{$d->id}}</td>
                                        <td>{{$d->room_type}}</td>
                                        <td>{{$d->room_price}}</td>
                                        <td>
                                            <a href="{{url('roomtype/'.$d->id.'/edit')}}" class="btn btn-info sm" title="แก้ไข"><i class="fas fa-edit"></i></a>
                                            <a method="delete" style="font-family: 'Noto Sans Thai', sans-serif;" href="{{url('roomtype/'.$d->id.'/delete')}}" class="btn btn-danger sm" title="ลบ" id="delete"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection
