@inject('query', 'App\Http\Services\Quiz')
@extends('backend.layouts.default')

@section('page_title', 'Listing Progress')

@section('style')
<style>
    .progress {
  width: 150px;
  height: 150px !important;
  float: left; 
  line-height: 150px;
  background: none;
  margin: 20px;
  box-shadow: none;
  position: relative;
}
.progress:after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 12px solid #fff;
  position: absolute;
  top: 0;
  left: 0;
}
.progress>span {
  width: 50%;
  height: 100%;
  overflow: hidden;
  position: absolute;
  top: 0;
  z-index: 1;
}
.progress .progress-left {
  left: 0;
}
.progress .progress-bar {
  width: 100%;
  height: 100%;
  background: none;
  border-width: 12px;
  border-style: solid;
  position: absolute;
  top: 0;
}
.progress .progress-left .progress-bar {
  left: 100%;
  border-top-right-radius: 80px;
  border-bottom-right-radius: 80px;
  border-left: 0;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.progress .progress-right {
  right: 0;
}
.progress .progress-right .progress-bar {
  left: -100%;
  border-top-left-radius: 80px;
  border-bottom-left-radius: 80px;
  border-right: 0;
  -webkit-transform-origin: center right;
  transform-origin: center right;
  animation: loading-1 1.8s linear forwards;
}
.progress .progress-value {
  width: 90%;
  height: 90%;
  border-radius: 50%;
  background: #000;
  font-size: 24px;
  color: #fff;
  line-height: 135px;
  text-align: center;
  position: absolute;
  top: 5%;
  left: 5%;
}
.progress.blue .progress-bar {
  border-color: #049dff;
}
.progress.blue .progress-left .progress-bar {
  animation: loading-2 1.5s linear forwards 1.8s;
}
.progress.yellow .progress-bar {
  border-color: #fdba04;
}
.progress.yellow .progress-right .progress-bar {
  animation: loading-3 1.8s linear forwards;
}
.progress.yellow .progress-left .progress-bar {
  animation: none;
}
@keyframes loading-1 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
  }
}
@keyframes loading-2 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(144deg);
    transform: rotate(144deg);
  }
}
@keyframes loading-3 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(135deg);
    transform: rotate(135deg);
  }
}
</style>
@stop

@section('content')

    @if( ! Auth::user()->can('manage_user'))
        @include('errors.401')
    @else        
        <div class="x_panel">
            <div class="x_title">
                <h2>
                    Daftar Progress Siswa
                </h2>

                <div class="col-md-6 col-sm-6 col-md-offset-1">
                    <form method="GET" action="{{ url()->current() }}">
                        <div class="input-group">
                            <input type="text" name="keyword"
                              value="{{request('keyword')}}" placeholder="Cari nama /  asal siswa" class="form-control">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-info">Cari</button>
                            </span>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Asal</th>
                                <th>Progress Materi</th>
                                <th style="width: 20%">Persentase</th>
                            </tr>
                        </thead>

                        <tbody>
                           @foreach ($data as $row)
                             @php
                                 $progress = $query->openMateri($row->user_id);
                                 $progressDone = $query->openMateriDone($row->user_id);
                                 $persentase = 0.0;
                                 $donePersen = 100;
                                 if ($progress->count()>0) {
                                    $perSatuan = $donePersen / $progress->count();
                                    $persentase = $progressDone->count() * $perSatuan;
                                 }
                             @endphp
                               <tr>
                                 <td>{{ (($data->currentPage() - 1 ) * $data->perPage() ) + $loop->iteration }}</td>
                                 <td>{{$row->user->name}}</td>
                                 <td>{{$row->user->asal}}</td>
                                 <td>
                                    @foreach ($progress as $item)
                                        <li>{{$item->materi_code}} 
                                            @if ($item->status==1)
                                                <span class="badge badge-pill badge-success">Selesai</span>
                                            @else 
                                                <span class="badge badge-pill badge-warning">Belum Selesai</span>
                                            @endif
                                        </li>
                                    @endforeach
                                 </td>
                                 <td align="center">
                                    <div class="progress blue">
                                        <span class="progress-left">
                                                          <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                                          <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">{{number_format($persentase,2)}}%</div>
                                      </div>
                                 </td>
                               </tr>
                           @endforeach
                        </tbody>

                    </table>

                    <div>Showing
                        {{ ($data->currentpage()-1) * $data->perpage()+1}} to
                        {{(($data->currentpage()-1) * $data->perpage())+$data->count()}} of
                        {{$data->total()}} records
                    </div>

                    {{ $data->links() }} 
                </div>

            </div>
        </div>
    @endif

@stop