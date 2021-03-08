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
                     ...when the wide midfielders are primarily deployed as extra cover out wide as opposed to being forward threats.
                        
                     4-1-4-1 can be seen as a variation on the 4-5-1. However, the system is generally part of the three-in-central-midfield family of formations that is so popular in today's game.
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
            <li>With so many bodies in the centre of the pitch, adopters of the 4-5-1 tend to find themselves enjoying an enormous     amount of possession. In some instances you'll even see teams dropping their striker deep when they're trying to get the ball back,  essentially playing a 4-6-0 and making it incredibly difficult for an opponent to penetrate the lines.          
            </li> <br>
            <li>
                Offensive adaptability is equally possible, too. By pushing the two wide  midfielders higher up the pitch it's relatively simple to move to something closer to a 4-3-3 without having to make substitutions. Often, then, you'll see a team deploying 4-3-3 at the start of a game, only to revert to a 4-5-1 as soon as they take the lead.
            </li> <br>
            <li>
                As it's so easy to alter the mentality of the wide players without ever losing your central defensive structure, it's common to see teams in knockout competitions tying themselves to some version of 4-5-1.
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
                Given the focus on controlling the midfield, there is often a tendency for the lone strikers in a 4-5-1 to become isolated. Midfielders are not always as ready to burst forward and support their striker in the way they would if playing a 4-2-3-1 or 4-3-3. As a result, chasing games from this formation can represent a genuine challenge and you'll often see a complete reshuffle should a 4-5-1 team concede the first goal.
            </li><br>
            <li>
                Depending on the style of 4-5-1 being implemented, counter-attacks can be difficult to execute. The striker, being on his own, must make every effort to hold up play in order to allow his midfielders the time to advance and influence passing sequences. That delay allows defenders to recover, thus limiting the counter-attacking threat.
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
                    4-3-3: The 4-5-1's three-person central midfield matches nicely against the edition seen in a 4-3-3, while the orthodox wide midfielders offer extra protection against the opponent's attacking wide options
                  </p>
            </div>
         </div>
         
      </div>
      {{-- extra explanation  end--}}   

    </div>
    {{-- container end  --}}
@endsection


