<x-layout>
    <div class="note-container single-note">
        <h1>Create new note</h1>
        <form action="{{ route('note.update', $note) }}" method="POST" class="note">
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here">{{ $note->note }}</textarea>
            <div class="note-buttons">
                I
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a> <button
                    class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>
