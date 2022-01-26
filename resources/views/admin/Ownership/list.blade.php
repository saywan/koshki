@extends('admin.layout.Admin')
@section('styles')
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
                                List Ownership
                            </h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('admin/index')}}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Estate</a>
                                    </li>
                                    <li class="breadcrumb-item active">Usage Type Estate
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
                                <h4 class="card-title">
                                  New Ownership
                                </h4>
                                <button type="button" class="btn light btn-success" data-toggle="modal" data-target="#AddRegion">
                                    New Ownership
                                </button>

                                <div class="modal fade bd-example-modal-lg" id="AddRegion" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    New  Ownership
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="basic-form">


                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>
                                                                Name  Ownership
                                                            </label>
                                                            <input type="text" class="form-control"  value=""     v-model="NameOwnership">
                                                        </div>

                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>
                                                                Name  Ownership Kurdish
                                                            </label>

                                                            <input type="text" class="form-control"  name="kurdishname"     id="kurdishname">
                                                        </div>

                                                    </div>

                                                    <br>
                                                    <button type="submit" class="btn btn-primary" v-on:click="AddOwenship()">
                                                     Save
                                                    </button>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="card-body">
                                <div class="card-body">
                                    <table id="example1" class="table table-striped table-bordered" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Row</th>
                                            <th>
                                                Name of property type
                                            </th>
                                            <th>
                                                Name of property type Kurdish
                                            </th>
                                            <th>
                                                 operation
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($ownership))
                                            @php  $i=1; @endphp
                                            @foreach( $ownership as $itemregion)
                                                <tr>

                                                    <td>
                                                        {{ $i++ }}
                                                    </td>
                                                    <td>
                                                        {{ $itemregion->Name }}
                                                    </td>
                                                    <td>
                                                        {{ $itemregion->kurdishname }}
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"  data-toggle="modal" data-target=".bd-example-modal-lg{{$itemregion->id}}">
                                                                <i data-feather='edit'></i>
                                                            </a>
                                                            <a href="#"  v-on:click="DeleteOwnership({{$itemregion->id}})" class="btn btn-danger shadow btn-xs sharp">
                                                                <i data-feather='trash'></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif


                                        </tbody>
                                    </table>

                                    @foreach( $ownership as $itemregion)
                                        <div class="modal fade bd-example-modal-lg{{$itemregion->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">
                                                            Edit ownership type
                                                            <strong class="badge badge-warning">{{$itemregion->Name}}  </strong>
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="basic-form">

                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>
                                                                        Name of property ownership
                                                                    </label>
                                                                    <input type="text" class="form-control"  value="{{$itemregion->Name}}"   id="NameOwenership-{{$itemregion->id}}"  name="NameOwenership" >

                                                              {{--      <input type="text" class="form-control"  value="{{$itemregion->Name}}"  @keyup="DateInputNew('NameOwenership',$event)"  >--}}
                                                                </div>

                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Name of property ownership</label>

                                                                    <input type="text" class="form-control"  value="{{$itemregion->kurdishname}}" id="kurdishnameedit-{{$itemregion->id}}"  name="kurdishnameedit" >


                                                                </div>

                                                            </div>

                                                            <button type="submit" class="btn btn-primary" v-on:click="EditOwenership({{$itemregion->id}})">
                                                                Edit
                                                            </button>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach




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


