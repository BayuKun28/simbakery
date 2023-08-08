<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables as Datatables;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $menu = Menu::where('parent_id', NULL)->get();
        $data['component'] = [
            'title' => 'Manajemen Menu',
        ];
        return view('menu.menu', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function get_ajax_list(Request $request)
    {

        if ($request->ajax()) {
            $query = "SELECT a.id, a.name, a.url, b.name as parentmenu, a.ord 
                        FROM menu a
                            LEFT JOIN menu b on b.id = a.parent_id 
                        ORDER BY id ASC";
            $data = DB::select($query);
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-warning mb-10 btn-sm editMenu"><i class="ti ti-edit"></i>';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger mb-10 btn-sm deleteMenu"><i class="ti ti-trash"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'menu'  => 'required',
                'url'   => 'required',
                'order' => 'required',
            ],
            [
                'menu.required'  => 'Kolom Menu Harus Diisi',
                'url.required'   => 'Kolom URL Harus Diisi',
                'order.required' => 'Kolom Order Harus Diisi',
            ]
        );

        Menu::create(
            [
                'name'      => $request->menu,
                'url'       => $request->url,
                'parent_id' => $request->parent,
                'ord'       => $request->order,
                'icon'      => $request->icon
            ]
        );

        return response()->json(['success' => 'Data Berhasil Disimpan']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
