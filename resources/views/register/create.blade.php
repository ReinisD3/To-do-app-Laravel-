<x-layout>

    <div class="container">
        <h3 class="text-center">Register</h3>
        <form method="post" action="register">
            @csrf
            <label for="name" class="form-label"> Name : </label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}"/>
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <label for="email" class="form-label"> E-mail : </label>
            <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}"/>
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <label for="password" class="form-label"> Password : </label>
            <input type="password" class="form-control" name="password" id="password"/>
            @error('password')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input type="submit" value="Register" name="submit" class="btn btn-dark"/>
        </form>
    </div>


</x-layout>
