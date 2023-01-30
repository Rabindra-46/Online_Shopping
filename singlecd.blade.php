@extends('layouts.app')

<div style="padding:25px;">
    <h2>
        CD
    </h2>
    @foreach($id as $product)
Id: {{$product->getId()}}
    <br>
Title: <strong>{{$product->getTitle()}}</strong>
<br>
 First Name: {{$product->getFirstName()}}
 <br>
 SurName: {{$product-> getMainName()}}
<br>
 
 Full Name: {{$product-> getFullName()}}
</br>
 Price: {{$product->getPrice()}}
<br>
Pages: {{$product->getPlayLength()}}
<br>
@endforeach
</div>

<div class="container" style="padding:30px;">
<div class="col"style="border-style:solid; border-width:25px; border-color:#448ee4">
<div row>
<div style="padding:25px;">
    <h2>
     <strong>CD</strong>
    </h2>
    @foreach($id as $product)
    <div style="padding:30px;">
 <form method="POST" action="{{route('product.update',$product->getId())}}">
  @csrf
  @method('put')
  <b>Product Type:  </b><select name ="type";>
  <option value="cd">CD</option>
  <option value="book">BOOK</option>
  </select><br/><br/>
  <input type="text" name="title" value="{{$product->getTitle()}}"><br/><br/>
  <input type="text" name="firstname" value="{{$product->getFirstName()}}"><br/><br/>
  <input type="text" name="surname" value=" {{$product-> getMainName()}}"><br/><br/>
  <input type="text" name="price" value="{{$product->getPrice()}}"><br/><br/>
  <input type="text" name="papl" value="{{$product->getPlayLength()}}"><br/><br/>
  <button type="submit" name="save" class="btn btn-dark" style="float:center;">update</button>
  </form>
  </div>
@endforeach
</div>

</div>
</div>
</div>