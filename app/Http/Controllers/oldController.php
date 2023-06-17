<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\old;

class oldController extends Controller
{
    public function index() //phương thức này truy xuất tất cả các bản ghi từ bảng cơ sở dữ liệu được đại diện bởi mô hình và chuyển chúng đến chế độ xem để kết xuất
    {
        $old = old::all();
        return view('old.index', ['olds' => $old]);
    }
    public function about() //mở trang about
    {
        return view('old.about');
    }


    public function create()//mở trang create
    {
        return view('old.create');
    }
    public function store(Request $request)//phương pháp này xác thực dữ liệu yêu cầu đến, tạo một bản ghi mới trong cơ sở dữ liệu bằng cách sử dụng dữ liệu được xác thực và sau đó chuyển hướng người dùng trở lại trang danh sách tài nguyên.store
    {
        $data = $request->validate([
            'human_name' => 'required|string',
            'animal_name' => 'required|string',
            'alien_name' => 'required|string'
        ]);// phương thức validate đã có trong Request class để lọc kiểu dữ liệu
        $newData = old::create($data);//lưu dữ liệu trong object $newData và đẩy lên database
        return redirect(route('old.index'));//tránh code khi submit bị lặp số lần truyền giá trị vào class Request
    }
    public function edit(old $old)//mở trang edit
    {
        return view('old.edit', ['old' => $old]);
    }
    public function update(old $old, Request $request)//dùng để chỉnh sửa dữ liệu database
    {
        $data = $request->validate([
            'human_name' => 'required|string',
            'animal_name' => 'required|string',
            'alien_name' => 'required|string'
        ]);//giống như create
        $old->update($data);//$old là object của class old model nên đã có sẵn phương thức update
        return redirect(route('old.index'));// tránh lặp giá trị 
    }
    public function delete(old $old)//xóa dữa liệu cần xóa 
    {
        $old->delete();//hàm delete đã có sẵn trong class old và dùng object $old để sử dụng
        return redirect(route('old.index'));
    }
}
