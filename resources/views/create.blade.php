@extends("layout.app")

@section ("title")
    Блог
@endsection

@section ("content")
    <div class="text-center">

        <h3>Создать новую статью</h3>

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

            @if (!session('success'))
                <form action="{{ route('addtopic') }}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group">
                        <label for="title">Введите имя автора</label>
                        <input type="text" name="autor" placeholder="Имя" value="{{old('autor')}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Введите название</label>
                        <input type="text" name="title" placeholder="Название" value="{{old('title')}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="message">Текст статьи</label>
                        <textarea  placeholder="Текст статьи" name="message"  class="form-control">{{old('message')}}</textarea>
                    </div>




                    <button type="submit" class="btn btn-primary navbar-inverse mt-3" >Опубликовать</button>
                </form>

            @endif

        </div>



    </div>
@endsection

