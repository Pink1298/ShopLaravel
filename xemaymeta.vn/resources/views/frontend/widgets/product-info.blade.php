<div class="nav">
		<div class="show">
			<table class="tbshow"border="0" cellpadding="0" cellspacing="0">
            <tr><td colspan="4" class="tlhang"><a href="?b=hang&id=mah"><b><img src="{{asset('image/'.$xe->hangxe_logo)}}" class="logohang"/>{{$xe->hangxe_ten}}</B></a></td></tr>	
            <tr><td colspan="4" ><b class="tlloai">{{$xe->xe_ten}}</b></td></tr>
            <tr><td colspan="4"><img src="{{asset('storage/xe/'.$xe->hinhanhct_hinh)}}" class="banner" id="banner"/></td></tr>
            <tr><td colspan="4" ><b class="tlloai">MÀU SẮC</b></td></tr>
            <tr class="fixed-price">
                <td colspan="2">
                    <div class="slidect">
                        @php
                            $i = 1
                        @endphp
                        @foreach($mausac as $mau)                        
                            <input type="radio" name="imgmain" id="img{{$i}}" checked="checked"/>
                            <label for="img{{$i}}"><img src="{{asset('storage/xe/'.$mau->hinhanhct_hinh)}}" width="90px" height="60px" /></label>
                            <img src="{{asset('storage/xe/'.$mau->hinhanhct_hinh)}}" width="540px" height="340px"/>
                        @php
                            $i++
                        @endphp
                        @endforeach
                    </div>
                </td>
                <td colspan="2">
                        <table class="htgia">
                            <tr><td><b class="tento">{{$xe->xe_ten}}<b></td></tr>
                            <tr>
                                <td>
                                    @if($xe->phantramgiamgia == 0)
                                        <b class='giato'><b class='to'></b><br>{{number_format($xe->xe_gia,0,'','.')}}<sup>đ</sup></b>
                                    @else
                                        <b class='giato'><b class='to'><strike>{{number_format($xe->xe_gia,0,'','.')}}</strike><sup>vnđ</sup></b>
                                <br>{{number_format($xe->xe_gia*(100-$xe->phantramgiamgia)/100,0,'','.')}}<sup>vnđ</sup><br><b class='km'>KHUYẾN MÃI ĐẾN {{date('d/m',strtotime($xe->tgketthuc))}}</b></b>
                                    @endif
                                </td>
                            </tr>
                        <tr><td><a class="btdathang" href="/cart/add/{{$xe->xe_ma}}"><b>ĐẶT HÀNG</b></a></td></tr>
                        </table>
                </td>
            </tr>
            <tr><td colspan="4" ><b class="tlloai">ĐẶC TÍNH</b></td></tr>
            <tr>
                <td colspan="3">
                        <div id="slidemain">   
                            @php
                                $i = 1
                            @endphp  
                            @foreach($dactinh as $dt)                    
                            <input type="radio" id="image{{$i}}" name="slide" class="inpu" checked/>
                            <label for="image{{$i}}" class="labe" id="button{{$i}}"></label>
                        <h1 id="text{{$i}}"><b>{{$dt->motaha_tieuDe}}</b><br/>{{$dt->motaha_noiDung}}</h1>
                            @php
                                $i++
                            @endphp
                            @endforeach
                            <div id="slide_wrap2">
                                @foreach($dactinh as $dt)   
                                    <img src="{{asset('storage/xe/'.$dt->hinhanhct_hinh)}}" width="490" height="340" />
                                @endforeach
                            </div>
                        </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                        <table class="tskt">
                                <tr>
                                    <td colspan="2" class="tittt"><b>Thông số kỹ thuật</b></td>
                                </tr>
                                <tr class="w">
                                    <td align="left" valign="middle" width="380">Loại động cơ</td>
                                    <td align="left" valign="middle" width="320">{{ $tskt->thongso_dongCo }}</td>
                                </tr>
                                    <tr class="g">
                                        <td align="left" valign="middle">Dung tích xy-lanh</td>
                                    <td align="left" valign="middle">{{ $tskt->thongso_xyLanh }}</td>
                                </tr>
                                    <tr class="w">
                                        <td align="left" valign="middle">Đường kính và hành trình pittong</td>
                                    <td align="left" valign="middle">{{ $tskt->thongso_pitTong }}</td>
                                </tr>
                                    <tr class="g">
                                        <td align="left" valign="middle">Tỷ số nén</td>
                                    <td align="left" valign="middle">{{ $tskt->thongso_tsNen }}</td>
                                </tr>
                                    <tr class="w">
                                        <td align="left" valign="middle">Công suất tối đa</td>
                                    <td align="left" valign="middle">{{ $tskt->thongso_congSuat }}</td>
                                </tr>
                                    <tr class="g">
                                        <td align="left" valign="middle">Mo-men cực đại</td>
                                    <td align="left" valign="middle">{{ $tskt->thongso_momen }}</td>
                                </tr>
                                    <tr class="w">
                                        <td align="left" valign="middle">Hệ thống khởi động</td>
                                    <td align="left" valign="middle">{{ $tskt->thongso_khoiDong }}</td>
                                </tr>
                                    <tr class="g">
                                        <td align="left" valign="middle">Hệ thống truyền động</td>
                                    <td align="left" valign="middle">{{ $tskt->thongso_truyenDong }}</td>
                                </tr>
                                    <tr class="w">
                                        <td align="left" valign="middle">Dung tích nhớt máy</td>
                                    <td align="left" valign="middle">{{ $tskt->thongso_nhot }}</td>
                                </tr>
                                    <tr class="g">
                                        <td align="left" valign="middle">Dung tích bình xăng</td>
                                    <td align="left" valign="middle">{{ $tskt->thongso_xang }}</td>
                                </tr>
                                    <tr class="w">
                                        <td align="left" valign="middle">Kích cỡ lốp</td>
                                    <td align="left" valign="middle">{{ $tskt->thongso_lopXe }}</td>
                                </tr>
                                    <tr class="g">
                                        <td align="left" valign="middle">Hệ thống phanh</td>
                                        <td align="left" valign="middle">{{ $tskt->thongso_phanhXe }}</td>
                                </tr>
                                    <tr class="w">
                                        <td align="left" valign="middle">Hệ thống giảm xóc</td>
                                    <td align="left" valign="middle">{{ $tskt->thongso_phuocXe }}</td>
                                </tr>
                                    <tr class="g">
                                        <td align="left" valign="middle">Kích thước (dài x rộng x cao)</td>
                                    <td align="left" valign="middle">{{ $tskt->thongso_kichThuoc }}</td>
                                </tr>
                                    <tr class="w">
                                        <td align="left" valign="middle">Độ cao yên xe</td>
                                    <td align="left" valign="middle">{{ $tskt->thongso_yenXe }}</td>
                                </tr>
                                    <tr class="g">
                                        <td align="left" valign="middle">Khoảng cách giữa 2 trục bánh xe</td>
                                    <td align="left" valign="middle">{{ $tskt->thongso_kc2banh }}</td>
                                </tr>
                                    <tr class="w">
                                        <td align="left" valign="middle">Độ cao gầm xe</td>
                                    <td align="left" valign="middle">{{ $tskt->thongso_gamXe }}</td>
                                </tr>
                                    <tr class="g">
                                        <td align="left" valign="middle">Trọng lượng</td>
                                    <td align="left" valign="middle">{{ $tskt->thongso_trongLuong }}</td>
                                </tr>
                            </table>
                      </td>
                </tr>
                <tr><td colspan="4"><hr class="key2"></td></tr>
       			<tr><td colspan="4" style="font-size:24px; color:#d50000; text-indent:50px; padding-top:20px" align="left">Các dòng xe tương đồng:</td></tr>
                <tr style="display: block">
                    @php
                        $stt = 1
                    @endphp                
                        @foreach($tuongtu as $xe)
                                                
                            @if($stt==9)
                                break;
                            @elseif($stt%4==1 && $stt>1)
                                </tr><tr>
                            @endif
                                    <td class="sp">
                                    <a href="/product/{{$xe->xe_ma}}">
                                        @if($xe->phantramgiamgia == 0)
                                            <br><b>{{number_format($xe->xe_gia,0,'','.')}}<sup>đ</sup></b><br>
                                        @else
                                            <b><strike class='giamgia'>{{number_format($xe->xe_gia,0,'','.')}}</strike><sup>đ</sup>
                                            <br>{{number_format($xe->xe_gia*(100-$xe->phantramgiamgia)/100,0,'','.')}}<sup>đ</sup></b><br>
                                        @endif
                                        <img src="{{asset('storage/xe/'.$xe->hinhanhct_hinh)}}" height="170px" width="190px" />
                                        <br><b>{{$xe->xe_ten}}</b></a>
                                    </td>
                    
                            @php
                                $stt++
                            @endphp  
                        @endforeach
                        @if(($stt-1)%4>0)
                            @php
                                $n = 4 - ($stt-1)%4                            
                            @endphp
                            @for($i = 0; $i < $n; $i++)
                                <td></td>
                            @endfor
                        @endif
                </tr>
        </table>
    </div>
</div>