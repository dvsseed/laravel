{{-- $todo --}}

@foreach ($todos as $todo)
    <p>{{ $todo->id . '.' . $todo->title }}</p>
@endforeach

<form action="/todo" method="POST">
    {{ csrf_field() }}
    <input type="text" placeholder="請輸入東西" name="title" />
    <input type="submit">
</form>