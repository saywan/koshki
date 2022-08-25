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
                                @lang('messages.Amenities')
                            </h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('admin/index')}}"> @lang('messages.House')</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#"> @lang('messages.Amenities')</a>
                                    </li>
                                    <li class="breadcrumb-item active"> @lang('messages.Amenities')
                                    </li>
                                </ol>
                            </div>
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
                                    @lang('messages.Amenities')
                                </h4>
                                <button type="button" class="btn light btn-success" data-toggle="modal" data-target="#AddRegion">
                                    @lang('messages.Amenities')
                                </button>

                                <div class="modal fade bd-example-modal-lg" id="AddRegion" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    @lang('messages.Amenities')
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="basic-form">


                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>
                                                                @lang('messages.Amenities')
                                                            </label>
                                                            <input type="text" class="form-control"  value=""     v-model="NamePossibity">
                                                        </div>

                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>
                                                                @lang('messages.Amenities')
                                                            </label>
                                                            <input type="text" class="form-control" id="kurdishname" name="kurdishname">
                                                        </div>

                                                    </div>

                                                    <br>
                                                    <button type="submit" class="btn btn-primary" v-on:click="AddPossibilities()">
                                                        @lang('messages.save')
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
                                            <th> @lang('messages.Row')</th>
                                            <th> @lang('messages.Amenities')</th>
                                            <th> @lang('messages.Amenities')</th>
                                            <th> @lang('messages.access')</th>

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
                                                            <a href="#" class="btn btn-success btn-floating"  data-toggle="modal" data-target=".bd-example-modal-lg{{$itemregion->id}}">
                                                                <i data-feather='edit'></i>
                                                            </a>
                                                            <a href="#"  v-on:click="DeletePossibilities({{$itemregion->id}})" class="btn btn-danger btn-floating">
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
                                                            Edit property features
                                                            <strong class="badge badge-warning">{{$itemregion->Name}}  </strong>
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="basic-form">

                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Name of property facilities</label>

                                                                    <input type="text" class="form-control"  value="{{$itemregion->Name}}"   id="NamePossibilities-{{$itemregion->id}}"  name="NamePossibilities" >

                                                                   {{-- <input type="text" class="form-control"  value="{{$itemregion->Name}}"  @keyup="DateInputNew('NamePossibilities',$event)"  >--}}
                                                                </div>

                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Name of property facilities</label>

                                                                    <input type="text" class="form-control"  value="{{$itemregion->kurdishname}}" id="kurdishnameedit-{{$itemregion->id}}"  name="kurdishnameedit" >
                                                                {{--    <input type="text" class="form-control"  value="{{$itemregion->Name}}"  @keyup="DateInputNew('NamePossibilities',$event)"  >--}}
                                                                </div>

                                                            </div>
                                                            <br>
                                                            <button type="submit" class="btn btn-primary" v-on:click="EditFacilities({{$itemregion->id}})">
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


