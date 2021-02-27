@extends('frontend.layouts.master')

@section('title')
XE MÁY META
@endsection
{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.master` --}}
@section('custom-css')
@endsection
{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layouts.master` --}}
@section('main-content')
<div class="nav">
        <div class="show">
        
          <table class="tbshow" border="0" cellpadding="0" cellspacing="0">
        <tr> 
        <td class="tlhang"><b class="giohang">ĐẶT HÀNG</td>
         </tr>
         <tr>
        <td><b class="tlloai">THÔNG TIN ĐẶT HÀNG</b></td>
                </tr>
                <tr>
                <td>
                 <form name="f" method="post" onreset="xacnhan();">
                 <table class="dathang">
              <tr>
                 <td class="tit"> TÊN KHÁCH HÀNG</td>
                        <td class="nhap">
                        
                            <input name="t1" type="text" id="t1" value="" />
                           
                        </td>
                      </tr>
                      <tr> 
                        <td class="tit">ĐỊA CHỈ GIAO HÀNG</td>
                        <td class="nhap">
                            <textarea name="t2" cols="32" rows="3" id="t2"></textarea>
                            </td>
                      </tr>
                      <tr> 
                        <td class="tit">NGÀY ĐẶT HÀNG
                          </td>
                        <td class="nhap"> 
                            {{ 'Ngày '. date("d "). 'Tháng '. date("d "). 'Năm '. date("Y")}}
                         </td></tr>
                      <tr> 
                        <td class="tit">NGÀY GIAO HÀNG 
                          </td>
                        <td class="nhap">                             
                              <input name="ngaygiao" type="date" min="{{date('Y-m-d')}}"><br>
                              <span>                              
                              </span>
                              </td>
                      </tr>
                      <tr> 
                        <td colspan="2">
                           
                            <input name="b1" type="submit" class="btttdathang" id="b1" value="ĐẶT HÀNG">
                            
                            <input name="b2" type="reset" class="btttdathang" id="b2" value="HỦY BỎ">
                            </td>
                      </tr>
            </table>
            </td></tr>
            <tr><td class="tlhang"></td></tr>
       </table>
          </form>
       </div>
      </div>
@endsection
{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
@endsection
