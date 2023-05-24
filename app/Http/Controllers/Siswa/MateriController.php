<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\OpenMateri;
class MateriController extends Controller
{
    public function index(Request $request)
    {  
        //pengertian
        if ($request->q=="pengertian") {
            OpenMateri::updateOrCreate([
                  'user_id' => auth()->user()->id,
                  'materi_code' =>$request->q,
            ],[
                  'user_id' => auth()->user()->id,
                  'materi_code' =>$request->q,
                  'status' => 1
            ]);

            $this->listing_materi();

            $next = OpenMateri::orderBy('id','asc')
                              ->where('materi_code','penjumlahanbiasa')
                              ->where('user_id',auth()->user()->id)
                              ->first();

           return view('frontend.siswa.pengertian',compact('next'));

        //penjumlahan biasa
        }else  if ($request->q=="penjumlahanbiasa") {
            $isOpen = OpenMateri::where('user_id',auth()->user()->id)
                     ->where('materi_code',$request->q)
                     ->where('status',1)
                     ->get()
                     ->count();
            if ($isOpen==0) {
               OpenMateri::updateOrCreate([
                  'user_id' => auth()->user()->id,
                  'materi_code' =>$request->q,
               ],[
                     'user_id' => auth()->user()->id,
                     'materi_code' =>$request->q,
                     'status' => 0
               ]);
            }
           
            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','penjumlahancampuran')
                                ->where('user_id',auth()->user()->id)
                                ->first();

            return view('frontend.siswa.penjumlahanbiasa',compact('next'));

         //penjumlahan campuran   
         }else  if ($request->q=="penjumlahancampuran") {
            $isOpenNow = OpenMateri::where('user_id',auth()->user()->id)
                     ->where('materi_code',$request->q)
                     ->first();
            if (!$isOpenNow) {
               OpenMateri::updateOrCreate([
                  'user_id' => auth()->user()->id,
                  'materi_code' =>$request->q,
               ],[
                     'user_id' => auth()->user()->id,
                     'materi_code' =>$request->q,
                     'status' => 0
               ]);
            }

            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','penjumlahandesimal')
                                ->where('user_id',auth()->user()->id)
                                ->first();

           $isOpenBefore = OpenMateri::where('user_id',auth()->user()->id)
                        ->where('materi_code','penjumlahanbiasa')
                        ->where('status',1)
                        ->get()
                        ->count();
           
            if ($isOpenBefore==0) {
               $lastMateri = OpenMateri::orderBy('id','asc')
                        ->where('user_id',auth()->user()->id)
                        ->where('status',0)
                        ->first();
                toastr()->error('Selesaikan Materi '.$lastMateri->materi_code, 'Lock!');
                return redirect()->route('siswa.materi',['q' => $lastMateri->materi_code]);
            }
            return view('frontend.siswa.penjumlahancampuran',compact('next'));
         }

         //penjumlahan desimal
         else  if ($request->q=="penjumlahandesimal") {
            $isOpenNow = OpenMateri::where('user_id',auth()->user()->id)
                     ->where('materi_code',$request->q)
                     ->first();
            if (!$isOpenNow) {
               OpenMateri::updateOrCreate([
                  'user_id' => auth()->user()->id,
                  'materi_code' =>$request->q,
               ],[
                     'user_id' => auth()->user()->id,
                     'materi_code' =>$request->q,
                     'status' => 0
               ]);
            }
            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','penguranganbiasa')
                                ->where('user_id',auth()->user()->id)
                                ->first();

            $isOpenBefore = OpenMateri::where('user_id',auth()->user()->id)
                         ->where('materi_code','penjumlahancampuran')
                         ->where('status',1)
                         ->get()
                         ->count();
             if ($isOpenBefore==0) {
                $lastMateri = OpenMateri::orderBy('id','asc')
                         ->where('user_id',auth()->user()->id)
                         ->where('status',0)
                         ->first();
                 toastr()->error('Selesaikan Materi '.$lastMateri->materi_code, 'Lock!');
                 return redirect()->route('siswa.materi',['q' => $lastMateri->materi_code]);
             }
             return view('frontend.siswa.penjumlahandesimal',compact('next'));
          }

          //pengurangan biasa
          else  if ($request->q=="penguranganbiasa") {
            $isOpenNow = OpenMateri::where('user_id',auth()->user()->id)
                     ->where('materi_code',$request->q)
                     ->first();
            if (!$isOpenNow) {
               OpenMateri::updateOrCreate([
                  'user_id' => auth()->user()->id,
                  'materi_code' =>$request->q,
               ],[
                     'user_id' => auth()->user()->id,
                     'materi_code' =>$request->q,
                     'status' => 0
               ]);
            }
            $next = OpenMateri::orderBy('id','asc')
                            ->where('materi_code','pengurangancampuran')
                            ->where('user_id',auth()->user()->id)
                            ->first();

            $isOpen = OpenMateri::where('user_id',auth()->user()->id)
                         ->where('materi_code','penjumlahandesimal')
                         ->where('status',1)
                         ->get()
                         ->count();
             if ($isOpen==0) {
                $lastMateri = OpenMateri::orderBy('id','asc')
                         ->where('user_id',auth()->user()->id)
                         ->where('status',0)
                         ->first();
                 toastr()->error('Selesaikan Materi '.$lastMateri->materi_code, 'Lock!');
                 return redirect()->route('siswa.materi',['q' => $lastMateri->materi_code]);
             }
             return view('frontend.siswa.penguranganbiasa',compact('next'));
          }

          //Pengurangancampuran
          else  if ($request->q=="pengurangancampuran") {
            $isOpenNow = OpenMateri::where('user_id',auth()->user()->id)
                     ->where('materi_code',$request->q)
                     ->first();
            if (!$isOpenNow) {
               OpenMateri::updateOrCreate([
                  'user_id' => auth()->user()->id,
                  'materi_code' =>$request->q,
               ],[
                     'user_id' => auth()->user()->id,
                     'materi_code' =>$request->q,
                     'status' => 0
               ]);
            }
            $next = OpenMateri::orderBy('id','asc')
                            ->where('materi_code','pengurangandesimal')
                            ->where('user_id',auth()->user()->id)
                            ->first();

            $isOpen = OpenMateri::where('user_id',auth()->user()->id)
                         ->where('materi_code','penguranganbiasa')
                         ->where('status',1)
                         ->get()
                         ->count();
             if ($isOpen==0) {
                $lastMateri = OpenMateri::orderBy('id','asc')
                         ->where('user_id',auth()->user()->id)
                         ->where('status',0)
                         ->first();
                 toastr()->error('Selesaikan Materi '.$lastMateri->materi_code, 'Lock!');
                 return redirect()->route('siswa.materi',['q' => $lastMateri->materi_code]);
             }
             return view('frontend.siswa.pengurangancampuran',compact('next'));
          }

          //pengurangan desimal
          
          else  if ($request->q=="pengurangandesimal") {
            $isOpenNow = OpenMateri::where('user_id',auth()->user()->id)
                     ->where('materi_code',$request->q)
                     ->first();
            if (!$isOpenNow) {
               OpenMateri::updateOrCreate([
                  'user_id' => auth()->user()->id,
                  'materi_code' =>$request->q,
               ],[
                     'user_id' => auth()->user()->id,
                     'materi_code' =>$request->q,
                     'status' => 0
               ]);
            }
            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','rangkuman_1')
                                ->where('user_id',auth()->user()->id)
                                ->first();


            $isOpen = OpenMateri::where('user_id',auth()->user()->id)
                         ->where('materi_code','pengurangancampuran')
                         ->where('status',1)
                         ->get()
                         ->count();
             if ($isOpen==0) {
                $lastMateri = OpenMateri::orderBy('id','asc')
                         ->where('user_id',auth()->user()->id)
                         ->where('status',0)
                         ->first();
                 toastr()->error('Selesaikan Materi '.$lastMateri->materi_code, 'Lock!');
                 return redirect()->route('siswa.materi',['q' => $lastMateri->materi_code]);
             }
             return view('frontend.siswa.pengurangandesimal',compact('next'));
          }

          //Rangkuman 1
          else  if ($request->q=="rangkuman_1") {
            $isOpenNow = OpenMateri::where('user_id',auth()->user()->id)
                     ->where('materi_code',$request->q)
                     ->first();
            if (!$isOpenNow) {
               OpenMateri::updateOrCreate([
                  'user_id' => auth()->user()->id,
                  'materi_code' =>$request->q,
               ],[
                     'user_id' => auth()->user()->id,
                     'materi_code' =>$request->q,
                     'status' => 0
               ]);
            }
            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','bab-1')
                                ->where('user_id',auth()->user()->id)
                                ->first();

            $isOpen = OpenMateri::where('user_id',auth()->user()->id)
                         ->where('materi_code','pengurangandesimal')
                         ->where('status',1)
                         ->get()
                         ->count();

             if ($isOpen==0) {
                $lastMateri = OpenMateri::orderBy('id','asc')
                         ->where('user_id',auth()->user()->id)
                         ->where('status',0)
                         ->first();

                 $lastMateri2 = OpenMateri::orderBy('id','desc')
                         ->where('user_id',auth()->user()->id)
                         ->where('status',1)
                         ->first();
                        //  dd($lastMateri->materi_code);
                 toastr()->error('Selesaikan Materi Sebelumnya', 'Lock!');
                if (!$lastMateri->materi_code == $request->q) {
                  return redirect()->route('siswa.materi',['q' => $lastMateri->materi_code]);
                }else{
                  return redirect()->route('siswa.materi',['q' => $lastMateri2->materi_code]);
                }
             }
             return view('frontend.siswa.rangkuman_1',compact('next'));
          }

          //perkalian biasa
          else  if ($request->q=="perkalianbiasa") {
            $isOpenNow = OpenMateri::where('user_id',auth()->user()->id)
                     ->where('materi_code',$request->q)
                     ->first();
            if (!$isOpenNow) {
               OpenMateri::updateOrCreate([
                  'user_id' => auth()->user()->id,
                  'materi_code' =>$request->q,
               ],[
                     'user_id' => auth()->user()->id,
                     'materi_code' =>$request->q,
                     'status' => 0
               ]);
            }
            $next = OpenMateri::orderBy('id','asc')
                            ->where('materi_code','perkaliancampuran')
                            ->where('user_id',auth()->user()->id)
                            ->first();

            $isOpen = OpenMateri::where('user_id',auth()->user()->id)
                         ->where('materi_code','rangkuman_1')
                         ->where('status',1)
                         ->get()
                         ->count();

            $lastkuis = OpenMateri::where('user_id',auth()->user()->id)
                         ->where('materi_code','bab-1')
                         ->where('status',1)
                         ->get()
                         ->count();

             if ($isOpen==0) {
                $lastMateri = OpenMateri::orderBy('id','asc')
                         ->where('user_id',auth()->user()->id)
                         ->where('status',0)
                         ->first();
                 toastr()->error('Selesaikan Materi '.$lastMateri->materi_code, 'Lock!');
                 return redirect()->route('siswa.materi',['q' => $lastMateri->materi_code]);
             }
             return view('frontend.siswa.perkalianbiasa',compact('next', 'lastkuis'));
          }

          //perkalian campuran
          else  if ($request->q=="perkaliancampuran") {
            $isOpenNow = OpenMateri::where('user_id',auth()->user()->id)
                     ->where('materi_code',$request->q)
                     ->first();
            if (!$isOpenNow) {
               OpenMateri::updateOrCreate([
                  'user_id' => auth()->user()->id,
                  'materi_code' =>$request->q,
               ],[
                     'user_id' => auth()->user()->id,
                     'materi_code' =>$request->q,
                     'status' => 0
               ]);
            }
            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','perkaliandesimal')
                                ->where('user_id',auth()->user()->id)
                                ->first();

            $isOpen = OpenMateri::where('user_id',auth()->user()->id)
                         ->where('materi_code','perkalianbiasa')
                         ->where('status',1)
                         ->get()
                         ->count();
             if ($isOpen==0) {
                $lastMateri = OpenMateri::orderBy('id','asc')
                         ->where('user_id',auth()->user()->id)
                         ->where('status',0)
                         ->first();
                 toastr()->error('Selesaikan Materi '.$lastMateri->materi_code, 'Lock!');
                 return redirect()->route('siswa.materi',['q' => $lastMateri->materi_code]);
             }
             return view('frontend.siswa.perkaliancampuran',compact('next'));
          }

          //perkalian desimal
          else  if ($request->q=="perkaliandesimal") {
            $isOpenNow = OpenMateri::where('user_id',auth()->user()->id)
                     ->where('materi_code',$request->q)
                     ->first();
            if (!$isOpenNow) {
               OpenMateri::updateOrCreate([
                  'user_id' => auth()->user()->id,
                  'materi_code' =>$request->q,
               ],[
                     'user_id' => auth()->user()->id,
                     'materi_code' =>$request->q,
                     'status' => 0
               ]);
            }
            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','pembagianbiasa')
                                ->where('user_id',auth()->user()->id)
                                ->first();

            $isOpen = OpenMateri::where('user_id',auth()->user()->id)
                         ->where('materi_code','perkaliancampuran')
                         ->where('status',1)
                         ->get()
                         ->count();
             if ($isOpen==0) {
                $lastMateri = OpenMateri::orderBy('id','asc')
                         ->where('user_id',auth()->user()->id)
                         ->where('status',0)
                         ->first();
                 toastr()->error('Selesaikan Materi '.$lastMateri->materi_code, 'Lock!');
                 return redirect()->route('siswa.materi',['q' => $lastMateri->materi_code]);
             }
             return view('frontend.siswa.perkaliandesimal',compact('next'));
          }

          //pembagian biasa
          else  if ($request->q=="pembagianbiasa") {
            $isOpenNow = OpenMateri::where('user_id',auth()->user()->id)
                     ->where('materi_code',$request->q)
                     ->first();
            if (!$isOpenNow) {
               OpenMateri::updateOrCreate([
                  'user_id' => auth()->user()->id,
                  'materi_code' =>$request->q,
               ],[
                     'user_id' => auth()->user()->id,
                     'materi_code' =>$request->q,
                     'status' => 0
               ]);
            }
            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','pembagiancampuran')
                                ->where('user_id',auth()->user()->id)
                                ->first();

            $isOpen = OpenMateri::where('user_id',auth()->user()->id)
                         ->where('materi_code','perkaliandesimal')
                         ->where('status',1)
                         ->get()
                         ->count();
             if ($isOpen==0) {
                $lastMateri = OpenMateri::orderBy('id','asc')
                         ->where('user_id',auth()->user()->id)
                         ->where('status',0)
                         ->first();
                 toastr()->error('Selesaikan Materi '.$lastMateri->materi_code, 'Lock!');
                 return redirect()->route('siswa.materi',['q' => $lastMateri->materi_code]);
             }
             return view('frontend.siswa.pembagianbiasa',compact('next'));
          }

          //pembagian campuran
          else  if ($request->q=="pembagiancampuran") {
            $isOpenNow = OpenMateri::where('user_id',auth()->user()->id)
                     ->where('materi_code',$request->q)
                     ->first();
            if (!$isOpenNow) {
               OpenMateri::updateOrCreate([
                  'user_id' => auth()->user()->id,
                  'materi_code' =>$request->q,
               ],[
                     'user_id' => auth()->user()->id,
                     'materi_code' =>$request->q,
                     'status' => 0
               ]);
            }
            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','pembagiandesimal')
                                ->where('user_id',auth()->user()->id)
                                ->first();

            $isOpen = OpenMateri::where('user_id',auth()->user()->id)
                         ->where('materi_code','pembagianbiasa')
                         ->where('status',1)
                         ->get()
                         ->count();
             if ($isOpen==0) {
                $lastMateri = OpenMateri::orderBy('id','asc')
                         ->where('user_id',auth()->user()->id)
                         ->where('status',0)
                         ->first();
                 toastr()->error('Selesaikan Materi '.$lastMateri->materi_code, 'Lock!');
                 return redirect()->route('siswa.materi',['q' => $lastMateri->materi_code]);
             }
             return view('frontend.siswa.pembagiancampuran',compact('next'));
          }

          //pembagian desimal
          else  if ($request->q=="pembagiandesimal") {
            $isOpenNow = OpenMateri::where('user_id',auth()->user()->id)
                     ->where('materi_code',$request->q)
                     ->first();
            if (!$isOpenNow) {
               OpenMateri::updateOrCreate([
                  'user_id' => auth()->user()->id,
                  'materi_code' =>$request->q,
               ],[
                     'user_id' => auth()->user()->id,
                     'materi_code' =>$request->q,
                     'status' => 0
               ]);
            }
            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','rangkuman_2')
                                ->where('user_id',auth()->user()->id)
                                ->first();

            $isOpen = OpenMateri::where('user_id',auth()->user()->id)
                         ->where('materi_code','pembagiancampuran')
                         ->where('status',1)
                         ->get()
                         ->count();
             if ($isOpen==0) {
                $lastMateri = OpenMateri::orderBy('id','asc')
                         ->where('user_id',auth()->user()->id)
                         ->where('status',0)
                         ->first();
                 toastr()->error('Selesaikan Materi '.$lastMateri->materi_code, 'Lock!');
                 return redirect()->route('siswa.materi',['q' => $lastMateri->materi_code]);
             }
             return view('frontend.siswa.pembagiandesimal',compact('next'));
          }

            //Rangkuman 2
            else  if ($request->q=="rangkuman_2") {
               $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','bab-1')
                                ->where('user_id',auth()->user()->id)
                                ->first();

               $isOpenNow = OpenMateri::where('user_id',auth()->user()->id)
                     ->where('materi_code',$request->q)
                     ->first();
               if (!$isOpenNow) {
                  OpenMateri::updateOrCreate([
                     'user_id' => auth()->user()->id,
                     'materi_code' =>$request->q,
                  ],[
                        'user_id' => auth()->user()->id,
                        'materi_code' =>$request->q,
                        'status' => 0
                  ]);
               }
                $isOpen = OpenMateri::where('user_id',auth()->user()->id)
                             ->where('materi_code','pembagiandesimal')
                             ->where('status',1)
                             ->get()
                             ->count();
                 if ($isOpen==0) {
                    $lastMateri = OpenMateri::orderBy('id','asc')
                             ->where('user_id',auth()->user()->id)
                             ->where('status',0)
                             ->first();

                     $lastMateri2 = OpenMateri::orderBy('id','desc')
                             ->where('user_id',auth()->user()->id)
                             ->where('status',1)
                             ->first();
                     toastr()->error('Selesaikan Materi sebelumnya', 'Lock!');
                     if (!$lastMateri->materi_code == $request->q) {
                        return redirect()->route('siswa.materi',['q' => $lastMateri->materi_code]);
                      }else{
                        return redirect()->route('siswa.materi',['q' => $lastMateri2->materi_code]);
                      }
                 }
                //  OpenMateri::updateOrCreate([
                //      'user_id' => auth()->user()->id,
                //      'materi_code' =>$request->q,
                //      'status' => 0
                //  ],[
                //      'user_id' => auth()->user()->id,
                //      'materi_code' =>$request->q,
                //  ]);
                 return view('frontend.siswa.rangkuman_2',compact('next'));
              }
          
        return view('frontend.siswa.pengertian');

    }
    public function store(Request $request)
    {
      //  dd($request->all());
        $userId = auth()->user()->id;
        $lanjut = $request->nextmateri;
   
        OpenMateri::updateOrCreate([
            'user_id' => auth()->user()->id,
            'materi_code' => $request->materi_code,
        ],[
            'materi_code' => $request->materi_code,
            'status' => 1
        ]);

        if ($lanjut == 'bab-1' || $lanjut == 'bab-2' || $lanjut == 'evaluasi') {
            return redirect()->route('siswa.quiz',$lanjut);
        } else {
            return redirect()->route('siswa.materi',['q' =>$lanjut]);
        }
        
    }

    public function listing_materi()
    {
       $list = array(
         "pengertian",
         "penjumlahanbiasa",
         "penjumlahancampuran",
         "penjumlahandesimal",
         "penguranganbiasa",
         "pengurangancampuran",
         "pengurangandesimal",
         "rangkuman_1",
         "bab-1",
         "perkalianbiasa",
         "perkaliancampuran",
         "perkaliandesimal",
         "pembagianbiasa",
         "pembagiancampuran",
         "pembagiandesimal",
         "rangkuman_2",
         "bab-2",
         "evaluasi-akhir"

       );
       foreach ($list as $data) {
         $isDone = OpenMateri::where('user_id',auth()->user()->id)
                     ->where('materi_code',$data)
                     ->where('status',1)
                     ->count();
         if ($isDone==0) {
            OpenMateri::updateOrCreate([
               'user_id' => auth()->user()->id,
               'materi_code' =>$data,
            ],[
                  'user_id' => auth()->user()->id,
                  'materi_code' =>$data,
                  'status' => 0
            ]);
         }
       }
    }
}
