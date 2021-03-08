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
                     .... also be used. These are really just
                     slight variations on the three-numbered formations though.
                     
                     Having already explained the 4-4-2 setup, we have compiled a list of 
                     some of the most common other formations to help you get to grips with the
                     tactical approaches available to teams:
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
            <li>The chief benefit of the 4-4-2 is its simplicity. It provides 
               a solid basic structure with defensive depth and attacking numbers,
                with clearly marked roles. Many English players have grown up playing 
                this formation their entire lives and define their position as a defender,
                 midfielder or striker due to its influence.             
            </li> <br>
            <li>
               Without the ball, the four defenders and four midfielders can put 
               eight men in front of the opposition, covering the entire width of the field. 
               If the defence 
               pushes up high with the midfield, the opposition can be strangled in their 
               own half by a wall of players. With the ball, there are always options out wide 
               and a strong presence up front to provide attacking options via long balls or crosses.
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
               The downside of the 4-4-2 is that its rigid positions can lead to a side being swamped
                  by more flexible opponents. The obvious potential weakness is that by playing with two strikers
                   you can be outnumbered in midfield. While one striker may be tasked with dropping back to help out,
                  many strikers are not disciplined enough to do so effectively. If the wingers also prefer playing out by the sidelines of the pitch, the central midfielders can quickly be isolated against teams playing three or even four central midfielders.
            </li><br>
            <li>
               That rigidity is caused by the 4-4-2's three lines of players which can allow opposition players
               to find pockets of space ‘between the lines', especially defence and midfield. A well-disciplined
               team will compress the space between defence and midfield so as to avoid this, but a poorly
               organized 4-4-2 can leave huge amounts of space in front of the defence and 
                if the midfield cannot close down the passing lanes, teams can be ripped apart 
                by opposition players lurking in those spaces
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
                     While it's difficult to pinpoint a specific formation
                     against which 4-4-2 is especially effective, there is a case to be made
                     for using the system when playing a team that is overly aggressive in attack. 
                     The even distribution of players across the pitch tends to 
                     lend itself to players being unmarked at the moment possession is won back,
                      opening the potential for an instant attack.
                  </p>
            </div>
         </div>
         
      </div>
      {{-- extra explanation  end--}}   

    </div>
    {{-- container end  --}}
@endsection




