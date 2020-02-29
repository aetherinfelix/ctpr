<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contestants;
use App\scores;
use App\email;

class HomeController extends Controller
{
    public function index(){
        return view('home', ['datas' => contestants::orderBy('rank', 'asc')->get()]);
    }
    public function admin(){
        
        //Beauty
        $CarltonBeauty = scores::where('name', '=', 'Carlton')->sum('beauty');
        $CharlotteBeauty = scores::where('name', '=', 'Charlotte')->sum('beauty');
        $AtehnatheTherapigBeauty = scores::where('name', '=', 'Althea the Therapig')->sum('beauty');
        $HarrietBeauty = scores::where('name', '=', 'Harriet')->sum('beauty');
        $AnnieRoseBeauty = scores::where('name', '=', 'Annie Rose')->sum('beauty');
        $KiloBeauty = scores::where('name', '=', 'Kilo')->sum('beauty');
        $AmalaBeauty = scores::where('name', '=', 'Amala')->sum('beauty');
        $BetoBeauty = scores::where('name', '=', 'Beto')->sum('beauty');
        $BlinkBeauty = scores::where('name', '=', 'Blink')->sum('beauty');
        $ChanchoBeauty = scores::where('name', '=', 'Chancho')->sum('beauty');
        $MooShuBeauty = scores::where('name', '=', 'Moo Shu')->sum('beauty');
        $AtheaLorraineBeauty = scores::where('name', '=', 'Athea Lorraine')->sum('beauty');
        $HammyBeauty = scores::where('name', '=', 'Hammy')->sum('beauty');
        $DahliaBeauty = scores::where('name', '=', 'Dahlia')->sum('beauty');
        $GumboBeauty = scores::where('name', '=', 'Gumbo')->sum('beauty');

        //Style
        $CarltonStyle = scores::where('name', '=', 'Carlton')->sum('style');
        $CharlotteStyle = scores::where('name', '=', 'Charlotte')->sum('style');
        $AtehnatheTherapigStyle = scores::where('name', '=', 'Althea the Therapig')->sum('style');
        $HarrietStyle = scores::where('name', '=', 'Harriet')->sum('style');
        $AnnieRoseStyle = scores::where('name', '=', 'Annie Rose')->sum('style');
        $KiloStyle = scores::where('name', '=', 'Kilo')->sum('style');
        $AmalaStyle = scores::where('name', '=', 'Amala')->sum('style');
        $BetoStyle = scores::where('name', '=', 'Beto')->sum('style');
        $MinnieStyle = scores::where('name', '=', 'Minnie')->sum('style');
        $LadyPigglesStyle = scores::where('name', '=', 'Lady Piggles')->sum('style');
        $BlinkStyle = scores::where('name', '=', 'Blink')->sum('style');
        $ChanchoStyle = scores::where('name', '=', 'Chancho')->sum('style');
        $MooShuStyle = scores::where('name', '=', 'Moo Shu')->sum('style');
        $AtheaLorraineStyle = scores::where('name', '=', 'Athea Lorraine')->sum('style');
        $HammyStyle = scores::where('name', '=', 'Hammy')->sum('style');
        $DahliaStyle = scores::where('name', '=', 'Dahlia')->sum('style');
        $GumboStyle = scores::where('name', '=', 'Gumbo')->sum('style');

        //Personality
        $CarltonPersonality = scores::where('name', '=', 'Carlton')->sum('personality');
        $CharlottePersonality = scores::where('name', '=', 'Charlotte')->sum('personality');
        $AtehnatheTherapigPersonality = scores::where('name', '=', 'Althea the Therapig')->sum('personality');
        $HarrietPersonality = scores::where('name', '=', 'Harriet')->sum('personality');
        $AnnieRosePersonality = scores::where('name', '=', 'Annie Rose')->sum('personality');
        $KiloPersonality = scores::where('name', '=', 'Kilo')->sum('personality');
        $AmalaPersonality = scores::where('name', '=', 'Amala')->sum('personality');
        $BetoPersonality = scores::where('name', '=', 'Beto')->sum('personality');
        $MinniePersonality = scores::where('name', '=', 'Minnie')->sum('personality');
        $LadyPigglesPersonality = scores::where('name', '=', 'Lady Piggles')->sum('personality');
        $BlinkPersonality = scores::where('name', '=', 'Blink')->sum('personality');
        $ChanchoPersonality = scores::where('name', '=', 'Chancho')->sum('personality');
        $MooShuPersonality = scores::where('name', '=', 'Moo Shu')->sum('personality');
        $AtheaLorrainePersonality = scores::where('name', '=', 'Athea Lorraine')->sum('personality');
        $HammyPersonality = scores::where('name', '=', 'Hammy')->sum('personality');
        $DahliaPersonality = scores::where('name', '=', 'Dahlia')->sum('personality');
        $GumboPersonality = scores::where('name', '=', 'Gumbo')->sum('personality');

        $CarltonTotal = $CarltonBeauty + $CarltonStyle + $CarltonPersonality;
        $CharlotteTotal = $CharlottePersonality + $CharlotteStyle + $CharlotteBeauty;
        $AtehnatheTherapigTotal = $AtehnatheTherapigPersonality + $AtehnatheTherapigStyle + $AtehnatheTherapigBeauty;
        $HarrietTotal = $HarrietPersonality+$HarrietBeauty+$HarrietStyle;
        $AnnieRoseTotal = $AnnieRosePersonality+$AnnieRoseBeauty+$AnnieRoseStyle;
        $KiloTotal = $KiloPersonality+$KiloBeauty+$KiloStyle;
        $AmalaTotal = $AmalaPersonality+$AmalaBeauty+$AmalaStyle;
        $BetoTotal = $BetoPersonality+$BetoBeauty+$BetoStyle;
        $MinnieTotal = $MinniePersonality+$MinnieBeauty+$MinnieStyle;
        $LadyPigglesTotal = $LadyPigglesPersonality+$LadyPigglesBeauty+$LadyPigglesStyle;
        $BlinkTotal = $BlinkPersonality+$BlinkBeauty+$BlinkStyle;
        $ChanchoTotal = $ChanchoPersonality+$ChanchoBeauty+$ChanchoStyle;
        $MooShuTotal = $MooShuPersonality+$MooShuBeauty+$MooShuStyle;
        $AtheaLorraineTotal = $AtheaLorrainePersonality+$AtheaLorraineBeauty+$AtheaLorraineStyle;
        $HammyTotal = $HammyPersonality+$HammyBeauty+$HammyStyle;
        $DahliaTotal = $DahliaPersonality+$DahliaBeauty+$DahliaStyle;
        $GumboTotal = $GumboPersonality+$GumboBeauty+$GumboStyle;

        $TotalArray = array(
            'Carlton' => $CarltonTotal,
            'Charlotte' => $CharlotteTotal,
            'AtehnatheTherapig' => $AtehnatheTherapigTotal,
            'Harriet' => $HarrietTotal,
            'AnnieRose' => $AnnieRoseTotal,
            'Kilo' => $KiloTotal,
            'Amala' => $AmalaTotal,
            'Beto' => $BetoTotal,
            'Minnie' => $MinnieTotal,
            'LadyPiggles' => $LadyPigglesTotal,
            'Blink' => $BlinkTotal,
            'Chancho' => $ChanchoTotal,
            'MooShu' => $MooShuTotal,
            'AtheaLorraine' => $AtheaLorraineTotal,
            'Hammy' => $HammyTotal,
            'Dahlia' => $DahliaTotal,
            'Gumbo' => $GumboTotal
        );

        $PersonalityArray = array(
            'Carlton' => $CarltonPersonality,
            'Charlotte' => $CharlottePersonality,
            'AtehnatheTherapig' => $AtehnatheTherapigPersonality,
            'Harriet' => $HarrietPersonality,
            'AnnieRose' => $AnnieRosePersonality,
            'Kilo' => $KiloPersonality,
            'Amala' => $AmalaPersonality,
            'Beto' => $BetoPersonality,
            'Minnie' => $MinniePersonality,
            'LadyPiggles' => $LadyPigglesPersonality,
            'Blink' => $BlinkPersonality,
            'Chancho' => $ChanchoPersonality,
            'MooShu' => $MooShuPersonality,
            'AtheaLorraine' => $AtheaLorrainePersonality,
            'Hammy' => $HammyPersonality,
            'Dahlia' => $DahliaPersonality,
            'Gumbo' => $GumboPersonality
        );

        $BeautyArray = array(
            'Carlton' => $CarltonBeauty,
            'Charlotte' => $CharlotteBeauty,
            'AtehnatheTherapig' => $AtehnatheTherapigBeauty,
            'Harriet' => $HarrietBeauty,
            'AnnieRose' => $AnnieRoseBeauty,
            'Kilo' => $KiloBeauty,
            'Amala' => $AmalaBeauty,
            'Beto' => $BetoBeauty,
            'Minnie' => $MinnieBeauty,
            'LadyPiggles' => $LadyPigglesBeauty,
            'Blink' => $BlinkBeauty,
            'Chancho' => $ChanchoBeauty,
            'MooShu' => $MooShuBeauty,
            'AtheaLorraine' => $AtheaLorraineBeauty,
            'Hammy' => $HammyBeauty,
            'Dahlia' => $DahliaBeauty,
            'Gumbo' => $GumboBeauty
        );

        $StyleArray = array(
            'Carlton' => $CarltonStyle,
            'Charlotte' => $CharlotteStyle,
            'AtehnatheTherapig' => $AtehnatheTherapigStyle,
            'Harriet' => $HarrietStyle,
            'AnnieRose' => $AnnieRoseStyle,
            'Kilo' => $KiloStyle,
            'Amala' => $AmalaStyle,
            'Beto' => $BetoStyle,
            'Minnie' => $MinnieStyle,
            'LadyPiggles' => $LadyPigglesStyle,
            'Blink' => $BlinkStyle,
            'Chancho' => $ChanchoStyle,
            'MooShu' => $MooShuStyle,
            'AtheaLorraine' => $AtheaLorraineStyle,
            'Hammy' => $HammyStyle,
            'Dahlia' => $DahliaStyle,
            'Gumbo' => $GumboStyle
        );

        $topPersonalityRaw = array_keys($PersonalityArray,max($PersonalityArray));
        $topBeautyRaw = array_keys($BeautyArray,max($BeautyArray));
        $topStyleRaw = array_keys($StyleArray,max($StyleArray));
        $topTotalRaw = array_keys($TotalArray,max($TotalArray));

        $topPersonality = implode(" ", $topPersonalityRaw);
        $topBeauty = implode(" ", $topBeautyRaw);
        $topStyle = implode(" ", $topStyleRaw);
        $topTotal = implode(" ", $topTotalRaw);
        //dd($topPersonality);
        //$topPersonality = array_search(max($PersonalityArray),$PersonalityArray);
        //$topBeauty = array_search(max($BeautyArray),$BeautyArray);
        //$topStyle = array_search(max($StyleArray),$StyleArray);
        //$topTotal = array_search(max($TotalArray),$TotalArray);
       //dd($TotalArray);
        

        $data = [
            'topPersonality' => $topPersonality,
            'topBeauty' => $topBeauty,
            'topStyle' => $topStyle,
            'topTotal' => $topTotal,
            'CarltonPersonality' => $CarltonPersonality,
            'CharlottePersonality' => $CharlottePersonality,
            'AtehnatheTherapigPersonality' => $AtehnatheTherapigPersonality,
            'HarrietPersonality' => $HarrietPersonality,
            'AnnieRosePersonality' => $AnnieRosePersonality,
            'KiloPersonality' => $KiloPersonality,
            'AmalaPersonality' => $AmalaPersonality,
            'BetoPersonality' => $BetoPersonality,
            'MinniePersonality' => $MinniePersonality,
            'LadyPigglesPersonality' => $LadyPigglesPersonality,
            'BlinkPersonality' => $BlinkPersonality,
            'ChanchoPersonality' => $ChanchoPersonality,
            'MooShuPersonality' => $MooShuPersonality,
            'AtheaLorrainePersonality' => $AtheaLorrainePersonality,
            'HammyPersonality' => $HammyPersonality,
            'DahliaPersonality' => $DahliaPersonality,
            'GumboPersonality' => $GumboPersonality,
            'CarltonBeauty' => $CarltonBeauty,
            'CharlotteBeauty' => $CharlotteBeauty,
            'AtehnatheTherapigBeauty' => $AtehnatheTherapigBeauty,
            'HarrietBeauty' => $HarrietBeauty,
            'AnnieRoseBeauty' => $AnnieRoseBeauty,
            'KiloBeauty' => $KiloBeauty,
            'AmalaBeauty' => $AmalaBeauty,
            'BetoBeauty' => $BetoBeauty,
            'MinnieBeauty' => $MinnieBeauty,
            'LadyPigglesBeauty' => $LadyPigglesBeauty,
            'BlinkBeauty' => $BlinkBeauty,
            'ChanchoBeauty' => $ChanchoBeauty,
            'MooShuBeauty' => $MooShuBeauty,
            'AtheaLorraineBeauty' => $AtheaLorraineBeauty,
            'HammyBeauty' => $HammyBeauty,
            'DahliaBeauty' => $DahliaBeauty,
            'GumboBeauty' => $GumboBeauty,
            'CarltonStyle' => $CarltonStyle,
            'CharlotteStyle' => $CharlotteStyle,
            'AtehnatheTherapigStyle' => $AtehnatheTherapigStyle,
            'HarrietStyle' => $HarrietStyle,
            'AnnieRoseStyle' => $AnnieRoseStyle,
            'KiloStyle' => $KiloStyle,
            'AmalaStyle' => $AmalaStyle,
            'BetoStyle' => $BetoStyle,
            'MinnieStyle' => $MinnieStyle,
            'LadyPigglesStyle' => $LadyPigglesStyle,
            'BlinkStyle' => $BlinkStyle,
            'ChanchoStyle' => $ChanchoStyle,
            'MooShuStyle' => $MooShuStyle,
            'AtheaLorraineStyle' => $AtheaLorraineStyle,
            'HammyStyle' => $HammyStyle,
            'DahliaStyle' => $DahliaStyle,
            'GumboStyle' => $GumboStyle,
            'CarltonTotal' => $CarltonTotal,
            'CharlotteTotal' => $CharlotteTotal,
            'AtehnatheTherapigTotal' => $AtehnatheTherapigTotal,
            'HarrietTotal' => $HarrietTotal,
            'AnnieRoseTotal' => $AnnieRoseTotal,
            'KiloTotal' => $KiloTotal,
            'AmalaTotal' => $AmalaTotal,
            'BetoTotal' => $BetoTotal,
            'MinnieTotal' => $MinnieTotal,
            'LadyPigglesTotal' => $LadyPigglesTotal,
            'BlinkTotal' => $BlinkTotal,
            'ChanchoTotal' => $ChanchoTotal,
            'MooShuTotal' => $MooShuTotal,
            'AtheaLorraineTotal' => $AtheaLorraineTotal,
            'HammyTotal' => $HammyTotal,
            'DahliaTotal' => $DahliaTotal,
            'GumboTotal' => $GumboTotal
        ];
        //dd($data);
        return view('admin', ['data' => $data]);
    }
    public function email(Request $request){
        $userInput = $request->all();
        dd($userInput);
        $email = $userInput['email'];
        
        if(!isset($email)){
            $datas = contestants::get();
            $emailExists = 'Email is required';
            return view('home', ['datas' => contestants::get(), 'emailExists' => $emailExists])->with($emailExists, $datas);
        }
        $check = email::where('email', '=', $email)->get()->toArray();
        if (empty($check)){
            $newEmail = new email;
            $newEmail->email = $email;
            $newEmail->save();
        }
        else{
            $datas = contestants::get();
            $emailExists = 'Email Already Exists';
            return view('home', ['datas' => contestants::get(), 'emailExists' => $emailExists])->with($emailExists, $datas);
        }
        if (isset($userInput['1+beauty']) || isset($userInput['1+style']) || isset($userInput['1+personality'])){
            $newScore1 = new scores;
            $newScore1->name = 'Charlotte';
            if(isset($userInput['1+beauty'])){
            $newScore1->beauty = $userInput['1+beauty'];
            }
            if(isset($userInput['1+style'])){
            $newScore1->style = $userInput['1+style'];
            }
            if(isset($userInput['1+personality'])){
            $newScore1->personality = $userInput['1+personality'];
            }
            $newScore1->save();
        }
        if (isset($userInput['2+beauty']) || isset($userInput['2+style']) || isset($userInput['2+personality'])){
            $newScore2 = new scores;
            $newScore2->name = 'Moo Shu';
            if(isset($userInput['2+beauty'])){
            $newScore2->beauty = $userInput['2+beauty'];
            }
            if(isset($userInput['2+style'])){
            $newScore2->style = $userInput['2+style'];
            }
            if(isset($userInput['2+personality'])){
            $newScore2->personality = $userInput['2+personality'];
            }
            $newScore2->save();
        }
        if (isset($userInput['3+beauty']) || isset($userInput['3+style']) || isset($userInput['3+personality'])){
            $newScore3 = new scores;
            $newScore3->name = 'Althea the Therapig';
            if(isset($userInput['3+beauty'])){
            $newScore3->beauty = $userInput['3+beauty'];
            }
            if(isset($userInput['3+style'])){
            $newScore3->style = $userInput['3+style'];
            }
            if(isset($userInput['3+personality'])){
            $newScore3->personality = $userInput['3+personality'];
            }
            $newScore3->save();
        }
        if (isset($userInput['4+beauty']) || isset($userInput['4+style']) || isset($userInput['4+personality'])){
            $newScore4 = new scores;
            $newScore4->name = 'Annie Rose';
            if(isset($userInput['4+beauty'])){
            $newScore4->beauty = $userInput['4+beauty'];
            }
            if(isset($userInput['4+style'])){
            $newScore4->style = $userInput['4+style'];
            }
            if(isset($userInput['4+personality'])){
            $newScore4->personality = $userInput['4+personality'];
            }
            $newScore4->save();
        }
        
        if (isset($userInput['5+beauty']) || isset($userInput['5+style']) || isset($userInput['5+personality'])){
            $newScore5 = new scores;
            $newScore5->name = 'Amala';
            if(isset($userInput['5+beauty'])){
            $newScore5->beauty = $userInput['5+beauty'];
            }
            if(isset($userInput['5+style'])){
            $newScore5->style = $userInput['5+style'];
            }
            if(isset($userInput['5+personality'])){
            $newScore5->personality = $userInput['5+personality'];
            }
            $newScore5->save();
        }
        if (isset($userInput['6+beauty']) || isset($userInput['6+style']) || isset($userInput['6+personality'])){
            $newScore6 = new scores;
            $newScore6->name = 'Athea Lorraine';
            if(isset($userInput['6+beauty'])){
            $newScore6->beauty = $userInput['6+beauty'];
            }
            if(isset($userInput['6+style'])){
            $newScore6->style = $userInput['6+style'];
            }
            if(isset($userInput['6+personality'])){
            $newScore6->personality = $userInput['6+personality'];
            }
            $newScore6->save();
        }
        if (isset($userInput['7+beauty']) || isset($userInput['7+style']) || isset($userInput['7+personality'])){
            $newScore7 = new scores;
            $newScore7->name = 'Dahlia';
            if(isset($userInput['7+beauty'])){
            $newScore7->beauty = $userInput['7+beauty'];
            }
            if(isset($userInput['7+style'])){
            $newScore7->style = $userInput['7+style'];
            }
            if(isset($userInput['7+personality'])){
            $newScore7->personality = $userInput['7+personality'];
            }
            $newScore7->save();
        }
        if (isset($userInput['8+beauty']) || isset($userInput['8+style']) || isset($userInput['8+personality'])){
            $newScore8 = new scores;
            $newScore8->name = 'Gumbo';
            if(isset($userInput['8+beauty'])){
            $newScore8->beauty = $userInput['8+beauty'];
            }
            if(isset($userInput['8+style'])){
            $newScore8->style = $userInput['8+style'];
            }
            if(isset($userInput['8+personality'])){
            $newScore8->personality = $userInput['8+personality'];
            }
            $newScore8->save();
        }
        if (isset($userInput['9+beauty']) || isset($userInput['9+style']) || isset($userInput['9+personality'])){
            $newScore9 = new scores;
            $newScore9->name = 'Beto';
            if(isset($userInput['9+beauty'])){
            $newScore9->beauty = $userInput['9+beauty'];
            }
            if(isset($userInput['9+style'])){
            $newScore9->style = $userInput['9+style'];
            }
            if(isset($userInput['9+personality'])){
            $newScore9->personality = $userInput['9+personality'];
            }
            $newScore9->save();
        }
        if (isset($userInput['10+beauty']) || isset($userInput['10+style']) || isset($userInput['10+personality'])){
            $newScore10 = new scores;
            $newScore10->name = 'Kilo';
            if(isset($userInput['10+beauty'])){
            $newScore10->beauty = $userInput['10+beauty'];
            }
            if(isset($userInput['10+style'])){
            $newScore10->style = $userInput['10+style'];
            }
            if(isset($userInput['10+personality'])){
            $newScore10->personality = $userInput['10+personality'];
            }
            $newScore10->save();
        }
        if (isset($userInput['11+beauty']) || isset($userInput['11+style']) || isset($userInput['11+personality'])){
            $newScore11 = new scores;
            $newScore11->name = 'Blink';
            if(isset($userInput['11+beauty'])){
            $newScore11->beauty = $userInput['11+beauty'];
            }
            if(isset($userInput['11+style'])){
            $newScore11->style = $userInput['11+style'];
            }
            if(isset($userInput['11+personality'])){
            $newScore11->personality = $userInput['11+personality'];
            }
            $newScore11->save();
        }
        if (isset($userInput['12+beauty']) || isset($userInput['12+style']) || isset($userInput['12+personality'])){
            $newScore12 = new scores;
            $newScore12->name = 'Chancho';
            if(isset($userInput['12+beauty'])){
            $newScore12->beauty = $userInput['12+beauty'];
            }
            if(isset($userInput['12+style'])){
            $newScore12->style = $userInput['12+style'];
            }
            if(isset($userInput['12+personality'])){
            $newScore12->personality = $userInput['12+personality'];
            }
            $newScore12->save();
        }
        if (isset($userInput['13+beauty']) || isset($userInput['13+style']) || isset($userInput['13+personality'])){
            $newScore13 = new scores;
            $newScore13->name = 'Carlton';
            if(isset($userInput['13+beauty'])){
            $newScore13->beauty = $userInput['13+beauty'];
            }
            if(isset($userInput['13+style'])){
            $newScore13->style = $userInput['13+style'];
            }
            if(isset($userInput['13+personality'])){
            $newScore13->personality = $userInput['13+personality'];
            }
            $newScore13->save();
        }
        if (isset($userInput['14+beauty']) || isset($userInput['14+style']) || isset($userInput['14+personality'])){
            $newScore14 = new scores;
            $newScore14->name = 'Hammy';
            if(isset($userInput['14+beauty'])){
            $newScore14->beauty = $userInput['14+beauty'];
            }
            if(isset($userInput['14+style'])){
            $newScore14->style = $userInput['14+style'];
            }
            if(isset($userInput['14+personality'])){
            $newScore14->personality = $userInput['14+personality'];
            }
            $newScore14->save();
        }
        if (isset($userInput['15+beauty']) || isset($userInput['15+style']) || isset($userInput['15+personality'])){
            $newScore15 = new scores;
            $newScore15->name = 'Harriet';
            if(isset($userInput['15+beauty'])){
            $newScore15->beauty = $userInput['15+beauty'];
            }
            if(isset($userInput['15+style'])){
            $newScore15->style = $userInput['15+style'];
            }
            if(isset($userInput['15+personality'])){
            $newScore15->personality = $userInput['15+personality'];
            }
            $newScore15->save();
        }
        
        
        return view('complete');
    }
}
