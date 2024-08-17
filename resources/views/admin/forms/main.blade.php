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
@if(false)
<div class="alert alert-success alert-dismissible fade show" role="alert" id="myAlert">
    <i class="bi bi-check-circle me-1"></i>
    {{$succ}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php session()->forget('success');?>
@endif
@extends('dashboard')
@section('content')
    {{-- @if(!($programs->isEmpty())) --}}
    <div class="pagetitle">
        <h1>بيانات المتجر</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
            <li class="breadcrumb-item">الصفحة</li>
            <li class="breadcrumb-item active">برنامج متجر</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->
    <div class="card">
        <div class="card-body">
        <h5 class="card-title">بيانات المتجر</h5>
        <!-- General Form Elements -->
        <form action="{{route('info.update',$info->id)}}" method="POST" enctype="multipart/form-data">
            @method("PUT")
            @csrf
            <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">اسم المتجر</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{$info->name}}">
            </div>
            </div>
            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">معلومات المتجر</label>
                <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" id="description" name="description">{{$info->description}}</textarea>
                </div>
            </div>

             <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">شعار المتجر</label>
                <div class="col-sm-10">
                    <input id="logo" name="logo" class="form-control" type="file" id="formFile" vlaue="{{$info->logo}}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">الايميل</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="{{$info->email}}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="phone" class="col-sm-2 col-form-label">رقم الهاتف</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" name="phone" value="{{$info->phone}}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="color" class="col-sm-2 col-form-label">اللون</label>
                <div class="col-sm-10">
                    <input type="color" class="form-control" id="color" name="color" value="{{$info->color}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="map" class="col-sm-2 col-form-label">موقع المتجر على الخريطه</label>
                <div class="col-sm-10">
                    <input type="url" class="form-control" id="map" name="map" value="{{$info->map}}">
                </div>
            </div>

            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">التعديل</label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">تعديل</button>
                </div>
            </div>
        </form><!-- End General Form Elements -->
    </div>
    </div>
    {{-- @else
    <div class="alert alert-success">
            <h1>يجب اولاً ان يكون لديك برنامج لكي تعمل برنامج</h1>
        </div>
    @endif --}}
@endsection