<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      
      @foreach ($events as $event)
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="{{$loop->index==0 ? 'active' :''}} "></li>
      {{-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
      @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach ($events as $event )
            
      <div class="carousel-item {{$loop->index==0 ? 'active' :''}} ">
        <img class="h-100  w-100" src="amarous/assets/uploads/program1.png" alt="Gate of success">
        <div class="carousel-caption  d-md-block">
            <div class="program-details">
            <h5>Upcomming programs</h5>
            <h1>{{$event->name}}</h1>
            <p>{!! $event->short_desc !!}</p>
             <h5>Date : {{ $event->event_start_date }}</h5>
             <h5>Place : {!! $event->location !!}</h5>
             <h5>Fees : {!! $event->ticket_selling_price !!}</h5>
             <button class="btn btn-warning btn-lg" wire:click="$emit('reg_event_id',{{$event->id}})" data-toggle="modal" data-target="#my-modal">Join now <i class="fa fa-angle-right"></i></button>    
                </div>
             </div>  
      </div>

      {{-- <div class="carousel-item">
        <img class=" h-100 w-100" src="amarous/assets/uploads/program1.png" alt="Gate of success">
        <div class="carousel-caption  d-md-block">
            <div class="program-details">
                <h5>Upcomming programs</h5>
            <h1>Gate OF Success</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos velit 
                dolorem et eveniet blanditiis magnam vitae inventore. Officia deleniti molestiae
                 quaerat dolor voluptates voluptas eveniet,  doloribus sequi libero maxime temporibus.
             </p>
             <h5>Date : Saturday 26/12/2020</h5>
             <h5>Place : Al-khartoum, Mamon Bahary Hall</h5>
             <h5>Fees : 2,000 SDG</h5>
             <button class="btn btn-warning btn-lg"  data-toggle="modal" data-target="#my-modal">Join now <i class="fa fa-angle-right"></i></button>    

                </div>
         </div> 
      </div>

      <div class="carousel-item">
        <img class=" h-100 w-100" src="amarous/assets/uploads/program1.png" alt="Gate of success">
        <div class="carousel-caption  d-md-block">
            <div class="program-details">
            <h5>Upcomming programs</h5>
            <h1>Gate OF Success</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos velit 
                dolorem et eveniet blanditiis magnam vitae inventore. Officia deleniti molestiae
                 quaerat dolor voluptates voluptas eveniet,  doloribus sequi libero maxime temporibus.
             </p>
             <h5>Date : Saturday 26/12/2020</h5>
             <h5>Place : Al-khartoum, Mamon Bahary Hall</h5>
             <h5>Fees : 2,000 SDG</h5>
             <button class="btn btn-warning btn-lg"  data-toggle="modal" data-target="#my-modal">Join now <i class="fa fa-angle-right"></i></button>    
            </div>
      </div> --}}
        @endforeach


      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
