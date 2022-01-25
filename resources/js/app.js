/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import LoadingPlugin from "vue-loading-overlay";

Vue.use(LoadingPlugin);

const app = new Vue({
    el: '#app',
    data: {
        NameTypeEstate: "",
        NameEditTypeEstate: "",
        NameOwnership: "",
        EditNameOwnership: "",
        NamePossibity: "",
        EditNamePossibity: "",
        NameUsage: "",
        EditNameUsage: "",
        NameRegion: "",
        EditNameRegion: "",
        city: "سنندج",
        regionselect: "2",
        estatetype: "1",
        usagetype: "",
        ownership: "",
        LandTotalSquare: '',
        SquareFootage: "",
        RoomNumber: "",
        yearmade: "",
        MobileNumber: "",
        fullname: "",
        Email: "zanazahedi77@gmail.com",
        Address: "",
        loanAmount: "",
        price: "",
        loan: "",
        price_rahan: "",
        RentAmount: "",
        textNote: "",
        floor: "",
        ComplimentalDescription: "",
        province: "کردستان",
        typeAdv: "",
        VirtualTourCode: "",
        requestTour: '0',
        regions: [],
        UsageTypes: [],
        EstateOwnerShips: [],
        Possibilities: [],
        Estatetypes: [],
        ImageCat: "",
        position_type: "",
        namereq: "",
        estatetypereq: "",
        pricereq: "",
        position_type_req: "",
        Vamcheck: "",
        featured: "",
        regionselectreq: "",
        RoomNumberreq: "",
        mobilereq: "",
        LandTotalSquarereq: "",
        floorreq: "",
        titleSilder: "",
        DescSilder: "",
        imageSilder: "",
        price_seller: "",
        sellername: "",
        buierName: "",
        price_trans: "",
        datetransaction: "",
        descTrans: "",
        commission: "",
        estatetypetra: "",
        regionselecttra: "",
        keyregion: "",
        numbertran: "",
        verify_code: "",
        tourrequest: "",
        EmailEstate: "",
        StatusEstate: "",


        province_user: "کردستان",
        city_user: "سنندج",
        regionselect_user: "",
        estatetype_user: "",
        estatetype_userOffer: "",
        position_type_user: "",
        usagetype_user: "",
        ownership_user: "",
        requestTour_user: "",
        RoomNumber_user: "",
        floor_user: "",
        Address_user: "",
        LandTotalSquare_user: "",
        SquareFootage_user: "",
        yearmade_user: "",
        fullname_user: "",
        MobileNumber_user: "",
        price_rahan_user: "",
        RentAmount_user: "",
        loanAmount_user: "",
        price_user: "",
        ComplimentalDescription_user: "",

        regionlist: [],
        errors: [],
        allerros: [],
        success: false,
        price_low: "",
        price_high: "",
        landtotal_hight: "",
        landtotal_low: "",
        regionselectedSearch: "",
        regionrequestOffer: "",
        EstateList: [],
        landTotla: '',
        files: [],
        avatar: "",
        images: [],
        nameOffer: "",
        mobileOffer: "",
        textOffer: "",
        textStatus: "",
        minprice: "",
        maxprice: "",
        minmeter: "",
        maxmeter: "",
        search: "",
        showsearch: false,
        estatlist: [],
        NewPassword: "",
        unit: "",
        unitfloor: "",
        elevator: "",
        parking: "",
        warehouse: "",
        blacony: "",
        exchangeInput: "",
        ApptStatus: "",
        listPos: [],
        emailContactus: "",
        fullnameTran: "",
        Sellername: "",
        priceTran: "",
        comissionprice: "",
        TopicSlider: "",
        TextSlider: "",
        titlereport: "",
        resultstatus: "",

        FullnameBuyer: "",
        FullnameSeller: "",
        TellSeller: "",
        TellBuyer: "",
        priceEstate: "",
        AddressEstate: "",
        DateVisit: "",
        TimeVisit: "",
        DescriptionVisi: "",
        FindUser: "",
        codeEstate: "",
        ForceUpdate: "",
        Version: "",
        file: '',
        successStatus: '',
        isLoading: false,
        fullPage: true


    },
    created: function () {

        this.getRegion();
        this.getUsageType();
        this.getEstateOwnerShip();
        this.getPossibilities();
        this.getEstatetype();
        this.getEstate();
    },
    components: {
        LoadingPlugin,

    },
    methods: {


        SearchEstate: function () {

            fetch('/admin/getSearch?q=' + this.search)
                .then(res => res.json())
                .then(res => {
                    alert(res);
                    this.estatlist = res;
                    this.search = '';
                    this.showsearch = true;
                }).catch(err => {

                console.log(err);
            })

        },

        SearchEsate: function () {


            var citylist = $("#city_user option:selected").text();
            var regionselect = $("#regionselect option:selected").val();
            var estatetype = $("#estatetype option:selected").val();
            var typeAdv = $("#typeAdv option:selected").val();
            var usagetype = $("#usagetype option:selected").val();
            var ownership = $("#ownership option:selected").val();
            var requestTour = $("#requestTour option:selected").val();
            var LandTotalSquare = $("#LandTotalSquare").text();

            /* alert(this.regionselect_user);
              alert(this.estatetype_user);
              alert(this.price_high);
              alert(this.price_low);
              alert(this.landtotal_low);
              alert(this.landtotal_hight);
  */

            /*  axios.get('Search?regionId='+this.regionselect_user).then(response=>{


                   console.log(response.data.data);

                   alert();


                   //alert(response.data);
               })*/

            /*   estatetype_user:this.estatetype_user,
                   price_high:this.price_high,
                   price_low:this.price_low,
                   landtotal_low:this.landtotal_low,
                   landtotal_hight:this.landtotal_hight,*/


            /* params: this.axiosParams*/

            //alert(this.regionselectedSearch);

            // params: this.axiosParams
            //  var Inpu=$("regionInput").val(this.estatetype_user);
            //   alert(Inpu);

            /*fetch('/Search?region='+this.regionselectedSearch+'&EstateType='+this.estatetype_user)
                 .then(res =>res.json())
                 .then(res =>{

                     alert(res);
                     console.log(res);

                 }).catch(err => {
                 console.log(err);
             });*/

            //?region='+this.regionselectedSearch+'&EstateType='+this.estatetype_user

            fetch('/SearchEstate?q=region=' + this.regionselectedSearch +
                '&EstateType=' + this.estatetype_user)
                .then(res => res.json())


            /*   axios.get('/SearchEstate?',{
                   params:{
                       region:this.regionselectedSearch,
                       EstateType:this.estatetype_user,
                       price_high:this.price_high,
                       price_low:this.price_low,
                       landtotal_low:this.landtotal_low,
                       landtotal_hight:this.landtotal_hight,
                   }


               }).then(response=>{
                  // alert(response.data);
                   console.log(response.data);

                   if (response.data['status'] == 100) {
                       swal("ثبت موفق ", "ملک جدید با موفقیت ثبت شد", "success", {
                           button: "باشه"
                       });
                       setTimeout(function () {
                           window.location.assign('/admin/Estatelist');
                       },2000);
                   }


               },response=>{
                   swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                       button: "باشه"
                   });
                   this.error=1;
                   console.log("error");
               });*/


        },

        CheckMobile: function (event) {

            alert();


        },
        /******************Get Value Data Server*****************/
        checkForm: function (e) {
            alert();
            if (this.name && this.age) {
                return true;
            }

            this.errors = [];

            if (!this.RoomNumber_user) {
                this.errors.push('Name required.');
            }
            if (!this.floor_user) {
                this.errors.push('Age required.');
            }

            e.preventDefault();
        },


        getRegion: function () {


            axios.get('/getRegion').then(response => {

                this.regions = response.data;
            });

        },
        getUsageType: function () {

            axios.get('/getUsageType').then(response => {


                this.UsageTypes = response.data;
            });

        },
        getEstateOwnerShip: function () {

            axios.get('/getEstateOwnerShip').then(response => {


                this.EstateOwnerShips = response.data;
            });

        },
        getPossibilities: function () {

            axios.get('/getPossibilities').then(response => {


                this.Possibilities = response.data;
            });

        },
        getEstate: function () {

            axios.get('/getEstate').then(response => {


                this.estatlist = response.data;
            });

        },
        getEstatetype: function () {

            axios.get('/getEstatetype').then(response => {

                this.Estatetypes = response.data;
            });

        },

        /****************Upload APK Version******************************/

        UploadAPK: function () {


            if (this.Version == '') {
                swal(" خطا ", "لطفا شماره نسخه را وارد کنید", "error", {
                    button: "باشه"
                });
                return false;

            } else if (this.ForceUpdate == '') {
                swal(" خطا ", "لطفا وضعیت دریافت اپلیکشین را مشخص کنید", "error", {
                    button: "باشه"
                });
                return false;

            }

            //let currentObj = this;

            /*  const config = {
                  headers: { 'content-type': 'multipart/form-data' }
              }*/


            let formData = new FormData();

            formData.append('file', this.file);
            formData.append('Version', this.Version);
            formData.append('ForceUpdate', this.ForceUpdate);

            let loader = this.$loading.show({

                loader: 'bars'

            });


            axios.post('/admin/UploadAPK', formData)
                .then(function (response) {


                    if (response.data['status'] == 100) {


                        swal(" خطا ", this.errors, "error", {
                            button: "باشه"
                        });
                    } else if (response.data['status'] == 200) {

                        loader.hide();
                        swal("ثبت موفق ", "نسخه جدید اپلود آپدیت شد", "success", {
                            button: "باشه"
                        });
                        this.successStatus = response.data.successStatus;
                        /* setTimeout(function() {



                         },2000);*/


                        /* setTimeout(function () {


                                 loader.hide();
                                 this.isLoading = false
                             //  window.location.assign('/admin/SetTimeVisit');
                           },2000);*/

                        /* setTimeout(() => {

                         },5000)*/

                    }
                }).catch(error => {

                console.error(error);
                // currentObj.output = error;

            });


        },

        onFileChange(e) {


            console.log(e.target.files[0]);
            this.file = e.target.files[0];
        },


        /****************Visit******************************/

        AddVisit: function () {


            var selected_Estate = $("#selected_Estate").val();
            var selected_emails = $("#selected_emails").val();

            axios.post('/admin/AddSetTimeVisit', {
                selected_Estate: selected_Estate,
                selected_emails: selected_emails,
                FullnameBuyer: this.FullnameBuyer,
                /*   FullnameSeller:this.FullnameSeller,*/
                TellBuyer: this.TellBuyer,
                /*   TellSeller:this.TellSeller,
                   priceEstate:this.priceEstate,*/
                /*  AddressEstate:this.AddressEstate,*/
                DateVisit: this.DateVisit,
                TimeVisit: this.TimeVisit,
                DescriptionVisi: this.DescriptionVisi,

            }).then(response => {

                if (response.data['status'] == 100) {


                    swal(" خطا ", this.errors, "error", {
                        button: "باشه"
                    });
                } else if (response.data['status'] == 200) {
                    swal("ثبت موفق ", "بازدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });

                    setTimeout(function () {
                        window.location.assign('/admin/SetTimeVisit');
                    }, 2000);

                }


            }).catch(error => {
                console.error(error);

                this.FullnameBuyer = error.response.data.error.FullnameBuyer;
                this.FullnameSeller = error.response.data.error.FullnameSeller

            });
        },


        DeleteSetTimeVisit: function (id) {

            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی بازدید  نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {
                    axios.post('/admin/DeleteSetTimeVisit', {

                        id: id

                    }).then(response => {


                        if (response.data['status'] == 200) {
                            swal("بازدید مورد نظر شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('/admin/SetTimeVisit');
                            }, 2000);
                        } else {

                            swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                                button: "باشه"
                            });
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });
        },
        SearchUser() {

            if (this.FindUser.length > 3) {
                axios.post('/admin/GetInfoUser', {

                    FindUser: this.FindUser,

                }).then(response => {


                    if (response.data['status'] == 200) {
                        $('.search-mailing-users').removeClass('hidden').html(response.data['result']);

                    } else {
                        $('.search-mailing-users').removeClass('hidden').html('کاربری یافت نشد');
                    }

                }, response => {
                    $('.search-mailing-users').removeClass('hidden').html('کاربری یافت نشد');
                });
            }

        },
        FindEstate() {


            if (this.codeEstate.length > 0) {
                axios.post('/admin/GetInfoEstate', {

                    codeEstate: this.codeEstate,

                }).then(response => {


                    if (response.data['status'] == 200) {
                        $('.search-mailing-Estate').removeClass('hidden').html(response.data['result']);

                    } else {
                        $('.search-mailing-Estate').removeClass('hidden').html('کاربری یافت نشد');
                    }

                }, response => {
                    $('.search-mailing-users').removeClass('hidden').html('کاربری یافت نشد');
                });
            }

        },


        /***************EstateType*********************/
        AddTypeEstate: function () {

            axios.post('/admin/storeEstateType', {
                NameTypeEstate: this.NameTypeEstate

            }).then(response => {

                if (response.data['status'] == 200) {
                    Swal.fire({
                        title: "Success",
                        text: "Estate Type is Added",
                        icon: "success",
                        customClass: {confirmButton: "btn btn-primary"},
                        buttonsStyling: !1
                    })

                    setTimeout(function () {
                        location.reload();
                    }, 4000);
                }



            }, response => {
                Swal.fire({
                    title: "Cancel",
                    text: "Operation is Cancel",
                    icon: "error",
                    customClass: {confirmButton: "btn btn-success"}
                })
                this.error = 1;
                console.log("error");
            });
        },

        DeleteEstateType: function (Id) {


            Swal.fire({
                title: "Are you sure? ",
                text: "Delete this Estate Type",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-outline-danger ms-1"},
                buttonsStyling: !1
            }).then((function (t) {

                if (t.value) {
                    axios.post('/admin/DeleteEstateType', {

                        Id: Id

                    }).then(response => {


                        if (response.data.status == 200) {
                            Swal.fire({
                                icon: "success",
                                title: "Deleted",
                                text: "Estate was deleted",
                                customClass: {confirmButton: "btn btn-success"}
                            })
                            setTimeout(function () {
                                window.location.reload();
                            }, 2000);

                        } else if (response.data.status == 401) {
                            Swal.fire({
                                icon: "info",
                                title: "cannot delete because this Estate type already before use for estate ",
                                text: response.data.msg,
                                customClass: {confirmButton: "btn btn-success"}
                            })
                            setTimeout(function () {
                                window.location.reload();
                            }, 4000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });
                } else if (t.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: "cancel",
                        text: "operation is cancel",
                        icon: "error",
                        customClass: {confirmButton: "btn btn-success"}
                    })
                }
            }))


        },

        EditTypeEstate: function (Id) {


            axios.post('/admin/EditEstateType', {

                Id: Id,
                NameEditTypeEstate: this.NameTypeEstate


            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 200) {

                    Swal.fire({
                        icon: "success",
                        title: "Edit",
                        text: "Edit is success",
                        customClass: {confirmButton: "btn btn-success"}
                    })

                    setTimeout(function () {
                        location.reload();
                    }, 2000);



                }

            }, response => {
                Swal.fire({
                    title: "cancel",
                    text: "operation is cancel",
                    icon: "error",
                    customClass: {confirmButton: "btn btn-success"}
                })
                this.error = 1;
                console.log("error");
            });


        },

        DeleteFavorite: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی نوع ملک نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {
                    axios.post('/DeleteFavorite', {

                        Id: Id

                    }).then(response => {


                        alert('حذف موفق آمیز بود');
                        setTimeout(function () {
                            window.location.assign('/admin/NewEstateType');
                        }, 2000);


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },



        RequestOffer: function () {


            //var estatetype= $("#estatetype option:selected").val();
            var Posselected = $("#Posselected").val();
            var Eseateselected = $("#Eseateselected").val();


            var positionArea = $("#positionArea").text();


            if (this.nameOffer == "") {
                toastr.info('لطفا نام خود را وارد کنید');
                $("#nameOffer").addClass('input_alert');
                $('#nameOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.nameOffer != "") {
                $("#nameOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }
            if ($('#mdb-select').has('option').length = 0) {
                toastr.info('لطفا  منطقه درخواستی را وارد کنید');

            } else if ($("#mdb-select").val() != "") {

                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if ($("#mdb-selecttwo").val() == "") {
                toastr.info('لطفا  نوع ملک درخواستی را وارد کنید');
                $("#mdb-selecttwo").addClass('input_alert');

            } else if ($("#mdb-selecttwo").val() != "") {

                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (this.mobileOffer == "") {
                toastr.info('لطفا  شماره موبایل را وارد کنید');
                $("#mobileOffer").addClass('input_alert');
                $('#mobileOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.mobileOffer != "") {
                $("#mobileOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }
            if (this.textOffer == "") {
                toastr.info('لطفا   پیغام خود را وارد کنید');
                $("#textOffer").addClass('input_alert');
                $('#textOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.textOffer != "") {
                $("#textOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (this.minprice == "") {
                toastr.info('لطفا حداقل قیمت ملک خود را وارد کنید');
                $("#minprice").addClass('input_alert');
                $('#minprice').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.minprice != "") {
                $("#minprice").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }
            if (this.maxprice == "") {
                toastr.info('لطفا حداکثر قیمت ملک خود را وارد کنید');
                $("#maxprice").addClass('input_alert');
                $('#maxprice').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.maxprice != "") {
                $("#maxprice").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }


            if (this.position_type_user == "") {
                toastr.info('لطفا موقعیت ملک خود را وارد کنید');
                $("#positionArea").addClass('input_alert');
                $('#positionArea').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.position_type_user != "") {
                $("#positionArea").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }


            if (this.nameOffer != '' && this.mobileOffer != '' && this.maxprice != ''
                && this.minprice != '' && this.textOffer != '') {
                axios.post('/RequestOffer', {


                    name: this.nameOffer,
                    mobile: this.mobileOffer,
                    message: this.textOffer,
                    minprice: this.minprice,
                    maxprice: this.maxprice,

                    regionrequestOffer: Posselected,
                    estatetype_userOffer: Eseateselected,
                    positionArea: positionArea,

                }).then(response => {

                    console.log(response.data.status);

                    if (response.data.status == 100) {

                        toastr.success('با موفقیت درخواست شما ثبت شد');

                        setTimeout(function () {
                            //   window.location.assign('/');
                        }, 2000);

                    } else {

                        toastr.info('مشتری گرامی قبلا درخواست شما ثبت شده در حال بررسی هستیم');
                    }


                }, response => {
                    this.error = 1;
                    console.log("error");
                });
            }


        },
        SendCode: function (Id) {


            var CodeSMS = $("#CodeSMS").val();


            if (Id) {
                axios.post('/admin/SendSMSCode', {


                    Id: Id,
                    CodeSMS: CodeSMS,


                }).then(response => {

                    console.log(response.data.status);

                    if (response.data.status == 100) {

                        toastr.success('عملیات بررسی با موفقیت انجام شد');

                        setTimeout(function () {
                            location.reload();
                        }, 2000);

                    } else {

                        toastr.info('عملیات ناموفق بود مجددا تلاش کنید');
                    }


                }, response => {
                    this.error = 1;
                    console.log("error");
                });
            }

        },
        ResendRequest: function (Id) {


            if (Id) {
                axios.post('/admin/ResendRequest', {


                    Id: Id,


                }).then(response => {

                    console.log(response.data.status);

                    if (response.data.status == 100) {

                        toastr.success('عملیات بررسی با موفقیت انجام شد');

                        setTimeout(function () {
                            location.reload();
                        }, 2000);

                    } else {

                        toastr.info('عملیات ناموفق بود مجددا تلاش کنید');
                    }


                }, response => {
                    this.error = 1;
                    console.log("error");
                });
            }

        },
        AddNoteRequest: function (Id) {


            // var text= $("textarea[name='textNote']").val();
            // var text= $("#exampleFormControlTextarea1").val();


            if (this.textNote == "") {
                toastr.info('لطفا توضیحات را وارد کنید');

            }


            if (this.textNote != '') {
                axios.post('/admin/AddRequestNote', {

                    Id: Id,
                    text: this.textNote,

                }).then(response => {

                    console.log(response.data.status);

                    if (response.data.status == 100) {

                        toastr.success('با موفقیت توضیحات  شما ثبت شد');

                        setTimeout(function () {
                            location.reload();
                        }, 2000);

                    } else {

                        toastr.info('مجددا تلاش کنید');
                    }


                }, response => {
                    this.error = 1;
                    console.log("error");
                });
            }


        },
        ContactUSReuqest: function () {


            if (this.nameOffer == "") {
                toastr.info('لطفا نام خود را وارد کنید');
                $("#nameOffer").addClass('input_alert');
                $('#nameOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.nameOffer != "") {
                $("#nameOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }


            if (this.mobileOffer == "") {
                toastr.info('لطفا  شماره موبایل را وارد کنید');
                $("#mobileOffer").addClass('input_alert');
                $('#mobileOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.mobileOffer != "") {
                $("#mobileOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (this.textOffer == "") {
                toastr.info('لطفا   پیغام خود را وارد کنید');
                $("#textOffer").addClass('input_alert');
                $('#textOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.textOffer != "") {
                $("#textOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (this.emailContactus == "") {
                toastr.info('لطفا آدرس ایمیل خود را وارد کنید');
                $("#emailContactus").addClass('input_alert');
                $('#emailContactus').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.emailContactus != "") {
                $("#emailContactus").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }


            if (this.nameOffer != '' && this.mobileOffer != '' && this.textOffer != ''
                && this.emailContactus != '') {
                axios.post('AddNewContactus', {


                    name: this.nameOffer,
                    mobile: this.mobileOffer,
                    emailContactus: this.emailContactus,
                    message: this.textOffer,

                }).then(response => {

                    console.log(response.data.status);

                    if (response.data.status == 100) {

                        toastr.success('تشکر از شما در اسرع وقت  با شما تماس خواهیم گرفت');

                        setTimeout(function () {
                            window.location.assign('/');
                        }, 2000);

                    }


                }, response => {
                    this.error = 1;
                    console.log("error");
                });
            }


        },
        RequestEstate: function () {


            /* alert(this.namereq);
             alert(this.estatetypereq);
             alert(this.pricereq);
             alert(this.position_type_req);
             alert(this.regionselectreq);
             alert(this.regionselectreq);
             alert(this.RoomNumberreq);
             alert(this.mobilereq);*/

            axios.post('/admin/AddRequestEstate', {
                namereq: this.namereq,
                estatetypereq: this.estatetypereq,
                pricereq: this.pricereq,
                position_type_req: this.position_type_req,
                regionselectreq: this.regionselectreq,
                RoomNumberreq: this.RoomNumberreq,
                mobilereq: this.mobilereq,
                floorreq: this.floorreq,
                LandTotalSquarereq: this.LandTotalSquarereq,
            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 100) {
                    swal("ثبت موفق ", "درخواست ملک  جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/listRequest');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },

        /***************OwenshipType*********************/
        AddOwenship: function () {

            axios.post('/admin/storeOwnership', {
                NameOwnership: this.NameOwnership

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {

                    Swal.fire({
                        icon: "success",
                        title: "New  ",
                        text: "New Ownership is success",
                        customClass: {confirmButton: "btn btn-success"}
                    })

                    setTimeout(function () {
                        window.location.reload();
                    }, 3000);

                }


            }, response => {

                this.error = 1;
                Swal.fire({
                    title: "cancel",
                    text: "operation is cancel",
                    icon: "error",
                    customClass: {confirmButton: "btn btn-success"}
                })
            });
        },
        EditOwenership: function (Id) {

            axios.post('/admin/EditOwnership', {
                action: 'EditOwnership',
                Id: Id,
                EditNameOwnership: this.EditNameOwnership

            }).then(response => {

                if (response.data.status == 200) {
                    Swal.fire({
                        icon: "success",
                        title: "Edit ",
                        text: "Upadate is success",
                        customClass: {confirmButton: "btn btn-success"}
                    })
                    setTimeout(function () {
                        window.location.reload();
                    }, 2000);
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });


        },
        DeleteOwnership: function (Id) {


            Swal.fire({
                title: "Are you Sure",
                text: "Delete ownership",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-outline-danger ms-1"},
                buttonsStyling: !1
            }).then((function (t) {

                if (t.value) {
                    axios.post('/admin/DeleteOwnership', {

                        Id: Id

                    }).then(response => {


                        if (response.data.status == 200) {

                            Swal.fire({
                                icon: "success",
                                title: "delete",
                                text: "delete is sucess",
                                customClass: {confirmButton: "btn btn-success"}
                            });

                            setTimeout(function () {
                                window.location.reload();
                            }, 2000);

                        } else if (response.data.status == 401) {

                            Swal.fire({
                                icon: "info",
                                title: "cancel",
                                text: response.data.msg,
                                customClass: {confirmButton: "btn btn-success"}
                            })
                            setTimeout(function () {
                                window.location.reload();
                            }, 4000);

                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });
                } else if (t.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: "cancel",
                        text: "cancel",
                        icon: "error",
                        customClass: {confirmButton: "btn btn-success"}
                    })
                }
            }))


        },
        DeleteTeam: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی تیم   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {
                    axios.post('DeleteTeam', {

                        Id: Id

                    }).then(response => {


                        swal("نوع مالکیت  شما با موفقیت حذف شد", {
                            icon: "success",
                            button: "باشه"
                        });
                        setTimeout(function () {
                            window.location.assign('/admin/MangTeam');
                        }, 2000);


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },
        EditOwnerShipe: function (Id) {


            axios.post('EditOwnerShip', {

                Id: Id,
                EditNameOwnership: this.EditNameOwnership


            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 100) {
                    swal("ویرایش ", "عملیات ویرایش با موفقیت انجام شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/NewEstateOwnerShip');
                    }, 2000);

                }


            }, response => {
                this.error = 1;
                console.log("error");
            });


        },

        /***************PossibiliesType*********************/
        AddPossibilities: function () {

            axios.post('/admin/storeFacilities', {
                NamePossibity: this.NamePossibity

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    Swal.fire({
                        title: "Success ",
                        text: "facilities  is success",
                        icon: "success",
                        customClass: {confirmButton: "btn btn-primary"},
                        buttonsStyling: !1
                    })

                    setTimeout(function () {
                        window.location.assign('/admin/CreateFacilities');
                    }, 2000);
                }


            }, response => {
               /* swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });*/
                this.error = 1;
                console.log("error");
            });
        },

        RemoveEstate: function (type, Id) {


            Swal.fire({
                title: "آیا مطمئنید ",
                text: "قصد حذف آیتم امکانات ملک دارید ؟",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-outline-danger ms-1"},
                buttonsStyling: !1
            }).then((function (t) {

                if (t.value) {


                    axios.post('admin/DeleteEstate', {
                        action: 'DeleteEstate',
                        Id: Id

                    }).then(response => {

                        if (response.data.status == 200) {
                            swal("ملک  شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 2000);
                            setTimeout(function () {
                                window.location.assign('/admin/Estate');
                            }, 2000);
                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('/admin/Estate');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });


                } else if (t.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: "لغو",
                        text: "عملیات حذف لغو شد",
                        icon: "error",
                        customClass: {confirmButton: "btn btn-success"}
                    })
                }
            }))


        },


        DeletePossibilities: function (Id) {


            Swal.fire({
                title: "Are you sure ",
                text: "Delete  facilities ",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-outline-danger ms-1"},
                buttonsStyling: !1
            }).then((function (t) {

                if (t.value) {
                    axios.post('/admin/DeleteFacilities', {

                        Id: Id

                    }).then(response => {


                        if (response.data.status == 200) {
                            Swal.fire({
                                icon: "success",
                                title: "delete Sucess",
                                text: " facilities was deleted",
                                customClass: {confirmButton: "btn btn-success"}
                            })
                            setTimeout(function () {
                                window.location.reload();
                            }, 5000);

                        } else if (response.data.status == 401) {
                            Swal.fire({
                                icon: "info",
                                title: "cannot delete ",
                                text: response.data.msg,
                                customClass: {confirmButton: "btn btn-success"}
                            })
                            setTimeout(function () {
                                window.location.reload();
                            }, 4000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });
                } else if (t.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: "cancel",
                        text: "cancel",
                        icon: "error",
                        customClass: {confirmButton: "btn btn-success"}
                    })
                }
            }))


        },


        EditFacilities: function (Id) {


            axios.post('/admin/EditFacilities', {

                Id: Id,
                EditNamePossibity: this.EditNamePossibity


            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 200) {

                    Swal.fire({
                        icon: "success",
                        title: "Edit",
                        text: " facilities is success edit",
                        customClass: {confirmButton: "btn btn-success"}
                    })
                    setTimeout(function () {
                        window.location.assign('/admin/CreateFacilities');
                    }, 2000);

                }


            }, response => {
                this.error = 1;
                console.log("error");
            });


        },

        /***************UsageType*********************/
        AddUsageType: function () {

            axios.post('/admin/storeUsageType', {
                NameUsage: this.NameUsage

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {

                    Swal.fire({
                        title: " Success ",
                        text: "New Usage type is success",
                        icon: "success",
                        customClass: {confirmButton: "btn btn-primary"},
                        buttonsStyling: !1
                    })
                    setTimeout(function () {
                        window.location.assign('/admin/CreateUsageType');
                    }, 2000);
                }


            }, response => {
               /* swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });*/
                this.error = 1;
                console.log("error");
            });
        },
        DeleteUsageType: function (Id) {


            Swal.fire({
                title: "Are you sure?",
                text: "delete this usage type",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-outline-danger ms-1"},
                buttonsStyling: !1
            }).then((function (t) {

                if (t.value) {
                    axios.post('/admin/DeleteUsageType', {

                        Id: Id

                    }).then(response => {


                        if (response.data.status == 200) {
                            Swal.fire({
                                icon: "success",
                                title: "deleted!",
                                text: "Usage Type is deleted",
                                customClass: {confirmButton: "btn btn-success"}
                            })
                            setTimeout(function () {
                                window.location.reload();
                            }, 2000);
                        } else if (response.data.status == 401) {
                            Swal.fire({
                                icon: "info",
                                title: "cannot allow delete",
                                text: response.data.msg,
                                customClass: {confirmButton: "btn btn-success"}
                            })
                            setTimeout(function () {
                                window.location.reload();
                            }, 4000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });
                } else if (t.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: "cancel",
                        text: "cancel",
                        icon: "error",
                        customClass: {confirmButton: "btn btn-success"}
                    })
                }
            }));


        },
        EditUsageType: function (Id) {


            axios.post('/admin/EditUsageType', {

                Id: Id,
                EditNameUsage: this.EditNameUsage


            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 200) {

                    Swal.fire({
                        icon: "success",
                        title: "Edit",
                        text: "Usage is Success Edit",
                        customClass: {confirmButton: "btn btn-success"}
                    })

                    setTimeout(function () {
                        location.reload();
                    }, 2000);

                }


            }, response => {
                this.error = 1;
                Swal.fire({
                    title: "cancel",
                    text: "cancel",
                    icon: "error",
                    customClass: {confirmButton: "btn btn-success"}
                })
            });


        },

        /***************RegionType*********************/
        AddRegion: function () {

            axios.post('/admin/storeRegion', {
                NameRegion: this.NameRegion

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 100) {
                    Swal.fire({
                        title: "New Region",
                        text: "New Region success ",
                        icon: "success",
                        customClass: {confirmButton: "btn btn-primary"},
                        buttonsStyling: !1
                    })

                    setTimeout(function () {
                        window.location.assign('/admin/CreateRegion');
                    }, 2000);
                }


            }, response => {
                Swal.fire({
                    title: "Error ",
                    text: "try again",
                    icon: "error",
                    customClass: {confirmButton: "btn btn-primary"},
                    buttonsStyling: !1
                })
                this.error = 1;
                console.log("error");
            });
        },
        DeleteRegion: function (Id) {

            Swal.fire({
                title: "Are you sure ",
                text: "Delete region?",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-outline-danger ms-1"},
                buttonsStyling: !1
            }).then((function (t) {

                if (t.value) {
                    axios.post('DeleteRegion', {

                        Id: Id

                    }).then(response => {


                        if (response.data.status == 200) {
                            Swal.fire({
                                icon: "success",
                                title: "Delete Region",
                                text: "region is success delete",
                                customClass: {confirmButton: "btn btn-success"}
                            })
                            setTimeout(function () {
                                window.location.assign('/admin/CreateRegion');
                            }, 2000);
                        } else if (response.data.status == 401) {
                            Swal.fire({
                                icon: "info",
                                title: "don't allow delete this region because this region already use for estate save",
                                text: response.data.msg,
                                customClass: {confirmButton: "btn btn-success"}
                            })
                            setTimeout(function () {
                                window.location.assign('/admin/CreateRegion');
                            }, 4000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });
                } else if (t.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: "Cancel",
                        text: "Operation is cancell",
                        icon: "error",
                        customClass: {confirmButton: "btn btn-success"}
                    })
                }
            }))
        },


        EditRegion: function (Id) {


            axios.post('/admin/EditRegion', {

                Id: Id,
                EditNameRegion: this.EditNameRegion


            }).then(response => {



                if (response.data['status'] == 200) {
                    Swal.fire({
                        icon: "success",
                        title: "Edit",
                        text: "Region is success edit",
                        customClass: {confirmButton: "btn btn-success"}
                    })

                    setTimeout(function () {
                        location.reload();
                    }, 2000);



                }


            }, response => {
                this.error = 1;
                Swal.fire({
                    title: "Cancel",
                    text: "Operation is cancel",
                    icon: "error",
                    customClass: {confirmButton: "btn btn-success"}
                })
            });


        },

        DateInputNew(type, event) {

            if (type == 'regionname') {
                this.EditNameRegion = event.target.value;

            }
            if (type == 'NameTypeEstate') {
                this.NameTypeEstate = event.target.value;

            }
            if (type == 'NameOwenership') {
                this.EditNameOwnership = event.target.value;

            }
            if (type == 'NamePossibilities') {
                this.EditNamePossibity = event.target.value;

            }
            if (type == 'NameUsage') {
                this.EditNameUsage = event.target.value;

            }
            if (type == 'username') {
                this.usernameEdit = event.target.value;

            }
            if (type == 'mobile') {
                this.mobileEdit = event.target.value;

            }

        },
        /***************RegionType*********************/
        AddEstate: function () {


            var provincelist = $("#state option:selected").text();
            var citylist = $("#city option:selected").text();
            var regionselect = $("#regionselect option:selected").val();
            var estatetype = $("#estatetype option:selected").val();
            var typeAdv = $("#typeAdv option:selected").val();
            var usagetype = $("#usagetype option:selected").val();
            var ownership = $("#ownership option:selected").val();
            var requestTour = $("#requestTour option:selected").val();
            var LandTotalSquare = $("#LandTotalSquare").text();


            axios.post('/admin/AddEstate', {

                city: this.city,
                province: this.province,
                region: this.regionselect,
                estatetype: this.estatetype,
                typeAdv: this.typeAdv,
                position_type: this.position_type,
                usagetype: this.usagetype,
                ownership: this.ownership,
                requestTour: this.requestTour,
                ComplimentalDescription: this.ComplimentalDescription,
                LandTotalSquare: this.LandTotalSquare,
                SquareFootage: this.SquareFootage,
                RoomNumber: this.RoomNumber,
                floor: this.floor,
                yearmade: this.yearmade,
                MobileNumber: this.MobileNumber,
                fullname: this.fullname,
                Email: this.Email,
                Address: this.Address,
                loanAmount: this.loanAmount,
                price: this.price,
                loan: this.loan,
                price_rahan: this.price_rahan,
                RentAmount: this.RentAmount,
                textNote: this.textNote,
                VirtualTourCode: this.VirtualTourCode,

                /* province:provincelist,
                 region:regionselect,
                 requestTour:requestTour,
                 estatetype:$("#estatetype option:selected").text(),

                 ownership:ownership,
                 typeAdv:typeAdv,

                 ComplimentalDescription:this.ComplimentalDescription,
                 LandTotalSquare:this.LandTotalSquare,
                 SquareFootage:this.SquareFootage,
                 RoomNumber:this.RoomNumber,
                 floor:this.floor,
                 yearmade:this.yearmade,
                 MobileNumber:this.MobileNumber,
                 fullname:this.fullname,
                 Email:this.Email,
                 Address:this.Address,
                 loanAmount:this.loanAmount,
                 price:this.price,
                 loan:this.loan,
                 price_rahan:this.price_rahan,
                 RentAmount:this.RentAmount,
                 textNote:this.textNote,

                 VirtualTourCode:this.VirtualTourCode,
 */

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 100) {
                    swal("ثبت موفق ", "ملک جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/Estatelist');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        ChangeVlaueAdvType: function (event) {

            var typeAdv = $("#typeAdv option:selected").val();
            var price = $("input[data-value='price']").val();


            var loan = $("#loan option:selected").val();
            var loanAmount = $("input[data-value='loanAmount']").val();
            var price_rahan = $("input[data-value='price_rahan']").val();
            var RentAmount = $("input[data-value='RentAmount']").val();
            if (typeAdv == 'sale') {
                price_rahan.text(0);
                RentAmount.text(0);
            } else {
                price.text(0);
            }


        },
        EditEstate: function (EstateId) {


            var provincelist = $("#state option:selected").text();
            var citylist = $("#city option:selected").text();
            var regionselect = $("#regionselect option:selected").val();

            if (regionselect == '') {
                toastr.error('لطفا منطقه ملک را مشخص کنید');
            }
            var estatetype = $("#estatetype option:selected").val();
            var position_type = $("#position_type option:selected").val();
            var typeAdv = $("#typeAdv option:selected").val();


            var usagetype = $("#usagetype option:selected").val();
            var ownership = $("#ownership option:selected").val();
            var requestTour = $("#requestTour option:selected").val();

            var LandTotalSquare = $("input[data-value='LandTotalSquare']").val();
            var SquareFootage = $("input[data-value='SquareFootage']").val();

            var RoomNumber = $("input[data-value='RoomNumber']").val();

            var unit = $("input[data-value='unit']").val();
            var floor = $("input[data-value='floor']").val();
            var unitfloor = $("input[data-value='unitfloor']").val();


            var yearmade = $("input[data-value='yearmade']").val();
            var fullname = $("input[data-value='fullname']").val();
            var MobileNumber = $("input[data-value='MobileNumber']").val();
            var Email = $("input[data-value='Email']").val();
            var Address = $("input[data-value='Address']").val();
            var price = $("input[data-value='price']").val();

            var loan = $("#loan option:selected").val();
            var loanAmount = $("input[data-value='loanAmount']").val();
            var price_rahan = $("input[data-value='price_rahan']").val();
            var RentAmount = $("input[data-value='RentAmount']").val();
            var VirtualTourCode = $("input[data-value='VirtualTourCode']").val();
            var ComplimentalDescription = $("textarea[data-value='ComplimentalDescription']").val();
            var textNote = $("textarea[data-value='textNote']").val();


            if (loan == 1) {
                if (RentAmount == '') {
                    toastr.error('لطفا مبلغ وام را وارد کنید ');
                    return false;
                }

                if (Number(RentAmount) === 0) {

                    toastr.error('فیلد وام باید وارد کنید چون ملک مورد نظر وام دارد');
                    return false;
                }

            }


            if (typeAdv == 'rent') {

                if (price_rahan == '') {
                    toastr.error('ملک جاری از نوع اجاره هست لطفا قیمت رهن را وارد کنید');
                    return false;
                }
                if (RentAmount == '') {
                    toastr.error('ملک جاری از نوع اجاره هست لطفا قیمت اجاره را وارد کنید');
                    return false;
                }
                if (Number(RentAmount) === 0) {
                    toastr.error('ملک جاری از نوع اجاره هست لطفا قیمت اجاره را وارد کنید');
                    return false;
                }
                if (Number(price_rahan) === 0) {
                    toastr.error('ملک جاری از نوع اجاره هست لطفا قیمت رهن را وارد کنید');
                    return false;
                }


            } else if (typeAdv == 'sale') {


                if (price == '') {
                    toastr.error('قیمت فروش ملک را وارد کنید نباید خالی باشد');
                    return false;

                } else if (Number(price) === 0) {
                    toastr.error('قیمت فروش ملک را وارد کنید نباید خالی باشد');
                    return false;
                }
            }

            this.allerros = [];

            axios.post('/admin/UpdateEstate', {

                EstateId: EstateId,
                city: citylist,
                province: provincelist,
                region: regionselect,
                estatetype: estatetype,
                typeAdv: typeAdv,
                position_type: position_type,
                usagetype: usagetype,
                ownership: ownership,
                requestTour: requestTour,
                ComplimentalDescription: ComplimentalDescription,
                LandTotalSquare: LandTotalSquare,
                SquareFootage: SquareFootage,
                RoomNumber: RoomNumber,
                unit: unit,
                floor: floor,
                unitfloor: unitfloor,
                yearmade: yearmade,
                MobileNumber: MobileNumber,
                fullname: fullname,
                Email: Email,
                Address: Address,
                loanAmount: loanAmount,
                price: price,
                loan: loan,
                price_rahan: price_rahan,
                RentAmount: RentAmount,
                textNote: textNote,
                VirtualTourCode: VirtualTourCode,


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 100) {
                    /* swal("ویرایش موفق ", "ملک مورد نظر با موفقیت ویرایش شد", "info", {
                         button: "باشه"
                     });*/
                    Swal.fire({
                        title: "عملیات ویرایش موفق",
                        text: "ملک مورد نظر با موفقیت ویرایش شد",
                        icon: "success",
                        customClass: {confirmButton: "btn btn-primary"},
                        buttonsStyling: !1
                    })

                    setTimeout(function () {
                        // window.location.assign('/admin/Estatelist');
                        location.reload();
                    }, 2000);
                } else if (response.data['success'] == false) {
                    toastr.error('لطفا فیلد ها را با دقت پر کنید');
                    this.allerros = response.data.errors;


                }


            })


            /* ,response=>{
                     alert(response.data.errors);
                     this.errors=response.data.errors;

                     /!* if(error.response.status == 422)
                      {

                          this.errors=error.response.data.errors;
                      }*!/
                     swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                         button: "باشه"
                     });
                     this.errors=error.response.data.errors;
                     console.log("error");
                 }*/


        },
        AddPossibilitiesToEstate: function (id, type) {


            var val = [];
            var arr = [];
            var i = 0;
            $('.form-check-input:checked').each(function () {
                arr[i++] = $(this).val();
            });

            /*  $(':checkbox:checked').each(function(i){
                  val[i] = $(this).val();
                  alert(val);
              });*/


            var typelink = '';


            axios.post('/admin/AddPossibilitiesToEstate', {
                action: 'AddPossibilitiesToEstate',
                id: id,
                possibilies: $("#Posselected").val(),

            }).then(response => {
                /* swal("ثبت موفق ", "نوع امکانات جدید برای ملک مورد نظر با موفقیت ثبت شد", "success", {
                     button: "باشه"
                 });*/
                console.log(response.data['status']);

                if (response.data.status == 500) {

                    Swal.fire({
                        title: "تکراری",
                        text: "امکانات انتخاب شده تکراری هست دقت کنید",
                        icon: "info",
                        customClass: {confirmButton: "btn btn-primary"},
                        buttonsStyling: !1
                    })

                    /*   swal("تکراری", "نوع امکانات انتخاب شده تکراری هست دقت کنید ", "warning", {
                           button: "باشه"
                       });*/
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (response.data.status == 200) {

                    Swal.fire({
                        title: "ثبت موفق",
                        text: "نوع امکانات جدید برای ملک مورد نظر با موفقیت ثبت شد",
                        icon: "success",
                        customClass: {confirmButton: "btn btn-primary"},
                        buttonsStyling: !1
                    })

                    /*   swal("ثبت موفق ", "نوع امکانات جدید برای ملک مورد نظر با موفقیت ثبت شد", "success", {
                           button: "باشه"
                       });*/
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }

                /*  setTimeout(function () {
                      location.reload();
                  },2000);*/

                /*   if (response.data['status'] == 100) {
                       swal("ثبت موفق ", "نوع امکانات جدید برای ملک مورد نظر با موفقیت ثبت شد", "success", {
                           button: "باشه"
                       });

                   }*/


            }, response => {

                Swal.fire({
                    title: "خطا!",
                    text: " خطا مجددا سعی کنید",
                    icon: "error",
                    customClass: {confirmButton: "btn btn-primary"},
                    buttonsStyling: !1
                })

                /*    swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                        button: "باشه"
                    });*/
                this.error = 1;
                console.log("error");
            });
        },
        DeletePossibilitiesEstate: function (Id, type) {


            Swal.fire({
                title: "آیا مطمئنید ",
                text: "قصد حذف آیتم امکانات ملک دارید ؟",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-outline-danger ms-1"},
                buttonsStyling: !1
            }).then((function (t) {

                if (t.value) {
                    axios.post('/admin/DeletePossibilitiesEstate', {

                        action: 'DeletePossibilitiesEstate',
                        Id: Id,

                    }).then(response => {

                        Swal.fire({
                            icon: "success",
                            title: "حذف موفق آمیز!",
                            text: "نوع امکانات  شما با موفقیت حذف شد",
                            customClass: {confirmButton: "btn btn-success"}
                        })

                        setTimeout(function () {
                            location.reload();
                        }, 2000);


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });
                } else if (t.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: "لغو",
                        text: "عملیات حذف لغو شد",
                        icon: "error",
                        customClass: {confirmButton: "btn btn-success"}
                    })
                }
            }))


        },


        DeleteImageEstate: function (Id, type) {


            Swal.fire({
                title: "آیا مطمئنید ",
                text: "قصد حذف تصویر ملک دارید ؟",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-outline-danger ms-1"},
                buttonsStyling: !1
            }).then((function (t) {

                if (t.value) {
                    axios.post('/admin/DeleteImageEstate', {

                        action: 'DeleteImageEstate',
                        Id: Id,

                    }).then(response => {

                        Swal.fire({
                            icon: "success",
                            title: "حذف موفق آمیز!",
                            text: "تصویر مورد نظر با موفقیت حذف شد",
                            customClass: {confirmButton: "btn btn-success"}
                        })

                        setTimeout(function () {
                            location.reload();
                        }, 2000);


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });
                } else if (t.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: "لغو",
                        text: "عملیات حذف لغو شد",
                        icon: "error",
                        customClass: {confirmButton: "btn btn-success"}
                    })
                }
            }))


        },

        GetShowImageEsate: function (EstateId) {


            var RoomNumber = $("input[data-value='RoomNumber']").val();


            this.allerros = [];

            axios.get('/admin/EditEstate', {

                EstateId: EstateId,


            }).then(response => {
                console.log(response.data);


            })


        },

        ImageAvatar(e) {

            let files = e.target.files || e.dataTransfer.files;
            if (!files.length)
                return;
            this.createImage(files[0]);
        },
        createImage(file) {
            let reader = new FileReader();
            let vm = this;
            reader.onload = (e) => {
                vm.avatar = e.target.result;
            };
            reader.readAsDataURL(file);
        },
        uploadImage() {
            axios.post('/admin/AddTeam', {avatar: this.avatar}).then(response => {
                console.log(response);
            });
        },


        AddTeam: function () {


            var name = $("#name").val();
            var job = $("#job").val();
            var email = $("#email").val();
            var mobile = $("#mobile").val();
            var linkedin = $("#linkedin").val();
            var facebook = $("#facebook").val();
            var instagram = $("#instagram").val();
            var telegram = $("#telegram").val();
            var whatsup = $("#whatsup").val();
            // var whatsup=$("#file").val();


            const formData = new FormData();


            this.allerros = [];


            axios.post('/admin/AddTeam', {

                name: name,
                job: job,
                email: email,
                mobile: mobile,
                linkedin: linkedin,
                facebook: facebook,
                instagram: instagram,
                telegram: telegram,
                whatsup: whatsup,
                image: this.avatar


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 'success') {
                    swal("ثبت موفق ", "عضو جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });

                    setTimeout(function () {
                        // window.location.assign('/admin/Estatelist');
                        location.reload();
                    }, 2000);
                } else if (response.data['success'] == false) {
                    toastr.error('لطفا فیلد ها را با دقت پر کنید');
                    this.allerros = response.data.errors;


                }


            })


            /* ,response=>{
                     alert(response.data.errors);
                     this.errors=response.data.errors;

                     /!* if(error.response.status == 422)
                      {

                          this.errors=error.response.data.errors;
                      }*!/
                     swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                         button: "باشه"
                     });
                     this.errors=error.response.data.errors;
                     console.log("error");
                 }*/


        },

        AddNote: function (Id) {


            var imageSilder = $("#imageSilder").val();

            var noterequest = $('textarea[name="noterequest"]').val();


            axios.post('/admin/AddNote', {
                Id: Id,
                text: noterequest,


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 'success') {
                    swal("یادادشت", "یادادشت با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },
        AddSilder: function () {


            var imageSilder = $("#imageSilder").val();

            axios.post('/admin/AddSilder', {
                titleSilder: this.titleSilder,
                DescSilder: this.DescSilder,
                imageSilder: imageSilder

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 100) {
                    swal("اسلایدر", "اسلایدر با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/listSlider');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },
        EditSliderImage: function (Id) {


            var TopicSlider = $('input[name="TopicSlider"]').val();
            var TextSlider = $('input[name="TextSlider"]').val();
            var imageSilder = $("#imageSilder").val();


            axios.post('/admin/EditSlider', {
                Id: Id,
                TopicSlider: this.TopicSlider,
                TextSlider: this.TextSlider,
                imageSilder: this.avatar
            }).then(response => {


                if (response.data['status'] == 'success') {
                    swal("اسلایدر", "اسلایدر با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        DeleteEstateinfo: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی ملک  نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {
                    axios.post('/admin/DeleteEstate', {

                        Id: Id

                    }).then(response => {


                        if (response.data.status == 200) {
                            swal("ملک   شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });

                        }

                        /* swal("ملک   شما با موفقیت حذف شد", {
                             icon: "success",
                             button: "باشه"
                         });

                         setTimeout(function () {
                             window.location.assign('/admin/Estatelist');
                         },2000);*/


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },

        DeleteEstateAdmin: function (Id) {


            swal({
                title: "آیا قصد درخواست حذف  ملک جاری دارید ؟",
                text: "درخواست شما برای مدیر ارسال شود",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {
                    axios.post('/admin/DeleteEstateOffer', {

                        Id: Id

                    }).then(response => {

                        swal("درخواست شما با موفقیت ثبت شد ", {
                            icon: "success",
                            button: "تشکر از شما"
                        });

                        setTimeout(function () {
                            window.location.assign('/admin/Estatelist');
                        }, 2000);


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },

        DeleteRequest: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی درخواست  نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {

                    axios.post('/admin/DeleteRequest', {

                        Id: Id

                    }).then(response => {

                        swal("درخواست   شما با موفقیت حذف شد", {
                            icon: "success",
                            button: "باشه"
                        });

                        setTimeout(function () {
                            window.location.assign('/admin/listRequest');
                        }, 2000);


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },

        /***************Possibilies Estate*********************/
        AddPossibilitiesEstate: function (id) {


            var val = [];
            var arr = [];
            var i = 0;
            $('.form-check-input:checked').each(function () {
                arr[i++] = $(this).val();
            });

            /*  $(':checkbox:checked').each(function(i){
                  val[i] = $(this).val();
                  alert(val);
              });*/

            axios.post('/admin/AddPossibilitiesEstate', {

                id: id,
                possibilies: $("#Posselected").val()

            }).then(response => {
                swal("ثبت موفق ", "نوع امکانات جدید برای ملک مورد نظر با موفقیت ثبت شد", "success", {
                    button: "باشه"
                });
                console.log(response.data);

                setTimeout(function () {
                    location.reload();
                }, 2000);

                if (response.data['status'] == 100) {
                    swal("ثبت موفق ", "نوع امکانات جدید برای ملک مورد نظر با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },

        AddCurrentPossibiliesEstate: function (id) {


            var val = [];
            var arr = [];
            var i = 0;
            $('.form-check-input:checked').each(function () {
                arr[i++] = $(this).val();
            });

            /*  $(':checkbox:checked').each(function(i){
                  val[i] = $(this).val();
                  alert(val);
              });*/

            axios.post('/admin/AddCurrentPossibiliesEstate', {

                id: id,
                possibilies: $("#Posselected").val()

            }).then(response => {
                /* swal("ثبت موفق ", "نوع امکانات جدید برای ملک مورد نظر با موفقیت ثبت شد", "success", {
                     button: "باشه"
                 });*/
                console.log(response.data['status']);

                if (response.data['status'] == 500) {
                    swal("تکراری", "نوع امکانات انتخاب شده تکراری هست دقت کنید ", "warning", {
                        button: "باشه"
                    });
                } else {
                    swal("ثبت موفق ", "نوع امکانات جدید برای ملک مورد نظر با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }
                /*  setTimeout(function () {
                      location.reload();
                  },2000);*/

                /*   if (response.data['status'] == 100) {
                       swal("ثبت موفق ", "نوع امکانات جدید برای ملک مورد نظر با موفقیت ثبت شد", "success", {
                           button: "باشه"
                       });

                   }*/


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },

        ChangeStatusRequest: function (Id, type) {


            axios.post('/admin/ChangeStatusRequest', {

                Id: Id,
                type: type

            }).then(response => {

                if (response.data['status'] == "success") {

                    swal(" تغییر سطح ", "سطح درخواست با موفقیت تغییر یافت", "success", {
                        button: "باشه"
                    });

                    setTimeout(function () {
                        location.reload();
                    }, 2000);

                } else if (response.data['status'] == "Faild") {


                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },

        ChangeStatus: function (Id, type) {


            axios.post('/admin/ChangeEstateStatus', {

                Id: Id,
                type: type

            }).then(response => {

                if (response.data['status'] == 100) {

                    $(".modal-body").html(response.data['html']);
                    $("#exampleModalEdit").modal("show");

                    /*  swal("وضیعت ملک", "ملک مورد نظر به حالت انتشار تغییر یافت", "success", {
                          button: "باشه"
                      });*/
                    /* setTimeout(function () {
                         window.location.assign('/admin/Estatelist');
                     },2000);*/
                } else if (response.data['status'] == 101) {


                    swal("وضیعت ملک", "ملک مورد نظر به حالت انتشار تغییر یافت", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },

        ChangeEstateVIP: function (Id, type) {


            axios.post('/admin/ChangeEstateVIP', {

                Id: Id,
                type: type

            }).then(response => {

                if (response.data['status'] == 100) {


                    swal("وضعیت نوع ملک ", "ملک مورد نظر شما با موفقیت تغییر وضعیت داده شده", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 3000);
                } else if (response.data['status'] == 400) {


                    swal("وضیعت ملک", "ملک مورد نظر به حالت انتشار تغییر یافت", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },

        ChangeElevator: function (type, Id, valueadta) {


            axios.post('/admin/ChangeElevatoEstate', {
                action: 'ChangeElevatoEstate',
                Id: Id,
                type: valueadta

            }).then(response => {

                if (response.data['status'] == 100) {


                    Swal.fire({
                        title: "تغییر وضعیت",
                        text: "امکانات ویژه ملک مورد نظر تغییر یافت",
                        icon: "success",
                        customClass: {confirmButton: "btn btn-primary"},
                        buttonsStyling: !1
                    })

                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (response.data['status'] == 500) {


                    Swal.fire({
                        title: "خطا ",
                        text: "مجددا تلاش کنید",
                        icon: "error",
                        customClass: {confirmButton: "btn btn-primary"},
                        buttonsStyling: !1
                    })
                    setTimeout(function () {
                        window.location.assign('/admin/Estatelist');
                    }, 2000);
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },


        ChangeParking: function (type, Id, valueadta) {


            axios.post('/admin/ChangeParkingEstate', {

                Id: Id,
                type: valueadta

            }).then(response => {

                if (response.data['status'] == 100) {


                    Swal.fire({
                        title: "تغییر وضعیت",
                        text: "امکانات ویژه ملک مورد نظر تغییر یافت",
                        icon: "success",
                        customClass: {confirmButton: "btn btn-primary"},
                        buttonsStyling: !1
                    })

                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (response.data['status'] == 500) {


                    Swal.fire({
                        title: "خطا ",
                        text: "مجددا تلاش کنید",
                        icon: "error",
                        customClass: {confirmButton: "btn btn-primary"},
                        buttonsStyling: !1
                    })
                    setTimeout(function () {
                        window.location.assign('/admin/Estate');
                    }, 2000);
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },

        ChangeWarehouse: function (type, Id, valueadta) {


            axios.post('/admin/ChangewarehouseEstate', {

                Id: Id,
                type: valueadta

            }).then(response => {

                if (response.data['status'] == 100) {


                    Swal.fire({
                        title: "تغییر وضعیت",
                        text: "امکانات ویژه ملک مورد نظر تغییر یافت",
                        icon: "success",
                        customClass: {confirmButton: "btn btn-primary"},
                        buttonsStyling: !1
                    })

                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (response.data['status'] == 500) {


                    Swal.fire({
                        title: "خطا ",
                        text: "مجددا تلاش کنید",
                        icon: "error",
                        customClass: {confirmButton: "btn btn-primary"},
                        buttonsStyling: !1
                    })

                    setTimeout(function () {
                        window.location.assign('/admin/Estatelist');
                    }, 2000);
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },


        ChangeBalcony: function (type, Id, valueadta) {

            var typelink = '';

            if (type == 'User') {
                typelink = '/User/ActionServer';
            } else if (type == 'admin') {
                typelink = '/admin/ActionServer';
            }

            axios.post(typelink, {

                action: 'ChangeBalconyEstate',
                Id: Id,
                type: valueadta

            }).then(response => {

                if (response.data['status'] == 100) {


                    Swal.fire({
                        title: "تغییر وضعیت",
                        text: "امکانات ویژه ملک مورد نظر تغییر یافت",
                        icon: "success",
                        customClass: {confirmButton: "btn btn-primary"},
                        buttonsStyling: !1
                    })


                    setTimeout(function () {
                        location.reload();
                    }, 2000);

                } else if (response.data['status'] == 500) {

                    Swal.fire({
                        title: "خطا ",
                        text: "مجددا تلاش کنید",
                        icon: "error",
                        customClass: {confirmButton: "btn btn-primary"},
                        buttonsStyling: !1
                    })

                    setTimeout(function () {
                        window.location.assign('/admin/Estate');
                    }, 2000);
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },

        ChangeElevatormain: function (Id, valueadta) {


            axios.post('/admin/ChangeElevatoEstate', {

                Id: Id,
                type: valueadta

            }).then(response => {

                if (response.data['status'] == 100) {

                    Swal.fire({
                        title: "تغییر وضعیت",
                        text: "امکانات ویژه ملک مورد نظر تغییر یافت",
                        icon: "success",
                        customClass: {confirmButton: "btn btn-primary"},
                        buttonsStyling: !1
                    })
                    /* swal("تغییر وضعیت ", "امکانات ویژه ملک مورد نظر تغییر یافت", "success", {
                           button: "باشه"
                       });
   */
                    setTimeout(function () {
                        location.reload();
                    }, 2000);

                } else if (response.data['status'] == 500) {


                    Swal.fire({
                        title: "خطا ",
                        text: "مجددا تلاش کنید",
                        icon: "error",
                        customClass: {confirmButton: "btn btn-primary"},
                        buttonsStyling: !1
                    })
                    /*swal(" خطا", "مجددا تلاش کنید", "warning", {
                        button: "باشه"
                    });*/
                    setTimeout(function () {
                        window.location.assign('/admin/Estate');
                    }, 2000);
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },


        ChangeStatusUser: function (Id, type) {


            axios.post('/admin/ChangeUserStatus', {

                Id: Id,
                type: type

            }).then(response => {

                if (response.data['status'] == 100) {


                    swal("وضیعت دسترسی", "وضعیت حساب کاربری مورد نظر تغییر  یافت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/User');
                    }, 2000);
                } else if (response.data['status'] == 101) {


                    swal("خطا", "مجددا تلاش کنید ", "warning", {
                        button: "باشه"
                    });
                    /* setTimeout(function () {
                         window.location.assign('/admin/Estatelist');
                     },2000);*/
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },

        ChangePermissionUser: function (Id, type) {

            axios.post('/admin/ChangePermissionUser', {

                Id: Id,
                type: type

            }).then(response => {

                if (response.data['status'] == 100) {


                    swal("وضیعت دسترسی", "وضعیت حساب کاربری مورد نظر تغییر  یافت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/User');
                    }, 2000);
                } else if (response.data['status'] == 101) {


                    swal("خطا", "مجددا تلاش کنید ", "warning", {
                        button: "باشه"
                    });
                    /* setTimeout(function () {
                         window.location.assign('/admin/Estatelist');
                     },2000);*/
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },


        ChangeStateNoty: function () {


            axios.post('/admin/ChangeUserStatus', {

                Id: Id,
                type: type

            }).then(response => {

                if (response.data['status'] == 100) {


                    swal("وضیعت دسترسی", "وضعیت حساب کاربری مورد نظر تغییر  یافت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/User');
                    }, 2000);
                } else if (response.data['status'] == 101) {


                    swal("خطا", "مجددا تلاش کنید ", "warning", {
                        button: "باشه"
                    });
                    /* setTimeout(function () {
                         window.location.assign('/admin/Estatelist');
                     },2000);*/
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },

        ChangePassword: function (Id) {


            axios.post('/admin/ChangeUserPassword', {

                Id: Id,
                NewPassword: this.NewPassword

            }).then(response => {

                if (response.data['status'] == 100) {


                    swal("رمز عبور ", "رمز عبور با موفقیت عوض شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/User');
                    }, 2000);
                } else if (response.data['status'] == 101) {


                    swal("خطا", "مجددا تلاش کنید ", "warning", {
                        button: "باشه"
                    });
                    /* setTimeout(function () {
                         window.location.assign('/admin/Estatelist');
                     },2000);*/
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },


        EditStateEstatePending: function () {


            axios.post('/admin/ChangeEstateStatusPending', {

                Id: $("#IdEstate").val(),
                type: $("#typeStatus").val(),
                text: $("#StatusText").val(),

            }).then(response => {

                if (response.data['status'] == 100) {

                    swal("وضیعت ملک", "ملک با موفقیت غیرفعال شد و اطاع رسانی شد", "success", {
                        button: "باشه"
                    });

                    setTimeout(function () {
                        location.reload();
                    }, 2000)
                }

            }, response => {
                this.error = 1;
                console.log("error");
            });

        },


        EditTran: function (Id) {


            //var regionselecttra= $("#regionselecttra option:selected").val();
            var regionselecttra = $("#regionselecttra").val();
            var estatetypetra = $("#estatetypetra").val();

            //var estatetypetra= $('#estatetypetra').find(":selected").val();

            //  var desc=CKEDITOR.instances['editor-demo1'].getData();
            var desc = $("textarea[name='descTrans']").val();


            var fullnameTran = $("#fullnameTran").val();
            var Sellername = $("#Sellername").val();
            var priceTran = $("#priceTran").val();
            var comissionprice = $("#comissionprice").val();


            axios.post('/admin/EditTran', {
                Id: Id,
                fullnameTran: fullnameTran,
                Sellername: Sellername,
                priceTran: priceTran,
                comissionprice: comissionprice,
                desc: desc,
            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == "success") {
                    swal("ویرایش موفق ", " معامله    با موفقیت ویرایش شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (response.data['status'] == "Faild") {
                    swal("ویرایش ناموفق ", " خطا مجددا تلاش کنید", "info", {
                        button: "باشه"
                    });
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },

        DeleteTran: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی معامله   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {
                    axios.post('DeleteTran', {

                        Id: Id

                    }).then(response => {


                        if (response.data['status'] == "success") {
                            swal("معامله  شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 2000);
                        } else if (response.data['status'] == "Faild") {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },
        /* onChangeRegion:function(event) {

            this.regionselecttr=event.target.value;
             console.log(event.target.value);
             alert(event.target.value);
         },*/

        onChangeRegion(event) {

            this.keyregion = event.target.value;
            console.log(event.target.value);
        },
        onChange(event) {
            alert(event.target.value);
            console.log(event.target.value)
        },
        AddTransaction: function () {


            //  var regionselecttra= $("#regionselecttra option:selected").val();


            var regionselecttra = $('#keyregion').val();
            var estatetypetra = $('#estatetypetra').val();


            //var regionselecttra= $('#regionselecttra').find(":selected").val();
            //  var regionselecttra= $("#regionselecttra").prop('selectedIndex');
            //  var estatetypetra= $("#estatetypetra").prop('selectedIndex');
            // var estatetypetra= $('#estatetypetra').find(":selected").val();


            axios.post('/admin/AddTransaction', {
                numbertran: this.numbertran,
                regionselecttra: regionselecttra,
                estatetypetra: estatetypetra,
                sellername: this.sellername,
                buierName: this.buierName,
                price_trans: this.price_trans,
                commission: this.commission,
                datetransaction: this.datetransaction,
                descTrans: this.descTrans,
            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 100) {
                    swal("ثبت موفق ", " معامله   جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/listTransaction');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },


        DeleteSilder: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی ملک  نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {
                    axios.post('DeleteSilder', {

                        Id: Id

                    }).then(response => {


                        if (response.data['status'] == 100) {
                            swal("اسلایدر  شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('/admin/listSlider');
                            }, 2000);
                        } else if (response.data['status'] == 404) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('/admin/listSlider');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },

        Wo_ResendCode: function (mobile) {


            axios.post('/ResendSMS', {

                mobile: mobile

            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 100) {

                    swal("ثبت موفق ", "درخواست ملک  جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    Wo_SetTimer();
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },

        VerifySMSCode: function () {


            if (this.verify_code == '') {
                alert('لطفا کد تایید عضویت را وارد کنید');
            } else {
                axios.post('/checkCodeSMS', {

                    CodeSMS: this.verify_code,
                    mobile: $("#mobile_code").val()

                }).then(response => {


                    if (response.data['status'] == 'success') {


                        window.location.assign(response.data['url']);

                    } else if (response.data['status'] == 'faild') {


                        alert('کد تایید اشتباه هست مجددا تلاش کنید');
                    }


                }, response => {
                    swal(" خطا ", "خطا کد تایید اشتباه هست ", "error", {
                        button: "باشه"
                    });
                    this.error = 1;
                    console.log("error");
                });
            }


        },

        EditRequest: function (Id) {

            var Posselected = $("#Posselected").val();
            var estateSelected = $("#estateSelected").val();
            var namereq = $('input[name="namereq"]').val();
            var mobile = $('input[name="mobile"]').val();
            var pricefrom = $('input[name="pricefrom"]').val();
            var priceto = $('input[name="priceto"]').val();


            if (namereq == "") {
                toastr.info('لطفا نام خود را وارد کنید');
                $("#namereq").addClass('input_alert');
                $('#namereq').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (namereq != "") {
                $("#nameOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (mobile == "") {
                toastr.info('لطفا شماره موبایل درخواست کننده رار وارد کنید');
                $("#mobile").addClass('input_alert');
                $('#mobile').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (mobile != "") {
                $("#mobile").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }
            if (pricefrom == "") {
                toastr.info('لطفا حداقل قیمت را وارد کنید');
                $("#pricefrom").addClass('input_alert');
                $('#pricefrom').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (pricefrom != "") {
                $("#pricefrom").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }
            if (priceto == "") {
                toastr.info('لطفا حداقل قیمت را وارد کنید');
                $("#priceto").addClass('input_alert');
                $('#priceto').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (priceto != "") {
                $("#priceto").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }


            if (namereq != '' && mobile != '' && pricefrom != ''
                && priceto != '') {
                axios.post('/admin/EditRequestOffer', {


                    Id: Id,
                    namereq: namereq,
                    mobile: mobile,
                    pricefrom: pricefrom,
                    priceto: priceto,
                    Posselected: Posselected,
                    estateSelected: estateSelected,


                }).then(response => {

                    console.log(response.data.status);

                    if (response.data.status == 100) {

                        toastr.success('درخواست شما با موفقیت ویرایش شد');

                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);

                    } else {

                        toastr.info('مشتری گرامی قبلا درخواست شما ثبت شده در حال بررسی هستیم');
                    }


                }, response => {
                    this.error = 1;
                    console.log("error");
                });
            }


        },
        onImageChangeLeoMa(e) {

            const files = e.target.files;

            Array.from(files).forEach(file => this.addImage(file));

        },
        onImageChange(e) {

            const files = e.target.files;
            alert(files);
            Array.from(files).forEach(file => this.addImage(file));
        },
        addImage(file) {

            if (!file.type.match('image.*')) {
                console.log(`${file.name} is not an image`);
                return;
            }
            this.files.push(file);
            const img = new Image(),
                reader = new FileReader();
            reader.onload = (e) => this.images.push(e.target.result);
            alert(this.images);
            reader.readAsDataURL(file);
        },
        ChangeStatusEstateUser: function (Id, role) {


            axios.post('ChangeStatusEstateUser', {
                action: 'ChangeStatusEstateUser',
                Id: Id,
                role: role

            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 200) {
                    /* swal("وضعیت ملک ", "وضعیت ملک با موفقیت تغییر یافت", "success", {
                         button: "باشه"
                     });*/
                    toastr.success('وضعیت ملک با موفقیت اپدیت شد');
                    setTimeout(function () {
                        window.location.reload();
                    }, 2000);

                }


            }, response => {
                this.error = 1;
                console.log("error");
            });


        },
        publishEstateUserwwww: function () {


            const tabBars = Array.from(document.querySelectorAll('.mdc-tab-bar'));


            const formData = new FormData();

            this.files.forEach(file => {
                formData.append('images[]', file, file.name);
            });


            var citylist = $("#city_user option:selected").text();
            // var regionselect= $("#regionselect option:selected").val();

            var regionselect_user = $("#regionselect_user option:selected").val();

            var estatetype = $("#estatetype option:selected").val();
            var typeAdv = $("#typeAdv option:selected").val();
            var usagetype = $("#usagetype option:selected").val();
            var ownership = $("#ownership option:selected").val();
            var requestTour = $("#requestTour option:selected").val();
            var LandTotalSquare = $("#LandTotalSquare").text();

            var val = [];

            var arr = [];
            var i = 0;
            /*  $('.mdc-checkbox__native-control:checked').each(function () {
                  arr[i++] = $(this).val();
              });
              console.log(arr);*/


            var RoomNumber_user = $('#RoomNumber_user').text();
            var yearmade_user = $('#yearmade_user').text();


            if (this.Vamcheck == true) {
                this.Vamcheck = 1;
            } else if (this.Vamcheck == false) {
                this.Vamcheck = 0;
            }

            if ($("#featuredInputStatus").val() == 'rent') {
                var price_rahan = this.price_rahan_user;
                var rent_rahan = this.RentAmount_user;
                var Advtype = $("#featuredInputStatus").val();

            } else if ($("#featuredInputStatus").val() == 'sale') {
                var price_sale = this.price_user;
                var Advtype = $("#featuredInputStatus").val();

            }


            if ($("#ApptStatus").val() != 1) {
                this.unit = 0;
                this.floor_user = 0;
                this.unitfloor = 0;
            }


            if ($("#limitstatus").val() != 1) {
                this.SquareFootage_user = 0;
                this.RoomNumber_user = 0;
                yearmade_user = 0;
            }
            if ($("#vailaStatus").val() != 1) {
                var unitvali = $("#unitvali").val();
                var floorvaila = $("#floorvaila").val();

            }


            if ($("#VamInputStatus").val() == 0) {
                this.loanAmount_user = 0;
            }


            /*alert(this.province_user);
            alert(this.city_user);
            alert(this.estatetype_user);
            alert(this.position_type_user);
            alert(this.usagetype_user);
            alert(this.ownership_user);
            alert(this.requestTour_user);
*/


            axios.interceptors.request.use(config => {
                // perform a task before the request is sent
                console.log('Request was sent');
                $.busyLoadSetup({
                    animation: "slide",
                    background: "rgba(255, 255, 255, 0.86)",
                    color: "rgba(76, 175, 80, 1)",
                });
                $.busyLoadFull("show",
                    {
                        image: "/Content/icon_2.gif",
                        text: "لطفا شکیبا باشید...", spinner: "accordion",
                        textPositibon: "bottom"
                    });
                return config;
            }, error => {
                // handle the error
                return Promise.reject(error);
            });

// sent a GET request
            /*  axios.get('https://api.github.com/users/mapbox')
                  .then(response => {

                  });*/

            axios.post('/AddEstate', {


                city: this.city_user,
                province_user: this.province_user,
                regionselect_user: regionselect_user,
                estatetype_user: this.estatetype_user,
                typeAdv: $("#featuredInputStatus").val(),
                position_type_user: this.position_type_user,
                usagetype_user: this.usagetype_user,
                ownership_user: this.ownership_user,
                requestTour_user: this.requestTour_user,
                ComplimentalDescription_user: this.ComplimentalDescription_user,
                LandTotalSquare_user: this.LandTotalSquare_user,
                SquareFootage_user: this.SquareFootage_user,
                RoomNumber_user: RoomNumber_user,
                unit: this.unit,
                floor_user: this.floor_user,
                unitfloor: this.unitfloor,
                elevator: $("#elevatorStatusInput").val(),
                parking: $("#parkingStatusInput").val(),
                warehouse: $("#warehouseInputStatus").val(),
                Balcony: $("#blaconyInputStatus").val(),
                exchange: $("#ExchangeInputStatus").val(),
                yearmade_user: yearmade_user,
                limit: $("#limitstatus").val(),
                vailaStatus: $("#vailaStatus").val(),
                unitvali: unitvali,
                floorvaila: floorvaila,
                ApptStatus: $("#ApptStatus").val(),
                MobileNumber_user: this.MobileNumber_user,
                fullname_user: this.fullname_user,
                EmailEstate: this.EmailEstate,
                Address_user: this.Address_user,
                loanAmount_user: this.loanAmount_user,
                price: price_sale,
                loan: this.Vamcheck,
                price_rahan: price_rahan,
                RentAmount: rent_rahan,
                possibilies: $("#Posselected").val(),
                formData: this.images


            }).then(response => {


                console.log(response);
                if (response.data.status == 100) {

                    toastr.success('ملک شما با موفقیت ثبت ');

                    $.busyLoadFull("hide");
                    if (tabBars.length) {
                        tabBars.forEach((bar) => {
                            const tabBar = new mdc.tabBar.MDCTabBar(bar);
                            var contents = bar.parentElement.querySelectorAll('.tab-content');
                            tabBar.listen('MDCTabBar:activated', function (event) {
                                bar.parentElement.querySelector('.tab-content--active').classList.remove('tab-content--active');
                                contents[event.detail.index].classList.add('tab-content--active');
                            });


                            contents.forEach((content, index) => {

                                //  console.log(querySelector('.tab-content'));

                                tabBar.activateTab(index + 1);


                            });
                        });
                    }
                    ;


                } else {
                    toastr.info('متاسفانه سیستم دچار مشکل شد مجددا تلاش کنید  ');
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },


        CalculateRent: function () {


            var RentPrice = $("#RentPrice").val();
            var rahanPrice = $("#rahanPrice").val();


            axios.post('CalculateRent', {


                RentPrice: RentPrice,
                rahanPrice: rahanPrice


            }).then(response => {


                if (response.data.status == 100) {
                    // $("#amount_receive_rent").html(commaSeparateNumber(response.data.result)+'تومان');

                    $("#amount_receive_rentlandlord").html('  سهم پرداختی مستاجر    : ' + commaSeparateNumber(response.data.result) + ' تومان ');

                    $("#amount_receive_rentRented").html('  سهم پرداختی موجر    : ' + commaSeparateNumber(response.data.result) + ' تومان ');


                } else {
                    toastr.info('متاسفانه سیستم دچار مشکل شد مجددا تلاش کنید  ');
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        CalculateSale: function () {


            var number_under = $("#number_under").val();


            axios.post('CalculateSale', {


                number_under: number_under,


            }).then(response => {


                console.log(response.data);


                if (response.data.status == 101) {

                    $("#amount_receive_underhundred").html(commaSeparateNumber(response.data.result) + 'تومان' + '<br/>');

                    $("#amount_receive_divide").html('  سهم پرداختی خریدار    : ' + commaSeparateNumber(parseInt(response.data.share)) + ' تومان ');

                    $("#amount_receive_divideseller").html('  سهم پرداختی فروشنده    : ' + commaSeparateNumber(parseInt(response.data.share)) + ' تومان ');

                } else if (response.data.status == 100) {
                    $("#amount_receive_underhundred").html(commaSeparateNumber(response.data.result) + 'تومان');

                    $("#amount_receive_divide").html('  سهم پرداختی خریدار    : ' + commaSeparateNumber(parseInt(response.data.share)) + ' تومان ');

                    $("#amount_receive_divideseller").html('  سهم پرداختی فروشنده    : ' + commaSeparateNumber(parseInt(response.data.share)) + ' تومان ');

                } else {
                    toastr.info('متاسفانه سیستم دچار مشکل شد مجددا تلاش کنید  ');
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },


        commaSeparateNumber: function (val) {
            while (/(\d+)(\d{3})/.test(val.toString())) {
                val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
            }
            return val;
        },
        UpdateinfoSite: function () {


            var email = $('input[name="email_site"]').val();
            var phone_Sellerone = $('input[name="phone_Sellerone"]').val();
            var phone_Sellertwo = $('input[name="phone_Sellertwo"]').val();
            var realestateAddress = $('input[name="realestateAddress"]').val();


            axios.post('/admin/updateinfosite', {

                email: email,
                phoneone: phone_Sellerone,
                phonetwo: phone_Sellertwo,
                Address: realestateAddress

            }).then(response => {
                console.log(response.data.status);


                if (response.data['status'] == 100) {
                    swal("ثبت موفق ", "اطلاعات تماس با ما با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        AddReport: function () {


            var descreport = $('textarea[name="descreport"]').val();
            var descresultreport = $('textarea[name="descresultreport"]').val();

            if (descreport == '') {
                swal(" خطا  ", "فیلد شرح گزارش خالی هست ", "info", {
                    button: "متوجه شدم"
                });
                return false;

            } else if (descresultreport == '') {
                swal(" خطا  ", "فیلد نتیجه گزارش خالی هست ", "info", {
                    button: "متوجه شدم"
                });
                return false;
            }


            axios.post('/admin/addReport', {


                titlereport: this.titlereport,
                descreport: descreport,
                descresultreport: descresultreport,
                resultstatus: this.resultstatus,


            }).then(response => {

                if (response.data.status == 200) {

                    swal("ثبت  ", "تشکر از شما گزارش شما با موفقیت ثبت شد خسته نباشید ", "success", {
                        button: "ممنونم"
                    });
                    //alert('با موفقیت گزارش ثبت شد تشمکر از شما');
                    setTimeout(function () {
                        window.location.assign('/admin/index');
                    }, 2000);

                }


            }, response => {

                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },
        SendVisitSMS: function (Id) {


            axios.post('/admin/SendVisitSMS', {


                Id: Id

            }).then(response => {
                console.log(response.data);


                if (response.data['status'] == 100) {
                    swal("هشدار ", "خطا", "warning", {
                        button: "متوجه شدم"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (response.data['status'] == 200) {
                    swal("پیامک موفق آمیز ", "بازدید با موفقیت پیامک شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);

                }


            }, response => {

                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },
        AddReportOperator: function () {


            var descreport = $('textarea[name="descreport"]').val();
            var descresultreport = $('textarea[name="descresultreport"]').val();

            axios.post('/admin/addReport', {


                titlereport: this.titlereport,
                descreport: descreport,
                descresultreport: descresultreport,
                resultstatus: this.resultstatus,


            }).then(response => {


                if (response.data['status'] == 400) {
                    swal("هشدار ", "لطفا تمام فیلد ها را پر کنید", "warning", {
                        button: "متوجه شدم"
                    });
                    /*  setTimeout(function () {
                          location.reload();
                      },2000);*/
                } else if (response.data['status'] == 200) {
                    swal("ثبت گزارش ", "گزارش شما با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (response.data['status'] == 300) {
                    swal("خطا  ", "مجددا تلاش کنید", "info", {
                        button: "باشه"
                    });

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        AddFavorite: function (estateId) {


            axios.post('/AddFavoriteEstate', {

                estateId: estateId

            }).then(response => {
                console.log(response.data.status);


                if (response.data['status'] == 100) {
                    swal("ثبت موفق ", "اطلاعات تماس با ما با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        PublishTextAbout: function () {


            var titleAbout = CKEDITOR.instances['editor-demo3'].getData();
            var planAbout = CKEDITOR.instances['editor-demo2'].getData();


            axios.post('/admin/updateAboutText', {

                titleAbout: titleAbout,
                planAbout: planAbout,


            }).then(response => {
                console.log(response.data.status);


                if (response.data['status'] == 100) {
                    swal("ثبت موفق ", "اطلاعات    درباره ما با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },


        regionSelectedSearch: function (id) {


            this.regionselectedSearch = id;

            $("#regionselect").val(id);
            this.regionrequestOffer = id;


            /* var d= types.addClass('a_checked');
              console.log(d);
              if (d.hasClass('a_checked')){
                  alert('yes');
                  d.removeClass('a_checked');
              }else {
                  alert('no');
                  d.addClass('a_checked');

                 /!*  arr[i++] = this.getAttribute('data-val');
                  if ($.inArray(this.getAttribute('data-val'), list_possibi) == -1) {
                      list_possibi.push(this.getAttribute('data-val'));
                      $("#Posselected").val(list_possibi.join());

                  }*!/

              }*/


            /*var d = e.target();
            alert(d);

            console.log(d.textContent);
            if (d.hasClass('a_checked')){
                alert('yes');
                d.removeClass('a_checked');
            }else {
                alert('no');
                d.addClass('a_checked');

               /!* arr[i++] = this.getAttribute('data-val');
                if ($.inArray(this.getAttribute('data-val'), list_possibi) == -1) {
                    list_possibi.push(this.getAttribute('data-val'));
                    $("#Posselected").val(list_possibi.join());

                }*!/

            }*/


        },
        CityActive: function (subscription) {


            this.city_user = subscription;
        },
        regionActive: function (subscription) {

            alert(this.regionselect_user);
            this.regionselect_user = subscription;
        },
        EstatetypeActive: function (subscription) {


            $("#estatetypevalue").val(subscription);
            this.estatetype_user = subscription;
            // $("#estateselect").val(subscription);
            this.estatetype_userOffer = subscription;

        },
        UsageTypeActive: function (subscription) {

            this.usagetype_user = subscription;
        },
        RequestTourActive: function (subscription) {

            this.requestTour_user = subscription;
        },
        EstateOwenrshipActive: function (subscription) {

            this.ownership_user = subscription;
        },
        PositionActive: function (subscription) {

            this.position_type_user = subscription;
        },

        YearSelect: function (subscription) {

            $("#yearselect").val(subscription);

        },
        RoomNumberSelect: function (subscription) {

            $("#RoomNumberSelect").val(subscription);

        }


    }
});
