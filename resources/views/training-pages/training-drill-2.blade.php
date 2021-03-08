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

                <p>
                   .. Instruct one player to start at cone 2, 3, and 4. <br>
                    The remaining players form a line behind cone 1. <br>
                    Instruct one player to start in the goal (not necessarily the goalkeeper as this will change). <br>
                    A supply of balls should be placed near cone 1.
                </p>
                <br>

                <h1 class="font-bold">Drill Instructions</h1> 
                    <p>
                      
                        Player 1 starts with the ball and passes to player 2. <br>
                        Player 1 follows the pass and moves to player 2's place. <br>
                        Player 2 passes to player 3 and moves into quickly moves into defensive position. <br>
                        Player 3 passes to player 4 and takes 4's place. <br>
                        Player 4 receives the ball and immediately takes on player 2 in 1v1 battle to goal. <br>
                        If player 4 doesn't score in the 1 vs 1, player 4 becomes the keeper. If player 4 scores, keeper remains.
                   
                    </p>
                   <br>
                   
                  <h1 class="font-bold">Drill Variations </h1> 

                   <p>
                    If players are struggling with the one vs. one play and not many shots are being taken, <br>
                    reduce the role of the defensive player to 50%. If players still struggle to score or get shots off, <br>
                    remove the defensive player.
                   </p>
                   <br>
                
                   <p>
                    <span class="font-bold">Drill Coaching Points</span>  <br>
                    
                    Good passing combination <br>
                    Quick Movement off the ball <br>
                    Good defensive posture and positioning <br>
                    Shooter beats the defender with speed and gets a shot on target. <br>
                    </p>
 
               </div>
         </div>
         {{-- drill futher  explanation end--}}


         

    </div>
    {{-- container end  --}}
@endsection



 
 



