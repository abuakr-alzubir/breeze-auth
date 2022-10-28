<body>
    <h1>The searched items are:</h1>
   <ul>
   @foreach($products as $product)
     <h3> ==========================</h3>
     <li>{{$product->name}}</li>
     <li>{{$product->description}}</li>
     <li>{{$product->price}}</li>
   @endforeach
   </ul>
   <a href="/">go back</a>
 </body>
