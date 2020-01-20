<form action="/mailer" method ="post">
<input type="text" name="text">

<input type="submit" name="submit">

{{csrf_field()}}

</form>
