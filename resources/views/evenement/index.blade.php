@foreach($events as $event)
    <a href="{{ route('events.show', ['id' => $event->id]) }}">{{ $event->title }}</a>
@endforeach
