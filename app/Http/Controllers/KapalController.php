<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KapalModel;
use Dompdf\Dompdf;

class KapalController extends Controller
{
     public function __construct()
    {
        $this->KapalModel = new KapalModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $kapal = KapalModel::all();
        //dd($kapal);
        return view('kapal.v_kapal', compact('kapal'));
    }

    public function add_kapal()
    {
        $kapal = KapalModel::all();
        return view('kapal.v_kapal', compact('kapal'));
    }

    public function edit_kapal($id)
    {
        $kapal = KapalModel::find($id);
        return view('kapal.v_kapal', compact('kapal'));
    }

    public function insert_kapal(Request $request)
    {
         Request()->validate([
            'source_id' => 'required',
            'pemilik_kapal' => 'required',
            'foto_kapal' => 'required',
            'crew' => 'required',
            'contact' => 'required',
        ],[
            'source_id.required'=>' source id wajib diisi !!',
            'pemilik_kapal.required'=>' pemilik kapal wajib diisi !!',
            'foto_kapal.required' => 'foto kapal wajib diisi !!',
            'crew.required' => 'crew wajib diisi !!',
            'contact.required' => 'contact ikan wajib diisi !!',
        ]);

        $file = $request->file('foto_kapal');
        $file->move('foto_kapal',$file->getClientOriginalName());
        $kapal = [
            'source_id' => Request()->source_id,
            'pemilik_kapal' => Request()->pemilik_kapal,
            'foto_kapal' => $file->getClientOriginalName(),
            'crew' => Request()->crew,
            'contact' => Request()->contact,
        ];
        $this->KapalModel->addData($kapal);
        return redirect()->route('kapal')->with('pesan', 'Data berhasil ditambahkan!');
    }

    public function update_kapal(Request $request)
    {
        $id = Request()->id;
        Request()->validate([
            'source_id' => 'required',
            'pemilik_kapal' => 'required',
            'foto_kapal' => 'required',
            'crew' => 'required',
            'contact' => 'required',
        ],[
            'source_id.required'=>' source id wajib diisi !!',
            'pemilik_kapal.required'=>' pemilik kapal wajib diisi !!',
            'foto_kapal.required' => 'foto kapal wajib diisi !!',
            'crew.required' => 'crew wajib diisi !!',
            'contact.required' => 'contact ikan wajib diisi !!',
        ]);
            if (request()->foto_kapal <> "") {
            ///jika ingin ganti foto
            $file = $request->file('foto_kapal');
            $file->move('foto_kapal',$file->getClientOriginalName());
            // dd($file->getClientOriginalName());
            $kapal = [
                'source_id' => Request()->source_id,
                'pemilik_kapal' => Request()->pemilik_kapal,
                'foto_kapal' => $file->getClientOriginalName(),
                'crew' => Request()->crew,
                'contact' => Request()->contact,
        ];
            $this->KapalModel->editData(Request()->id,$kapal);
            } else{
                ///jika tidak ingin ganti foto
                $kapal = [
                'source_id' => Request()->source_id,
                'pemilik_kapal' => Request()->pemilik_kapal,
                'crew' => Request()->crew,
                'contact' => Request()->contact,
            ];
                $this->KapalModel->editData(Request()->id,$kapal);
            }
            return redirect()->route('kapal')->with('pesan','data berhasil di update!!!');
    }

    public function delete_kapal($id)
    {
        $kapal = KapalModel::find($id);
        $kapal->delete();
        return redirect()->route('kapal');
    }

    public function printer_kapal()
    {
        $kapal = KapalModel::all();
        return view('kapal.v_printer_kapal', compact('kapal'));
    }

    public function printpdf_kapal()
    {
        $kapal = KapalModel::all();
        $html = view('kapal.v_printpdf_kapal', compact('kapal'));

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream();
    }
}
