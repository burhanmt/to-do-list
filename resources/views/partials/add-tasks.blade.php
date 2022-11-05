<form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <input
            type="text"
            class="form-control"
            name="name"
            placeholder="Insert task name"
    >
    <div class="d-grid mt-3">
        <button
                type="submit"
                class="btn btn-sm btn-primary"
        >
            Add
        </button>
        @if($errors->any())
            <div class="text-danger text-sm">
                {!! implode('', $errors->all('<div>:message</div>')) !!}
            </div>
        @endif
    </div>
</form>
