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
                   .... may go forward at any one given time and even the designated ‘number 6’ may enjoy the odd burst forward from deep.With that said, midfielders in a flat 3-5-2 usually stay very compact. The two central midfielders might hold their positions more often than in a 3-1-4-2 and the defensive midfielder won’t be as far  apart from them. These are two of the key differences between the flat 3-5-2 and the 3-1-4-2, which  on paper might look very similar. Chris Wilder achieved grand-scale success in Sheffield United‘s 2019-20 Premier League campaign, playing  with a very compact midfield and centre-backs responsible for both carrying the ball forward and  overlapping/underlapping their wing-backs. Defensively, the flat 3-5-2 can also easily change into a  5-3-2 with the help of the wing-backs dropping in and the lack of a natural ‘number 10’ in the team.For teams looking to frustrate their opposition via compactness and narrowness like Sheffield United, the flat 3-5-2 is an excellent option. But as evidenced by Wolves and Lazio, it also gives teams loads of outlets in possession and going forward.
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
                    <li>If you want to stop the counter-attack, then you'd be wise to consider the 3-5-2. The three defenders should be able to, between them, handle any combination of an opponent's strikers and No.10, while the wing-backs are well positioned to intercept opposing wide players before they can advance too far.

                    </li><br>
                    <li>
                        Defensive structure is aided by a central midfield who tends to sit quite deep in order to help cover the wing-backs should the need arise. 
                    </li><br>
                    <li>
                        However, the 3-5-2 is just as effective as a launch pad for the counter-attack as it is as a weapon against it. The three midfielders and two wing-backs offer plenty of potential attacking variety for the opposition defence to worry about, while playing two strikers means it's possible for the frontline to create and score chances with minimal assistance – particularly if the ball arrives at their feet early in a counter-attack. 
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
                        The complexity of the formation, particularly when it comes to covering team-mates and beginning attacks, demands not only a certain kind of player but a certain blend of players. The back three must include at least one player who is a proficient passer, while the other two must be incredible adept at man-to-man marking and disciplined positionally.
                    </li><br>
                    <li>
                        It's possible to play a zonal defensive marking system in a 3-5-2, but doing so requires players with a superb sense of positioning and the speed to track opponents as they inevitably wander in and out of zones looking for gaps between defenders. For this reason, it's not uncommon to see a player typically considered a midfielder to fill one of the three backline positions. 
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
                            4-5-1: Not only does the 3-5-2 match the midfield numbers of the 4-5-1, the fact that they're playing against just one lone striker means there's opportunity for one of the back three to push forwards slightly and provide extra midfield support when in possession.
                        </p>
                   </div>
               </div>
                
        </div>
        {{-- extra explanation  end--}}


    </div>
    {{-- container end  --}}
    
@endsection