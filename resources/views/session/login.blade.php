<x-layout>

    <div class="container">
        <h3 class="text-center">Login</h3>
        <form method="post" action="/login">
            @csrf

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
            <input type="submit" value="Login" name="submit" class="btn btn-dark"/>
        </form>
    </div>


</x-layout>
