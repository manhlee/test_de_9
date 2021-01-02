<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vandon;
use App\Models\nhanvien;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;

class trangchuController extends Controller
{
    //
    public function load_trangchu()
    {
    	$vandon=vandon::all();
        Session::put('page','Trang chủ');
    	return view('trangchu',['vandon'=>$vandon]);
    }
    public function load_hinhanh()
    {
        Session::put('page','Hình ảnh');
    	return view('hinhanh');

    }

    public function load_themmoi()
    {
        $nhanvien=nhanvien::all();
        Session::put('page','Thêm mới');
        return view('themmoi',['nhanvien'=>$nhanvien]);
    }
    public function post_themmoi(Request $req)
    {
        $this->validate($req,[
            'nhanvien'=>'required',
            'nguoinhan'=>'required|max:100|min:5',
             'phone'=>'required|max:10|min:10',
             'diachi'=>'required|max:100|min:5',
             'ghichu'=>'required|max:100|min:5',

        ]);
        $vandon=new vandon();
        $vandon->nhanvien_id=$req->nhanvien;
        $vandon->trangthai=1;
        $vandon->nguonhan=$req->nguoinhan;
        $vandon->dienthoai=$req->phone;
        $vandon->diachi=$req->diachi;
        $vandon->ngaygiaohang=$req->ngaygiao;
        $vandon->ghichu=$req->ghichu;
        $vandon->save();
        return redirect('trangchu')->with('thongbao','Thêm thành công!');

    }
    public function timkiem(Request $req)
    {
        Session::put('page','Tìm kiếm');
        $key = '%'.$req->key.'%';
        $vandon=DB::table('vandon')
        ->join('nhanvien','vandon.nhanvien_id','=','nhanvien.id')
        ->where('hovaten','like',$key)->get();
        return view('trangchu',['vandon'=>$vandon]);
    }
    public function load_dangnhap()
    {
        return view('login');
    }
    private static function get_data($username,$pass)
    {
        $user=User::where('username','=',$username)->first();
        if(!$user) return false;
        //Hash::check($pass, $user->password)
        if($pass=$user->matkhau)
        {
            return $user;
        }else{
            return false;
        }
    }
    public function post_dangnhap(Request $req)
    {
        $this->validate($req,[
            'username'=>'required',
            'pass'=>'required',
        ]);
        $user=$this->get_data($req->username,$req->pass);
        if(!$user)
        {
            return redirect('dangnhap')->with('thatbai','Đăng nhập thất bại !!');
        }else
        {
            Session::put('user',$user);
            Session::put('time',date("h:sa"));
            return redirect('trangchu');
        }
    }
    public function dangxuat()
    {
        Session::forget('user');
        Session::forget('time');
        return redirect('dangnhap');
    }

}
