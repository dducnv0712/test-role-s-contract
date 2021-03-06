<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        table {
            max-height: 100px;
            overflow-y: scroll;
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class="container py-3">

    <div class="row">
        <div class="col-6">
            <div class="card mb-3">
                <div class="card-header">
                    T???o Ph??ng Ban
                </div>
                <div class="card-body">
                    <form action="{{url('/create-group')}}" method="post" class="mb-3">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">name</label>
                            <input required type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="province">T???nh / Th??nh ph???</label>
                            <select required onchange="getProvinceGroup(event)" name="province" id="province-group" class="form-select" aria-label="Default select example">
                                <option selected>Vui l??ng ch???n T???nh / Th??nh ph???</option>
                                @foreach($province as $province_item)
                                    <option value="{{$province_item['id']}}">{{$province_item['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label  for="district">Huy???n / Qu???n</label>
                            <select required disabled onchange="handleDistrictGroup(event)" name="district" class="form-select" id="district-group" aria-label="Default select example">
                                <option selected>Vui l??ng ch???n Qu???n / Huy???n</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="ward">X?? / Ph?????ng</label>
                                <select required disabled class="form-select mb-3" name="ward" id="ward-group" aria-label="Default select example">
                                    <option selected>Vui l??ng ch???n X?? / Ph?????ng</option>
                                </select>
                            </div>
                            {{--                            <div class="col-6">--}}
                            {{--                                <label for="street">???????ng / Ph???</label>--}}
                            {{--                                <select disabled class="form-select mb-3" id="street" aria-label="Default select example">--}}
                            {{--                                    <option selected>Vui l??ng ch???n</option>--}}
                            {{--                                </select>--}}
                            {{--                            </div>--}}
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th >T??n</th>
                                <th>T???nh / Th??nh ph???</th>
                                <th>Huy???n / Qu???n</th>
                                <th>X?? / Ph?????ng</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($group as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->province}}</td>
                                    <td>{{$item->district}}</td>
                                    <td>{{$item->ward}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    T???o Role
                </div>
                <div class="card-body">
                    <form action="{{url('/create-role')}}" class="mb-3"
                          method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">name</label>
                            <input required type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Name</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
{{--            <div class="card mb-3">--}}
{{--                <div class="card-header">--}}
{{--                     ?????a Ch???--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <form  class="mb-3"--}}
{{--                          method="post">--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="province">T???nh / Th??nh ph???</label>--}}
{{--                            <select onchange="getProvince(event)" name="province" id="province" class="form-select" aria-label="Default select example">--}}
{{--                                <option selected>Vui l??ng ch???n T???nh / Th??nh ph???</option>--}}
{{--                                @foreach($province as $province_item)--}}
{{--                                    <option value="{{$province_item['id']}}">{{$province_item['name']}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="district">Qu???n / Huy???n</label>--}}
{{--                            <select disabled onchange="handleDistrict(event)" name="district" class="form-select" id="district" aria-label="Default select example">--}}
{{--                                <option selected>Vui l??ng ch???n Qu???n / Huy???n</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-12">--}}
{{--                                <label for="ward">X?? / Ph?????ng</label>--}}
{{--                                <select disabled class="form-select mb-3" name="ward" id="ward" aria-label="Default select example">--}}
{{--                                    <option selected>Vui l??ng ch???n X?? / Ph?????ng</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="col-6">--}}
{{--                                <label for="street">???????ng / Ph???</label>--}}
{{--                                <select disabled class="form-select mb-3" id="street" aria-label="Default select example">--}}
{{--                                    <option selected>Vui l??ng ch???n</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <button type="button" onclick="handleClick(event)" class="btn btn-primary">Submit</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <div class="col-6">

            <div class="card">
                <div class="card-header">
                    T???o Nh??n Vi??n
                </div>
                <div class="card-body">
                    <form action="{{url('/create-staff  ')}}" class="mb-3" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">T??n</label>
                            <input required type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nh??m</label>
                            <select required name="phongban[]" class="form-select" multiple aria-label="Default select example">
                                @foreach($group as $group_item)
                                    <option value="{{$group_item->id}}">{{$group_item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Ch???n ng?????i qu???n l??</label>
                            <select required name="parent_id" class="form-select" aria-label="Default select example">
                                <option value="0">Khum c??</option>
                                {{staffSelect($staffRoleAdmin)}}
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Vai tr??</label>
                            <select required name="roles[]" class="form-select" multiple aria-label="Default select example">
                                @foreach($roles as $group_item)
                                    <option value="{{$group_item->id}}">{{$group_item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="province">T???nh / Th??nh ph???</label>
                            <select required onchange="getProvinceStaff(event)" name="province" id="province-staff" class="form-select" aria-label="Default select example">
                                <option selected>Vui l??ng ch???n T???nh / Th??nh ph???</option>
                                @foreach($province as $province_item)
                                    <option value="{{$province_item['id']}}">{{$province_item['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="district">Huy???n / Qu???n</label>
                            <select required disabled onchange="handleDistrictStaff(event)" name="district" class="form-select" id="district-staff" aria-label="Default select example">
                                <option selected>Vui l??ng ch???n Qu???n / Huy???n</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="ward">X?? / Ph?????ng</label>
                                <select required disabled class="form-select mb-3" name="ward" id="ward-staff" aria-label="Default select example">
                                    <option selected>Vui l??ng ch???n X?? / Ph?????ng</option>
                                </select>
                            </div>
                            {{--                            <div class="col-6">--}}
                            {{--                                <label for="street">???????ng / Ph???</label>--}}
                            {{--                                <select disabled class="form-select mb-3" id="street" aria-label="Default select example">--}}
                            {{--                                    <option selected>Vui l??ng ch???n</option>--}}
                            {{--                                </select>--}}
                            {{--                            </div>--}}
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Role</th>
                                <th scope="col">Phong Ban</th>
                                <th>T???nh / Th??nh ph???</th>
                                <th>Huy???n / Qu???n</th>
                                <th>X?? / Ph?????ng</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($staff as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        <ul>
                                            @foreach($item->role as $item_role)
                                                <li>{{$item_role->name}}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            @foreach($item->phongban as $item_phongban)
                                                <li>{{$item_phongban->name}}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>{{$item->province}}</td>
                                    <td>{{$item->district}}</td>
                                    <td>{{$item->ward}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 border p-6">
        <ul>
            @foreach($group as $item)
                {{--            {{dump($staff)}}--}}
                <li>
                    <h6 class="text-danger">{{$item->name}}</h6>
                    <ul>
                       {{staffList($item->nhanvien)}}
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#province-group').select2({
            theme: 'bootstrap-5'
        });
        $('#district-group').select2({
            theme: 'bootstrap-5'
        });
        $('#ward-group').select2({
            theme: 'bootstrap-5'
        });
        $('#street-group').select2({
            theme: 'bootstrap-5'
        });
        $('#province-staff').select2({
            theme: 'bootstrap-5'
        });
        $('#district-staff').select2({
            theme: 'bootstrap-5'
        });
        $('#ward-staff').select2({
            theme: 'bootstrap-5'
        });
        $('#street-staff').select2({
            theme: 'bootstrap-5'
        });
    });
</script>
<script type="text/javascript">
    function handleClick(e){
        e.preventDefault();
           var province = $("#province>option:selected").text();
           var dis_text = $("#district>option:selected").text();
           var street =  $("#street>option:selected").text();
           var wards = $("#ward>option:selected").text();
           alert(province + " - " +dis_text +  " - " + street + " - " + wards)
    }
    function getProvinceGroup(e){
        e.preventDefault();
        $("#district-group").attr("disabled",true)
        $("#street-group").attr("disabled",true)
        $("#ward-group").attr("disabled",true)
        let province_id = $("#province-group").val();
        let districtWrapper = '';
        $.ajax({
            type:'GET',
            url:"{{asset("/local")}}?prov_id="+province_id,
            success:function(data){
                var districtData = data.province.districts
                for (let i =0 ; i < districtData.length ; i++){
                    districtWrapper += `
                       <option value="${districtData[i].id}">${districtData[i].name}</option>
                    `
                }
                $("#district-group").html(districtWrapper);
                $("#district-group").attr("disabled",false)
            }
        });
    }
    function handleDistrictGroup(e){
        e.preventDefault();
        $("#street-group").attr("disabled",true)
        $("#ward-group").attr("disabled",true)
        let province_id = $("#province-group").val();
        let district_id = $("#district-group").val();
        let streetWrapper = '';
        let wardWrapper = '';
        console.log(district_id);
        $.ajax({
            type:'GET',
            url:"{{asset("/local")}}?prov_id="+province_id+"&district_id=" + district_id,
            success:function(data){
                var streets = data.district.streets;
                var wards = data.district.wards;
                for (let i =0 ; i < streets.length ; i++){
                    streetWrapper += `
                       <option value="${streets[i].id}">${streets[i].prefix} ${streets[i].name}</option>
                    `
                }
                for (let i =0 ; i < wards.length ; i++){
                    wardWrapper += `
                       <option value="${wards[i].id}">${wards[i].prefix} ${wards[i].name}</option>
                    `
                }
                $("#street-group").html(streetWrapper);
                $("#ward-group").html(wardWrapper);
                $("#street-group").attr("disabled",false)
                $("#ward-group").attr("disabled",false)
            }
        });
    }
    function getProvinceStaff(e){
        e.preventDefault();
        $("#district-staff").attr("disabled",true)
        $("#street-staff").attr("disabled",true)
        $("#ward-staff").attr("disabled",true)
        let province_id = $("#province-staff").val();
        let districtWrapper = '';
        $.ajax({
            type:'GET',
            url:"{{asset("/local")}}?prov_id="+province_id,
            success:function(data){
                var districtData = data.province.districts
                for (let i =0 ; i < districtData.length ; i++){
                    districtWrapper += `
                       <option value="${districtData[i].id}">${districtData[i].name}</option>
                    `
                }
                $("#district-staff").html(districtWrapper);
                $("#district-staff").attr("disabled",false)
            }
        });
    }
    function handleDistrictStaff(e){
        e.preventDefault();
        $("#street-staff").attr("disabled",true)
        $("#ward-staff").attr("disabled",true)
        let province_id = $("#province-staff").val();
        let district_id = $("#district-staff").val();
        let streetWrapper = '';
        let wardWrapper = '';
        console.log(district_id);
        $.ajax({
            type:'GET',
            url:"{{asset("/local")}}?prov_id="+province_id+"&district_id=" + district_id,
            success:function(data){
                var streets = data.district.streets;
                var wards = data.district.wards;
                for (let i =0 ; i < streets.length ; i++){
                    streetWrapper += `
                       <option value="${streets[i].id}">${streets[i].prefix} ${streets[i].name}</option>
                    `
                }
                for (let i =0 ; i < wards.length ; i++){
                    wardWrapper += `
                       <option value="${wards[i].id}">${wards[i].prefix} ${wards[i].name}</option>
                    `
                }
                $("#street-staff").html(streetWrapper);
                $("#ward-staff").html(wardWrapper);
                $("#street-staff").attr("disabled",false)
                $("#ward-staff").attr("disabled",false)
            }
        });
    }
</script>
</html>
