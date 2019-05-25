@extends('layout.app')

@section('content')
<h1>Contact</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, autem! Eos hic, laboriosam consequuntur cumque, corporis dicta quo beatae, quis fugiat unde ab ducimus nam natus officia quasi aliquam? Officia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat nulla, accusamus facilis officiis soluta quam unde sit dolorum necessitatibus! Harum quisquam laboriosam sit magni expedita quibusdam consequuntur hic neque nesciunt.</p>

{{ Form::open(['url' => 'contact/submit']) }}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your full name'])}}
        </div>

        <div class="form-group">
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'example@gmail.com'])}}
        </div>

        <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter your message'])}}
        </div>

        <div>
        {{ Form::submit('Submit', ['class' => 'btn btn-primary btn-block'])}}
        </div>
{{ Form::close() }}


@endsection
