
<x-app-layout>

    <h1>la vista de usuarios saldra en este campo</h1>

    <a href="/create"> Nuevo Post </a>

    <ul>    
        @foreach ($usu as $item)
         <li>
            <a href="/user1/{{$item->id}}">
                {{$item->nombre_usuario}}
            </a>
         </li>
       
        @endforeach
    </ul>    



</x-app-layout>

