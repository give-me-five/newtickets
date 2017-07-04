<!DOCTYPE html>
<html lang="zh">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">

    
    <meta name="language" content="zh">
    
    
    
        <title>企业经营信息</title>
<script src="{{asset('public/js/jquery.min.js')}}"></script>

<link media="all" href="{{asset('myadmin/css/index.css')}}" type="text/css" rel="stylesheet">
</head>
<body>
<!--头部-->
<div class="bus-head">
    
    <h1 class="name yahei bus_icobg " >商家入驻</h1>
</div>
<
<div class="bus-box clearfix">
<!--协议-->
    <div class="clearfix">
       
        <div id="content">
	<div class="manage clearfix">
<div class="box">
<form id="company-form" action="/shop/information/upload" method="post" enctype="multipart/form-data">        
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <dl class="clearfix">
        <dt>企业名称<font>*</font></dt>
        <dd><input class="txt" name="shopname" id="Company_name" maxlength="111" value="" type="text"></dd>
        <dd class="error"></dd>
    </dl>

    <dl class="clearfix">
        <dt>所在地 <font>*</font></dt>
        <dd>
        <select name="city" id="pro" onchange="change();">
    <option value="">请选择省份</option>
    <option value="1">北京市</option>
    <option value="2">广东省</option>
    <option value="3">山东省</option>
    <option value="4">江苏省</option>
    <option value="5">河南省</option>
    <option value="6">上海市</option>
    <option value="7">河北省</option>
    <option value="8">浙江省</option>
    <option value="9">香港特别行政区</option>
    <option value="10">陕西省</option>
    <option value="11">湖南省</option>
    <option value="12">重庆市</option>
    <option value="13">福建省</option>
    <option value="14">天津市</option>
    <option value="15">云南省</option>
    <option value="16">四川省</option>
    <option value="17">广西壮族自治区</option>
    <option value="18">安徽省</option>
    <option value="19">海南省</option>
    <option value="20">江西省</option>
    <option value="21">湖北省</option>
    <option value="22">山西省</option>
    <option value="23">辽宁省</option>
    <option value="24">台湾省</option>
    <option value="25">黑龙江</option>
    <option value="26">内蒙古自治区</option>
    <option value="27">澳门特别行政区</option>
    <option value="28">贵州省</option>
    <option value="29">甘肃省</option>
    <option value="30">青海省</option>
    <option value="31">新疆维吾尔自治区</option>
    <option value="32">西藏区</option>
    <option value="33">吉林省</option>
    <option value="34">宁夏回族自治区</option>
</select>
<select name="region" id="city"></select><script>
function change() {
    var map = ['', ['朝阳区', '海淀区', '通州区', '房山区', '丰台区', '昌平区', '大兴区', '顺义区', '西城区', '延庆县', '石景山区', '宣武区', '怀柔区', '崇文区', '密云县', '东城区', '平谷区', '门头沟区'],

        ['东莞市', '广州市', '中山市', '深圳市', '惠州市', '江门市', '珠海市', '汕头市', '佛山市', '湛江市', '河源市', '肇庆市', '清远市', '潮州市', '韶关市', '揭阳市', '阳江市', '梅州市', '云浮市', '茂名市', '汕尾市'],

        ['济南市', '青岛市', '临沂市', '济宁市', '菏泽市', '烟台市', '淄博市', '泰安市', '潍坊市', '日照市', '威海市', '滨州市', '东营市', '聊城市', '德州市', '莱芜市', '枣庄市'],

        ['苏州市', '徐州市', '盐城市', '无锡市', '南京市', '南通市', '连云港市', '常州市', '镇江市', '扬州市', '淮安市', '泰州市', '宿迁市'],

        ['郑州市', '南阳市', '新乡市', '安阳市', '洛阳市', '信阳市', '平顶山市', '周口市', '商丘市', '开封市', '焦作市', '驻马店市', '濮阳市', '三门峡市', '漯河市', '许昌市', '鹤壁市', '济源市'],

        ['松江区', '宝山区', '金山区', '嘉定区', '南汇区', '青浦区', '浦东新区', '奉贤区', '徐汇区', '静安区', '闵行区', '黄浦区', '杨浦区', '虹口区', '普陀区', '闸北区', '长宁区', '崇明区', '卢湾区'],

        ['石家庄市', '唐山市', '保定市', '邯郸市', '邢台市', '河北区', '沧州市', '秦皇岛市', '张家口市', '衡水市', '廊坊市', '承德市'],

        ['温州市', '宁波市', '杭州市', '台州市', '嘉兴市', '金华市', '湖州市', '绍兴市', '舟山市', '丽水市', '衢州市'],

        ['无'],

        ['西安市', '咸阳市', '宝鸡市', '汉中市', '渭南市', '安康市', '榆林市', '商洛市', '延安市', '铜川市'],

        ['长沙市', '邵阳市', '常德市', '衡阳市', '株洲市', '湘潭市', '永州市', '岳阳市', '怀安市', '郴州市', '娄底市', '益阳市', '张家界市', '湘西州'],

        ['江北区', '渝北区', '沙坪坝区', '九龙坡区', '万州区', '永川区', '南岸区', '酉阳县', '北碚区', '涪陵区', '秀山县', '巴南区', '渝中区', '石柱县', '忠县', '合川市', '大渡口区', '开县', '长寿区', '荣昌县', '云阳县', '梁平县', '潼南县', '江津市', '彭水县', '綦江县', '璧山县', '黔江区', '大足县', '巫山县', '巫溪县', '垫江县', '丰都县', '武隆县', '万盛区', '铜梁县', '南川市', '奉节县', '双桥区', '城口县'],

        ['漳州市', '厦门市', '泉州市', '福州市', '莆田市', '宁德市', '三明市', '南平市', '龙岩市'],

        ['和平区', '北辰区', '河北区', '河西区', '西青区', '津南区', '东丽区', '武清区', '宝坻区', '红桥区', '大港区', '汉沽区', '静海县', '塘沽区', '宁河县', '蓟县', '南开区', '河东区'],

        ['昆明市', '红河州', '大理州', '文山州', '德宏州', '曲靖市', '昭通市', '楚雄州', '保山市', '玉溪市', '丽江地区', '临沧地区', '思茅地区', '西双版纳州', '怒江州', '迪庆州'],

        ['成都市', '绵阳市', '广元市', '达州市', '南充市', '德阳市', '广安市', '阿坝州', '巴中市', '遂宁市', '内江市', '凉山州', '攀枝花市', '乐山市', '自贡市', '泸州市', '雅安市', '宜宾市', '资阳市', '眉山市', '甘孜州'],

        ['贵港市', '玉林市', '北海市', '南宁市', '柳州市', '桂林市', '梧州市', '钦州市', '来宾市', '河池市', '百色市', '贺州市', '防城港市'],

        ['芜湖市', '合肥市', '六安市', '宿州市', '阜阳市', '安庆市', '马鞍山市', '蚌埠市', '淮北市', '淮南市', '宣城市', '黄山市', '铜陵市', '亳州市', '池州市', '巢湖市', '滁州市'],

        ['三亚市', '海口市', '琼海市', '文昌市', '东方市', '昌江县', '陵水县', '乐东县', '保亭县', '五指山市', '澄迈县', '万宁市', '儋州市', '临高县', '白沙县', '定安县', '琼中县', '屯昌县'],

        ['南昌市', '赣州市', '上饶市', '吉安市', '九江市', '新余市', '抚州市', '宜春市', '景德镇市', '萍乡市', '鹰潭市'],

        ['武汉市', '宜昌市', '襄樊市', '荆州市', '恩施州', '黄冈市', '孝感市', '十堰市', '咸宁市', '黄石市', '仙桃市', '天门市', '随州市', '荆门市', '潜江市', '鄂州市', '神农架林区'],

        ['太原市', '大同市', '运城市', '长治市', '晋城市', '忻州市', '临汾市', '吕梁市', '晋中市', '阳泉市', '宿州市'],

        ['大连市', '沈阳市', '丹东市', '辽阳市', '葫芦岛市', '锦州市', '朝阳市', '营口市', '鞍山市', '抚顺市', '阜新市', '盘锦市', '本溪市', '铁岭市'],

        ['台北市', '高雄市', '台中市', '新竹市', '基隆市', '台南市', '嘉义市'],

        ['齐齐哈尔市', '哈尔滨市', '大庆市', '佳木斯市', '双鸭山市', '牡丹江市', '鸡西市', '黑河市', '绥化市', '鹤岗市', '伊春市', '大兴安岭地区', '七台河市'],

        ['赤峰市', '包头市', '通辽市', '呼和浩特市', '鄂尔多斯市', '乌海市', '呼伦贝尔市', '兴安盟', '巴彦淖尔盟', '锡林郭勒盟', '阿拉善盟', '大兴安岭地区', '七台河市'],

        ['无'],

        ['贵阳市', '黔东南州', '黔南州', '遵义市', '黔西南州', '毕节地区', '铜仁地区', '安顺市', '六盘水市'],

        ['兰州市', '天水市', '庆阳市', '武威市', '酒泉市', '张掖市', '陇南地区', '白银市', '定西地区', '平凉市', '嘉峪关市', '临夏回族自治州', '金昌市', '甘南州'],

        ['西宁市', '海西州', '海东地区', '海北州', '果洛州', '玉树州', '黄南藏族自治州'],

        ['乌鲁木齐市', '伊犁州', '昌吉州', '石河子市', '哈密地区', '阿克苏地区', '巴音郭楞州', '喀什地区', '塔城地区', '克拉玛依市', '和田地区', '阿勒泰州', '吐鲁番地区', '阿拉尔市', '博尔塔拉州', '五家渠市', '克孜勒苏州', ' 图木舒克市'],

        ['拉萨市', '山南地区', '林芝地区', '日喀则地区', '阿里地区', '昌都地区', '那曲地区'],

        ['吉林市', '长春市', '白山市', '延边州', '白城市', '松原市', '辽源市', '通化市', '四平市'],

        ['银川市', '吴忠市', '中卫市', '石嘴山市', '固原市']
    ];
    var pro = document.getElementById('pro');
    var city = document.getElementById('city');
    var citys = map[pro.value];
    for (var i = 0, len = citys.length, str = ''; i < len; i++) {
        str = str + '<option>' + citys[i] + '</option>';
    }
    city.innerHTML = str;
    }</script>
    </dd>
        <dd class="error"></dd>
    </dl>
    <dl class="clearfix">
        <dt>地址<font>*</font></dt>
        <dd><input class="txt" name="address" id="Company_office_address" maxlength="111" value="" type="text"></dd>
        <dd class="error"></dd>
    </dl>

    <dl class="clearfix">
        <dt>电话<font>*</font></dt>
        <dd><input class="txt" name="phone" id="Company_telephone" maxlength="111" value="" type="text"></dd>
        <dd class="error"></dd>
    </dl>

    <dl class="clearfix">
        <dt>法人姓名<font>*</font></dt>
        <dd><input class="txt" name="legal" id="Company_legal_person_name" maxlength="111" value="" type="text"></dd>
        <dd class="error"></dd>
    </dl>

    <dl class="clearfix">
        <dt>身份证号码<font>*</font></dt>
        <dd><input class="txt" name="id_card" id="Company_legal_person_papers_code" maxlength="111" value="" type="text"></dd>
        <dd class="error"></dd>
    </dl>

    <dl class="clearfix">
        <dt>营业执照<font> </font></dt>
        <dd><input class="txt" name="licence" id="Company_license_valid" value="" type="file"></dd>
        <dd class="error"></dd>
    </dl>


    <div class="btm"><button type="submit" class="bus_btnbg" id="companysubmit">保存并下一步</button></div>
</form></div>
</div>
</div><!-- content -->
    </div>
</div>
<!--网站底部-->
<!--运营商-->
<div class="btm_foot">猫眼电影商家入驻</div>
<!--底部连接-->
</body>
</html>
