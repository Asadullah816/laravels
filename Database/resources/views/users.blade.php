<form  action="/users" method="POST">
    @csrf
    <!-- {{method_field("PUT")}} -->
    {{method_field('DELETE')}}
    <input type="text" name="text" placeholder="Name" id=""><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit">Login</button>
</form>