<x-layout>
    <div class="note-controller">
        <a href="{{ route('note.create') }}" class="new-note-btn">
            New Note
        </a>
    </div>

    <div class="notes">
        @foreach ($notes as $note)
            <div class="note">
                <div class="note-body">
                    <h2>Note Title</h2>
                    <p>{{ Str::words($note->note, 30) }}</p>
                </div>
                <div class="note-buttons">
                    <a href="{{ route('note.show', $note) }}" class="note-edit-btn">View</a>
                    <a href="{{ route('note.edit', $note) }}" class="note-edit-btn">Edit</a>
                    <button class="note-delete-button">Delete</button>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
