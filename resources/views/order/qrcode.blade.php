<body onUnload="myClose()">
    <div style="width: 400px;height: 400px;margin: 0px auto;">
        {{--{!! QrCode::encoding('UTF-8')->size(400)->generate("http://www.movie.com/order/orderAdd/".$shopname."/".$filmtitle."/".$halltitle."/".$time."/".$counter."/".$total."/".$seat);!!}--}}
        {!! QrCode::size(200)->generate('http://laravelacademy.org') !!};
        <p align="center" >亲，扫描二维码支付。</p>
    </div>
</body>

<script>
    var es = new EventSource("qrcode.blade.php");
    es.addEventListener("qrcode.blade.php", function(e){
        window.close();
    });
</script>