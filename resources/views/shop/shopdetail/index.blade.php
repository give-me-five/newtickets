@extends('shop.base')
	@section('content')

		  <div class="list-group">
		  <a href="#" class="text-center list-group-item disabled">
		  {{$shopdetail->name}}
		  </a>
		  <p class="text-center list-group-item">{{$shopdetail->shopname}}</p>
		  <p class="text-center list-group-item">{{$shopdetail->phone}}</p>
		  <p class="text-center list-group-item">{{$shopdetail->legal}}</p>
		  <p class="text-center list-group-item">{{$shopdetail->id_card}}</p>
		  <p class="text-center list-group-item">{{$shopdetail->city}}</p>
		  <p class="text-center list-group-item">{{$shopdetail->region}}</p>
		  <p class="text-center list-group-item">{{$shopdetail->address}}</p>
		  <p class="text-center list-group-item">{{$shopdetail->licence}}</p>
		  <p class="text-center list-group-item">{{$shopdetail->status}}</p>
		  <p class="text-center list-group-item">{{$shopdetail->addtime}}</p>
		  <p class="text-center "><a href="{{url('shop/shopdetail')}}/{{$shopdetail->id}}/edit">修改</a></p>
		  
		 
@endsection