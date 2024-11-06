<?php



    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    
    class PrendaController extends Controller
    {
    


        public function registroprendas(Request $request)
        {
            
            $validatedData = $request->validate([
                'nombre' => 'required|string|max:150',
                'tipo' => 'required|string|max:150',
                'color' => 'required|string|max:150',
                'cantidad' => 'required|integer|min:1'
            ]);
    
            return response()->json([
                'success' => true,
                'message' => 'Prenda registrada exitosamente',
                'data' => $validatedData
            ]);

            return view('registroprendas');
        
        }
    }
    


