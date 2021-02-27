<div class="wrapper_container">
<div class="container">
	<div class="row">
	  <div class="mi" style=" width:32%" data-toggle="tooltip" title data-html="true" data-original-title="LUÔN VỮNG TIN<br>LUÔN ĐỔI MỚI<br>LUÔN LẮNG NGHE" data-placement="bottom"><img class="icon" src="{{ asset('') }}Image/light.png"/>Uy tín - Nhanh nhẹn - Thân thiện</div>
  		<div class="mi" style=" width:23%"data-toggle="tooltip" title data-html="true" data-original-title="Nhận hàng trong 7 ngày<br>Miễn phí giao hàng toàn quốc<br>Thanh toán khi nhận hàng" data-placement="bottom"><img class="icon" src="{{ asset('') }}Image/truck.png"/>giao hàng toàn quốc</div>
	  <div class="mi" style=" width:26%" data-toggle="tooltip" title data-html="true" data-original-title="Liên hệ tổng đài<br />035399xxxx<br>Hoạt động từ 8:30 - 20:00" data-placement="bottom"><img class="icon" src="{{ asset('') }}Image/phone.png"/>chăm sóc khách hàng</div>
  		<div class="mi" style=" width:13%" data-toggle="tooltip" title data-html="true" data-original-title="36 Trần Văn Nghiêm <br>TP Cần Thơ" data-placement="bottom"><img class="icon" src="{{ asset('') }}Image/map.png"/>địa chỉ</div>
	</div>
</div>
<hr class="ke"/>
<table width="1004px" cellspacing="0" cellpadding="0" class="r2">
  <tr>
    <td width="304px" rowspan="2" style="background:#007671"><div class="logo"><a href="/"><img src="{{ asset('image/logoMeta.png') }}" width="304" height="140" /></a>
</div></td>
    <td colspan="5" valign="top" width="700px">
    <ul id="main_menu">
    <li><a href="/" ><img src="{{ asset('image/home.png') }}" class="icon-menu">Trang chủ</a></li>
    
    
                            <li class="down"><a><img src="{{ asset('image/motor.png') }}" class="icon-menu">sản phẩm</a>
                            @if(!$listhang->isEmpty())
                                <ul class="sub_menu">                            
                                    @foreach($listhang as $hang)
                                    @php
                                        $coloaixe = false
                                    @endphp
                                    <li><a href="index.php?b=hang&id='.$t1.'"><img src="{{ asset('image/'.$hang->hangxe_logo) }}" class="logohanghd">{{ $hang->hangxe_ten }}</a> 
                                        @foreach($listloaixe as $loaixe)
                                            @if($hang->hangxe_ma == $loaixe->hangxe_ma)                                                
                                                @php
                                                    $coloaixe = true
                                                @endphp
                                            @endif
                                        @endforeach
                                        @if($coloaixe)
                                            <ul class="sub_menu">
                                            @foreach($listloaixe as $loaixe)
                                                @if($hang->hangxe_ma == $loaixe->hangxe_ma)
                                                    <li><a href="index.php?b=loai&id='.$t1.'&loaixe='.$t2.'">{{$loaixe->loai_ma}}</a></li>
                                                @endif
                                            @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                            @endif                         
    </li>
      
      
      
        <li class="down"><a href="" ><img src="{{ asset('image/event.png') }}" class="icon-menu">  Tin tức</a>
                                  <ul class="sub_menu">
                                        <li><a href="">Sự kiện</a></li>
                                        <li><a href="">Khuyến mãi</a></li>
          </ul>
      </li>
        <li class="down"><a href="" ><img src="{{ asset('image/service.png') }}" class="icon-menu">  Hỗ trợ</a>
                                  <ul class="sub_menu">
                                        <li><a href="">Liên hệ</a></li>
                                        <li><a href="">Góp ý</a></li>
          </ul>    
      </li>
        
            		<li><a href="index.php?b=dn"><img src="{{ asset('image/guest.png') }}" class="icon-menu">đăng nhập</a>
                    	<ul class="sub_menu">
                        				<li class="register"><a href="index.php?b=dk">ĐĂNG KÝ</a></li>
                        </ul>            
        </li>
  </ul>
  </td>
    </tr>
  <tr >
    <td width="387px">
<div id="s"><form action="index.php?b=tk" method="get" name="seach" >
<input type="hidden" name="b" value="tk" />
<input type="text" id="key" name="key" placeholder="Tìm kiếm xe"/>
</form></div></td>
    <td width="50px" align="center"><img src="{{ asset('image/order.png') }}" class="iconr"/></td>
    <td width="122px"><p><a href="index.php?b=ttdh" class="linkr"><b><BR>TÌNH TRẠNG<BR />ĐƠN HÀNG</b></a></td>
    <td width="51px" align="center"><img src="{{ asset('image/cart.png') }}" class="iconr"/></td>
    <td width="91px"><p><a href="/cart/" class="linkr"><b><BR>CHI TIẾT<br />GIỎ HÀNG</b></a></td>
  </tr>
</table>
</div>