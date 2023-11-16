<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CustomController extends Controller
{
    public function index()
    {
        $list = User::where('status', '!=', 0)->orderBy('created_at', 'desc')->get();
        return view("backend.customer.index", compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $iduser = User::where('status', '!=', 0)->get();
        return view("backend.customer.create", compact('iduser'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = new User();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->username = $request->username;
        $customer->password = bcrypt($request->password);
        $customer->address = $request->address;
        $customer->roles = $request->roles;
        $customer->created_by = Auth::id() ?? 1;
        $customer->created_at = date('Y-m-d H:i:s');
        $customer->status = $request->status;
        $files = $request->file('image');
        if ($files != NULL) {
            $extension = $files->getClientOriginalExtension();
            if (in_array($extension, ['jpg', 'png', 'gif', 'webp', 'jpeg'])) {
                //xóa hình cũ
                $image_path_delete = app_path("images/customer/" . $customer->image);
                if (File::exists($image_path_delete)) {
                    unlink($image_path_delete);
                }
            }
            //thêm
            $filename = $customer->slug . '.' . $extension;
            $customer->image = $filename;
            $files->move(public_path('images/customer'), $filename);
        }
        if ($customer->save()) {

            return redirect()->route('customer.index')->with('message', ['type' => 'success', 'mgs' => 'Thêm đề tài thành công']);
        }
        return redirect()->route('customer.index')->with('message', ['type' => 'danger', 'mgs' => 'Thêm không thành công']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = User::find($id);
        return view("backend.customer.show", compact("customer"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $iduser = User::where('status', '!=', 0)->get();
        $customer = User::find($id);
        if ($customer == null) {
            return redirect()->route('customer.index')->with("message", ['type' => 'danger', 'msf' => 'không tồn tại mẫu tin này']);
        }
        $list = User::all();
        return view("backend.customer.edit", compact("customer", 'iduser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = User::find($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->username = $request->username;
        $customer->password = bcrypt($request->password);
        $customer->address = $request->address;
        $customer->roles = $request->roles;
        $customer->created_by = Auth::id() ?? 1;
        $customer->created_at = date('Y-m-d H:i:s');
        $customer->status = $request->status;
        $files = $request->file('image');
        if ($files != NULL) {
            $extension = $files->getClientOriginalExtension();
            if (in_array($extension, ['jpg', 'png', 'gif', 'webp', 'jpeg'])) {
                //xóa hình cũ
                $image_path_delete = app_path("images/customer/" . $customer->image);
                if (File::exists($image_path_delete)) {
                    unlink($image_path_delete);
                }
            }
            //thêm
            $filename = $customer->slug . '.' . $extension;
            $customer->image = $filename;
            $files->move(public_path('images/customer'), $filename);
        }
        //up load file
        if ($customer->save()) {

            return redirect()->route('customer.index')->with('message', ['type' => 'success', 'mgs' => 'Cập nhật mẫu tin thành công!']);
        }
        return redirect()->route('customer.trash')->with('message', ['type' => 'success', 'mgs' => 'Cập nhật không thành công thành công']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroys(string $id)
    {
        $customer = User::find($id);
        if ($customer == NULL) {
            return redirect()->route('customer.trash')->with('message', ['type' => 'danger', 'mgs' => 'Mẫu tin không tồn tại']);
        }
        if ($customer->delete()) {
            return redirect()->route('customer.trash')->with('message', ['type' => 'success', 'mgs' => 'Xóa khỏi CSDL thành công']);
        }
        return redirect()->route('customer.trash')->with('message', ['type' => 'danger', 'mgs' => 'Xóa khỏi CSDL không thành công']);
    }
    public function trash()
    {
        $list = User::where('status', '=', '0')->orderBy('created_at', 'desc')->get();
        return view('backend.customer.trash', compact('list'));
    }
    public function delete($id)
    {

        $customer = User::find($id);
        if ($customer == NULL) {
            return redirect()->route('customer.index')->with('message', ['type' => 'danger', 'mgs' => 'Mẫu tin không tồn tại!']);
        } else {
            $customer->status = 0;
            $customer->updated_at = date('Y-m-d H:i:s');

            $customer->save();
            return redirect()->route('customer.index')->with('message', ['type' => 'success', 'mgs' => 'Xóa vào thùng rác thành công!']);
        }
    }
    public function restore($id)
    {
        $list_customer = User::find($id);
        if ($list_customer == NULL) {
            return redirect()->route('customer.index')->with('message', ['type' => 'danger', 'mgs' => 'Mẫu tin không tồn tại!']);
        } else {
            $list_customer->status = 2;
            $list_customer->updated_at = date('Y-m-d H:i:s');
            $list_customer->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
            $list_customer->save();
            return redirect()->route('customer.trash')->with('message', ['type' => 'success', 'mgs' => 'Khôi phục thành công!']);
        }
    }
    public function status($id)
    {
        $row = User::find($id);
        if ($row == NULL) {
            return redirect()->route('customer.index')->with('message', ['type' => 'danger', 'mgs' => 'Mẫu tin không tồn tại']);
        }
        $row->updated_by = Auth::id() ?? 1; //đăng nhập
        $row->updated_at = date('Y-m-d H:i:s'); //ngày tạoo
        $row->status = ($row->status == 1) ? 2 : 1; // trạng thái chưa xuất mã
        $row->save();
        return redirect()->route('customer.index')->with('message', ['type' => 'success', 'mgs' => 'Thay đổi trạng thái thành công!']);
    }
}
