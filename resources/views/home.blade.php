@include('header', ['current_page' => "home"])

@extends('app')

@section('content')

<style>

#means-home{
    margin-top: 20px;
    margin-bottom: 40px;
}

#means-home img{
    width: 60px;
    margin-left: 30px;
    margin-right: 30px;
}

</style>

<div id="means-home">
    <div class="container">
      <div class="row justify-content-md-center">
        @foreach($means as $mean)
            <div class="col-md-auto">
                <img src='/storage/{{$mean->image}}'>
            </div>
        @endforeach
      </div>
  </div>
</div>

<div class="container-fluid">
    <div class="row">
      <div class="col">
          <div class="box">
              <div class="header-box">
                  Transporter
              </div>
              <div class="parent-box">
                  <div class="child-box left">
                      <a href="/transport/passenger">
                          <div class="infos-box">
                              <div class="img-box">
                                  <img src="/images/tourist.png">
                              </div>
                              <div class="title-blox">
                                  Passager(s)
                              </div>
                              <div class="arrow-box">
                                  <img src="/images/S.png">
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="child-box right">
                      <a href="/transport/merchandise">
                          <div class="infos-box">
                              <div class="img-box">
                                  <img src="/images/stock.png">
                              </div>
                              <div class="title-blox">
                                  Marchandise(s)
                              </div>
                              <div class="arrow-box">
                                  <img src="/images/S.png">
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
      </div>
      <div class="col">
          <div class="box">
              <div class="header-box">
                  Envoyer ou Voyager
              </div>
              <div class="parent-box">
                  <div class="child-box left">
                      <a href="/send">
                          <div class="infos-box">
                              <div class="img-box">
                                  <img src="/images/stock.png">
                              </div>
                              <div class="title-blox">
                                  Envoyer [marchandise(s)]
                              </div>
                              <div class="arrow-box">
                                  <img src="/images/S.png">
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="child-box right">
                      <a href="/travel">
                          <div class="infos-box">
                              <div class="img-box">
                                  <img src="/images/tourist.png">
                              </div>
                              <div class="title-blox">
                                  Voyager
                              </div>
                              <div class="arrow-box">
                                  <img src="/images/S.png">
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection

<style>

@media (min-width: 1200px) {
    .container-fluid{
        max-width: 90%;
    }
}

.infos-box{
    text-align: center;
    display: block;
}

.header-box {
    background-color: #B6D7A8;
    color: white;
    height: 80px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 25px;
    font-weight: bold;
    border: 5px solid #93c47d;
    border-radius: 20px 20px 0px 0px;
}

.parent-box {
    position: relative;
}

.child-box {
    position: absolute;
    width: 48%;
    border-radius: 0px 0px 50px 50px;
    font-size: 25px;
    font-weight: bold;
}

.right {
    background-color: #B6D7A8;
    border: 5px solid #93c47d;
    border-top: none;
    right: 0;
    color: #93c47d;
}

.left {
    border: 5px solid #D9D9D9;
    border-top: none;
    color: #D9D9D9;
}

.img-box{
    margin-top: 25px;
    margin-bottom: 25px;
}

.arrow-box{
    margin-top: 25px;
    margin-bottom: 25px;
}

.title-box{
    margin-top: 50px;
}

.img-box img{
    height: 120px;
    width: 120px;
}

.arrow-box img{
    height: 50px;
    width: 50px;
}

</style>
