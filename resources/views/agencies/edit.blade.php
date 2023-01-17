<form action="/api/agencies/{{$agencies->agency_id}}" method="POST">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="country" placeholder="Country">
    <input type="submit" value="Submit">
</form>