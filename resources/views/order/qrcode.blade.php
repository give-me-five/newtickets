<body onUnload="myClose()">
    <div style="width: 400px;height: 400px;margin: 0px auto;">
        {{--{!! QrCode::size(400)->generate(Request::url()); !!}--}}
        {!! QrCode::size(400)->encoding('UTF-8')->generate('支付成功');!!}
        <p align="center" >亲，扫描二维码支付。</p>
    </div>
</body>

<script>
    var es = new EventSource("qrcode.blade.php");
    es.addEventListener("qrcode.blade.php", function(e){
        window.close();
    });
</script>