@inject('query', 'App\Http\Services\Quiz')
@extends('backend.layouts.default')

@section('page_title', 'Nilai Siswa')

@section('style')
@stop

@section('content')

    @if( ! Auth::user()->can('manage_user'))
        @include('errors.401')
    @else        
        <div class="x_panel">
            <div class="x_title">
                <h2>
                    Daftar Nilai Siswa
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
                                <th>Bahasan</th>
                                <th>Jumlah Soal</th>
                                <th>Benar</th>
                                <th>Salah</th>
                                <th>Nilai</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $row)
                            @php
                                $totalSoal = $query->getTotalSoal($row->quiz_id);
                                $jawabanBenar = $query->getJawabanBenar($row->email,$row->quiz_id);
                                $jawabanSalah = $totalSoal - $jawabanBenar;

                                $totalNilai = 100;
                                $nilaiPerSoal = $totalNilai / $totalSoal ;
                                $nilaiYour = $jawabanBenar * $nilaiPerSoal;
                                $isRepeat = $nilaiYour >70 ? false : true;
                            @endphp
                            <tr>
                                <td>{{ (($data->currentPage() - 1 ) * $data->perPage() ) + $loop->iteration }}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->asal}}</td>
                                <td>{{$row->type}}</td>
                                <td align="center">{{$totalSoal}}</td>
                                <td align="center">{{$jawabanBenar}}</td>
                                <td align="center">{{$jawabanSalah}}</td>
                                <td align="center"><strong>{{$nilaiYour}}</strong></td>
                                <td align="center">
                                    @if ($isRepeat)
                                        <span class="badge badge-pill badge-danger">Mengulang</span>
                                    @else 
                                        <span class="badge badge-pill badge-primary">Berhasil</span>

                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('nilai.detail', ['siswa'=>$row->email,'type'=>$row->quiz_id]) }}" 
                                            class="btn btn-sm btn-info action_btn" 
                                            style="margin-right: 3px;">Detail</a>
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