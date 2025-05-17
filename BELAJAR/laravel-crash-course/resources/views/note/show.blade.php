<x-layout>
    <div class="note-container single-note">
        <div class="note-header">
            <h1>Note: {{ $note->created_at }}</h1>
            <div class="note-buttons">
                <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                <button class="note-delete-button">Delete</button>
            </div>
        </div>
        <div class="note">
            <div class="note-body">
                {{ $note->note }}
            </div>
        </div>
        <div class="note-buttons">
            <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a> <button
                class="note-submit-button">Submit</button>
        </div>
    </div>
</x-layout>
