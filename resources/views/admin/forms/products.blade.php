<style>
    .imge{
        width:50px;
        height:50px;
        border-radius: 7px;
    }
</style>
<script>
    window.onload = function(){
      setTimeout(() => {
        var myAlert = document.getElementById('myAlert');
        if(myAlert){
          //myAlert.parentNode.removeChild(myAlert);
          myAlert.remove();
        }
      }, 5000);
    }
</script>
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert" id="myAlert">
    <i class="bi bi-check-circle me-1"></i>
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php session()->forget('success');?>
@endif
@extends('dashboard')
@section('content')
    @if(!($categories->isEmpty()))
    <div class="pagetitle">
        <h1>المنتج</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
            <li class="breadcrumb-item">الصفحة</li>
            <li class="breadcrumb-item active">برنامج منتج</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->
    <div class="card">
        <div class="card-body">
        <h5 class="card-title">إضافة منتج</h5>
        <!-- General Form Elements -->
        @if ($type == "product.update")
            <form action="{{route($type,$prod->id)}}" method="POST" enctype="multipart/form-data">
                  @method('PUT')
                  {{$var = "تحديث"}}
         @else
            <form action="{{route($type)}}" method="POST" enctype="multipart/form-data">
                {{$var = "إضافة"}}
        @endif
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">اختر صنف</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" id="category_id" name="category_id">
                        @foreach($categories as $categorie)  
                            <option value="{{$categorie->id}}" selected>{{$categorie->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">اسم المنتج</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value={{$type == "product.update"?$prod->name:""}}>
                </div>
            </div>
            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">معلومات المنتج</label>
                <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" id="description" name="description">{{$type == "product.update"?$prod->description:""}}</textarea>
                </div>
            </div>

             <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">صورة</label>
                <div class="col-sm-10">
                    <input id="image" name="image" class="form-img form-control" type="file" id="formFile">
                    <img class="imge" src={{$type == "product.update"?asset('storage/'.$prod->image):""}} alt="image">
                    @if ($type == "product.update")
                         <input type="hidden" name="old_img" value="{{$prod->image}}">
                    @endif         
                </div>
            </div>

              <div class="row mb-3">
                <label for="price" class="col-sm-2 col-form-label">سعر المنتج</label>
                <div class="col-sm-10">
                     <input type="number" class="form-control" id="price" name="price" value={{$type == "product.update"?$prod->price:""}}>
                </div>
              </div>
               <div class="row mb-3">
                <label for="quantity" class="col-sm-2 col-form-label">الكمية</label>
                <div class="col-sm-10">
                     <input type="quantity" class="form-control" id="price" name="quantity" value={{$type == "product.update"?$prod->quantity:""}}>
                </div>
              </div>

            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">ال{{$var}}</label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">{{$var}}</button>
                </div>
            </div>
        </form><!-- End General Form Elements -->
    </div>
    </div>
    @else
    <div class="alert alert-success">
            <h1>لا يوجد اصناف</h1>
        </div>
    @endif
<script>
   let imgUpload = document.querySelector('.form-img');
    imgUpload.addEventListener('change',function(){
        let imgurl = URL.createObjectURL(this.files[0]);
        let im = document.querySelector('.imge')
         im.src = imgurl;
   });
</script>
@endsection