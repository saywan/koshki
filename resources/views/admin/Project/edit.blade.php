@extends('admin.layout.Admin')
@section('styles')


    {{--  <link rel="stylesheet" type="text/css" href="{{asset("panel/vendors/css/tables/datatable/dataTables.bootstrap5.min.css")}}">
      <link rel="stylesheet" type="text/css" href="{{asset("panel/vendors/css/tables/datatable/responsive.bootstrap5.min.css")}}">
      <link rel="stylesheet" type="text/css" href="{{asset("panel/vendors/css/tables/datatable/buttons.bootstrap5.min.css")}}">
      <link rel="stylesheet" type="text/css" href="{{asset("panel/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css")}}">--}}


    <link rel="stylesheet" type="text/css" href="{{asset("panel/vendors/css/forms/select/select2.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("panel/vendors/css/file-uploaders/dropzone.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("panel/css/plugins/forms/form-file-uploader.min.css")}}">




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
                               @lang('messages.Project')
                            </h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('admin/index')}}">@lang('messages.House')</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">  @lang('messages.Project')</a>
                                    </li>
                                    <li class="breadcrumb-item active">@lang('messages.Project')
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
                            <div class="card-body">
                                <h6 class="card-title">
                                    @lang('messages.Project')
                                </h6>
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                           role="tab" aria-controls="home" aria-selected="true">
                                            @lang('messages.BasicInformation')
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                           role="tab" aria-controls="profile" aria-selected="false">
                                            @lang('messages.Amenities')
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#posiibiliesVIP"
                                           role="tab" aria-controls="profile" aria-selected="false">
                                            @lang('messages.Ownerinformation')
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="image-tab" data-toggle="tab" href="#image" role="tab"
                                           aria-controls="image" aria-selected="false">
                                            @lang('messages.PropertyImages')
                                        </a>
                                    </li>


                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                         aria-labelledby="home-tab">

                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label for="inputEmail4">
                                                    @lang('messages.ProjectName')
                                                </label>

                                                <input type="text" class="form-control text-left"
                                                       data-value="ProjectName" id="ProjectName"
                                                       value="{{$estateinfo->projectTitle}}"
                                                       placeholder="@lang('messages.ProjectName')" dir="ltr"
                                                       required>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputEmail4">
                                                    @lang('messages.Region')
                                                </label>
                                                <select id="regionselect" class="select2">
                                                    <option disabled>Choose</option>
                                                    @foreach($region as $itemregion)
                                                        <option
                                                            @if( $itemregion->id == $estateinfo->RegionId ) selected="selected"
                                                            @endif value="{{$itemregion->id}}">
                                                            {{$itemregion->Name}}  |     {{$itemregion->kurdishname}}
                                                        </option>
                                                    @endforeach


                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputEmail4">
                                                    @lang('messages.PropertyType')
                                                </label>
                                                <select id="estatetype" class="select2">
                                                    <option disabled>choose</option>
                                                    @foreach($estatetype as $itemestatetype)
                                                        <option
                                                            @if( $itemestatetype->id == $estateinfo->EstateTypeId ) selected="selected"
                                                            @endif value="{{$itemestatetype->id}}">
                                                            {{$itemestatetype->Name}}  |     {{$itemestatetype->kurdishname}}
                                                        </option>
                                                    @endforeach


                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputEmail4">
                                                    @lang('messages.Postion')

                                                </label>
                                                <select id="position_type" class="select2">
                                                    <option disabled>choose</option>
                                                    @foreach($position as $itemePosition)
                                                        <option
                                                            @if( $itemePosition->id == $estateinfo->position_adv ) selected="selected"
                                                            @endif value="{{$itemePosition->id}}">
                                                            {{ $itemePosition->Name }}
                                                        </option>
                                                    @endforeach


                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputEmail4">

                                                    @lang('messages.Commercial')
                                                </label>
                                                <select id="usagetype" class="select2">
                                                    <option disabled>choose</option>
                                                    @foreach($usagetype as $itemeUsage)
                                                        <option
                                                            @if( $itemeUsage->id == $estateinfo->UsageTypeId ) selected="selected"
                                                            @endif value="{{$itemeUsage->id}}">
                                                            {{$itemeUsage->name}}  |     {{$itemeUsage->kurdishname}}
                                                        </option>
                                                    @endforeach


                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputEmail4">

                                                    Onwership Tyoe
                                                </label>
                                                <select id="ownership" class="select2">
                                                    <option disabled>choose</option>
                                                    @foreach($ownership as $itemeOwnership)
                                                        <option
                                                            @if( $itemeOwnership->id == $estateinfo->OwenershipTypeId ) selected="selected"
                                                            @endif value="{{$itemeOwnership->id}}">
                                                            {{ $itemeOwnership->Name }}
                                                        </option>
                                                    @endforeach


                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="LandTotalSquare">
                                                    @lang('messages.Area')
                                                </label>

                                                <input type="text" class="form-control text-left"
                                                       data-value="LandTotalSquare" id="LandTotalSquare"
                                                       value="{{$estateinfo->LandTotalSquare}}" dir="rtl"
                                                       name="LandTotalSquare">

                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="SquareFootage">
                                                    @lang('messages.Area')
                                                </label>
                                                <input type="text" class="form-control text-left"
                                                       data-value="SquareFootage" id="SquareFootage"
                                                       value="{{$estateinfo->SquareFootage}}"
                                                       aria-describedby="validationTooltipUsernamePrepend" dir="rtl"
                                                       required>

                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="validationTooltipSquare">
                                                    @lang('messages.beds')
                                                </label>
                                                <input type="text" class="form-control text-left"
                                                       data-value="RoomNumber" id="RoomNumber"
                                                       value="{{$estateinfo->RoomNumber}}" placeholder="Number of rooms"
                                                       aria-describedby="validationTooltipUsernamePrepend" dir="ltr"
                                                       required>

                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="floor">
                                                    Total number of floors

                                                </label>
                                                <input type="text" class="form-control text-left" data-value="floor"
                                                       id="floor" value="{{$estateinfo->totalfloor}}"
                                                       aria-describedby="validationTooltipUsernamePrepend" dir="ltr"
                                                       required name="floor">

                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="unit">
                                                    The desired floor
                                                </label>
                                                <input type="text" class="form-control text-left" data-value="unit"
                                                       id="unit" value="{{$estateinfo->floor}}"
                                                       aria-describedby="validationTooltipUsernamePrepend" dir="ltr"
                                                       required name="unit">

                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="unitfloor">
                                                    Number of units per floor
                                                </label>
                                                <input type="text" class="form-control text-left" data-value="unitfloor"
                                                       id="unitfloor" name="unitfloor"
                                                       value="{{$estateinfo->totlaunitprefloor}}"
                                                       aria-describedby="validationTooltipUsernamePrepend" dir="ltr"
                                                       required>

                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="unitnumber">
                                                    Single number on the floor
                                                </label>
                                                <input type="text" class="form-control text-left"
                                                       data-value="unitnumber" id="unitnumber"
                                                       value="{{$estateinfo->unitnumber}}"
                                                       aria-describedby="validationTooltipUsernamePrepend" dir="ltr"
                                                       required>

                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="yearmade">
                                                    Year of construction of the property
                                                </label>
                                                <input type="text" class="form-control text-left" data-value="yearmade"
                                                       id="yearmade" value="{{$estateinfo->yearmade}}"
                                                       aria-describedby="validationTooltipUsernamePrepend" id="yearmade"
                                                       dir="ltr" required>

                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="fullname">
                                                    @lang('messages.Ownerinformation')
                                                </label>
                                                <input type="text" class="form-control text-left" data-value="fullname"
                                                       id="fullname" name="fullname" value="{{$estateinfo->fullname}}"
                                                       aria-describedby="validationTooltipUsernamePrepend" dir="ltr"
                                                       required>

                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="MobileNumber">
                                                    @lang('messages.Phone')
                                                </label>
                                                <input type="text" class="form-control text-left"
                                                       data-value="MobileNumber" id="MobileNumber" name="MobileNumber"
                                                       value="{{$estateinfo->MobileNumber}}"
                                                       aria-describedby="validationTooltipUsernamePrepend" dir="ltr"
                                                       required>

                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputEmail4">
                                                    @lang('messages.Purpose')
                                                </label>
                                                <select id="typeAdv" class="form-control">
                                                    <option disabled>choose</option>
                                                    @if($estateinfo->advType =='rent')
                                                        <option value="sale">  @lang('messages.sale')</option>
                                                        <option value="rent" selected>  @lang('messages.RENT')</option>

                                                    @elseif($estateinfo->advType =='sale')
                                                        <option value="sale" selected>@lang('messages.sale')</option>
                                                        <option value="rent">  @lang('messages.RENT')</option>



                                                    @endif


                                                </select>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="form-group col-md-3">
                                                <label for="price">
                                                    @lang('messages.Price')
                                                </label>
                                                <input type="text" class="form-control text-left currency"
                                                       data-value="price" id="price" name="price"
                                                       value="{{$estateinfo->price}}"
                                                       aria-describedby="validationTooltipUsernamePrepend" dir="ltr"
                                                       required>

                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="price_rahan">
                                                    @lang('messages.Area')
                                                </label>
                                                <input type="text" class="form-control text-left currency3"
                                                       data-value="price_rahan" value="{{$estateinfo->price_rahan}}"
                                                       id="price_rahan" name="price_rahan" placeholder=" "
                                                       aria-describedby="validationTooltipUsernamePrepend" dir="ltr"
                                                       required>

                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="RentAmount">
                                                    @lang('messages.RENT')
                                                </label>
                                                <input type="text" class="form-control text-left currency4"
                                                       data-value="RentAmount" value="{{$estateinfo->RentAmount}}"
                                                       id="RentAmount"
                                                       aria-describedby="validationTooltipUsernamePrepend" dir="ltr"
                                                       required>

                                            </div>
                                            <div class="form-group col-md-3">

                                                <label for="validationTooltipSquare">
                                                    Does the property in question have a loan?
                                                </label>

                                                <select id="loan" class="select2">

                                                    <option disabled>choose</option>
                                                    @if($estateinfo->loan == 1)
                                                        <option value="1" selected>Yes</option>
                                                        <option value="0">No</option>
                                                    @elseif($estateinfo->loan == 0)
                                                        <option value="1">Yes</option>
                                                        <option value="0" selected>No</option>
                                                    @endif

                                                </select>

                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="loanAmount">
                                                    Loan amount
                                                </label>
                                                <input type="text" class="form-control text-left currency2"
                                                       data-value="loanAmount" id="loanAmount"
                                                       value="{{$estateinfo->loanAmount}}"
                                                       aria-describedby="validationTooltipUsernamePrepend" dir="ltr"
                                                       required>

                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="ComplimentalDescription">
                                                    @lang('messages.Details')
                                                </label>

                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                          required data-value="textNote" name="textNote"
                                                          id="textNote">{{strip_tags($estateinfo->ComplimentalDescription)}}</textarea>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Address">
                                                @lang('messages.Address')
                                            </label>
                                            <input type="text" class="form-control text-left" data-value="Address"
                                                   id="Address" value="{{$estateinfo->Address}}"
                                                   aria-describedby="validationTooltipUsernamePrepend" dir="ltr"
                                                   required name="Address">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="Address">
                                                @lang('messages.AddressKurdish')
                                            </label>
                                            <input type="text" class="form-control text-left" data-value="address_ku"
                                                   id="address_ku" value="{{$estateinfo->address_ku}}"
                                                   aria-describedby="validationTooltipUsernamePrepend" dir="ltr"
                                                   required name="address_ku">
                                        </div>
                                        <br>

                                        <button v-on:click="EditProject({{$estateinfo->id}},'admin')" type="button"
                                                class="btn btn-primary">
                                            @lang('messages.save')
                                        </button>

                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                         aria-labelledby="profile-tab">
                                        <button type="button" class="btn btn-outline-warning btn-pulse"
                                                data-toggle="modal" data-target="#exampleModal"
                                                data-whatever="Register other peripherals ">
                                            <i class="ti-plus"></i>
                                            @lang('messages.Amenities')
                                        </button>
                                        <div class="row ">

                                            <div class="col-md-6">

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="table-responsive">

                                                            @foreach($possibiliesId as $itempo)

                                                                {{\App\Helpers\Helper::GetPossibitiesEstate($itempo->PossibilityId)}}

                                                            @endforeach
                                                            {{--{{\App\Helpers\Helper::GetPossibitiesEstate()}}--}}
                                                            {{--@foreach($possibiliesId as $itemPossibilies)
                                                            <div class="form-group">
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck{{$itemPossibilies->id}}" value="{{$itemPossibilies->id}}" >

                                                                    <label class="form-check-label" for="exampleCheck{{$itemPossibilies->id}}">

                                                                        {{$itemPossibilies->Name}}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            @endforeach--}}
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">
                                                                        @lang('messages.title')
                                                                    </th>
                                                                    <th scope="col">
                                                                        @lang('messages.access')
                                                                    </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>

                                                                @php
                                                                    $i=1;
                                                                @endphp

                                                                @if(count($possibiliesId) > 0)
                                                                    @foreach($possibiliesId as $itemimage)
                                                                        <tr>
                                                                            <th scope="row">{{$i++}}</th>
                                                                            <th>

                                                                                {{\App\Helpers\Helper::GetNamePoossibities($itemimage->PossibilityId)}}
                                                                            </th>

                                                                            <td>
                                                                                <button
                                                                                    @click="DeletePossibilitiesEstate({{$itemimage->id}},'admin')"
                                                                                    type="button"
                                                                                    class="btn btn-info btn-floating"
                                                                                    data-container="body"
                                                                                    data-toggle="tooltip"
                                                                                    data-original-title="Delete"
                                                                                    data-placement="top"
                                                                                    data-original-title="" title=""
                                                                                    aria-describedby="popover116211">
                                                                                    <i data-feather='trash'></i>
                                                                                </button>
                                                                            </td>

                                                                        </tr>
                                                                    @endforeach
                                                                @else
                                                                    <tr>
                                                                        No photos found for this property
                                                                    </tr>
                                                                @endif
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1"
                                                 role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-xl" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                @lang('messages.Amenities')
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="بستن">
                                                                <i class="ti-close"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>

                                                                <div class="col-md-12">
                                                                    <div class="featuresw">

                                                                        <p class="uppercase m-2 fw-500">
                                                                            @lang('messages.Amenities')
                                                                        </p>


                                                                        <div class="itemsdetails">
                                                                            <ul id="Possibilies" name="name">
                                                                                @foreach($listPosi as $itemPossibilies)

                                                                                    <li data-val="{{$itemPossibilies->id}}">  {{$itemPossibilies->Name}}
                                                                                    </li>


                                                                                    {{-- <input type="checkbox" class="mdc-checkbox__native-control form-check-input" name="Possibilies[]" id="Possibilies{{$itemPossibilies->id}}"  value="{{$itemPossibilies->id}}"/>

                                                                                    <div class="mdc-checkbox__background">
                                                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                                                        </svg>
                                                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                                                    </div>
                                                                                    <div class="mdc-checkbox__ripple"></div>
                                                                            </div>
                                                                            <label for="air-conditioning{{$itemPossibilies->id}}">
                                                                                {{$itemPossibilies->Name}}
                                                                            </label>--}}

                                                                                    {{--   <a class="chip" href="/s/tehran/personal-goods">وسایل
                                                                                    </a>--}}




                                                                                @endforeach
                                                                            </ul>
                                                                            <input type="hidden" name="Posselected"
                                                                                   id="Posselected">
                                                                        </div>

                                                                    </div>
                                                                </div>


                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close
                                                            </button>
                                                            <button
                                                                v-on:click="AddPossibilitiesToEstate({{$estateinfoId}},'Admin')"
                                                                type="submit" class="btn btn-primary">

                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="posiibiliesVIP" role="tabpanel"
                                         aria-labelledby="contact-tab">
                                        <div class="row ">
                                            <div class="col-md-3 m-t-b-20">
                                                <div class="dropdown">

                                                    <button class="btn btn-success dropdown-toggle" type="button"
                                                            data-toggle="dropdown">
                                                        @if( $estateinfo->elevator ==1)

                                                            @lang('messages.YesElevator')

                                                        @else

                                                            @lang('messages.NoElevator')

                                                        @endif
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                           @click="ChangeElevator('admin',{{$estateinfo->id}},1)">@lang('messages.Yes')</a>
                                                        <a class="dropdown-item"
                                                           @click="ChangeElevator('admin',{{$estateinfo->id}},0)">@lang('messages.No') </a>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3 m-t-b-20">
                                                <div class="dropdown">
                                                    <button class="btn btn-success dropdown-toggle" type="button"
                                                            data-toggle="dropdown">
                                                        @if( $estateinfo->parking ==1)

                                                            @lang('messages.Yesparking')
                                                        @else
                                                            @lang('messages.Noparking')
                                                        @endif
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                           @click="ChangeParking('admin',{{$estateinfo->id}},1)"> @lang('messages.Yes')</a>
                                                        <a class="dropdown-item"
                                                           @click="ChangeParking('admin',{{$estateinfo->id}},0)"> @lang('messages.No') </a>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3 m-t-b-20">
                                                <div class="dropdown">
                                                    <button class="btn btn-success dropdown-toggle" type="button"
                                                            data-toggle="dropdown">
                                                        @if( $estateinfo->warehouse ==1)

                                                            It has a warehouse

                                                        @else

                                                            There is no warehouse
                                                        @endif
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                           @click="ChangeWarehouse('admin',{{$estateinfo->id}},1)">Yes</a>
                                                        <a class="dropdown-item"
                                                           @click="ChangeWarehouse('admin',{{$estateinfo->id}},0)">No </a>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-3 m-t-b-20">
                                                <div class="dropdown">
                                                    <button class="btn btn-success dropdown-toggle" type="button"
                                                            data-toggle="dropdown">
                                                        @if( $estateinfo->Balcony ==1)
                                                           @lang('messages.YesBalcony')
                                                        @else
                                                            @lang('messages.NoBalcony')
                                                        @endif
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                           @click="ChangeBalcony('admin',{{$estateinfo->id}},1)"> @lang('messages.Yes')</a>
                                                        <a class="dropdown-item"
                                                           @click="ChangeBalcony('admin',{{$estateinfo->id}},0)"> @lang('messages.No') </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="image" role="tabpanel" aria-labelledby="image-tab">
                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col"> @lang('messages.PropertyImages')</th>
                                                                    <th scope="col">download link</th>
                                                                    <th scope="col">@lang('messages.access')</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>

                                                                @php
                                                                    $i=1;
                                                                @endphp

                                                                @if(count($estateImage) > 0)
                                                                    @foreach($estateImage as $itemimage)
                                                                        <tr>
                                                                            <th scope="row">{{$i++}}</th>
                                                                            <th>
                                                                                <figure class="avatar avatar-xl ">
                                                                                    <img
                                                                                        src="{{asset($itemimage->photo)}}"
                                                                                        class="rounded-circle"
                                                                                        alt="image">
                                                                                </figure>
                                                                            </th>
                                                                            <td>
                                                                                <a href="{{url('admin/download/'.$itemimage->id)}}">
                                                                                    Download
                                                                                </a>


                                                                                <i data-feather='download-cloud'></i>

                                                                                </i>

                                                                            </td>
                                                                            <td>
                                                                                <button
                                                                                    v-on:click="DeleteImageEstate({{$itemimage->id}})"
                                                                                    type="button"
                                                                                    class="btn btn-info btn-floating"
                                                                                    data-container="body"
                                                                                    data-toggle="tooltip"
                                                                                    data-original-title="حذف"
                                                                                    data-placement="top"
                                                                                    data-original-title="" title=""
                                                                                    aria-describedby="popover116211">
                                                                                    <i data-feather='trash'></i>
                                                                                </button>
                                                                            </td>

                                                                        </tr>
                                                                    @endforeach
                                                                @else
                                                                    <tr>
                                                                        No photos found for this property
                                                                    </tr>
                                                                @endif
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="card">
                                                    <div class="card-body">
                                                        <h6 class="card-title">
                                                            @lang('messages.PropertyImages')
                                                        </h6>

                                                        {{-- <form action="/admin/uploadImage"  class="dropzone dropzone-area" id="dpz-multiple-files" enctype="multipart/form-data" id="image-upload" method="post">
                                                             {{ csrf_field() }}
                                                             <div class="dz-message" id="multipleFileUpload">
                                                                 <span>فایل را اینجا رها کنید تا آپلود شود</span>
                                                             </div>
                                                             <input type="hidden" value="{{$estateinfoId}}" name="imageId">

                                                             <a id="submit" role="button" class="btn btn-primary" style="width: 100%">Upload</a>

                                                           --}}{{--  <button id="uploadFile" class="btn btn-secondary">Upload Files</button>--}}{{--
                                                         </form>--}}


                                                        <div class="card">
                                                            <div class="card-header">Documents Upload</div>
                                                            <div class="card-body">
                                                                <div class="dropzone" id="multipleFileUpload"></div>
                                                                <hr>
                                                                <a id="submit" role="button" class="btn btn-primary"
                                                                   style="width: 100%">@lang('messages.save')</a>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="DeleteVPN" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            <div class="row ">
                                                <div class="col-md-3 m-t-b-20">
                                                    <button class="btn btn-danger" type="button"
                                                            v-on:click="RemoveEstate('admin',{{$estateinfo->id}})">
                                                        <i data-feather='trash'></i>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
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


            <script src="{{asset("panel/vendors/js/forms/select/select2.full.min.js")}}"></script>
            <script src="{{asset("panel/vendors/js/file-uploaders/dropzone.min.js")}}"></script>
            <script src="{{asset("panel/js/scripts/forms/form-file-uploader.min.js")}}"></script>

            <script src="{{asset("panel/js/scripts/forms/form-select2.min.js")}}"></script>


            <script type="text/javascript">


                Dropzone.autoDiscover = false;
                var myDropzone = new Dropzone("#multipleFileUpload",
                    {
                        url: '{{route("admin.uploadImage")}}',
                        acceptedFiles: ".jpg,.png,.jpeg,application/pdf",
                        maxFiles: 10,
                        addRemoveLinks: true,
                        autoProcessQueue: false,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            'imageId':{{$estateinfoId}}
                        },

                        init: function () {
                            var submitButton = document.querySelector("#submit");

                            myDropzone = this;
                            submitButton.addEventListener("click", function () {

                                myDropzone.processQueue();
                            });

                            this.on('complete', function (data) {


                                if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
                                    var _this = this;
                                    Swal.fire({
                                        icon: "success",
                                        title: "Upload Success",
                                        text: "Image is Upload",
                                        customClass: {confirmButton: "btn btn-success"}
                                    });
                                    _this.removeAllFiles();


                                    setTimeout(function () {
                                        location.reload();
                                    }, 3000);

                                }
                            });
                        }
                    });

            </script>

            <script>
                $(function () {
                    var arr = [];
                    var list_possibi = [];
                    var i = 0;
                    $('.itemsdetails ul li').click(function (e) {
                        if ($(e.target).is('.active')) {
                            $(this).removeClass('active');

                        } else {
                            $(this).addClass('active');

                            arr[i++] = this.getAttribute('data-val');
                            if ($.inArray(this.getAttribute('data-val'), list_possibi) == -1) {
                                list_possibi.push(this.getAttribute('data-val'));
                                $("#Posselected").val(list_possibi.join());

                            }

                        }

                    });
                })
            </script>


@endsection


