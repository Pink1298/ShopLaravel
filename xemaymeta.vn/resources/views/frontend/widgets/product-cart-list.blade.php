<div class="nav">
        <div class="show">
          <table class="tbshow"border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td class="tlhang"><b class="giohang">CHI TIẾT GIỎ HÀNG<b></td>
            </tr>
            <tr>
              <td><b class="tlloai">CÁC XE ĐÃ CHỌN</b></td>
            </tr>
            <tr>
            <td >
            <table class="hienthigiohang">
            <tr class="titgiohang">
              <td >Tên Xe</td>
              <td >Hình Ảnh</td>
              <td>Đơn Giá</td>
              <td>Số Lượng</td>
              <td>Thành Tiền</td>
              <td>xóa</td>
            </tr>
            @php
                $tongtien = 0
            @endphp
            @foreach($cartlist as $xe)
            <tr class="xe">
                    <td>{{$xe->xe_ten}}</td>
                    <td><img src="{{asset('storage/xe/'.$xe->hinhanhct_hinh)}}" width="100px" height="100px"/></td>
                    <td>
                        @if($xe->phantramgiamgia == 0)
                            @php
                                $dongia = $xe->xe_gia
                            @endphp
                            {{number_format($xe->xe_gia,0,'','.')}}
                        @else
                            @php
                                $dongia = $xe->xe_gia*(100-$xe->phantramgiamgia)/100
                            @endphp
                            {{number_format($xe->xe_gia*(100-$xe->phantramgiamgia)/100,0,'','.')}}
                        @endif
                    <sup>vnđ</sup></td>
                <td ><form name="cnf1" action="{{ URL::route('frontend.updateCart') }}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    @php
                        $qty = Session::get('cart.'.$xe->xe_ma)->qty
                    @endphp
                    <input name="val" type="number" value="{{$qty}}" min="1" style="width: 40%;"/>
                    <input type="submit" name="s" value="UPDATE">
                    <input type="hidden" name="id" value="{{$xe->xe_ma}}"/>                    
                  </form></td>
                    <td>
                        @php
                            $tongtien += $dongia * $qty;
                        @endphp
                        {{number_format($dongia * $qty,0,'','.')}}<sup>vnđ</sup></td>
                    <td><a  class="xoa" href='/cart/delete/{{$xe->xe_ma}}'>Xóa</a></td>  
            </tr>
            @endforeach
            <tr>
                    <td colspan="6" class="tongtien">
                    </a>Tổng tiền: {{number_format($tongtien,0,'','.')}}<sup>vnđ</sup>
                   </td>
                   </tr>
                   <tr>
                   <td colspan="6" class="bton">
                    <a href="/payment/" >Đặt Hàng</a>
                   </td>
                  </tr>
                 </table>
                
              
                  <tr><td class="tlhang"></td></tr>
                </table>
              </div>
            </div>