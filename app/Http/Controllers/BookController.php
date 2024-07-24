<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BookController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $bukus = Buku::where('judul', 'LIKE', "%{$query}%")
                     ->orWhere('pengarang', 'LIKE', "%{$query}%")
                     ->orWhere('deskripsi', 'LIKE', "%{$query}%")
                     ->get();

                     return view('search', ['bukus' => $bukus]);
    }

}
