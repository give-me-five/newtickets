<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hall;
use Illuminate\Validation\Rule;
use  zgldh\QiniuStorage\QiniuFilesystemServiceProvider;



class HallController extends Controller
{
	//加载影厅信息
    public function index(request $request)
	{
		//获取登录用户的id
		$id=session('adminuser')->id;
		//获取登录者对应的影厅sid
		$hall=Hall::where("cid",$id)->paginate(6);
		//判断并封装搜索条
		return view("shop.hall.index",compact("hall"));
	}
	//添加影厅
	public function create()
	{
		//加载添加影厅视图页面
		return view('shop.hall.create');
	}
	//执行添加
	public function store(request $request)
	{

	//`	$file = $request->file('ufile');
		//var_dump($file);


//		//$file = $request->file('picname');
//		$filename = $file->getClientOriginalName().time().rand().$file->getClientOriginalExtension();
//		$disk = \Storage::disk('qiniu');
//
//		$bool = $disk->put('img/'.$filename,file_get_contents($file->getRealPath()));
//			//上传到七牛
//			//$bool = $disk->put('iwanli/image_'.$filename,file_get_contents($file->getRealPath()));
//		//$disk->getDriver()->downloadUrl($filename);            //获取下载地址
//		if($bool){
//			echo '上传成功';
//			echo '<br>'.env('QINIU_URL').'/img/'.$filename;
//
//			$realpath = env('QINIU_URL').'/img/'.$filename;
//		}else{
//			echo  '上传失败';
//		}


		$cid=session('adminuser')->id;
		$this->validate($request, [
            'title' => Rule::unique('hall')->where("cid",$cid),
        ]);

		//获取要添加的数据
		$title=$request->input("title");
		$number=$request->input("number");
		$layout=$request->input("layout");
		//执行添加
		$id=Hall::insertGetId(
			["cid"=>$cid,"title"=>$title,"number"=>$number,"layout"=>$layout]
		);
		//添加判断
		if($id>0){
			$info = "影厅添加成功！";
		}else{
			$info = "影厅添加失败！";
		}
		return redirect("shop/hall")->with("err",$info);

	}

	public function edit(request $request,$id)
	{
		$list=Hall::where('id',$id)->first();
		return view('shop.hall.edit',["vo"=>$list]);
	}

	 public function update(Request $request, $id)
    {
        //获取影厅名称
        $title=$request->input("title");
       
        //获取影厅座位数量
        $number=$request->input("number");
       
        //获取影厅布局
        $layout=$request->input("layout");
        $hall = Hall::where("id",$id)->update(
            ['title'=>$title,"number"=>$number,"layout"=>$layout]
            );
		
       //添加判断
		if($hall>0){
            $info = "影厅修改成功！";
        }else{
            $info = "影厅修改失败！";
        }
        return redirect("shop/hall")->with("err",$info);
    }
}

