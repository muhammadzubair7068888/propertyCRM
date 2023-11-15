<form action="{{ route('admin.sms') }}" method="post">
    @csrf
    <input type="text" name="number" placeholder="p number">
    <input type="text" name="message" placeholder="message">
    <br />
    <br />
    <input type="submit" value="Send SMS" />
</form>
