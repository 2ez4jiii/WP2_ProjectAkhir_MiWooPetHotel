<div  class="our_room" id="room">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Our Room</h2>
                <p>Our available room</p>
             </div>
          </div>
       </div>

       <div class="row"> 
          @foreach ($room as $rooms)
          <div class="col-md-4 col-sm-6">
             <div id="serv_hover"  class="room">
                <div class="room_img">
                   <figure><img style="height:200px; width:350px;" src="room/{{ $rooms->image }}" alt="#"/></figure>
                </div>
                <div class="bed_room">
                   <h3>{{ $rooms->room_tittle }}</h3>
                   <p style="padding:10px;">{!! Str::limit($rooms->description,100) !!}</p>

                  <a class="btn btn-primary" href="{{ url('room_details',$rooms->id) }}">Room Detail</a>

                </div>
             </div>
          </div>
          @endforeach

       </div>
    </div>
 </div>