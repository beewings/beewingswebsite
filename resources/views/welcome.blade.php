  @extends ('master.master')
  
  @section ('head.title')
    HOME

  @stop
  @section ('head.css')
  <link rel="stylesheet" href="/css/app.css">

  @stop

@section ('body.header')
  @include('partials.navbar')
@stop
@section ('body.content')
  <div class="content">
    <div class="container" id="bannhac">
      <h1><b>DICH VU AM NHAC</b></h1>
      <div class="row">
        <div class="col">
          <div class="button">
            <a href="" class="btn btn-one"> BAND NHAC </a>
            <a href="" class="btn btn-one"> SINGER </a>
          </div>
          
        </div>
      </div>
    </div>
    
  </div>
  <div class="content2">
    <div class="container" id="gioithieu">
      <h2> BAN MUON CHUONG TRINH CUA MINH THEM SOI DONG</h2>
    </div>
    <div class="container" id="gioithieu2">
      <p>Beewings Viet Nam &reg; chung toi cung cap cac band nhac, ca si phuc vu cho cac chuong trinh even, gala dinner, khai chuong cua hang, to chuc su kien gioi thieu san pham. Chung toi se lua chon nhung band nhac ca si phu hop nhat voi chuong trinh cua quy khach </p>
    </div>
    <div class="container" id="gioithieu3">
      <div class="anh1">
        <img src="/img/Picture1.png" alt="" style="width: 350px; height: 350px;" class="img1">
        <div class="dinhnghia1">
          <p>Band nhac Jazzgrody<br>thuoc team my linh a quan chuong trinh band nhac viet 2017</p>
        </div>
      </div>
    
      <div class="anh2">
        <img src="/img/Picture2.jpg" alt="" style="width: 350px; height: 350px;">
        <div class="dinhnghia2">
          <p>Band nhac Bicycle<br>Band nhac chuyen nghiep full man</p>
        </div>
      </div>
      <div class="anh3">
        <img src="/img/Picture3.jpg" alt="" style="width: 350px; height: 350px;">
      </div>
    </div>
  </div>


@stop

@section('body.footer')
  @include('partials.footer')
@stop