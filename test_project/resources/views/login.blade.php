<h1>Here is a login page</h1>
<form action="/login" method="POST">
    @csrf
    <input type="text" name="text" placeholder="Name">
    <input type="password" name="password" placeholder="password">
    <button type="submit">Login </button>
</form>