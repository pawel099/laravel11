<form action="{{route('dane')}}" method="POST" >
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">post</label>
    <input type="text" name="names" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
     
  </div>
  <div class="form-group">
     
    
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea name="contents" class="form-control" id="content" rows="3"></textarea>

    <button type="submit">wyslij</button>



  </div>
</form>

<table>

  <tr>

   @foreach ($product as $products )

   <td><h1>tytuł posta {{$products->names}}</h1></td>
   <td>tresc {{$products->contents}}</h1></td><td><form action="{{route('delete',$products->id)}}" method="POST">
@csrf
  
    <input type="hidden" name="usun" class="form-control" id="content" rows="3"></input>

    <button type="submit">usuń</button></td>
</div>
</form>
</tr>
@endforeach
</table>




