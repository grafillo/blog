@extends("layout.app")

@section ("title")
    Блог
@endsection

@section ("content")
    <div class="text-left">


            <div class="alert-secondary"><h4>{{$content->title}}</h4>  </div>
            <div> {{$content->description}} </div>
            <div class="text-right text-success"> Автор:{{$content->name}} </div>

        <div class="alert-warning">Комментарии</div>
        @foreach($content->Comments as $comments)
        <div class="text-right">{{$comments->comment}}</div>
            <div class="text-right">{{$comments->name}}</div>
            <hr>
        @endforeach

        <div class="alert-info">Оставить комментарий:</div>

        @if ($errors->any())
            <div class="alert alert-warning">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>

            </div>
        @endif

        <div class="container" >

            @if (session('success'))

                <div class="alert alert-success">
                    {{session('success')}}

                </div>
            @endif

            <form action="{{ route('addComment') }}" method="post">

                @csrf
                <input type="hidden" name="id" value="{{$content->id}}">
                <div class="form-group">
                    <label for="title">Введите имя</label>
                    <input type="text" name="autor" placeholder="Имя" value="{{old('autor')}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="title">Введите комментарий</label>
                    <textarea  name="comment" value="{{old('comment')}}" class="form-control"></textarea>
                 </div>

                <button type="submit" class="btn btn-primary navbar-inverse mt-3" >Опубликовать</button>
            </form>

    </div>
@endsection

