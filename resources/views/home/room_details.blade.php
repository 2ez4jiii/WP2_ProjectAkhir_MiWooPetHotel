<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
     @include('home.css') 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style type="text/css">

   label
   {
      display: inline-block;
      width: 200px;
   }

   input
   {
      width: 100%;
   }

</style>

   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
        @include('home.header')
      </header>

      <div  class="our_room">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>Our Room</h2>
                    <p>Aren't sigmas just so rizz?

                     Aren't rizzlers just so rizz?
                     
                     That rizzler is so skibidi!</p>
                 </div>
              </div>
           </div>

           <div class="row">
              <div class="col-md-8">
                 <div id="serv_hover"  class="room">
                    <div style="padding: 20px;" class="room_img">
                        <img style="display: block; margin-left: auto; margin-right: auto; height:300px; width:800px;" src="/room/{{ $room->image }}" alt="#"/>
                    </div>
                    <div class="bed_room">
                       <h2>{{ $room->room_tittle }}</h2>

                       <p style="padding:12px;">{{ $room->description }}</p>

                       <h4 style="padding:12px;"> Free Feeding : {{ $room->wifi }}</h4>

                       <h4 style="padding:12px;"> Room Type : {{ $room->room_type }}</h4>

                       <h3 style="padding:12px;"> Price : RP {{ $room->price }}/night</h3>

                    </div>
                </div>
            </div>
            
            <div class="col-md-4">

               <h1 style="font-size: 40px!important;">Book Room</h1>
               <p>Pastikan telah memilih room yang sesuai untuk Kucing atau Anjing anda!</p>


               @if (session()->has('message'))
                  
               <div class="alert alert-success">
                  <button type="button" class="close" data-bs-dismiss="alert">X</button>
               {{ session()->get('message') }}               
               </div>               

               @endif

               @if ($errors)
                  
               @foreach ($errors->all() as $errors )
                  
               <li style="color:red">
                  {{ $errors }}
               </li>

               @endforeach

               @endif

               <form action="{{ url('add_booking',$room->id) }}" method="POST">

                  @csrf

               <div>
                  <Label>Name</Label>
                  <input type="text" name="name" 
                  @if (Auth::id())
                  value="{{ Auth::user()->name }}">
                  @endif
               </div>

               <div>
                  <Label>Email</Label>
                  <input type="email" name="email"
                  @if (Auth::id())
                  value="{{ Auth::user()->email }}">
                  @endif
               </div>

               <div>
                  <Label>Phone</Label>
                  <input type="number" name="phone"
                  @if (Auth::id())
                  value="{{ Auth::user()->phone }}">
                  @endif
               </div>

               <div>
                  <label>Pet Name</label>
                  <input type="text" name="pet_name">
               </div>

               <div>
                  <Label>Pet Gender</Label>
                  <input  placeholder="Isi Jantan/Betina" type="text" name="petGender">
               </div>
               

               <div>
                  <Label>Start Date</Label>
                  <input type="date" name="startDate" id="startDate">
               </div>

               <div>
                  <Label>End Date</Label>
                  <input type="date" name="endDate" id="endDate">
               </div>

               <div>
                  <Label>Special Note/Request</Label>
                  <input type="text" name="note">
               </div>

               <div style="padding-top:20px;">
                  <input type="submit" class="btn btn-primary" value="Book Room">
               </div>

               </form>
               
            </div>
    
           </div>
        </div>
     </div>

      <!-- end header inner -->
      <!-- end header -->
      <!--  footer -->
      @include('home.footer')

<script type="text/javascript">

   $(function(){
      var dtToday = new Date();
   
      var month = dtToday.getMonth() + 1;

      var day = dtToday.getDate();

      var year = dtToday.getFullYear();

      if(month < 10)
         month = '0' + month.toString();

      if(day < 10)
      day = '0' + day.toString();

      var maxDate = year + '-' + month + '-' + day;
      $('#startDate').attr('min', maxDate);
      $('#endDate').attr('min', maxDate);

   });

</script>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>      
   </body>
</html>