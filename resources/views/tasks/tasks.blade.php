<x-layout>
    <div class="container">

        <div><h2>To do TASKS</h2></div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Time created at</th>
                <th scope="col">Category</th>
            </tr>
            </thead>

            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->created_at }}</td>
                    <td>{{ $task->category->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="/tasks/create" role="button">New Task</a>
    </div>

</x-layout>



