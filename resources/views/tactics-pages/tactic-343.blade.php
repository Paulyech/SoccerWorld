 @extends('layouts.app')

 @section('content')

   {{-- container start  --}}
 <div class="bg-gray-400">

   {{-- back button start --}}
   <div class="capitalize backBtn-Container">
      <a href="/tactics" class="btn-back">go back to tactics</a>
  </div>
   {{-- back button end --}}   
   
   {{-- tactic  explanation --}} 
   <div class="flex justify-center ">
         <div class="w-3/4">
            <span>
               ...need tactically astute players who fully understand their role on the team. They must be flexible and know how to respond both with and without the ball.If they're not, you risk being overwhelmed in defence as your
               opponents exploit the gaps and space that the 3-4-3 formation leaves open at the back. <br>
               But if your team does master this formation, you can certainly be on
               the front foot for a large part of the game and pin your opponents back with 
               the sheer number of players you commit forward. <br>
               Not every team has the personnel to play the 3-4-3 formation as it relies on stamina, 
               tactical discipline, and a high level of technical players to make it work
            </span>
         </div>
   </div>
   {{-- tactic  explanation end--}} 


     {{-- grid start --}} 
   <div class="grid grid-cols-3 gap-4 justify-items-center py-8" style="background-image: url('../images/background5.jpg'); background-position:center; background-size:cover;min-height:;background-attachment:fixed;" >
     
      {{-- merits card --}}
      <div class="card bg-blue-300">
         <h1 class="font-bold capitalize flex justify-center">Strengths</h1> <hr>
         <ul class="px-4">
            <li>Lots of attacking options – With three forwards and four midfielders there are a huge range of possibilities when you attack. This allows for fluidity and creativity which can unlock the opposition’s defence. It also forces the opposition back and stops their fullbacks from joining the attack.             
            </li> <br>
            <li>
               Pressing the opposition and catching teams in possession at the back – With so many attacking players up front you increase your chances of forcing the opposition into mistakes. Winning the ball so far up the pitch means you will already be nearer their goal and from capitalizing on a mistake, the opposition will likely be in disarray. 3-4-3 allows the team to press the opposition all over the pitch.
            </li> <br>
            <li>
               2-on-1 situations out wide – With a wide forward up front on each side (or two supporting strikers who can drop out wide) you can overload opponents on the wing with the wing-backs overlapping. This helps your team get in behind their defence and cross balls in from out wide. 
            </li> <br>
            <li>
               Dominate and control possession – The 3-4-3 formation often allows teams to dominate the ball as the width it gives enables the players to stretch the opposition. The formation also allows the players to always have a number of passing options available. It creates a lot of diagonal options between the lines for teams to exploit.
            </li>         
         </ul>
      </div>
      {{-- merits card end  --}}


      {{-- img card --}}
      <div class="card">
         <img src="../images/img25.jpg" alt="" class="img-card">
      </div>
      {{-- img card end  --}}

     {{-- dermerits card --}}
      <div class="card bg-blue-300">
         <h1 class="font-bold capitalize flex justify-center">Weaknesses</h1> <hr>

         <ol class="px-4">
            <li>
               You need the right personnel – Not every team has the tactical discipline or right players to fit the system. Players need to understand the spaces they attack as well as when to cover their teammates in this highly fluid formation.
            </li><br>
            <li>
               The team must be disciplined and work well together – If just one person does not track back or neglects to do their job, the whole team can disintegrate as players are then forced out of position to cover their teammates.
            </li><br>
            <li>
               Large spaces for the opposition to exploit on the counterattack – Committing so many players forward can leave a lot of space behind and your opponents can quickly break forward if they regain possession.
            </li><br>
            <li>
               A narrow back three means the opposition can attack from out wide – If your wing-backs get caught upfield or do not diligently track back, they leave a lot of space out wide for the other team to exploit. The opposition can also double up on the wings if their fullback decides to push forward and join the winger in front of them
            </li> 
         </ol>  
      </div>
      {{-- dermerits card end--}}

   </div>
   {{-- grid end--}}



 </div>
 {{-- container end  --}}
                        
 
     
 @endsection
 
 