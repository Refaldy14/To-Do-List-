<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">

<div class="container">
    <h1 class="mb-4">To-Do List</h1>

    
    <!-- Form Tambah task baru -->
    <form action="{{ route('tasks.store') }}" method="POST" class="d-flex mb-4">
        @csrf
        <input type="text" name="title" class="form-control me-2" placeholder="Add new task" required>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>

    <!-- Daftar Tugas -->
    <ul class="list-group">
        @if($tasks->isEmpty())
            <li class="list-group-item text-center text-muted">there are no assignment yet</li>
        @else
            @foreach ($tasks as $task)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <form action="{{ route('tasks.update', $task) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-sm {{ $task->is_done ? 'btn-success' : 'btn-outline-success' }}">
                            {{ $task->is_done ? '✓' : 'Done' }}
                        </button>
                    </form>

                    <!-- Judul Tugas -->
                    <span class="{{ $task->is_done ? 'text-decoration-line-through text-muted' : '' }}">
                        {{ $task->title }}
                    </span>
                    
                    <!-- Tombol Edit -->
                    <div class="d-flex gap-2">
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                    </div>
                </li>
            @endforeach
        @endif
    </ul>
</div>
</body>
</html>
