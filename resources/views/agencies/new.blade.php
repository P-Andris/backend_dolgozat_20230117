<form action="/api/agencies" method="POST">
    {{csrf_field()}}
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="country" placeholder="Country">
    <input type="submit" value="Submit">
</form>