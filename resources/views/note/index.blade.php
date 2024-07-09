<div>
    <h1>index</h1>
    @foreach ($notes as $note)
        <li>{{Str::limit($note->note, 100, '...')}}</li>
        <a href="{{ route('note.show', $note->id) }}">show</a>
        <a href="{{ route('note.edit', $note->id) }}">edit</a>
    @endforeach
</div>
