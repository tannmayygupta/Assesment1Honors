@extends('layouts/layout')


@section('content')

<h1> My Todos </h1>

<table>
    <tr>  
        <th> # </th>  

        <th> Title  </th>

        <th> Due Date </th>

        <th> Is Completed  </th>

    </tr>

    {{-- for se karne hai ye foreach wale ko --}}

    @for($i = 0 ; $i <count($todos) ; $i++)
    <tr>
        <td>{{$i+1}}</td>
        <td>{{$todos[$i]["description"] }}</td>

        <td>
            @if($todos[$i]["due_date"])
                {{date('jS M Y',strtotime($todos[$i]["due_date"]))}}
            @else
                --
            @endif
        </td>

        <td>
            @if($todos[$i]["is_completed"])
                Yes
            @else
                No
            @endif
        </td>

    </tr>
    @endfor 

    {{-- @foreach ($todos as $index => $row)
    <tr>
        <td>{{$index+1}}</td>
        <td>{{$row["description"] }}</td>

        <td>
            @if($row["due_date"])
                {{date('jS M Y',strtotime($row["due_date"]))}}
            @else
                --
            @endif
        </td>

        <td>
            @if($row["is_completed"])
                Yes
            @else
                No
            @endif
        </td>

    </tr>
    @endforeach ?> --}}
    
</table>

</main>
@endsection


