@foreach($data as $h)
<div class="show">
    <table class="tbshow" border="0" cellpadding="0" cellspacing="0">
        <tr><td colspan="4" class="tlhang"><a href="?b=hang&id=mh"><img src="{{ asset('image/'.$h->hangxe_logo)}}" class="logohang"/><B>{{$h->hangxe_ten}}</B></a></td></tr>
        <tr><td colspan="4"><img class="banner"src="{{ asset('image/'.$h->hangxe_banner)}}"/></td></tr>
            <tr><td colspan="4" ><b class="tlloai">MỚI NHẤT</b></td></tr>
            <tr>
                @php
                    $stt = 1
                @endphp                
                    @foreach($h->listxe as $xe)
                                            
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
                <tr><td colspan="4" ><b class="tlloai">BÁN CHẠY NHẤT</b></td></tr>
            <tr>
                @php
                    $stt = 1
                @endphp                
                    @foreach($h->listxeuutien as $xe)
                                            
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
                <tr><td colspan="4" ><hr class="key2"></td></tr>
                <tr><td colspan="4" ><a href="?b=hang&id=hangxe_ma" class="xemthem"><b>XEM THÊM</b></a></td></tr>
                <tr><td colspan="4" class="tlhang"></tr>
    </table>
</div>
@endforeach