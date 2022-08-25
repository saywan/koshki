'use strict';
$(document).ready(function () {


    $('#wizard2').steps({
        headerTag: 'h3',
        bodyTag: 'section',
        autoFocus: true,
        titleTemplate: '<span class="wizard-index">#index#</span> #title#',
        labels: {
            cancel: 'Cancel',
            current: ':Current step',
            pagination: 'Paging',
            finish: 'Finish And Submit Estate ',
            next: 'Next',
            previous: 'Previous',
            loading: 'Loading ...'
        },
        onStepChanging: function (event, currentIndex, newIndex) {
            if (currentIndex < newIndex) {
                var form = document.getElementById('form1'),
                    form2 = document.getElementById('form2'),
                    form3 = document.getElementById('form3'),
                    form4 = document.getElementById('form4'),
                    form5 = document.getElementById('form5');

                $(".rentPrice").hide();
                $(".PriceSale").show();
                $(".VamPrice").hide();

                $('input[type=radio][name=StatusEstateType]').change(function () {
                    if (this.value == 'sale') {
                        $(".PriceSale").show();
                        $(".rentPrice").hide();
                    } else if (this.value == 'rent') {
                        $(".rentPrice").show();
                        $(".PriceSale").hide();
                    }
                });

                $('input[type=radio][name=Vamcheck]').change(function () {
                    if (this.value == 'yes') {
                        $(".VamPrice").show();

                    } else if (this.value == 'no') {
                        $(".VamPrice").hide();

                    }
                });

                var switchStatus = false;
                var switchParking = false;
                var switchWareHouse = false;
                var switchBalcony = false;

                $('input[name="elevator"]').on('change', function () {
                    if ($(this).is(':checked')) {
                        switchStatus = $(this).is(':checked');
                        if (switchStatus == true) {

                            $('.elevator_status').html('<input type="hidden" value="1" id="elevatorStatusInput" name="elevatorStatusInput" />');
                        }

                    } else {
                        switchStatus = $(this).is(':checked');
                        if (switchStatus == false) {
                            //sale
                            $('.elevator_status').html('<input type="hidden" value="0" id="elevatorStatusInput" name="elevatorStatusInput" />');

                        }


                    }
                });

                $('input[name="parking"]').on('change', function () {
                    if ($(this).is(':checked')) {
                        switchParking = $(this).is(':checked');
                        if (switchParking == true) {

                            $('.parking_status').html('<input type="hidden" value="1" id="parkingStatusInput" name="parkingStatusInput" />');
                        }

                    } else {
                        switchParking = $(this).is(':checked');
                        if (switchParking == false) {
                            //sale
                            $('.parking_status').html('<input type="hidden" value="0" id="parkingStatusInput" name="parkingStatusInput" />');

                        }


                    }
                });

                $('input[name="warehouse"]').on('change', function () {
                    if ($(this).is(':checked')) {
                        switchWareHouse = $(this).is(':checked');
                        if (switchWareHouse == true) {

                            $('.warehouse_status').html('<input type="hidden" value="1" id="warehouseInputStatus" name="warehouseInputStatus" />');
                        }

                    } else {
                        switchWareHouse = $(this).is(':checked');
                        if (switchWareHouse == false) {
                            //sale
                            $('.warehouse_status').html('<input type="hidden" value="0" id="warehouseInputStatus" name="warehouseInputStatus" />');

                        }


                    }
                });

                $('input[name="blacony"]').on('change', function () {
                    if ($(this).is(':checked')) {
                        switchBalcony = $(this).is(':checked');
                        if (switchBalcony == true) {

                            $('.blacony_status').html('<input type="hidden" value="1" id="blaconyInputStatus" name="blaconyInputStatus" />');
                        }

                    } else {
                        switchBalcony = $(this).is(':checked');
                        if (switchBalcony == false) {
                            //sale
                            $('.blacony_status').html('<input type="hidden" value="0" id="blaconyInputStatus" name="blaconyInputStatus" />');

                        }


                    }
                });


                var region = $('#region').find(':selected').val();
                var estatetype = $('#estatetype').find(':selected').val();
                var usagetype = $('#usagetype').find(':selected').val();
                var ownership = $('#ownership').find(':selected').val();
                var postion = $('#postion').find(':selected').val();

                if (currentIndex === 0) {


                    $("#totalfloordiv").hide();
                    $("#floordiv").hide();
                    $("#unit").hide();
                    $("#totalLand").hide();
                    $("#squrefootage").hide();
                    $("#yearmake").hide();
                    $("#beedroomtotal").hide();

                    if (estatetype == 1) {
                        $("#totalLand").show();
                        $("#squrefootage").show();
                        $("#yearmake").show();
                        $("#beedroomtotal").show();
                        $("#totalfloordiv").show();
                    } else if (estatetype == 2) {
                        $("#totalLand").show();
                        $("#squrefootage").show();
                        $("#yearmake").show();
                        $("#beedroomtotal").show();
                        $("#totalfloordiv").show();
                        $("#floordiv").show();
                        $("#unit").show();
                    } else if (estatetype == 3) {
                        $("#totalLand").show();
                    } else if (estatetype == 4) {
                        $("#totalLand").show();
                        $("#squrefootage").show();
                        $("#yearmake").show();
                        $("#beedroomtotal").show();
                        $("#totalfloordiv").show();
                        $("#floordiv").show();
                    } else if (estatetype == 5) {
                        $("#totalLand").show();

                    } else if (estatetype == 6) {
                        $("#totalLand").show();
                        $("#squrefootage").show();
                        $("#yearmake").show();

                    } else if (estatetype == 7) {
                        $("#totalLand").show();
                    } else if (estatetype == 8)//store
                    {
                        $("#totalLand").show();
                        $("#squrefootage").show();
                        $("#yearmake").show();
                    } else if (estatetype == 9 || estatetype == 10 || estatetype == 12)//store
                    {
                        $("#totalLand").show();

                    } else if (estatetype == 11 || estatetype == 13 || estatetype == 14)//store
                    {

                        $("#totalLand").show();
                        $("#squrefootage").show();
                        $("#yearmake").show();
                        $("#beedroomtotal").show();
                        $("#totalfloordiv").show();

                    } else //store
                    {

                        $("#totalLand").show();

                    }

                    if (region == -1) {


                        toastr.error('Please select an area');
                        $("#region").addClass('was-validated');
                        event.preventDefault();
                        event.stopPropagation();
                        // return false;
                    } else if (estatetype == -1) {

                        toastr.error('Please select a property type');
                        event.preventDefault();
                        event.stopPropagation();

                    } else if (usagetype == -1) {

                        toastr.error('Please select a Usage Type');
                        event.preventDefault();
                        event.stopPropagation();

                    } else if (ownership == -1) {

                        toastr.error('Please select a Ownership');
                        event.preventDefault();
                        event.stopPropagation();

                    } else if (postion == -1) {

                        toastr.error('Please select the Postion of the property');
                        event.preventDefault();
                        event.stopPropagation();

                    } else {
                        return true;
                    }

                    // return  true;

                    /*   if (form.checkValidity() === false) {
                           event.preventDefault();
                           event.stopPropagation();
                           form.classList.add('was-validated');
                       } else {

                       }*/
                } else if (currentIndex === 1) {

                    var totalLand = $("#LandTotalSquare_user").val();
                    var Dim1 = $("#Dim1").val();
                    var Dim2 = $("#Dim2").val();
                    var squrefootage = $("#SquareFootage_user").val();

                    var yearmake = $('#yearmade :selected').val();


                    var beedroomtotal = $('#bedroomnuo :selected').val();

                    var totalfloordiv = $("#totalfloor").val();


                    var floor = $("#floor").val();
                    var totlaunitprefloor = $("#totlaunitprefloor").val();

                    if (estatetype == 1) {


                        if (totalLand == '') {
                            toastr.error('Please enter the total area');
                            $("#LandTotalSquare_user").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (squrefootage == '') {
                            toastr.error('Please enter the area of the building');
                            $("#SquareFootage_user").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (yearmake == 0) {
                            toastr.error('Please enter the year of manufacture');
                            $("#yearmade").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (beedroomtotal == 0) {
                            toastr.error('Please enter the number of bedrooms');
                            $("#bedroomnuo").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (totalfloordiv == '') {
                            toastr.error('Please enter the total number of classes');
                            $("#totalfloor").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else {
                            return true
                        }

                    } else if (estatetype == 2) {


                        if (totalLand == '') {
                            toastr.error('Please enter the total area');
                            $("#LandTotalSquare_user").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (squrefootage == '') {
                            toastr.error('Please enter the area of the building');
                            $("#SquareFootage_user").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (yearmake == 0) {
                            toastr.error('Please enter the year of made');
                            $("#yearmade").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (beedroomtotal == 0) {
                            toastr.error('Please enter the number of bedrooms');
                            $("#bedroomnuo").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (totalfloordiv == '') {
                            toastr.error('Please enter the total number of classes');
                            $("#totalfloor").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (floor == '') {
                            toastr.error('Please enter the desired Floor');
                            $("#floor").addClass('was-validated');

                            return false;
                        } else if (totlaunitprefloor == '') {
                            toastr.error('Please enter the unit on the floor');
                            $("#totlaunitprefloor").addClass('was-validated');

                            return false;
                        } else {
                            return true
                        }


                    } else if (estatetype == 3) {

                        if ($("#LandTotalSquare_user").val() == '') {
                            toastr.error('Please enter the total area');
                            $("#LandTotalSquare_user").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else {
                            return true
                        }
                    } else if (estatetype == 4) {


                        if (totalLand == '') {
                            toastr.error('Please enter the total area');
                            $("#LandTotalSquare_user").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (squrefootage == '') {
                            toastr.error('Please enter the area of the building');
                            $("#SquareFootage_user").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (yearmake == 0) {
                            toastr.error('Please enter the year of made');
                            $("#yearmade").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (beedroomtotal == 0) {
                            toastr.error('Please enter the number of bedrooms');
                            $("#bedroomnuo").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (totalfloordiv == '') {
                            toastr.error('Please enter the total number of classes');
                            $("#totalfloor").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (floor == '') {
                            toastr.error('Please enter the desired Floor');
                            $("#floor").addClass('was-validated');

                            return false;
                        } else {
                            return true
                        }


                    } else if (estatetype == 5) {

                        if (totalLand == '') {
                            toastr.error('Please enter the total area');
                            $("#LandTotalSquare_user").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else {
                            return true
                        }
                    } else if (estatetype == 6) {

                        if (totalLand == '') {
                            toastr.error('Please enter the total area');
                            $("#LandTotalSquare_user").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (squrefootage == '') {
                            toastr.error('Please enter the area of the building');
                            $("#SquareFootage_user").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (yearmake == 0) {
                            toastr.error('Please enter the year of Made');
                            $("#yearmade").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else {
                            return true
                        }

                    } else if (estatetype == 7) {


                        if (totalLand == '') {
                            toastr.error('Please enter the total area');
                            $("#LandTotalSquare_user").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else {
                            return true
                        }
                    } else if (estatetype == 8)//store
                    {

                        if (totalLand == '') {
                            toastr.error('Please enter the total area');
                            $("#LandTotalSquare_user").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (squrefootage == '') {
                            toastr.error('Please enter the area of the building');
                            $("#SquareFootage_user").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (yearmake == 0) {
                            toastr.error('Please enter the year of made');
                            $("#yearmade").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else {
                            return true
                        }


                    } else if (estatetype == 9 || estatetype == 10 || estatetype == 12)//store
                    {


                        if (totalLand == '') {
                            toastr.error('Please enter the total area');
                            $("#LandTotalSquare_user").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else {
                            return true
                        }
                    } else if (estatetype == 11 || estatetype == 13 || estatetype == 14)//store
                    {

                        $("#totalLand").show();
                        $("#squrefootage").show();
                        $("#yearmake").show();
                        $("#beedroomtotal").show();
                        $("#totalfloordiv").show();

                        if (totalLand == '') {
                            toastr.error('Please enter the total area');
                            $("#LandTotalSquare_user").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (squrefootage == '') {
                            toastr.error('Please enter the area of the building');
                            $("#SquareFootage_user").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (yearmake == 0) {
                            toastr.error('Please enter the year of manufacture');
                            $("#yearmade").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (beedroomtotal == 0) {
                            toastr.error('Please enter the number of bedrooms');
                            $("#bedroomnuo").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else if (totalfloordiv == '') {
                            toastr.error('Please enter the total number of classes');
                            $("#totalfloor").addClass('was-validated');
                            form2.classList.add('was-validated');
                            return false;
                        } else {
                            return true
                        }

                    } else {
                        return true
                    }


                    //return true;


                    /* if (form2.checkValidity() === false) {
                         event.preventDefault();
                         event.stopPropagation();
                         form2.classList.add('was-validated');
                     } else {
                         return true;
                     }*/
                } else if (currentIndex === 2) {
                    if (form3.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                        form3.classList.add('was-validated');
                    } else {
                        return true;
                    }

                } else if (currentIndex === 3) {


                    $(".rentPrice").hide();
                    $(".PriceSale").show();
                    $(".VamPrice").hide();

                    /* $('input[type=radio][name=StatusEstateType]').change(function() {
                         if (this.value == 'sale') {
                             $(".PriceSale").show();
                             $(".rentPrice").hide();
                         }
                         else if (this.value == 'rent') {
                             $(".rentPrice").show();
                             $(".PriceSale").hide();
                         }
                     });*/

                    var fullname_user = $("#fullname_user").val();
                    var MobileNumber_user = $("#MobileNumber_user").val();


                    var vam = $("input[type='radio'][name='Vamcheck']:checked");

                    var StatusEstateType = $("input[type='radio'][name='StatusEstateType']:checked");

                    if (vam.length == 0) {


                        toastr.error('Please specify the loan status');
                        $("input[type='radio'][name='Vamcheck']").addClass('was-validated');
                        form4.classList.add('was-validated');
                        return false;
                    }

                    if (vam.val() == 'yes') {
                        $(".VamPrice").show();
                        if ($("#loanAmount").val() == '') {
                            toastr.error('Please enter the loan amount');
                            $("input[type='radio'][name='Vamcheck']").addClass('was-validated');
                            form4.classList.add('was-validated');
                            return false;
                        }


                    }

                    if (StatusEstateType.length == 0) {

                        toastr.error('Please specify the type of sale or rental ad');
                        $("input[type='radio'][name='StatusEstateType']").addClass('was-validated');
                        form4.classList.add('was-validated');
                        return false;
                    } else if (StatusEstateType.length == 1) {
                        $(".rentPrice").show();
                    }


                    if (StatusEstateType.val() == 'sale') {
                        $(".rentPrice").hide();
                        $(".PriceSale").show();
                        if ($("#price_user").val() == '') {
                            toastr.error('Please enter the sale price of the property');
                            $("#price_user").addClass('was-validated');
                            form4.classList.add('was-validated');
                            return false;
                        }

                    } else if (StatusEstateType.val() == 'rent') {

                        $(".rentPrice").show();
                        $(".PriceSale").hide();

                        if ($("#price_rahan").val() == '') {
                            toastr.error('Please enter the mortgage price');
                            $("#price_rahan").addClass('was-validated');
                            form4.classList.add('was-validated');
                            return false;
                        }
                        if ($("#RentAmount").val() == '') {
                            toastr.error('Please enter the rental price');
                            $("#RentAmount").addClass('was-validated');
                            form4.classList.add('was-validated');
                            return false;
                        }
                    }

                    if (fullname_user == '') {
                        toastr.error('Please enter a Fullname Owner Estate');
                        $("#fullname_user").addClass('was-validated');
                        form4.classList.add('was-validated');
                        return false;
                    } else if (MobileNumber_user == '') {
                        toastr.error('Please enter the mobile number');
                        $("#SquareFootage_user").addClass('was-validated');
                        form4.classList.add('was-validated');
                        return false;
                    } else {
                        return true
                    }
                    //   return true;


                    //  return  true;
                    /*   if (form4.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                            form4.classList.add('was-validated');
                        } else {
                            return true;
                        }*/
                } else if (currentIndex === 4) {

                    return true;
                    /*   if (form4.checkValidity() === false) {
                           event.preventDefault();
                           event.stopPropagation();
                           form4.classList.add('was-validated');
                       } else {
                           return true;
                       }*/
                }


            } else {
                return true;
            }
        },
        onFinished: function (event, currentIndex) {


            if (currentIndex === 4) {


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var formdata = new FormData();

                $.each($("#files")[0].files, function (key, file) {

                    formdata.append("files[]", file);
                });

                /* axios.interceptors.request.use(config => {
                     // perform a task before the request is sent
                     console.log('Request was sent');
                     $.busyLoadSetup({
                         animation: "slide",
                         background: "rgba(255, 255, 255, 0.86)",
                         color:"rgba(76, 175, 80, 1)",
                     });
                     $.busyLoadFull("show",
                         {image: "/panel/js/busy-load/icon_2.gif",
                             text:"لطفا شکیبا باشید...",spinner: "accordion",
                             textPositibon: "bottom"});
                     return config;
                 }, error => {
                     // handle the error
                     return Promise.reject(error);
                 });*/


                var region = $('#region').find(':selected').val();
                var Address = $("#Address_user").val();
                var projectTitle = $("#projectTitle").val();
                var projectTitleen = $("#projectTitleen").val();
                var Address_user_kurdish = $("#Address_user_kurdish").val();
                var estatetype = $('#estatetype').find(':selected').val();
                var usagetype = $('#usagetype').find(':selected').val();
                var ownership = $('#ownership').find(':selected').val();
                var postion = $('#postion').find(':selected').val();


                var Dimone = $("#Dim1").val();
                var Dimtwo = $("#Dim2").val();
                var totalLand = $("#LandTotalSquare_user").val();
                var squrefootage = $("#SquareFootage_user").val();
                var yearmake = $('#yearmade :selected').val();
                var beedroomtotal = $('#bedroomnuo :selected').val();
                var totalfloordiv = $("#totalfloor").val();
                var floor = $("#floor").val();
                var totlaunitprefloor = $("#totlaunitprefloor").val();


                var Address_user = $('input[name="Address_user"]').val();
                var MobileNumber = $('input[name="MobileNumber_user"]').val();
                var fullname_user = $('input[name="fullname_user"]').val();
                var Email = $('input[name="EmailEstate"]').val();


                var Posselected = $("#Posselected").val();
                var TextEstate = $("#exampleFormControlTextarea1").val();
                var exampleFormControlTextarea1Kurdish = $("#exampleFormControlTextarea1Kurdish").val();


                var val = [];

                var arr = [];
                var i = 0;
                $('.custom-control-input:checked').each(function () {
                    arr[i++] = $(this).val();
                });


                var StatusEstateType = $('input[name=StatusEstateType]:checked').val();
                var StatusVam = $('input[name=Vamcheck]:checked').val();
                var StatusEstate = $('input[name=StatusEstate]:checked').val();

                //  alert($('input[name=StatusEstateType]:checked').val());
                //  alert($('input[name=Vamcheck]:checked').val());

                if (StatusEstateType === 'rent') {
                    var price_rahan = $('input[name="price_rahan"]').val();
                    var price_ajarh = $('input[name="RentAmount"]').val();
                } else if (StatusEstateType === 'sale') {
                    var price_sale = $('input[name="price_user"]').val();
                }

                var VamAmount;
                if (StatusVam === 'yes') {
                    VamAmount = $('input[name="loanAmount"]').val();
                } else if (StatusVam === 'no') {
                    VamAmount = 0;
                }


                formdata.append('projectTitle', projectTitle);
                formdata.append('projectTitleen', projectTitleen);
                formdata.append('region', region);

                formdata.append('Address', Address);
                formdata.append('Address_user_kurdish', Address_user_kurdish);
                formdata.append('estatetype', estatetype);
                formdata.append('usagetype', usagetype);
                formdata.append('ownership', ownership);
                formdata.append('postion', postion);
                formdata.append('totalLand', totalLand);
                formdata.append('squrefootage', squrefootage);
                formdata.append('yearmake', yearmake);
                formdata.append('beedroomtotal', beedroomtotal);
                formdata.append('totalfloordiv', totalfloordiv);
                formdata.append('floor', floor);
                formdata.append('Dim1', Dimone);
                formdata.append('Dim2', Dimtwo);
                formdata.append('totlaunitprefloor', totlaunitprefloor);
                formdata.append('TextEstate', TextEstate);
                formdata.append('exampleFormControlTextarea1Kurdish', exampleFormControlTextarea1Kurdish);
                formdata.append('Address_user', Address_user);
                formdata.append('elevator', $("#elevatorStatusInput").val());
                formdata.append('parking', $("#parkingStatusInput").val());
                formdata.append('warehouse', $("#warehouseInputStatus").val());
                formdata.append('Balcony', $("#blaconyInputStatus").val());
                formdata.append('MobileNumber', MobileNumber);
                formdata.append('fullname_user', fullname_user);
                formdata.append('Email', Email);
                formdata.append('StatusEstateType', StatusEstateType);
                formdata.append('price', price_sale);
                formdata.append('price_rahan', price_rahan);
                formdata.append('price_ajarh', price_ajarh);
                formdata.append('StatusVam', StatusVam);
                formdata.append('VamAmount', VamAmount);
                formdata.append('StatusEstate', StatusEstate);
                formdata.append('possibilies', $("#Posselected").val());


                /*    const inputFileUpload = document.getElementById('files');

                    for (const file of inputFileUpload.files) {
                        formdata.append("files[]", file);
                    }*/
                /* for (const [key, value] of formdata) {
                     console.log(`Key:${key}`);
                     console.log(`value:${value}`);
                 }*/
                /*   $.each($("#files")[0].files, function (key, file) {

                       formdata.append("files[]", file);
                   });*/


                /* var totalfiles = document.getElementById('files').files.length;
                 for (var index = 0; index < totalfiles; index++) {
                     formdata.append("files[]", document.getElementById('files').files[index]);
                 }*/


                //var filedata = document.getElementById("files");

                /*var formdata=new FormData();

                for (var i = 0; i < filedata.files.length; i++) {
                    var file = filedata.files[i];
                    formdata.append("file[]", file);

                }*/
                $.ajax({
                    url: "storeProject",
                    type: "POST",
                    data: formdata,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function (data) {

                        if (data.status == 200) {
                            alert('Estate is Successfull');
                        }
                        /* var data = JSON.parse(data);
                         var data = JSON.parse(data.data);
                         $('.imgGallery').empty();
                         $.each(data, function(index, val) {
                             $('.imgGallery').append('<img src="images/'+val+'">');
                             console.log(val);
                         });*/
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            }


        },
    });


});




