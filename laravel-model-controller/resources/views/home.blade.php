@foreach ($movies as $item)
    <div>
        <h2>{{$item['title']}}</h2>
        <p>{{$item['vote']}}</p>
    </div>
@endforeach
