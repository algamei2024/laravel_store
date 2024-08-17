<style>
    .row{
       margin-top: 70px !important;
       margin-right: 30px !important;
       margin-left: 30px !important;
    }
    .mb-3{
        padding-bottom:10px;
    }
    .fade{
        display: none;
        position: absolute !important;
        right:0%;
        top:30%;
    }
    .col-md-4{
      text-align: center;
    }
    .name-p{
      border: 2px solid;
      border-radius: 34px;
      padding: 10px;
      text-align: center;
    }
    .name-p:hover{
      background-color: orange;
      border-color: transparent;
      color:white;
    }
</style>
@section('main')
 @guest
 @if (Route::has('login'))
      <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
  @endif

  @if (Route::has('register'))
      <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
      </li>
  @endif
@else
<div class="row">
    <div class="col-lg-4">
        <div class="card-body">
            <h2 class="card-title">الفئات</h2>
            <!-- Default List group -->
            <ul class="list-group">
                @foreach ($cats as $cat)
                <li class="list-group-item" align=center><a href="#">{{$cat->name}}</a></li>   
                @endforeach
            </ul><!-- End Default List group -->
        </div>
    </div>
    <div class="col-lg-8">
        @foreach ($prods as $prod)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src={{asset("project/$prod->image")}} class="img-fluid rounded-start" alt="...">
                    <h1>الصنف: <span>{{$prod->proudct_id}}</span></h1>
                </div>
                <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title name-p">اسم المنتج: {{$prod->name}}</h5>
                            <h5 class="card-title">القسم <span>{{$prod->id}}</span></h5>
                            <h4 style="background-color:tomato;border-radius:10px;color:white;">العام الدراسي: <span>{{$prod->name}}</span></h4>
                            <h4>الطلاب</h4>
                            <p class="card-text">{{$prod->price}}$</p>
                        </div>
                        <button type="button" class="btn btn-light rounded-pill btn-show">عرض <span><i class="ri-eye-off-fill"></i></span></button>
                        <!--show-->
                          <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <h2>{{$prod->name}}</h2>
                                <p>{{$prod->description}}</p>
                                <hr>
                                <p class="mb-0">  سعر المنتج: {{$prod->price}}</p>
                                <button type="button" class="btn-close" aria-label="Close"></button>
                           </div>
                        {{-- <!---->
                        <a class="btn btn-secondary rounded-pill" href={{asset("project/$project->pdf")}} >تنزيل ملف pdf
                            <i class="bi bi-arrow-down"></i>
                        </a> --}}
                </div>
            </div>
          </div>
          @endforeach
    </div>
</div>
<script>
const targetElements = document.querySelectorAll('.btn-show');

targetElements.forEach(element => {
  element.addEventListener('click', () => {
    const nextElement = element.nextElementSibling;
    if (nextElement) {
      nextElement.style.display = 'block';
       const closeButton = nextElement.querySelector('.btn-close');
      if (closeButton) {
        closeButton.addEventListener('click', () => {
          nextElement.style.display = 'none';
        });
      }
    }
  });
});

</script>
@endguest
@endsection