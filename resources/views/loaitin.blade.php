@extends('layout')

@section('tieudetrang')
    @if ($loaitin)
            {{ $loaitin->ten }}
        @else
            Không tôn tại loại tin này
    @endif
@endsection

@section('noidung')
    @if ($loaitin)
    <div class="bg-light p-4 rounded">
        <div class="news-2">
            <h3 class="mb-4">{{ $loaitin->ten }}</h3>
        </div>
        @foreach ($list_lt as $list_lt)
        <div class="row g-4 align-items-center my-4">
            <div class="col-md-3">
                <div class="rounded overflow-hidden">
                    <img src="/img/news-2.jpg" class="img-fluid rounded img-zoomin w-100" alt="">
                </div>
            </div>
            <div class="col-md-9">
                <div class="d-flex flex-column">
                    <a href="{{ url('/detail', [$list_lt->id]) }}" class="h3">{{$list_lt->tieuDe}}</a>
                    <p class="mb-0 fs-5"><i class="fas fa-calendar-alt me-1"> {{$list_lt->ngayDang}}</i> <i class="fa fa-eye"> {{$list_lt->xem}} Lượt xem</i></p>
                    <p>{{$list_lt->tomTat}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
        <p>Không tồn tại loại tin này</p>
    @endif
@endsection