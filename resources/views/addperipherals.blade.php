@extends('Layouts.app')
@section('content')
<div class="container-fluid">
    <form action="/add-peripheral" method="post">
        <div class="col-12 mx-auto">
        @if ( $message = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ $message }}
        </div>
        @endif
            <div class="card mt-4">
                <div class="card-header card-background text-white">
                    <h4>ข้อมูลครุภัณฑ์พื้นฐาน</h4>
                </div>
                <div class="card-body">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--ชนิดครุภัณฑ์-->
                            <div class="form-group">
                                <label for="type">ชนิด</label>
                                <select class="form-control" id="type" name="type" required>
                                    <option value="" hidden selected></option>
                                    @foreach($peripheraltypes as $peripheraltype)
                                        <option value="{{ $peripheraltype['id'] }}">{{ $peripheraltype['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6"> <!--รหัส SAP-->
                            <div class="form-group">
                                <label for="sapid">รหัส SAP</label>
                                <input type="text" class="form-control" id="sapid" name="sapid" placeholder="กรุณาใส่รหัส SAP">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--รหัสครุภัณฑ์-->
                            <div class="form-group">
                                <label for="pid">รหัสครุภัณฑ์</label>
                                <input type="text" class="form-control" id="pid" name="pid" placeholder="กรุณาใส่รหัสครุภัณฑ์">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="room">ห้อง</label>
                                <input type="text" class="form-control" name="room" placeholder="กรุณาระบุห้อง" id="room_autocomplete"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="building">ตึก</label>
                                <input type="text" class="form-control" name="building" id="building" disabled/>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="location">ชั้น</label>
                                <input type="text" class="form-control" name="location" id="location" disabled/>   
                            </div>
                        </div>
                        <input hidden type="number" name="location_id"><!--ค่า location_id-->
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--ลักษณะการติดตั้ง-->
                            <div class="form-group">
                                <label for="is_mobile">ลักษณะการติดตั้ง</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_mobile" id="is_mobile" value="1">
                                    <label class="form-check-label" for="is_mobile">เป็นเครื่องเคลื่อนที่</label><br>
                                    <input class="form-check-input" type="radio" name="is_mobile" id="is_mobile" value="0" checked>
                                    <label class="form-check-label" for="is_mobile">เป็นเครื่องประจำที่</label><br>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--หน่วยงาน-->
                        <div class="form-group"> 
                            <label for="section">หน่วยงาน</label>
                                <select class="form-control" name="section" id="section" required>
                                    <option value="" hidden></option>
                                    @foreach($sections as $section)
                                        <option value="{{ $section['id'] }}">{{ $section['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6"> <!--ชื่อผู้ใช้งาน-->
                            <div class="form-group">
                                <label for="user">ชื่อผู้ใช้งาน</label><br>
                                <input type="text" class="form-control" id="user" name="user">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--ตำแหน่งผู้ใช้งาน-->
                            <div class="form-group">
                                <label for="position">ตำแหน่งผู้ใช้งาน</label>
                                <input type="text" class="form-control" name="position" id="position">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6"> <!--ประเภทหน่วยงาน-->
                            <div class="form-group">
                                <label for="section_status">ประเภทหน่วยงาน</label>
                                <select class="form-control" name="section_status" id="section_status">
                                    <option value="1">สำนักงาน</option>
                                    <option value="2">หอผู้ป่วย</option>
                                    <option value="3">ห้องประชุม</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--หมายเลขโทรศัพท์-->
                            <div class="form-group">
                                <label for="tel_no">หมายเลขโทรศัพท์</label>
                                <input type="text" class="form-control" name="tel_no" id="tel_no" placeholder="9-9999">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6"> <!--ระบบงาน-->
                            <div class="form-group">
                                <label for="function">ระบบงาน</label>
                                <select class="form-control" name="function" id="function">
                                    <option value="1">สำนักงาน</option>
                                    <option value="2">หอผู้ป่วย</option>
                                </select>
                            </div>
                        </div>                
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--เจ้าของเครื่อง-->
                            <div class="form-group">
                                <label for="owner">เจ้าของเครื่อง</label><br>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="owner" id="owner" value="1" checked>
                                    <label class="form-check-label" for="owner">คณะ</label><br>
                                    <input class="form-check-input" type="radio" name="owner" id="owner" value="2">
                                    <label class="form-check-label" for="owner">ภาควิชา</label><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--สถานะของครุภัณฑ์-->
                            <div class="form-group">
                                <label for="asset_status">สถานะของครุภัณฑ์</label>
                                <select class="form-control" name="asset_status" id="asset_status" required>
                                    <option value="" hidden selected></option>
                                    @foreach($asset_statuses as $asset_status)
                                        <option value="{{ $asset_status['id'] }}">{{ $asset_status['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="asset_use_status">สถานะการใช้งานของครุภัณฑ์</label>
                                <select class="form-control" name="asset_use_status" id="asset_status" required>
                                    <option value="" hidden selected></option>
                                    @foreach($asset_use_statuses as $asset_use_status)
                                        <option value="{{ $asset_use_status['id'] }}">{{ $asset_use_status['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header card-background text-white">
                    <h4>คุณสมบัติของเครื่อง</h4>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--ยี่ห้อ-->
                            <div class="form-group">
                                <label for="brand">ยี่ห้อ</label>
                                <input class="form-control" name="brand" id="brand" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6"> <!--รุ่น-->
                            <div class="form-group">
                                <label for="model">รุ่น</label>
                                <input class="form-control" name="model" id="model" type="text" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--serial number-->
                            <div class="form-group">
                                <label for="serial_no">Serial Number จากผู้ผลิต</label>
                                <input class="form-control" name="serial_no" id="serial_no" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6"> <!--วัสดุสึกหรอสิ้นเปลือง-->
                            <div class="form-group">
                                <label for="supply_consumables">สามารถเบิกวัสดุสึกหรอสิ้นเปลืองได้</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="supply_consumables" id="suppy_consumables" value="1">
                                    <label class="form-check-label" for="supply_consumables">เบิกได้</label><br>
                                    <input class="form-check-input" type="radio" name="supply_consumables" id="supply_consumables" value="2">
                                    <label class="form-check-label" for="supply_consumables">เบิกไม่ได้</label><br>
                                    <input class="form-check-input" type="radio" name="supply_consumables" id="supply_consumables" value="3">
                                    <label class="form-check-label" for="supply_consumables">ไม่จำเป็น</label><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--วิธีการเชื่อมต่อ-->
                            <div class="form-group">
                                <label for="connectivity">วิธีการเชื่อมต่อ</label>
                                <select class="form-control" name="connectivity" id="connectivity" required>
                                    <option value="" hidden selected></option>
                                    <option value="1">USB</option>
                                    <option value="2">Paralell Port</option>
                                    <option value="3">LAN</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6"> <!--ip address-->
                            <div class="form-group">
                                <label for="ip_address">IP adress ของเครื่อง</label>
                                <input type="text" class="form-control" id="ip_address" name="ip_address">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--Lan outlet-->
                            <div class="form-group">
                                <label for="share_name">Lan Outlet No.</label>
                                <input type="text" class="form-control" id="lan_outlet_no" name="lan_outlet_no">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="is_shared">สถานะการใช้งานร่วมกัน</label><br>
                                <input type="checkbox" name="is_shared" value="1">เป็นเครื่องใช้งานร่วมกัน<br>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"><!--share name-->
                            <div class="form-group">
                                <label for="share_name">Share Name</label>
                                <input type="text" class="form-control" id="share_name" name="share_name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header card-background text-white">
                    <h4>หมายเหตุและปัญหาในการใช้งาน</h4>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--หมายเหตุ-->
                            <div class="form-group">
                                <label for="remarks">หมายเหตุ</label><br>
                                <textarea class="form-control" name="remarks" id="remarks" rows="2" placeholder="หมายเหตุ"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6"><!--issues-->
                            <div class="form-group">
                                <label for="issues">ปัญหาในการใช้งาน</label>
                                <textarea class="form-control" name="issues" id="issues" rows="2" placeholder="ปัญหาในการใช้งาน"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-lg btn-success">Submit</button>
        </div>
    </form>
</div>
@endsection

@section('js')
<script src="{{ url('/js/jquery.autocomplete.min.js') }}"></script>
<script src="{{ url('/js/axios.min.js') }}"></script>
<script>
    var room = null;
    $("#room_autocomplete").autocomplete({
        paramName: "name",
        serviceUrl: "{{ url('rooms') }}",
        minChars: 1,
        transformResult: function(response) {
            return {
                suggestions: $.map($.parseJSON(response), function(item) {
                    console.log(item.location)
                    return {
                        id: item.id,
                        value: item.name,
                        building: item.location.building.name,
                        location: item.location.floor + ' ' + item.location.wing
                    };
                })
            };
        },
        onSelect: function (suggestion) {
            $("#room_autocomplete").val(suggestion.value);
            $("#building").val(suggestion.building);
            $("#location").val(suggestion.location);
            $("input[name=location_id]").val(suggestion.id);
            room = suggestion.value;
            
        },
    });
    $("#room_autocomplete").change(function() {
        if($(this).val() !== room) {
            $(this).val('');
            $("#building").val('');
            $("#location").val('');
        }
    });

</script>
@endsection