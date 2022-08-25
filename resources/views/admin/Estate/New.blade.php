@extends('admin.layout.Admin')
@section('styles')
    {{--  <link rel="stylesheet" type="text/css" href="{{asset("panel/vendors/css/forms/wizard/bs-stepper.min.css")}}">--}}

    {{--   <link rel="stylesheet" type="text/css" href="{{asset("panel/css/plugins/forms/form-validation.css")}}">--}}
    {{-- <link rel="stylesheet" type="text/css" href="{{asset("panel/css/plugins/forms/form-wizard.min.css")}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset("panel/js/form-wizard/jquery.steps.css")}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset("panel/js/select2.min.css")}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset("panel/vendors/css/forms/select/select2.min.css")}}">
    <link rel="stylesheet" href="{{asset('panel/vendors/js/prism/prism.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset("panel/js/busy-load/app.min.css")}}">
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">


            </div>
            <div class="content-body"><!-- Horizontal Wizard -->
                <div class="card">
                    <div class="card-body">

                        <div id="wizard2">
                            <h3>
                               @lang('messages.BasicInformation')
                            </h3>
                            <section class="card card-body border mb-0">
                                <h5>
                                    @lang('messages.BasicInformationEsate')
                                </h5>

                                <form id="form1">
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label> @lang('messages.Region') *</label>
                                            <select class="form-control" id="region">
                                                <option value="-1">
                                                    @lang('messages.Region')
                                                </option>
                                                @foreach($region as $itemregin)
                                                    <option value="{{$itemregin->id}}">
                                                        {{$itemregin->Name}}  |     {{$itemregin->kurdishname}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback">
                                             Correct !
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>
                                                @lang('messages.Address')

                                            </label>
                                            <input type="text" class="form-control" placeholder="@lang('messages.Address')"
                                                   id="Address_user" name="Address_user"
                                                   required>
                                            <div class="valid-feedback">
                                                Correct !
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>
                                                @lang('messages.AddressKurdish')
                                            </label>
                                            <input type="text" class="form-control" placeholder="@lang('messages.AddressKurdish')"
                                                   id="Address_user_kurdish" name="Address_user_kurdish"
                                                   required>
                                            <div class="valid-feedback">
                                                Correct !
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>

                                                @lang('messages.TypeEstate')
                                            </label>
                                            <select class="form-control" id="estatetype">
                                                <option value="-1">
                                                    @lang('messages.TypeEstate')
                                                </option>
                                                @foreach($estatetype as $itemestatetype)

                                                    <option value="{{$itemestatetype->id}}">
                                                        {{$itemestatetype->Name}}  |     {{$itemestatetype->kurdishname}}
                                                    </option>
                                                @endforeach
                                            </select>

                                            <div class="valid-feedback">

                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>
                                                @lang('messages.Commercial')
                                            </label>
                                            <select class="form-control" id="usagetype">
                                                <option value="-1">
                                                    @lang('messages.Commercial')
                                                </option>
                                                @foreach($UsageTypes as $itemUserage)
                                                    <option value="{{$itemUserage->id}}">
                                                        {{$itemUserage->Name}}  |     {{$itemUserage->kurdishname}}
                                                    </option>
                                                @endforeach
                                            </select>

                                            <div class="valid-feedback">
                                              Correct
                                            </div>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>
                                                @lang('messages.Postion')
                                            </label>
                                            <select class="form-control" id="postion">
                                                <option value="-1">
                                                    @lang('messages.Postion')
                                                </option>
                                                @foreach($positiontype as $itemPostion)
                                                    <option value="{{$itemPostion->id}}">
                                                        {{$itemPostion->Name}}
                                                    </option>
                                                @endforeach
                                            </select>

                                            <div class="valid-feedback">
                                              Correct
                                            </div>
                                        </div>


                                    </div>
                                </form>
                            </section>
                            <h3>
                                @lang('messages.BasicInformationEsate')
                            </h3>
                            <section class="card card-body border mb-0">
                                <h5>
                                    @lang('messages.DetailsEstateInformation')
                                </h5>
                                <form id="form2">
                                    <div class="row">
                                        <div class="form-group col-md-3 " id="totalLand">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    @lang('messages.Area')
                                                </label>
                                                <input type="number" name="LandTotalSquare_user"
                                                       id="LandTotalSquare_user" class="form-control"
                                                       placeholder="@lang('messages.Area')" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 " id="squrefootage">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    @lang('messages.Area')
                                                </label>
                                                <input type="number" class="form-control" name="SquareFootage_user"
                                                       id="SquareFootage_user"
                                                       placeholder="@lang('messages.Area')">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 " id="yearmake">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    @lang('messages.Year')
                                                </label>
                                                <select class="form-control" id="yearmade">
                                                    <option value="0">
                                                        @lang('messages.Year')
                                                    </option>
                                                    @for($i=2022;$i >1920;$i--)

                                                        <option value=" {{$i}}">
                                                            {{$i}}
                                                        </option>
                                                    @endfor


                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 " id="beedroomtotal">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    @lang('messages.beds')
                                                </label>
                                                <select class="form-control" id="bedroomnuo">
                                                    <option value="0">  @lang('messages.beds')</option>
                                                    @for($i=1;$i <10;$i++)

                                                        <option value=" {{$i}}">
                                                            {{$i}}
                                                        </option>
                                                    @endfor


                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 " id="totalfloordiv">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Total number of floors
                                                </label>
                                                <input type="number" name="totalfloor" id="totalfloor"
                                                       class="form-control" placeholder="Total number of floors  ">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 " id="floordiv">
                                            <div class="form-group">
                                                <label class="text-label"> The desired floor *</label>
                                                <input type="number" name="floor" id="floor" class="form-control"
                                                       placeholder="The desired floor">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 " id="unit">
                                            <div class="form-group">
                                                <label class="text-label"> Number of units per floor *</label>
                                                <input type="number" name="totlaunitprefloor" id="totlaunitprefloor"
                                                       class="form-control" placeholder="Number of units per floor">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="form-group">
                                                <label class="text-label">Width*</label>
                                                <input type="number" name="Dim1" id="Dim1" class="form-control"
                                                       placeholder="Width">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="form-group">
                                                <label class="text-label"> length *</label>
                                                <input type="number" name="Dim2" id="Dim2" class="form-control"
                                                       placeholder="length">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <h3>
                                @lang('messages.Amenities')
                            </h3>
                            <section class="card card-body border mb-0">
                                <h5>
                                    @lang('messages.Amenities')
                                </h5>
                                <form id="form3">

                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch"
                                                       v-model="elevator" value="0" name="elevator">
                                                <label class="custom-control-label" for="customSwitch">
                                                    @lang('messages.Elevator') : @lang('messages.Yes')
                                                </label>
                                            </div>
                                            <div class="elevator_status">
                                                <input type="hidden" value="0" id="elevatorStatusInput"
                                                       name="elevatorStatusInput"/>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="custom-control custom-switch custom-checkbox-success">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1_"
                                                       v-model="parking" value="0" name="parking">
                                                <label class="custom-control-label" for="customSwitch1_">
                                                    @lang('messages.Parking') : @lang('messages.Yes')
                                                </label>
                                            </div>
                                            <div class="parking_status">
                                                <input type="hidden" value="0" id="parkingStatusInput"
                                                       name="parkingStatusInput"/>
                                            </div>
                                        </div>

                                        <div class="form-group  col-md-3">
                                            <div class="custom-control custom-switch custom-checkbox-danger">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch3_"
                                                       v-model="blacony" name="blacony" value="1">
                                                <label class="custom-control-label" for="customSwitch3_">
                                                    @lang('messages.Balcony') : @lang('messages.Yes')
                                                </label>
                                            </div>
                                            <div class="blacony_status">
                                                <input type="hidden" value="0" id="blaconyInputStatus"
                                                       name="blaconyInputStatus"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <div class="itemsdetails">

                                                <ul id="Possibilies" name="name">
                                                    @foreach($possibility as $itemPossibilies)
                                                        <li data-val="{{$itemPossibilies->id}}">  {{$itemPossibilies->Name}}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                                <input type="hidden" name="Posselected" id="Posselected">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="exampleFormControlTextarea1">
                                                @lang('messages.Description')
                                            </label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">

                                                    </textarea>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="exampleFormControlTextarea1Kurdish">
                                                @lang('messages.DescriptionKurdish')
                                            </label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1Kurdish" rows="3">

                                                    </textarea>

                                        </div>
                                    </div>
                                </form>

                            </section>
                            <h3>
                                @lang('messages.Ownerinformation')
                            </h3>
                            <section class="card card-body border mb-0">
                                <h5>
                                    @lang('messages.Ownerinformation')
                                </h5>
                                <form id="form4">

                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label>
                                                @lang('messages.Ownerinformation')
                                            </label>
                                            <input type="text" name="fullname_user" class="form-control"
                                                   placeholder="   @lang('messages.Ownerinformation')"
                                                   required id="fullname_user" v-model="fullname_user">
                                            <div class="valid-feedback">
                                             Correct
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label> @lang('messages.Phone')</label>
                                            <input type="number" name="MobileNumber_user"
                                                   id="MobileNumber_user" v-model="MobileNumber_user"
                                                   class="form-control"
                                                   placeholder="@lang('messages.Phone')"
                                                   required>
                                            <div class="valid-feedback">
                                               Correct
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2">

                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" name="StatusEstateType"
                                                           class="custom-control-input" id="sale"
                                                           v-model="featured" value="sale">

                                                    <label class="custom-control-label" for="sale">
                                                        @lang('messages.sale')
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-radio custom-checkbox-success">

                                                    <input type="radio" class="custom-control-input" v-model="featured"
                                                           name="StatusEstateType" id="rent" value="rent">

                                                    <label class="custom-control-label" for="rent">
                                                        @lang('messages.RENT')

                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2 PriceSale">
                                            <label>
                                                @lang('messages.Price')
                                            </label>
                                            <input name="price_user" v-model="price_user" id="price_user"
                                                   class="form-control currency"
                                                   placeholder=" @lang('messages.Price')" required>

                                            <div class="valid-feedback">

                                            </div>
                                        </div>
                                        <div class="form-group col-md-3  rentPrice">
                                            <label>
                                                Mortgage price
                                            </label>
                                            <input class="form-control "
                                                   placeholder="   Mortgage price" required
                                                   v-model="price_rahan_user" name="price_rahan" id="price_rahan">

                                            <div class="valid-feedback">
                                              correct
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3  rentPrice">
                                            <label> @lang('messages.RentPrice')</label>
                                            <input type="text" class="form-control "
                                                   placeholder="@lang('messages.RentPrice')" required
                                                   v-model="RentAmount_user" name="RentAmount" id="RentAmount">
                                            <div id="demo_out3"></div>
                                            <div class="valid-feedback">
                                                صحیح است!
                                            </div>
                                        </div>

                                        <div class="form-group col-md-2">
                                            <div class="form-group">
                                                <div class="custom-control custom-radio custom-checkbox-success">

                                                    <input type="radio" id="customRadio33" name="Vamcheck"
                                                           class="custom-control-input" v-model="Vamcheck" value="yes">
                                                    <label class="custom-control-label" for="customRadio33">
                                                        Has a loan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-radio custom-checkbox-danger">
                                                    <input type="radio" id="customRadio34" name="Vamcheck"
                                                           class="custom-control-input" v-model="Vamcheck" value="no">
                                                    <label class="custom-control-label" for="customRadio34">
                                                        No loan
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group col-md-3  VamPrice">
                                            <label>Amount Loan</label>
                                            <input type="text" v-model="loanAmount_user" name="loanAmount" type=number"
                                                   id="loanAmount" class="form-control currency4"
                                                   placeholder="Amount Loan" required>
                                            <div id="demo_out4"></div>
                                            <div class="valid-feedback">
                                               Correct
                                            </div>
                                        </div>


                                        <div class="form-group col-md-2">
                                            <label>
                                                @lang('messages.Purpose')
                                            </label>

                                            <div class="form-group">
                                                <div class="custom-control custom-radio custom-checkbox-success">

                                                    <input type="radio" class="custom-control-input" name="StatusEstate"
                                                           id="Salepart" value="sale">

                                                    <label class="custom-control-label" for="Salepart">
                                                        @lang('messages.sale')

                                                    </label>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="custom-control custom-radio custom-checkbox-success">

                                                    <input type="radio" class="custom-control-input"
                                                           v-model="StatusEstate" name="StatusEstate" id="EstatRenttype"
                                                           value="rent">

                                                    <label class="custom-control-label" for="EstatRenttype">
                                                        @lang('messages.RENT')

                                                    </label>
                                                </div>
                                            </div>

                                        </div>

                                        {{--  <div class="form-group col-md-3">
                                            <label>آدرس ملک*</label>
                                            <input type="text" name="lastName" class="form-control" placeholder="آدرس ملک ...." required>
                                            <div class="valid-feedback">
                                                صحیح است!
                                            </div>
                                        </div>--}}

                                    </div>


                                </form>

                            </section>
                            <h3>
                               @lang('messages.PropertyImages')

                            </h3>
                            <section class="card card-body border mb-0">
                                <h5>
                                    @lang('messages.PropertyImages')
                                </h5>
                                <form id="form5">

                                        <label class="text-muted">
                                            @lang('messages.PropertyImages')
                                        </label>

                                        <div id="imageUploadBox">
                                            <div id="selectedFiles"></div>

                                            <div class="fileUpload btn btn-primary">
                                                <span>
                                                   <i data-feather='upload'></i>
                                                </span>
                                                <input type="file" id="files" class="upload" name="files[]"
                                                       multiple="" accept="image/*" >
                                            </div>
                                        </div>



                                </form>

                            </section>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
@section('scripts')




    <script src="{{asset("panel/js/jquery.steps.min.js")}}"></script>

    <script src="{{asset("panel/js/form-wizard.js")}}"></script>

    <script src="{{asset("panel/js/cleave.min.js")}}"></script>



    <script src="{{asset("panel/vendors/js/forms/select/select2.full.min.js")}}"></script>

    <script src="{{asset("panel/js/scripts/forms/form-select2.min.js")}}"></script>

    <script src="{{asset("panel/js/num2persian.js")}}"></script>

    <script src="{{asset("panel/js/toast.js")}}"></script>




    <script src="{{asset("panel/js/busy-load/app.min.js")}}" type="text/javascript"></script>



    <script>
        $(function () {

            $('.form-select').select2({
                placeholder: 'Ų§Ł†ŲŖŲ®Ų§ŲØ'
            });



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

            var cleaveC = new Cleave('.currency', {
                numeral: true,
                numeralThousandsGroupStyle: 'thousand'
            });
            var cleaveC = new Cleave('.currency2', {
                numeral: true,
                numeralThousandsGroupStyle: 'thousand'
            });
            var cleaveC = new Cleave('.currency3', {
                numeral: true,
                numeralThousandsGroupStyle: 'thousand'
            });
            var cleaveC = new Cleave('.currency4', {
                numeral: true,
                numeralThousandsGroupStyle: 'thousand'
            });

        });


    </script>

    <script>

        function DeleteFileUploadImage(lTthis) {
            $(lTthis).parent().remove();
        }

        $(function () {


            var imgNum = 0;
            var selDiv = "";
            /*  */
            $('#files').change(function (e) {
                selDiv = document.querySelector("#selectedFiles");
                handleFileSelect(e);
            });

            function init() {
                document.querySelector('#files').addEventListener('change', handleFileSelect, false);

            }


            function handleFileSelect(e) {

                if (!e.target.files || !window.FileReader) return;
                //selDiv.innerHTML = "";
                var files = e.target.files;

                var filesArr = Array.prototype.slice.call(files);
                filesArr.forEach(function (f) {
                    if (!f.type.match("image.*")) {
                        return;
                    }
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var size = f.size / 30000;
                        if (parseInt(size) < 101) {
                            var imageCount = $(".selectedImage").length;
                            if (imageCount < 8) {
                                imgNum = imgNum + 1;
                                var html = "<div class='selectedImage' style='background: url(" + e.target.result + ") no-repeat;'><img src=\"" + e.target.result + "\" title='" + f.name + "'><input type='text' style='display:none' name='fileB64" + imgNum + "' value='" + e.target.result + "'><a onclick='DeleteFileUploadImage(this);'><i class='fa fa-trash'></i></a></div>";
                                selDiv.innerHTML += html;
                            } else {
                                toastr.error('You can not add more than 8 images');
                                //  alert("");
                            }
                        } else {
                            toastr.error('The selected image size should not exceed 3 MB');
                            //alert("");
                        }
                    }
                    reader.readAsDataURL(f);
                });
            }

        });
    </script>




@endsection


