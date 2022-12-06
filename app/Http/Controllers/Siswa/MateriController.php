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
        //    $i = OpenMateri::where('user_id',auth()->user()->id)
        //                 ->where('status',0)
        //                 ->get()
        //                 ->count();
            // if ($i==0) {
            //     OpenMateri::updateOrCreate([
            //         'user_id' => auth()->user()->id,
            //         'materi_code' =>'penjumlahanbiasa',
            //         'status' => 0
            //     ],[
            //         'user_id' => auth()->user()->id,
            //         'materi_code' =>'penjumlahanbiasa',
            //     ]);
            // }
           return view('frontend.siswa.pengertian');

        //penjumlahan biasa
        }else  if ($request->q=="penjumlahanbiasa") {
            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','penjumlahancampuran')
                                ->first();
            // $data = [
            //     'materi_code' =>$request->q,
            //     'status' => 0
            // ];
            // OpenMateri::updateOrCreate([
            //     'user_id' => auth()->user()->id,
            //     'materi_code' =>$request->q,
            // ],$data);

            return view('frontend.siswa.penjumlahanbiasa',compact('next'));

         //penjumlahan campuran   
         }else  if ($request->q=="penjumlahancampuran") {
            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','penjumlahandesimal')
                                ->first();
           $isOpen = OpenMateri::where('user_id',auth()->user()->id)
                        ->where('materi_code','penjumlahancampuran')
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
            // OpenMateri::updateOrCreate([
            //     'user_id' => auth()->user()->id,
            //     'materi_code' =>$request->q,
            //     'status' => 0
            // ],[
            //     'user_id' => auth()->user()->id,
            //     'materi_code' =>$request->q,
            // ]);
            return view('frontend.siswa.penjumlahancampuran',compact('next'));
         }

         //penjumlahan desimal
         else  if ($request->q=="penjumlahandesimal") {
            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','penguranganbiasa')
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
            //  OpenMateri::updateOrCreate([
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //      'status' => 0
            //  ],[
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //  ]);
             return view('frontend.siswa.penjumlahandesimal',compact('next'));
          }

          //pengurangan biasa
          else  if ($request->q=="penguranganbiasa") {
            $next = OpenMateri::orderBy('id','asc')
                            ->where('materi_code','pengurangancampuran')
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
            //  OpenMateri::updateOrCreate([
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //      'status' => 0
            //  ],[
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //  ]);
             return view('frontend.siswa.penguranganbiasa',compact('next'));
          }

          //Pengurangancampuran
          else  if ($request->q=="pengurangancampuran") {
            $next = OpenMateri::orderBy('id','asc')
                            ->where('materi_code','pengurangandesimal')
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
            //  OpenMateri::updateOrCreate([
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //      'status' => 0
            //  ],[
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //  ]);
             return view('frontend.siswa.pengurangancampuran',compact('next'));
          }

          //pengurangan desimal
          else  if ($request->q=="pengurangandesimal") {
            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','rangkuman_1')
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
                 toastr()->error('Selesaikan Materi '.$lastMateri->materi_code, 'Lock!');
                 return redirect()->route('siswa.materi',['q' => $lastMateri->materi_code]);
             }
            //  OpenMateri::updateOrCreate([
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //      'status' => 0
            //  ],[
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //  ]);
             return view('frontend.siswa.pengurangandesimal',compact('next'));
          }

          //Rangkuman 1
          else  if ($request->q=="rangkuman_1") {
            $isOpen = OpenMateri::where('user_id',auth()->user()->id)
                         ->where('materi_code','rangkuman_1')
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
            //  OpenMateri::updateOrCreate([
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //      'status' => 0
            //  ],[
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //  ]);
             return view('frontend.siswa.rangkuman_1');
          }

          //perkalian biasa
          else  if ($request->q=="perkalianbiasa") {
            $next = OpenMateri::orderBy('id','asc')
                            ->where('materi_code','perkaliancampuran')
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
            //  OpenMateri::updateOrCreate([
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //      'status' => 0
            //  ],[
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //  ]);
             return view('frontend.siswa.perkalianbiasa',compact('next'));
          }

          //perkalian campuran
          else  if ($request->q=="perkaliancampuran") {
            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','perkaliandesimal')
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
            //  OpenMateri::updateOrCreate([
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //      'status' => 0
            //  ],[
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //  ]);
             return view('frontend.siswa.perkaliancampuran',compact('next'));
          }

          //perkalian desimal
          else  if ($request->q=="perkaliandesimal") {
            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','pembagianbiasa')
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
            //  OpenMateri::updateOrCreate([
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //      'status' => 0
            //  ],[
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //  ]);
             return view('frontend.siswa.perkaliandesimal',compact('next'));
          }

          //pembagian biasa
          else  if ($request->q=="pembagianbiasa") {
            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','pembagiancampuran')
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
            //  OpenMateri::updateOrCreate([
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //      'status' => 0
            //  ],[
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //  ]);
             
             return view('frontend.siswa.pembagianbiasa',compact('next'));
          }

          //pembagian campuran
          else  if ($request->q=="pembagiancampuran") {
            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','pembagiandesimal')
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
            //  OpenMateri::updateOrCreate([
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //      'status' => 0
            //  ],[
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //  ]);
             return view('frontend.siswa.pembagiancampuran',compact('next'));
          }

          //pembagian desimal
          else  if ($request->q=="pembagiandesimal") {
            $next = OpenMateri::orderBy('id','asc')
                                ->where('materi_code','rangkuman_2')
                                ->first();

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
                 toastr()->error('Selesaikan Materi '.$lastMateri->materi_code, 'Lock!');
                 return redirect()->route('siswa.materi',['q' => $lastMateri->materi_code]);
             }
            //  OpenMateri::updateOrCreate([
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //      'status' => 0
            //  ],[
            //      'user_id' => auth()->user()->id,
            //      'materi_code' =>$request->q,
            //  ]);
             return view('frontend.siswa.pembagiandesimal',compact('next'));
          }

            //Rangkuman 2
            else  if ($request->q=="rangkuman_2") {
                $isOpen = OpenMateri::where('user_id',auth()->user()->id)
                             ->where('materi_code','rangkuman_2')
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
                 OpenMateri::updateOrCreate([
                     'user_id' => auth()->user()->id,
                     'materi_code' =>$request->q,
                     'status' => 0
                 ],[
                     'user_id' => auth()->user()->id,
                     'materi_code' =>$request->q,
                 ]);
                 return view('frontend.siswa.rangkuman_2');
              }
          
        return view('frontend.siswa.pengertian');

    }
    public function store(Request $request)
    {
        // dd($request->all());
        $userId = auth()->user()->id;

        //materi saat ini
        $data = [
            'materi_code' =>$request->nextmateri,
            'status' => 1
        ];
        OpenMateri::updateOrCreate([
            'user_id' => auth()->user()->id,
            'materi_code' =>$request->nextmateri,
        ],$data);

        // return view('frontend.siswa.'.$request->nextmateri);
        return redirect()->route('siswa.materi',['q' => $request->nextmateri]);

    }
}
