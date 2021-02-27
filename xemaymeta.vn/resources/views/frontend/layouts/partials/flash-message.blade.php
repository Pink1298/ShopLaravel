<div class="flash-message" style="width: 300px;position: fixed;top: 10px;right: 10px;">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
          @if(Session::has('alert-' . $msg))
          <script>
setTimeout(function(){
$('.flash-message').fadeOut();
},2500)
          </script>
          <p class="alert alert-{{ $msg }}" role="alert">{{ Session::get('alert-' . $msg) }} 
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          </p>
          @endif
      @endforeach
</div>