<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use zgldh\QiniuStorage\QiniuStorage;
class UploadController extends Controller
{

	public function index()
	{
		return view('home.upload');
	}

    public function uploads(Request $request)
    {
    	if($request->hasFile('pic')){
    		$file = $request->file('pic');

    		$disk = QiniuStorage::disk('qiniu');

    		$filename = md5($file->getClientOriginalName().time().rand()).'.'.$file->getClientOriginalExtension();

    		$bool = $disk->put('uploads/img_'.$filename,file_get_contents($file->getRealPath()));

    		if($bool){
    			$path = $disk->downloadUrl('uploads/img_'.$filename);
    			return '上传成功,图片地址：'.$path;
    		}
    		return '上传失败！';
    	}
    	return '没有文件';
    }
}
