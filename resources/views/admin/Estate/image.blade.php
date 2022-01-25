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
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Form Wizard</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a>
                                    </li>
                                    <li class="breadcrumb-item active">Form Wizard
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
            <div class="content-body"><!-- Horizontal Wizard -->
                <div class="card"  id="app">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 p-3">
                                <h1 class="fw-500 text-center">آپلود تصویر ملک</h1>
                            </div>

                            <div class="col-xs-12 col-sm-12 p-12">
                                <label class="text-muted">آپلود تصویر ملک (حداکثر 8 قطعه عکس)</label>

                                <div id="imageUploadBox">
                                    <div id="selectedFiles"></div>
                                    <div class="fileUpload btn btn-primary">
                                                <span>
                                                <i data-feather='upload'></i>
                                                </span>
                                        <input type="file" id="files" class="upload" name="files[]" multiple="" accept="image/*" v-on:change="onImageChange">
                                    </div>
                                </div>



                                <button class="btn btn-success" id="btnupload" name="btnupload" >
                                    Upload File
                                </button>

                            </div>

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

    <script type="text/javascript">



        var imgNum = 0;
        var selDiv = "";
        document.addEventListener("DOMContentLoaded", init, false);

        function init() {
            document.querySelector('#files').addEventListener('change', handleFileSelect, false);
            selDiv = document.querySelector("#selectedFiles");
        }
        function removeImageFromUploadList(lthis) {
            $(lthis).parent().remove();
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
                            var html = "<div class='selectedImage' style='background: url(" + e.target.result + ") no-repeat;'><img src=\"" + e.target.result + "\" title='" + f.name + "'><input type='text' style='display:none' name='fileB64" + imgNum + "' value='" + e.target.result + "'><a onclick='removeImageFromUploadList(this);'><i class='mdc-icon-button material-icons warn-color'>delete_foreve</i></a></div>";
                            selDiv.innerHTML += html;
                        } else {
                            toastr.error('بیشتر از 8 تصویر نمیتوانید اضافه کنید');
                            //  alert("");
                        }
                    } else {
                        toastr.error('حجم تصویر انتخاب شده نباید بیشتر از 3 مگابایت بایت باشد');
                        //alert("");
                    }
                }
                reader.readAsDataURL(f);
            });
        }

    </script>
    <script>
        $('#btnupload').click(function(){

            //alert();


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var filedata = document.getElementById("files");

            var formdata=new FormData();
            //   var i = 0, len = filedata.files.length, img, reader, file;
            var i = 0;
            //alert(filedata.files.length);
            for (i = 0; i < filedata.files.length; i++) {
                file = filedata.files[i];
                formdata.append("file[]", file);

            }

            $.ajax({
                url: "storeEstate",
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                success: function(data)
                {
                    alert(data);
                    if(data.status==200)
                    {
                        alert('File Is Uploaded');
                    }
                    /* var data = JSON.parse(data);
                     var data = JSON.parse(data.data);
                     $('.imgGallery').empty();
                     $.each(data, function(index, val) {
                         $('.imgGallery').append('<img src="images/'+val+'">');
                         console.log(val);
                     });*/
                },
                error: function(error)
                {
                    console.log(error);
                }
            });

        });
    </script>
@endsection


