<style>
    table thead tr{
        background-color: rgb(22, 22, 75);
        border-bottom: none;
        color:white;
    }
    table tbody tr{
        
    }
</style>
@extends('dashboard')
@section('content')
 @if(!(empty($cats)))
    <div class="col-12">
        <h1 class="text-success pt-1 fw-bold">الاصناف</h1>
        <div class="card recent-sales overflow-auto">
        <div class="card-body top-selling">
            <table class="table table-borderless">
            <thead>
                <tr>
                <th scope="col">صورة الصنف</th>
                <th scope="col">اسم الصنف</th>
                <th scope="col">الوصف</th>
                <th>تعديل</th>
                <th>حذف</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cats as $cat)
                <tr>
                <td><img style="width: 100px; height:100px; border-radius: 7px;" src={{asset('storage/'.$cat->image)}} alt=""></td>
                <td>{{$cat->name}}</td>
                <td>{{$cat->description}}</td>
                <td><a href="{{route('categorie.edit',$cat->id)}}" class="badge bg-warning text-dark">تعد<i class="bi bi-sm bi-pen"></i>يل</a></td>
                <td>
                    <form action="{{route('categorie.destroy',$cat->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="badge bg-dark"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div><!-- End table news -->
@endif
 @if(!(empty($prods)))
    <div class="col-12">
        <h1 class="text-success pt-1 fw-bold">المنتجات</h1>
        <div class="card recent-sales overflow-auto">
        <div class="card-body top-selling">
            <table class="table table-borderless">
            <thead>
                <tr>
                <th scope="col">صورة المنتج</th>
                <th scope="col">اسم المنتج</th>
                <th scope="col">الوصف</th>
                <th scope="col">السعر</th>
                <th scope="col">الكمية</th>
                <th>تعديل</th>
                <th>حذف</th>
                </tr>
            </thead>
            <tbody>
                @foreach($prods as $prod)
                <tr>
                <td><img style="width: 100px; height:100px; border-radius: 7px;" src={{asset('storage\\'.$prod->image)}} alt="image"></td>
                <td>{{$prod->name}}</td>
                <td>{{$prod->description}}</td>
                <td>{{$prod->price}}</td>
                <td>{{$prod->quantity}}</td>
                <td><a href="{{route('product.edit',$prod->id)}}" class="badge bg-warning text-dark">تعد<i class="bi bi-sm bi-pen"></i>يل</a></td>
                <td>
                    <form action="{{route('product.destroy',$prod->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="badge bg-dark"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div><!-- End table news -->
@endif
@endsection