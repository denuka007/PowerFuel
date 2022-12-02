
<x-app-layout>

  <div>
    <h1>Admin Dashboard</h1>
  </div>

  <br><br><br>

  <div>

    <label for="Heading"> Add New Fuel Station</label>
    <form action="{{url('/addseller')}}" method="POST">

      @csrf

      <br><br>

      <div>
        <input type="text" id="name" name="name" placeholder="Enter Name"/>
      </div> <br>

      <div>
        <input type="email" id="email" name="email" placeholder="Enter Email..."/>
      </div> <br>

      <div>
        <input type="password" id="password" name="password" placeholder="Password..."/>
      </div> <br>
    
    
      <button type="submit" style="border: 1px solid gray; background-color: lightgray; padding:5px;">Subscribe</button>
    </form>
  </div>
    
</x-app-layout>



