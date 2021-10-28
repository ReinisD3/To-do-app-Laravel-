<x-layout>

    <div class="container">
        <h3 class="text-center">Create Task</h3>
        <form method="post" action="/tasks/store">
            @csrf

            <label for="title" class="form-label"> Title : </label>
            <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"/>
            @error('title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <label for="category_id">Task Category : </label><br>
            <select id="category_id" name="category_id">
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>

                @endforeach
            </select><br>
            @error('category')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input type="submit" value="Save" name="submit" class="btn btn-dark"/>
        </form>
    </div>


</x-layout>
