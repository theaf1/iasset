@extends('Layouts.app')
@section('content')
<div class="container-fuild">
    <div class="col-12 mx-auto">
        <form action="store" method="post">
                <div class="card mt-4">
                    <div class="card-header card-background text-white">
                        <h4>ข้อมูลครุภัณฑ์พื้นฐาน</h4>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!-- ชนิดของครุภัณฑ์คอมพิวเตอร์ -->
                                <div class="form-group"> 
                                    <label for="type">ชนิด</label>
                                    <select class="form-control" id="type">
                                        <option value="1">PC</option>
                                        <option value="2">Notebook</option>
                                        <option value="3">All-In-One</option>
                                        <option value="4">Workstation</option>
                                    </select>
                                </div> 
                            </div>     
                            <div class="col-sm-12 col-lg-6"> <!-- รหัส SAP -->
                                <div class="form-group">
                                    <label for="sapid">รหัส SAP</label>
                                    <input type="text" class="form-control" id="sapid" name="sapid" placeholder="131100034567">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!-- รหัสครุภัณฑ์ -->
                                <div class="form-group">
                                    <label for="pid">รหัสครุภัณฑ์</label>
                                    <input type="text" class="form-control" id="pid" name="pid" placeholder="11006000-I-9999-001-0001/99">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!-- ห้อง -->
                                <div class="form-group">
                                    <label for="room">ห้อง</label>
                                    <input type="text" class="form-control" name="room" id="room_autocomplete"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!-- ตึก -->
                                <div class="form-group">
                                    <label for="building">ตึก</label>
                                    <input type="text" class="form-control" name="building" id="building" disabled/>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!-- ชั้น -->
                                <div class="form-group">
                                    <label for="location">ชั้น</label>
                                    <input type="text" class="form-control" name="location" id="location" disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="form-row"> 
                            <div class="col-sm-12 col-lg-6"> <!-- ลักษณะการใช้งาน -->
                                <div class="form-group">
                                    <label for="is_mobile">ลักษณะการใช้งาน</label><br>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="is_mobile" id="is_mobile" value="1" checked><label for="is_mobile">เป็นเครื่องเคลื่อนที่</label>
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="is_mobile" id="is_mobile2" value="0"><label for="is_mobile2">เป็นเครื่องประจำที่</label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">    
                            <div class="col-sm-12 col-lg-6"> <!-- สถานะของครุภัณฑ์ -->
                                <div class="form-group">
                                    <label for="asset_status">สถานะของครุภัณฑ์</label><br>
                                    <select class="form-control" name="asset_status" id="asset_status">
                                        <option value="" hidden></option>
                                        <option value="0">รอการขึ้นทะเบียน</option>
                                        <option value="1">ไม่จำเป็น/ไม่สามารถขึ้นทะเบียนได้</option>
                                        <option value="2">มีรหัสทรัพย์สินแล้ว</option>
                                        <option value="3">รอการส่งคืน</option>
                                        <option value="4">ส่งคืนแล้วโดยไม่ได้รับทดแทน</option>
                                        <option value="5">ส่งคืนแล้วโดยได้รับทดแทน</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="asset_use_status">สถานะการใช้งานของครุภัณฑ์</label>
                                    <select class="form-control" name="asset_use_status" id="asset_use_status">
                                        <option value="" hidden></option>
                                        <option value="0">รอการติดตั้ง</option>
                                        <option value="1">ใช้งาน</option>
                                        <option value="2">ไม่ได้ใช้งาน</option>
                                        <option value="3">ส่งซ่อม</option>
                                        <option value="4">ส่งคืนแล้ว</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row"> 
                            <div class="col-sm-12 col-lg-6">  <!-- ชื่อผู้ใช้งาน -->
                                <div class="form-group">
                                    <label for="user">ชื่อผู้ใช้งาน</label><br>
                                    <input type="text" class="form-control" id="user" name="user">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!-- ตำแหน่งผู้ใช้งาน -->
                                <div class="form-group">
                                    <label for="position">ตำแหน่งผู้ใช้งาน</label> 
                                    <input type="text" class="form-control" name="position" id="position">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!-- หน่วยงาน -->
                                <div class="form-group">
                                    <label for="section">หน่วยงาน</label>
                                    <select class="form-control" name="section" id="section">
                                        <option value="" hidden></option>
                                        <option value="1">ตึกอัษฎางค์</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 pt-2"> <!-- เจ้าของเครื่อง -->
                                <div class="form-group">
                                    <label for="owner">เจ้าของเครื่อง</label><br>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="owner" id="owner1" value="0"><label for="owner1">คณะ</label>
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="owner" id="owner2" value="1"><label for="owner2">ภาควิชา</label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6 pt-2"> <!-- สิทธิ์ Admin -->
                                <div class="form-group">
                                    <label for="permission">สิทธิ์ Admin</label><br>
                                    <div class="form-check-inline">
                                        <label class="form-check-label"><input type="radio" class="form-check-input" name="permission" id="admin" value="1"><label for="admin">มีสิทธิ์</label></label>
                                        <label class="form-check-label"><input type="radio" class="form-check-input" name="permission" id="no_permission" value="0" checked><label for="no_permission">ไม่มีสิทธิ์</label></label>
                                    </div>
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
                                    <input class="form-control" name="brand" id="brand" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--รุ่น-->
                                <div class="form-group">
                                    <label for="model">รุ่น</label>
                                    <input class="form-control" name="model" id="model" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--serial no.-->
                                <div class="form-group">
                                    <label for="serial_no">Serial Number จากผู้ผลิต</label>
                                    <input class="form-control" name="serial_no" id="serial_no" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--cpu model-->
                                <div class="form-group">
                                    <label for="cpu_model">CPU Model</label>
                                    <input class="form-control" name="cpu_model" id="cpu_model" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="cpu_speed">CPU Speed</label>
                                    <input class="form-control" name="cpu_speed" id="cpu_speed" type="number" min="0" step="0.1">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--socket-->
                                <div class="form-group">
                                    <label for="cpu_socket_no">จำนวน Socket CPU</label>
                                    <input class="form-control" name="cpu_socket_no" id="cpu_socket_no" type="number" min="1" value="1">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--RAM-->
                                <div class="form-group">
                                    <label for="ram_size">RAM Size</label>
                                    <input class="form-control" name="ram_size" id="ram_size" type="number" min="0" step="0.1">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--HDD-->
                                <div class="form-group">
                                    <label for="hdd_no">จำนวน Hard Disk ในเครื่อง</label>
                                    <input class="form-control" name="hdd_no" id="hdd_no" type="number" min="1" value="1">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--HDD capacity-->
                                <div class="form-group">
                                    <label for=hdd_total_cap>ความจุรวมของ HDD</label>
                                    <input class="form-control" name="hdd_total_cap" id="hdd_total_cap" type="number" min="0" value="1">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--จำนวนจอ-->
                                <div class="form-group">
                                    <label for="display_no">จำนวนจอที่ใช้งาน</label>
                                    <input class="form-control" name="display_no" id="display_no" type="number" min="0" value="1">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">   
                            <div class="col-sm-12 col-lg-6"> <!--sap จอ-->
                                <div class="form-group">
                                    <label for="display_sapid">SAP จอ</label>
                                    <input class="form-control" name="display_sapid" id="display_sapid" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--ครุภัณฑ์จอ-->
                                <div class="form-group">
                                    <label for="display_pid">รหัสครุภัณฑ์จอภาพ</label>
                                    <input class="form-control" name="display_pid" id="display_pid" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--ขนาดจอ-->
                                <div class="form-group">
                                    <label for="display_size">ขนาดจอภาพ</label>
                                    <input class="form-control" name="display_size" id="display_size" type="number" min="0">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="display_ratio">สัดส่วนจอภาพ</label>
                                    <input class="form-control" name="display_ratio" id="display_ratio" type="text" pattern="{0-9}:{0-9}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header card-background text-white">
                        <h4>ข้อมูลด้าน software</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--OS-->
                                <div class="form-group">
                                    <label for="os">OS</label>
                                    <input class="form-control" name="os" id="os" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--os architecture-->
                                <div class="form-group">
                                    <label for="os_arch">OS architecture</label><br>
                                    <div class="form-check form-check-inline">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="os_arch" id="32_bit" value="0"><label for="32_bit"> 32 bit</label>
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="os_arch" id="64_bit" value="1"><label for="64_bit"> 64 bit</label>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--office version-->
                                <div class="form-group">
                                    <label for="ms_office_ver">Microsoft Office Version</label>
                                    <input type="text" class="form-control" name="ms_office_ver" id="ms_office_ver">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--antivirus-->
                                <div class="form-group">
                                    <label for="antivirus">Antivirus</label>
                                    <input class="form-control" name="antivirus" id="antivirus" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--pdf reader-->
                                <div class="form-group">
                                    <label for="pdf_reader">PDF reader</label>
                                    <input class="form-control" name="pdf_reader" id="pdf_reader" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--ie version-->
                                <div class="form-group">
                                    <label for="ie_version">IE version</label>
                                    <input class="form-control" name="ie_version" id="ie_version" type="number" value="6">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--chrome-version-->
                                <div class="form-group">
                                    <label for="chrome_version">Chrome version</label>
                                    <input class="form-control" name="chrome_version" id="chrome_version" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--spss version-->
                                <div class="form-group">
                                    <label for="spss_version">SPSS version</label>
                                    <input class="form-control" name="spss_version" id="spss_version" type="number" value="17">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--program ระบบ รพ-->
                                <div class="form-group">
                                    <label for="is_mobile">Software คณะ</label>
                                    <div class="form-check">
                                        <label class="checkbox-inline"><input type="checkbox" name="ehis" value="1">E-HIS</label>
                                        <label class="checkbox-inline"><input type="checkbox" name="sipacs" value="1">SiPACS</label>
                                        <label class="checkbox-inline"><input type="checkbox" name="si_iscan" value="1">Si-iScan</label>
                                        <label class="checkbox-inline"><input type="checkbox" name="eclair" value="1">eclair</label>
                                        <label class="checkbox-inline"><input type="checkbox" name="admission_note" value="1">Admission Notes</label>
                                        <label class="checkbox-inline"><input type="checkbox" name="sinet" value="1">SiNet</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--other software-->
                                <div class="form-group">
                                    <label for="other_software">Software อื่นๆ</label><br>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="other_software" id="other_software" value="1"><label for="other_software">Software อื่นๆ</label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--other software details-->
                                <div class="form-group">
                                    <label for="other_software_detail">โปรดกรอกรายชื่อ Software</label>
                                    <textarea class="form-control" name="other_software_detail" id="other_software_detail" rows="1"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header card-background text-white">
                        <h4>ข้อมูลด้านเครือข่าย</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--lan type-->
                                <div class="form-group">
                                    <label for="owner">ประเภทเครือข่าย</label><br>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="lan_type" id="no_internet" value="0"><label for="no_internet"> ไม่เชื่อมต่อ</label>
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="lan_type" id="mucnet" value="1"><label for="mucnet"> MUCNET</label>
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="lan_type" id="internet_hospital" value="3"><label for="internet_hospital"> Internet โรงพยาบาล</label>
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="lan_type" id="hospital" value="4"><label for="hospital"> ระบบภายในโรงพยาบาล</label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--lan outlet-->
                                <div class="form-group">
                                    <label for="lan_outlet_no">LAN outlet No</label>
                                    <input class="form-control" name="lan_outlet_no" id="lan_outlet_no" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--ip address-->
                                <div class="form-group">
                                    <label for="ip_address">IP Address</label>
                                    <input class="form-control" name="ip_addresss" id="ip_address" type="text" placeholder="127.0.0.1">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--mac address-->
                                <div class="form-group">
                                    <label for="mac_address">MAC Address</label>
                                    <input class="form-control" name="mac_addresss" id="mac_address" type="text" placeholder="12-34-56-78-90-AB">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col sm-12 col-lg-6"><!--computer name-->
                                <div class="form-group">
                                    <label for="computer_name">Computer Name</label>
                                    <input class="form-control" name="computer_name" id="computer_name" type="text">
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
                            <div class="col-sm-12 col-lg-6"> <!-- หมายเหตุ -->
                                <div class="form-group">
                                    <label for="remarks">หมายเหตุ</label><br>
                                    <textarea class="form-control" name="remarks" id="remarks" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--issues-->
                                <div class="form-group">
                                    <label for="issues">ปัญหาในการใช้งาน</label>
                                    <textarea class="form-control" name="issues" id="issues" rows="2"></textarea>
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