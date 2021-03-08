@extends('layouts.app')

@section('content')

{{-- container start  --}}
    <div class="bg-gray-400 h-screen">

      {{-- back button  --}}
      <div class="capitalize backBtn-Container">
        <a href="/training" class="btn-back">go back to drills</a>
      </div>
       {{-- back button end  --}}  
         
       {{-- drill futher  explanation --}}
         <div class="flex justify-center ">
               <div class="w-3/4">
                

                <h1 class="font-bold">Drill Instructions</h1> 
                    <p>
                      
                       The first player in line (shooter) passes through the channel to the coach (or target player). <br>
                       The shooter makes a check-run down the channel towards the coach. <br>
                       The coach returns the pass to the advancing attacker inside the channel. <br>
                       The shooter once again returns the ball to the coach quickly backpedals towards the end of the tunnel in which he began. <br>
                       The coach lays a ball off to either side. <br>
                       The advancing shooter must quickly react to the direction of the pass, sprint around the end of the 
                       cones and take a shot on stride. <br>
                   
                    </p>
                   <br>
                   
                  <h1 class="font-bold">Drill Variations </h1> 

                   <p>
                    To simplify, announce to players by pointing to the side you are laying off the ball. <br>
                    Create different shots by bouncing, spinning, or stopping the ball as you lay it off. <br>
                   </p>
                
 
 
               </div>
         </div>
         {{-- drill futher  explanation end--}}


         

    </div>
    {{-- container end  --}}
@endsection



 
 