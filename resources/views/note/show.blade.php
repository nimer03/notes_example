<div>
    <h1>show</h1>
    <p>{{ $note->note }}</p>
    <a href="{{ route('note.edit', $note->id) }}">edit</a>
</div>
