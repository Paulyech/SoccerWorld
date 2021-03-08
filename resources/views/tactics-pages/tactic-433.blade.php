
@extends('layouts.app')

@section('content')
        {{-- container start --}}
    <div class=" bg-gray-400 ">

        {{-- back button  --}}
        <div class="capitalize backBtn-Container">
          <a href="/tactics" class="btn-back">go back to tactics</a>
        </div>
        {{-- back button end  --}}
        

           {{-- tactic  explanation --}} 
        <div class="flex justify-center ">
            <div class="w-3/4">
                <span>
                   .... all while being disciplined enough to handle their defensive responsibilities.
                        
                   The most effective way to use the 4-3-3 formation is to play the three Center Midfielders, or CM’s, in a triangle. 
                    The most central player dropping slightly lower than the other two central midfielders to form 
                    the triangle. This player is known as the Center Defensive Midfielder or CDM.  The CDM should 
                    be the most defensive minded of the three central midfielders. An ideal CDM has the awareness 
                    to cut out the opposition's passes, the strength to win tackle , and the stamina to recover when 
                    their team loses possession. The CDM serves as a buffer between the midfield and defense, 
                    slowing down opposing counter attacks and allowing his team to recover. Furthermore, 
                    by taking up a more defensive position the CDM allows the the other two central midfielders
                     to roam freely in the midfield and take up more attacking positions. From there the two other
                      midfielders can play through balls for wingers and pick out their Striker. The other two
                       central midfielders should have great vision, be gifted passers, be able to dribble in 
                       confined areas, and possess the ability aid the CDM in defensive situations. <br>
                   
                   The front line of the 4-3-3 is the focal point of the formation. The Right Wing (RW) and 
                   Left Wing (LW) often find themselves in space and situations where they can run at the opposition's 
                   back line with the ball. The wing players in this formation may be the most integral aspect to its
                    success. Both wing players should have great speed, terrific timing when making runs behind the
                     opposition’s back line, the ability to beat players while dribbling, accurate crossing, and a nose for goal. <br>
                   
                   
                   On the other hand, if the wingers have the ability to score more goals than 
                   the Striker the best option may be to play a right-footed player at LW and vice versa.
                    This allows both players to cut inside towards the goal and shoot with their strong foot.
                     The Striker in this strategy still looks to receive the ball in the box and score, 
                     but he can also defer the goal scoring responsibility to the LW and RW.  A great example 
                     of this Real Madrid who play Cristiano Ronaldo, a righty, at LW and Gareth Bale, a lefty, at RW
                </span>
            </div>

        </div>
        {{-- tactic  explanation end --}}

        
        {{-- grid start --}}
        <div class="grid lg:grid-cols-3 gap-3 justify-items-center py-8"  style="background-image: url('../images/background5.jpg'); background-position:center; background-size:cover;min-height:;background-attachment:fixed;">
            

            {{-- merits card --}}
            <div class="card mx-0 px-4 bg-blue-300">
                <h1 class="font-semibold">Strengths</h1> <hr>
                <ol>
                    <li>By playing two very advanced wide forwards you give yourself the opportunity 
                      to nullify the threat posed by an opponent's full-backs. So long as your wide forwards 
                      stay in very advanced positions, it becomes too risky for the full-backs to push up, 
                      thereby limiting attacking options against you.

                    </li><br>
                    <li>
                      Playing three players in midfield, one being defensively minded and the other two taking an 
                      all-round 'box-to-box' role, allows for domination of midfield possession against teams playing 
                      just two in the middle. This can also give license to the full-backs getting forward as they are 
                      safe in the knowledge that their midfield is going to keep possession long enough for them to join
                       the attack without the regular threat of conceding too many counter-attacking opportunities.
                    </li><br>
                    <li>
                      The system is easily altered to a more defensive 4-1-4-1 for those instances in which a team must 
                      adapt to soak up heavy pressure. 
                    </li>
                </ol> 
            </div>
            {{-- merits card end --}}


            {{-- img card --}}
            <div class="card">
                <img src="../images/img25.jpg" alt="" class="img-card">
            </div>
            {{-- img card end--}}


            {{-- demerits card --}}
            <div class="card px-4 bg-blue-300">
                <h1 class="font-semibold">Weaknesses</h1> <hr>
                <ol type="1">
                    <li>
                      To implement a 4-3-3 with maximum success you must possess players who are capable of thinking quickly
                      in terms of positioning and distribution.
                    </li><br>
                    <li>
                      Similarly, teams that have found success with this formation have tended to field world-class defensive midfielders.
                      Claude Makelele, Javier Mascherano, Sergio Busquets... all of these players have been capable of shielding their defence
                      by themselves when their central midfield partners push forward to help attacking movements through the centre of the pitch.
                    </li><br>
                    <li>
                      Enormous responsibility is placed on the central striker to take regular possession of the ball and 
                      bring his attacking team-mates into the game from their wide starting positions. While this is more than
                       achievable with the right players, there are few strikers in the world capable of performing the role when 
                       faced with elite-level defenders.
                    </li><br>
                    <li>
                      If team-mates find themselves unable to rely on both their striker and defensive midfielder to create and stop chances
                      respectively, the whole system tends to break down through a lack of trust.
                    </li>
                </ol> 
            </div>
            {{-- demerits card end --}}
            
                
         
        </div>

        {{-- grid end  --}}

       {{-- extra explanation --}}
        <div class="pt-6 bg-gray-400">
            
               <h1 class="flex justify-center font-bold text-xl">Which formation does it trump?</h1> 
               <div class="flex justify-center">
                   <div class="lg:w-2/4">
                        <p>
                          4-4-2: The extra man in the centre of midfield can overwhelm a 4-4-2 middle two, 
                          while the wide attacking players are always ready 
                          to take advantage of a 4-4-2's full-backs pressing high up the pitch.
                        </p>
                   </div>
               </div>
                
        </div>
        {{-- extra explanation  end--}}

        
    </div>
    {{-- container end  --}}
    
@endsection











  