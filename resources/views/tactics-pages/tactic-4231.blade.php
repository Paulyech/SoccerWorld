@extends('layouts.app')

@section('content')

{{-- container start  --}}
    <div class="bg-gray-400">

      {{-- back button  --}}
      <div class="capitalize backBtn-Container">
         <a href="/tactics" class="btn-back">go back to tactics</a>
      </div>
       {{-- back button end  --}}  
         
       {{-- tactic  explanation --}}
         <div class="flex justify-center ">
               <div class="w-3/4">
                  <span>
                     ...the Striker, who is typically the primary goal scorer in this formation.
                        
                     Defenders in the 4-2-3-1 occupy similar roles to defenders in the 4-3-3 formation. Centerbacks typically remain in defensive positions while the Fullbacks are responsible for contributing to the attack and defense as mentioned before.
                     
                     The 4-2-3-1 features two Center Defensive Midfielders (CDM’s) as oppose to the 4-3-3 that only has one. These players are share the same responsibility as the single CDM in the 4-3-3 formation and are required to have the same skillset as . The benefit of having two of these players rather than one is more protection for the back line. Having two CDM’s allows one player to pressure the ball and the second player to drop in behind, cutting off passing 
                     lanes and serving as second line of defense if the first player is beaten. This makes it more difficult for the opposition to counter attack with speed and bypass the midfield. It also affords the RM and LM more time to recover when they lose the ball than their counterparts in the 4-3-3 formation (LW & RW) who are generally don’t contribute as much in the defensive end.
                     
                     The Left Midfielder (LM), Center Attacking Midfielder (CAM), and Right Midfielder (RM), are responsible for creating chances in the 4-2-3-1. These three players are typically creative, comfortable on the ball, and skilled dribblers and passers. Although these players are often times interchangeable throughout the course of the game, the CAM is the catalyst for the offense in this formation.
                     
                     The CAM, sometimes called the “No. 10” is the focal point. In the 4-2-3-1 the most complete and creative attacking player occupies the CAM position. The CAM attempts to get on the ball as much as possible, looking to make passes in behind the oppositions defense to create chances for the LM, RM, and Striker to cross or finish.  When the CAM isn’t picking out passes he is beating players with the ball, keeping possession, and even looking to shoot from distance. A prototypical No. 10 in the professional game today is Philippe Coutinho of Liverpool FC
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
            <li>Passing the ball through triangles is more effective at breaking down opponents than passing 
                in straight lines, which is where 4-2-3-1 comes into its own. The position of the central midfield 
                two in relation to the more advanced three is custom built for the generation of these passing options, 
                ridding yourself of the problem of reductive 'straight' or 'lateral' play offered by 'flat' systems such as 4-4-2.            
            </li> <br>
            <li>
                It's also difficult to become overrun in midfield using a 4-2-3-1 given that there's great 
                flexibility when it comes to the advanced players being able to drop into deep wide or central areas. 
                Further, the number of potential attacking players means that it's possible for one of these players to
                 drop deeper without losing your offensive threat should a sudden chance present itself on the counter-attack.
            </li> <br>
            <li>
                Additionally, with so many players ready and available to pass the ball forwards, the striker in this 
                formation is typically provided plenty of chances to score.
            </li> 
            
                    
         </ul>
      </div>
      {{-- merits card end  --}}


      {{-- img card --}}
      <div class="card">
         <img src="../images/img25.jpg" alt="" class="img-card">
      </div>
      {{-- img card end  --}}

     {{-- demerits card --}}
      <div class="card bg-blue-300">
         <h1 class="font-bold capitalize flex justify-center">Weaknesses</h1> <hr>

         <ol class="px-4">
            <li>
                Sheer physical exertion can sometimes be a problem for teams using a 4-2-3-1. In order to generate 
                some misdirection and create confusion throughout a defence, it's common for attacks to begin from a 
                very deep position. Sometimes, attacks begin through Daley Blind from the core of defence.
            </li><br>
            <li>
                Therefore, there is real pressure on the attacking players to play with a high enough tempo to move 
                from one end of the pitch to the other without allowing an opponent's midfielders and full-backs time 
                enough to recover their ideal positions. As has been so aptly demonstrated by the teams of Marcelo Bielsa
                 (who, granted, doesn't always play a 4-2-3-1), this consistent physical strain can lead to tired and 
                 sub-optimal players towards the back end of a season.
            </li> <br>
            <li>
                There is also a lot of responsibility on the attacking wide players to drop back with speed into 
                 defence when an opponent is able to pass the ball out of defence. This has caused some friction between 
                certain players and managers, such as Jose Mourinho and Cristiano Ronaldo at Real Madrid, for example, 
                as the two disagreed on how individuals should act during the attacking and defensive phases. Ronaldo 
                doesn't like the limitations that defending puts on his attacking options, whereas Mourinho 
                wanted Ronaldo to submit to the needs of the team and defend when necessary.
            </li>
            
         </ol>  
      </div>
      {{-- demerits card end--}}

   </div>
   {{-- grid end--}}


      {{-- extra explanation --}}
      <div class="pt-6 bg-gray-400">
                  
         <h1 class="flex justify-center font-bold text-xl">Which formation does it trump?</h1> 
         <div class="flex justify-center">
            <div class="lg:w-2/4">
                  <p>
                    4-4-2: The potential to use passing triangles to work your through a flat midfield can make a poorly coached 4-4-2 look, quite simply, pathetic. On the other side of the coin, the flat midfield structure of a 4-4-2 means it's difficult to break through the multi-layered design of a 4-2-3-1.
                  </p>
            </div>
         </div>
         
      </div>
      {{-- extra explanation  end--}}   

    </div>
    {{-- container end  --}}
@endsection

