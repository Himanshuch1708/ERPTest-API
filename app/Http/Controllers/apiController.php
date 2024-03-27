<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index() // Testing using PO
    {
        try {
            $response = Http::withHeaders([
                'authorization' => 'Token 7ccae593b980b43:757c3914b651fc8'
            ])->get("http://3.108.0.142/api/resource/Purchase%20Order?limit_page_length=100&fields=[\"name\",\"owner\",\"creation\",\"modified\",\"modified_by\",\"po_for\",\"workflow_state\",\"title\",\"supplier\",\"transaction_date\",\"schedule_date\",\"status\"]");

            $api_data = $response->json()['data'];

            return view("index", compact('api_data'));
        } catch (\Exception $e) {
            return response()->view('error', ['message' => 'Error fetching data from the API'], 500);
        }
    }
    public function getAttendanceRequests()
    {
        try {
            $response = Http::withHeaders([
                'authorization' => 'Token 7ccae593b980b43:757c3914b651fc8'
            ])->get("http://3.108.0.142/api/resource/Attendance%20Request?limit_page_length=100&fields=[\"name\",\"owner\",\"creation\",\"modified\",\"modified_by\",\"employee\",\"employee_name\",\"department\",\"company\",\"from_date\",\"to_date\",\"half_day\",\"half_day_date\",\"reason\"]");

            $api_data = $response->json()['data'];

            return view("attendance_request", compact('api_data'));
        } catch (\Exception $e) {
            return response()->view('error', ['message' => 'Error fetching data from the API'], 500);
        }
    }

    public function getFootwearOvertime()
    {
        try {
            $response = Http::withHeaders([
                'authorization' => 'Token 7ccae593b980b43:757c3914b651fc8'
            ])->get("http://3.108.0.142/api/resource/Footwear%20Overtime?limit_page_length=100&fields=[\"name\",\"owner\",\"creation\",\"modified\",\"modified_by\",\"posting_date\",\"employment_type\",\"adjustment_date\",\"company\"]");

            $api_data = $response->json()['data'];

            return view("footwear_overtime", compact('api_data'));
        } catch (\Exception $e) {
            return response()->view('error', ['message' => 'Error fetching data from the API'], 500);
        }
    }

    public function getFootwearAttendanceSheet()
    {
        try {
            $response = Http::withHeaders([
                'authorization' => 'Token 7ccae593b980b43:757c3914b651fc8'
            ])->get("http://3.108.0.142/api/resource/Footwear%20Attendance%20Sheet/?limit_page_length=100&fields=[\"name\",\"owner\",\"creation\",\"modified\",\"modified_by\",\"employment_type\",\"naming_series\",\"transaction_date\",\"from_date\",\"to_date\",\"company\"]");

            $api_data = $response->json()['data'];

            return view("footwear_attendance_sheet", compact('api_data'));
        } catch (\Exception $e) {
            return response()->view('error', ['message' => 'Error fetching data from the API'], 500);
        }
    }

    public function getLeaveApplication()
    {
        try {
            $response = Http::withHeaders([
                'authorization' => 'Token 7ccae593b980b43:757c3914b651fc8'
            ])->get("http://3.108.0.142/api/resource/Leave%20Application/?limit_page_length=10&fields=[\"name\",\"owner\",\"creation\",\"modified\",\"modified_by\",\"naming_series\",\"employee\",\"employee_name\",\"leave_type\",\"department\",\"leave_balance\",\"from_date\",\"to_date\",\"half_day\",\"half_day_date\",\"total_leave_days\",\"status\",\"posting_date\",\"follow_via_email\",\"company\",\"letter_head\"]");

            $api_data = $response->json()["data"];

            return view("leave_application", compact("api-data"));
        } catch (\Exception $e) {
            return response()->view("error", ["message" => "Error fetching data from the API"], 500);
        }
    }

    public function getLeaveAllocation()
    {
        try {
            $response = Http::withHeaders([
                'authorization' => 'Token 7ccae593b980b43:757c3914b651fc8'
            ])->get("http://3.108.0.142/api/resource/Leave%20Allocation?limit_page_length=100&fields=[\"name\",\"owner\",\"creation\",\"modified\",\"modified_by\",\"employee\",\"employee_name\",\"department\",\"leave_type\",\"from_date\",\"to_date\",\"new_leaves_allocated\",\"total_leaves_allocated\",\"total_leaves_encashed\",\"leave_policy\"]");

            $api_data = $response->json()['data'];

            return view("leave_allocation", compact('api_data'));
        } catch (\Exception $e) {
            return response()->view('error', ['message' => 'Error fetching data from the API'], 500);
        }
    }
}
