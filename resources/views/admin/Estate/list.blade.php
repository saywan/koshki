@extends('admin.layout.Admin')
@section('styles')


  {{--  <link rel="stylesheet" type="text/css" href="{{asset("panel/vendors/css/tables/datatable/dataTables.bootstrap5.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("panel/vendors/css/tables/datatable/responsive.bootstrap5.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("panel/vendors/css/tables/datatable/buttons.bootstrap5.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("panel/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css")}}">--}}


    <link rel="stylesheet" type="text/css" href="{{asset("panel/js/datatables/datatables.min.css")}}">




@endsection
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">
                                List Estate
                            </h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('admin/index')}}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Estate</a>
                                    </li>
                                    <li class="breadcrumb-item active">List Estate
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                                            href="app-todo.html"><i class="me-1"
                                                                                                    data-feather="check-square"></i><span
                                        class="align-middle">Todo</span></a><a class="dropdown-item"
                                                                               href="app-chat.html"><i class="me-1"
                                                                                                       data-feather="message-square"></i><span
                                        class="align-middle">Chat</span></a><a class="dropdown-item"
                                                                               href="app-email.html"><i class="me-1"
                                                                                                        data-feather="mail"></i><span
                                        class="align-middle">Email</span></a><a class="dropdown-item"
                                                                                href="app-calendar.html"><i class="me-1"
                                                                                                            data-feather="calendar"></i><span
                                        class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <div class="row" id="app">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>
                                   List Estate
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                        <thead>
                                        <tr>
                                            <th>Row</th>
                                            <th>userId </th>
                                            <th> Estate Type </th>
                                            <th>Region </th>
                                            <th>Owner Estate </th>
                                            <th> Phone </th>
                                            <th>  Total Area  </th>
                                            <th>  Area under construction </th>
                                            <th>Property position</th>
                                            <th>  Price </th>
                                            <th>Property condition </th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $i=1;
                                        @endphp
                                        @foreach($estate as $itemtyoe)
                                            @php
                                                $today = strtotime(date("m/d/Y"));
                                                $other_date = strtotime(date("m/d/Y"));
                                                $diff =ceil(abs($today - $other_date)   / (60*60*24));
                                            @endphp
                                            <tr>
                                                <td>{{$itemtyoe->id}}</td>
                                                <td>{{\App\Helpers\Helper::GetInfoUser($itemtyoe->userId)->username}}</td>
                                                <td>
                                                    {{\App\Helpers\Helper::GetInfoEstateType($itemtyoe->EstateTypeId)}}

                                                </td>
                                                <td>
                                                    {{\App\Helpers\Helper::GetInfoRegion($itemtyoe->RegionId)}}
                                                </td>
                                                <td>{{$itemtyoe->fullname}}</td>
                                                <td><a href="tel:{{$itemtyoe->MobileNumber}}"><u>{{$itemtyoe->MobileNumber}}</u></a></td>
                                                <td>{{$itemtyoe->LandTotalSquare}}</td>
                                                <td>{{$itemtyoe->SquareFootage}}</td>
                                                <td>{{\App\Helpers\Helper::GetIdPosition($itemtyoe->position_adv)}}</td>
                                                <td>
                                                    @if($itemtyoe->advType =='sale')
                                                        {{number_format($itemtyoe->price)}}
                                                    @elseif($itemtyoe->advType =='rent')
                                                        Mortgage price:
                                                        {{ empty(number_format($itemtyoe->price_rahan)) ? $itemtyoe->price_rahan : ''  }}
                                                        Rental price:
                                                        {{ empty(number_format($itemtyoe->RentAmount)) ? $itemtyoe->RentAmount : ''  }}

                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="col-md-3 m-t-b-20">

                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-primary">
                                                                @if($itemtyoe->status=='sale')
                                                                    Sale
                                                                @elseif($itemtyoe->status =='rent')
                                                                    rent

                                                                @elseif($itemtyoe->status =='presell')
                                                                    presell
                                                                @elseif($itemtyoe->status =='')
                                                                    exhange
                                                                @endif
                                                            </button>
                                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <span class="visually-hidden">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" @click="ChangeStatusEstateUser({{$itemtyoe->id}},'sale')">
                                                                    sale

                                                                </a>
                                                                <a class="dropdown-item" @click="ChangeStatusEstateUser({{$itemtyoe->id}},'rent')">
                                                                    rent
                                                                </a>
                                                                <a class="dropdown-item" @click="ChangeStatusEstateUser({{$itemtyoe->id}},'presell')">
                                                                    presell
                                                                </a>
                                                                <a class="dropdown-item" @click="ChangeStatusEstate({{$itemtyoe->id}},'exhange')">
                                                                    exhange
                                                                </a>
                                                            </div>
                                                        </div>








                                                    </div>



                                                </td>





                                                <td >

                                                <!--                                    <button v-on:click="RemoveEstate({{$itemtyoe->id}})" type="button" class="btn btn-info btn-floating" data-container="body" data-toggle="tooltip" data-original-title="حذف"  data-placement="top"  data-original-title="" title="" aria-describedby="popover116211">
                                        <i class="ti-trash"></i>

                                    </button>-->


                                                    <a href="{{url('admin/DeleteEstate/'.$itemtyoe->id)}}"   class="btn btn-danger btn-floating" data-container="body" data-toggle="tooltip" data-placement="top" data-toggle="tooltip" data-original-title=" حذف ملک " aria-describedby="popover116211">
                                                        <i data-feather='trash'></i>
                                                    </a>
                                                <!--                                <a href="{{url('admin/DeleteEstate/'.$itemtyoe->id)}}"   class="btn btn-danger btn-floating" data-container="body" data-toggle="tooltip" data-placement="top" data-toggle="tooltip" data-original-title=" حذف ملک " aria-describedby="popover116211">
                                        <i class="ti-trash"></i>
                                    </a>-->

                                                    <a href="{{url('admin/Estate/edit/'.$itemtyoe->id)}}"   class="btn btn-success btn-floating" data-container="body" data-toggle="tooltip" data-placement="top" data-toggle="tooltip" data-original-title=" مشاهده اطلاعات ملک " aria-describedby="popover116211">
                                                        <i data-feather='edit'></i>
                                                    </a>


                                                </td>
                                            </tr>

                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('scripts')


{{--    <script src="{{asset("panel/vendors/js/vendors.min.js")}}"></script>
    <script src="{{asset("panel/vendors/js/forms/select/select2.full.min.js")}}"></script>
    <script src="{{asset("panel/vendors/js/tables/datatable/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("panel/vendors/js/tables/datatable/dataTables.bootstrap5.min.js")}}"></script>
    <script src="{{asset("panel/vendors/js/tables/datatable/dataTables.responsive.min.js")}}"></script>
    <script src="{{asset("panel/vendors/js/tables/datatable/responsive.bootstrap5.js")}}"></script>
    <script src="{{asset("panel/vendors/js/tables/datatable/datatables.buttons.min.js")}}"></script>
    <script src="{{asset("panel/vendors/js/tables/datatable/jszip.min.js")}}"></script>
    <script src="{{asset("panel/vendors/js/tables/datatable/pdfmake.min.js")}}"></script>
    <script src="{{asset("panel/vendors/js/tables/datatable/vfs_fonts.js")}}"></script>
    <script src="{{asset("panel/vendors/js/tables/datatable/buttons.html5.min.js")}}"></script>
    <script src="{{asset("panel/vendors/js/tables/datatable/buttons.print.min.js")}}"></script>
    <script src="{{asset("panel/vendors/js/tables/datatable/dataTables.rowGroup.min.js")}}"></script>
    <script src="{{asset("panel/vendors/js/forms/validation/jquery.validate.min.js")}}"></script>
    <script src="{{asset("panel/vendors/js/forms/cleave/cleave.min.js")}}"></script>
    <script src="{{asset("panel/vendors/js/forms/cleave/addons/cleave-phone.us.js")}}"></script>
    <script src="{{asset("panel/js/scripts/pages/app-user-list.min.js")}}"></script>--}}


<script src="{{asset("panel/js/datatables/datatables.min.js")}}"></script>
<script src="{{asset("panel/js/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("panel/js/datatables/export-tables/dataTables.buttons.min.js")}}"></script>
<script src="{{asset("panel/js/datatables/export-tables/buttons.flash.min.js")}}"></script>
<script src="{{asset("panel/js/datatables/export-tables/jszip.min.js")}}"></script>
<script src="{{asset("panel/js/datatables/export-tables/pdfmake.min.js")}}"></script>
<script src="{{asset("panel/js/datatables/export-tables/vfs_fonts.js")}}"></script>
<script src="{{asset("panel/js/datatables/export-tables/buttons.print.min.js")}}"></script>
<script src="{{asset("panel/js/datatables/page/datatables.js")}}"></script>



@endsection


