<x-layout title="Login">
    <h1>Login</h1>
    <form action="" method="post">
        Username:<input type="text" name="username" value="{{old('username')}}"><br>
        Password:<input type="password" name="password"><br>
        <input type="submit">
    </form>
</x-layout>