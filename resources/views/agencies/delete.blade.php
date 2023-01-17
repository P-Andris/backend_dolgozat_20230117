@foreach ($agencies as $agency)
    <form action="/api/agencies/{{$agency->agency_id}}" method="POST">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <div class="form-group">
            <input type="submit" value="{{$agency->name}}">
        </div>
    </form>
@endforeach