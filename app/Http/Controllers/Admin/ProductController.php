<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ImageProduct;
use App\Product;
use App\CateProduct;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product')->with('products',Product::paginate(20));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = CateProduct::where('type_cate',0)->get();
        return view('admin.new_product')->with('data',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
       $validatedData = $req->validate([
        'name_pro' => 'required',
        'detail_pro' => 'required',
        'desc_pro' => 'required',
        'cate_1' => 'required',
        'cate_2' => 'required',
        'cate_3' => 'required'

    ]);
       $data = new Product;
       $data->name_pro= $req->name_pro;
       $data->detail_pro= $req->detail_pro;
       $data->desc_pro= $req->desc_pro;
       $data->cate_parent= 0;
       $data->color= $req->color;

       $data->size_pro= $req->size_pro;
       $data->price= $req->price_pro;
       $data->detailplus_pro= $req->detailplus_pro;
       $data->seo_desc= $req->seo_desc;
       $data->seo_title= $req->name_pro;
       $data->cate_1= $req->cate_1;
       $data->cate_2= $req->cate_2;
       $data->cate_3= $req->cate_3;
       $data->slug_pro = Str::slug($req->name_pro, "-");
       $data->save();
       session(['id_pro' =>$data->id_pro]);

        return redirect()->back()->with('success', 'Tạo thành công, vui lòng chọn các ảnh cho sản phẩm, nếu không sản phẩm sẽ không được bán');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res=Product::where('id_pro',$id)->delete();
        return redirect()->back();
    }
    public function insert_cate(Request $r)
    {
        $data = new CateProduct;
        $data->name_cate= $r->name_cate;

        $data->parent_id= $r->parent_id;
        $type=0;
        if ($r->cate1) {
            $type=1;
        }
        if ($r->cate2) {
            $type=2;
        }

        $data->type_cate = $type;
        $data->slug_cate = Str::slug($r->name_cate, "-");
        $data->save();
        return redirect()->back()->with('success', 'Tạo danh mục thành công,');   

    }
    public function load_cate()
    {
        $data= CateProduct::where('type_cate',0)->get();
        $html='';
        if (count($data)) {
            foreach ($data as $key => $v) {
            $html.='<option value="'.$v->id_cate.'">'.$v->name_cate.'</option>';
            }
        }
        
        echo($html);
    }
    public function load_cate1(Request $r)
    {
        $data= CateProduct::where('parent_id',$r->id_cate)->get();
        $html='';
        if (count($data)) {
            foreach ($data as $key => $v) {
            $html.='<option value="'.$v->id_cate.'">'.$v->name_cate.'</option>';
            }
        }
        
        echo($html);
    }
    public function cate_parent(Request $r)
    {
        $data = CateProduct::where('parent_id',$r->parent_id)->get();
        $html='';
        foreach ($data as $key => $v) {
            $html.='<option value="'.$v->id_cate.'">'.$v->name_cate.'</option>';
        }
        echo($html);
    }
    function postImages(Request $request)
    {
        if ($request->ajax()) {
            if ($request->hasFile('file')) {
                $imageFiles = $request->file('file');
                // set destination path
                $folderDir = 'uploads/products/';
                $destinationPath = public_path('uploads/products/');
                // this form uploads multiple files
                foreach ($request->file('file') as $fileKey => $fileObject ) {
                    if ($fileObject->isValid()) {
                        $destinationFileName = time() . $fileObject->getClientOriginalName();
                        $fileObject->move($destinationPath, $destinationFileName);
                        $data = new ImageProduct;
                        $data->url_img = $folderDir . $destinationFileName;
                        $data->id_pro =  $request->session()->get('id_pro');;
                        $data->name_img = $destinationFileName;
                        $data->save();
                    }
                }
            }
        }
    }
}
