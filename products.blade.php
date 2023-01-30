@extends('layouts.app')
<div class="container" style="padding:30px;">

<div class="row"
 >
<div class="col"style="border-style:solid; border-width:10px 10px 15px 10px; 15px; border-color:#448ee4">
<div style="padding:15px;">
    <h3>
        <b>BOOK</b>
    </h3>
    <br>
    @foreach($books as $product)

 <strong>{{$product->getTitle()}}</strong><br/>
         {{$product->getFullName()}}<br>
     <p>£{{$product->getPrice()}}<br></p>
         <p>Number of pages: {{$product->getNumberOfPages()}}<br></p>
         <br>
         <br>
<div>
<a href="{{url('products/'.$product->getId())}}" class="btn btn-dark" style="float:left;">SELECT</a>


<form method="post" action="{{route('product.delete',$product->getId())}}">     
                    @csrf                  
                           @method('delete')          
                                              <button class="btn btn-dark" type="submit" style="float:right;"> Delete </button>    
         </div>                                                      </form>

         <br>
<br>
<br>

@endforeach
</div>
</div>


<div class="col" style="border-style:solid; border-width:10px 10px 15px 10px; border-color:#448ee4">
<div style="padding:15px;">
    <h3>
        <strong>CD</strong>
    </h3><br/>
    @foreach($cds as $product)
   

<strong>{{$product->getTitle()}}</strong><br/>

        {{$product->getMainName()}}<br/>

    <p>£{{$product->getPrice()}}<br/></p>

      <p>Play Length: {{$product->getPlayLength()}}<br/></p>
      <br>
        <br> 
        <div>
<a href="{{url('products/'.$product->getId())}}" class="btn btn-dark" style="float:left;">SELECT</a>


<form method="post" action="{{route('product.delete',$product->getId())}}">     
                    @csrf                  
                           @method('delete')          
                                              <button class="btn btn-dark" type="submit" style="float:right;"> Delete </button>    
         </div>                                                      </form>



         <br>
<br>
<br>
@endforeach

</div>
</div>


<div class="col" style="border-style:solid; border-width:10px 10px 15px 10px;; border-color:#448ee4" >
<div style="padding:30px;">
 <form method="POST" action="/products/store">
  @csrf
  <b>Product Type:  </b><select name ="type";>
  <option value="cd">CD</option>
  <option value="book">BOOK</option>
  </select><br/><br/>
  <input type="text" name="title" placeholder="title" required><br/><br/>
  <input type="text" name="firstname" placeholder="firstname(optional)"><br/><br/>
  <input type="text" name="mainname" placeholder="surname/band"><br/><br/>
  <input type="text" name="price" placeholder="price"><br/><br/>
  <input type="text" name="papl" placeholder="pages/playlength"><br/><br/>
  <button type="submit" name="save" class="btn btn-dark" style="float:center;">ADD NEW</button>
  </form>
  </div>
  </div>

</div>
</div>