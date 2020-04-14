@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<div class="row">
    <div class="col-6">
        {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
            <div class="form-group">
                {!! Form::label('status', 'ステータス:') !!}
                {!! Form::text('status', 'To do', ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('content', '次にやること:') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
    
            {!! Form::submit('追加', ['class' => 'btn btn-warning']) !!}
    
        {!! Form::close() !!}
    </div>
</div>
    
@endsection
