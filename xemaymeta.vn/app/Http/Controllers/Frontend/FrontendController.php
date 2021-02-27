<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HangXe;
use App\LoaiXe;
use App\Xe;
use DB;
use Session;
use stdClass;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Action hiển thị view Trang chủ
     * GET /
     */
    public function index(Request $request)
    {
        $listhang = HangXe::all();
        $listloai = LoaiXe::all();
        $listloaixe = Xe::select(['hangxe_ma','loai_ma'])->groupBy(['hangxe_ma','loai_ma'])
        ->orderBy('loai_ma')->get();
        $listdanhsachxetheohang = $listhang;
        foreach($listdanhsachxetheohang as $hang){
            $hang->listxe = DB::table('xe')
            ->select('xe.*','hinhanhchitiet.hinhanhct_hinh',DB::raw('IFNULL(khuyenmai.khuyenmai_giamGia,0) as phantramgiamgia'))
            ->leftJoin('hinhanhchitiet', 'hinhanhchitiet.xe_ma', '=', 'xe.xe_ma')
            ->leftJoin('khuyenmai', 'khuyenmai.khuyenmai_ma', '=', 'xe.khuyenmai_ma')
            ->where([
                ['xe.hangxe_ma', $hang->hangxe_ma],
                ['hinhanhchitiet.hinhanhct_loai', 'Sản phẩm'],
            ])
            ->orderBy('xe.xe_ma','desc')
            ->get();
            $hang->listxeuutien = DB::table('xe')
            ->select('xe.*','hinhanhchitiet.hinhanhct_hinh',DB::raw('IFNULL(khuyenmai.khuyenmai_giamGia,0) as phantramgiamgia'))
            ->leftJoin('hinhanhchitiet', 'hinhanhchitiet.xe_ma', '=', 'xe.xe_ma')
            ->leftJoin('khuyenmai', 'khuyenmai.khuyenmai_ma', '=', 'xe.khuyenmai_ma')
            ->where([
                ['xe.hangxe_ma', $hang->hangxe_ma],
                ['hinhanhchitiet.hinhanhct_loai', 'Sản phẩm'],
            ])
            ->orderBy('xe.xe_uuTien','desc')
            ->get();
        }
        // Hiển thị view `frontend.index` với dữ liệu truyền vào
        return view('frontend.index')
            ->with('listhang', $listhang)
            ->with('listloaixe', $listloaixe)
            ->with('listdanhsachxetheohang', $listdanhsachxetheohang);    
    }
    public function productDetail(Request $request, $id)
    {
        $xe = DB::table('xe')
            ->select('xe.*','hangxe.*','hinhanhchitiet.hinhanhct_hinh', DB::raw('IFNULL(khuyenmai.khuyenmai_giamGia,0) as phantramgiamgia, IFNULL(chitietkm.chitietkm_ketThuc,"") as tgketthuc'))
            ->leftJoin('hangxe', 'hangxe.hangxe_ma', '=', 'xe.hangxe_ma')
            ->leftJoin('hinhanhchitiet', 'hinhanhchitiet.xe_ma', '=', 'xe.xe_ma')
            ->leftJoin('khuyenmai', 'khuyenmai.khuyenmai_ma', '=', 'xe.khuyenmai_ma')
            ->leftJoin('chitietkm', 'khuyenmai.khuyenmai_ma', '=', 'chitietkm.khuyenmai_ma')
            ->where([
                ['xe.xe_ma', $id],
                ['hinhanhchitiet.hinhanhct_loai', 'Sản phẩm']])->first();
        $tskt = DB::table('thongsokythuat')
        ->where('xe_ma',$id)->first();
        $mausac = DB::table('hinhanhchitiet')
        ->where([
            ['xe_ma', $id],
            ['hinhanhchitiet.hinhanhct_loai', 'mausac'],
        ])->get();
        $listhang = HangXe::all();
        $listloaixe = DB::table('xe')->select(['hangxe_ma','loai_ma'])->groupBy(['hangxe_ma','loai_ma'])
        ->orderBy('loai_ma')->get();
        $dactinh = DB::table('motahinhanh')
        ->leftJoin('hinhanhchitiet', 'hinhanhchitiet.hinhanhct_ma', '=', 'motahinhanh.hinhanhct_ma')
        ->where('hinhanhchitiet.xe_ma', $id)
        ->orderBy('hinhanhchitiet.hinhanhct_ma','asc')->get();
        $tuongtu = DB::table('xe')
        ->select('xe.*','hinhanhchitiet.hinhanhct_hinh', DB::raw('IFNULL(khuyenmai.khuyenmai_giamGia,0) as phantramgiamgia'))
        ->leftJoin('hinhanhchitiet', 'hinhanhchitiet.xe_ma', '=', 'xe.xe_ma')
        ->leftJoin('khuyenmai', 'khuyenmai.khuyenmai_ma', '=', 'xe.khuyenmai_ma')
        ->where([
            ['xe.xe_ma', '!=', $id],
            ['hinhanhchitiet.hinhanhct_loai', 'Sản phẩm']])
        ->take(4)->get();
        return view('frontend.pages.product-detail')
            ->with('xe', $xe)
            ->with('tskt', $tskt)
            ->with('mausac', $mausac)
            ->with('dactinh', $dactinh)
            ->with('tuongtu', $tuongtu)
            ->with('listhang', $listhang)
            ->with('listloaixe', $listloaixe);
    }
    /**
     * Action hiển thị giỏ hàng
     */
    public function cart(Request $request)
    {
        // Query danh sách hình thức vận chuyển
        $danhsachvanchuyen = Vanchuyen::all();
        // Query danh sách phương thức thanh toán
        $danhsachphuongthucthanhtoan = Thanhtoan::all();
        return view('frontend.pages.shopping-cart')
            ->with('danhsachvanchuyen', $danhsachvanchuyen)
            ->with('danhsachphuongthucthanhtoan', $danhsachphuongthucthanhtoan);
    }

    public function addToCart(Request $request, $id)
    {  
        if (!Session::has('cart.'.$id))
        {
            $cart = new stdClass();
            $cart->id = $id;
            $cart->qty = 1;
        }
        else{
            $cart = Session::get('cart.'.$id);
            $cart->qty += 1;    
        }
        Session::put('cart.'.$id, $cart);
        Session::flash('alert-success', 'Thêm vào giỏ hàng thành công');
        //return view('frontend.pages.product-cart');
        return redirect()->back();
    }

    public function updateCart(Request $request)
    {  
        if (Session::has('cart.'.$request->id))
        {           
            $cart = Session::get('cart.'.$request->id);
            $cart->qty = $request->val; 
            Session::put('cart.'.$request->id, $cart);   
        }        
        //return view('frontend.pages.product-cart');
        return redirect()->back();
    }

    public function deleteCart(Request $request, $id)
    {  
        if (Session::has('cart.'.$id))
        {           
            Session::forget('cart.'.$id);
        }        
        //return view('frontend.pages.product-cart');
        return redirect()->back();
    }

    public function loadCart(Request $request){
        $cartlist = Session::get('cart');
        $i = 0;        
        $listxe = array();
        foreach($cartlist as $xe){
            $listxe[$i] = $xe->id;
            $i++;
        }
        $listcart = DB::table('xe')
            ->select('xe.*','hinhanhchitiet.hinhanhct_hinh',DB::raw('IFNULL(khuyenmai.khuyenmai_giamGia,0) as phantramgiamgia'))
            ->leftJoin('hinhanhchitiet', 'hinhanhchitiet.xe_ma', '=', 'xe.xe_ma')
            ->leftJoin('khuyenmai', 'khuyenmai.khuyenmai_ma', '=', 'xe.khuyenmai_ma')
            ->whereIn('xe.xe_ma',  $listxe)
            ->where('hinhanhchitiet.hinhanhct_loai', 'Sản phẩm')
            ->orderBy('xe.xe_ma','desc')
            ->get();
        $listhang = DB::table('hangxe')->get();
        $listloaixe = DB::table('xe')->select(['hangxe_ma','loai_ma'])->groupBy(['hangxe_ma','loai_ma'])
        ->orderBy('loai_ma')->get();
        return view('frontend.pages.product-cart')
        ->with('cartlist',$listcart)
        ->with('listhang', $listhang)
        ->with('listloaixe', $listloaixe);;
    }
    public function payment(Request $request){
        
        $listhang = DB::table('hangxe')->get();
        $listloaixe = DB::table('xe')->select(['hangxe_ma','loai_ma'])->groupBy(['hangxe_ma','loai_ma'])
        ->orderBy('loai_ma')->get();
        return view('frontend.pages.product-payment')
        ->with('listhang', $listhang)
        ->with('listloaixe', $listloaixe);;
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
        //
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
}
