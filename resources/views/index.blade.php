@extends("layout.app")

@section ("title")
    Блог
@endsection

@section ("content")
    <div class="text-left">

        @foreach($content as $cont)
            <div class="alert-secondary"><a href="{{route('viewPost',$cont->id)}}"><h4>{{$cont->title}}</h4></a></div>
            <div> {{$cont->description}} </div>
            <div class="text-right text-success"> Автор:<a  class="text-success" href="{{route('autors',$cont->id)}}">{{$cont->name}}</a></div>
            @endforeach

    </div>

    <div class="d-flex justify-content-center ">

        {{$content->links()}}

    </div>
@endsection
