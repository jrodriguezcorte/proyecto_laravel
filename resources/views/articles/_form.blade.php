
   {{-- {!! Form::hidden('user_id', 1) !!} --}}

    <div class="form-group">
       {!! Form::label('title', 'Title') !!}
        {{-- segundo campo (null) valor por defecto --}}
        {{-- admite parametros adicionales --}}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body') !!}
        {{-- segundo campo (null) valor por defecto --}}
        {{-- admite parametros adicionales --}}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>
   <div class="form-group">
       {!! Form::label('tag_list', 'Tags') !!}
       {{-- segundo campo (null) valor por defecto --}}
       {{-- admite parametros adicionales --}}
       {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list','class' => 'form-control','multiple']) !!}
   </div>
    <div class="form-group">
        {!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
        </div>

   @section('footer')
    <script>
        $( document ).ready(function() {
            $('#tag_list').select2();
        });
    </script>
   @endsection