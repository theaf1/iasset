<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset_statuses;
use App\Asset_use_statuses;
use App\Section;

class StorageperipheralsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Asset_statuses=Asset_statuses::all();
        $Asset_use_statuses = Asset_use_statuses::all();
        $Sections = Section::all();

        return view('addstorageperipherals')->with([
            'asset_statuses'=>$Asset_statuses,
            'asset_use_statuses'=>$Asset_use_statuses,
            'sections'=>$Sections,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateData($request);
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function validateData($data)
    {
        $rules = [
            'sapid'=>'nullable|regex:/^[0-9]{12}+$/',
            'pid'=>'nullable',
            'location_id' => 'required',
            'response_person' => 'required',
            'section' => 'required',
            'brand'=>'required',
            'model'=>'required',
            'serial_no'=>'required',
            'total_capacity' => 'required',
            'no_of_physical_drive_max' => 'required_if:is_hotswap,1',
            'no_of_physical_drive_populated' => 'required_if:is_hotswap,1',
            'lun_count' => 'required_if:is_hotswap,1',
        ];

        $messages = [
            'sapid.regex' => 'กรุณาตรวจสอบรหัส SAP',
            'location_id.required' => 'กรุณาระบุที่ตั้ง',
            'section.required' => 'กรุณาเลือกสาขา',
            'brand.required' => 'กรุณาใส่ยี่ห้อ',
            'model.required' => 'กรุณาใส่รุ่น',
            'serial_no.required' => 'กรุณาใส่ serial number',
            'total_capacity' => 'กรุณาระบุความจุข้อมูล',
        ];

        return $this->validate($data, $rules, $messages);
    }
}
