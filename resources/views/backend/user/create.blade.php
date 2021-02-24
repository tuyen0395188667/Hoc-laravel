<h2>User Form</h2>

<style>
    input{
        margin-bottom: 10px;
    }
</style>
<form action="{{ route('backend1.user.update') }}" method="post">
    @method('put')
    @csrf  <!-- TokenKey của phương thức post -->
    <input type="text" name="fullname" placeholder="Your fullname">
    <br>
    <input type="email" name="email" placeholder="Your email">
    <br>
    <input type="password" name="password" placeholder="Your password">
    <br>
    <button type="submit">Register</button>
</form>