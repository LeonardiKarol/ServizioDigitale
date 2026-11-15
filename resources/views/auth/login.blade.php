<x-layout title="Login">
    <h1>Login</h1>
<form action="{{ route('login') }}" method="POST">
        @csrf
        Username:<input type="text" name="username" value="{{old('username')}}"><br>
        @error('username')
            <p>{{ $message }}</p>

        @enderror
        Password:<input type="password" name="password"><br>
        @error('password')
                <p>{{ $message }}</p>

        @enderror
        <input type="submit">
    </form>
</x-layout>