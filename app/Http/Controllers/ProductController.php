<?php

namespace App\Http\Controllers;
use App\Product;
use App\Stock;
use App\Order_detail;
use App\Order;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployeeExport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

//use Excel;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $response= $products;

        return response()->json($response,200) ;

    }

    public function show($id)
    {
        $products = Product::where('id', $id)->first();
        if(isset($products)){
            $response = $products;

            return response()->json($response,200) ;
        }
        $response = $products;

        return response()->json($response,404) ;
    }

    public function store(Request $request){
        $product = new Product;
        //$stock =Stock::select('id')->where('product_id',$request->id)->get()->last();
        $product->name = $request->name;
        $product->sell_price = $request->sell_price;
        $product->description = $request->description;
        $product->total_q = $request->total_q;
         //////////////////////////////////////farah////////////////////////
        if (isset($request->image)) {
          $image_name = rand() . "." . $request->image->getClientOriginalExtension();
          $product->image =  $image_name;
          $request->image->move('image', $image_name);
        }
       
        $product->color = $request->color;
        $product->size = $request->size;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->user_id = $request->user_id;
        $product->save();

        $response= $product;

        return response()->json($response,200) ;
        }

        public function update(Request $request,$id){
            $product = Product::where('id', $id)->first();
            if(isset($product)){
                if(isset($request->name)){ $product->name = $request->name;}
                if(isset($request->sell_price)){  $product->sell_price = $request->sell_price ;}
                if(isset($request->description)){   $product->description = $request->description;}
                if(isset( $request->total_q)){   $product->total_q = $request->total_q;}
                if(isset($request->color)){  $product->color = $request->color;}
                if(isset( $request->size)){  $product->size = $request->size;}
                if(isset($request->brand_id)){  $product->brand_id = $request->brand_id;}
                if(isset($request->category_id)){  $product->category_id = $request->category_id;}
                if(isset( $request->user_id)){   $product->user_id = $request->user_id;}
             //////////////////////////////////////farah////////////
         if (isset($request->image)) {
          $image_name = rand() . "." . $request->image->getClientOriginalExtension();
          $product->image =  $image_name;
          $request->image->move('image', $image_name);
        }
           //    ////////////////////////////////////

            $product->save();
            $response= $product;

            return response()->json($response,200) ;
            }
            $response = '';

            return response()->json($response,404) ;
        }

        public function destroy($id){
            $product= Product::find($id);
            if(isset( $product)){
            $product->delete();
            $response = '';

            return response()->json($response,200) ;
            }
            $response = '';

            return response()->json($response,404) ;

        }

        public function show_products_by_color_size_price(Request $request)
        {
            if (isset($request->color)&&isset($request->size)&&isset($request->sell_price)) {
                 $product = Product::all()->where('color','=', $request->color)->where('size','=', $request->size)->where('sell_price','=', $request->sell_price);
            }
            else if (isset($request->color)&&isset($request->size)){
                  $product = Product::all()->where('color','=', $request->color)->where('size','=', $request->size);
            }
            else if (isset($request->sell_price)&&isset($request->color)) {
                 $product = Product::all()->where('sell_price','=', $request->sell_price)->where('color','=', $request->color);
            }
            else if (isset($request->size)&&isset($request->sell_price)) {
                 $product = Product::all()->where('size','=', $request->size)->where('sell_price','=', $request->sell_price);
            }
            else if (isset($request->color)) {
                 $product = Product::all()->where('color','=', $request->color);
            }
            else if (isset($request->size)) {
                 $product = Product::all()->where('size','=', $request->size);
            }
            else if (isset($request->sell_price)) {
                 $product = Product::all()->where('sell_price','=', $request->sell_price);
            }
            
            if(isset($product)){
                $response = $product;

                return response()->json($response,200) ;
                
     
            }
            $response = $product;

            return response()->json($response,404) ;
        }
    public function show_by_category($id)
    {
     $products=Product::select('*')->where('category_id',$id)->get();
     if(isset($products))
     {
       $response=$products;

       return response()->json($response,200);
     }
     else if (!isset($products))
     {
       $response=$products;

       return response()->json($response,404);
     }
    }
    public function vote(Request $request)
    {

       $product=Product::where('id',$request->product_id)->first();
       $product->vote_count=$product->vote_count+$request->vote;
       $product->save();
        return $product;
    }

    public function show_by_date(Request $request)
    {   //$date = $mytime =now();
        $date = date($request->date);
        //$date = date(date('Y-m-d', strtotime($date)));
        $mo=\Carbon\Carbon::parse($date)->format('m');
        $da=\Carbon\Carbon::parse($date)->format('d');
        $ye=\Carbon\Carbon::parse($date)->format('Y');
        //return $ye;
        // if($mo==4)
        // $mo=12;
        // else if($mo==3)
        // $mo=11;
        // else if($mo==2)
        // $mo=10;
        // else if($mo==1)
        // $mo=9;
        // else
        // $mo=$mo-4;

        $products = Product::join("stocks", "stocks.product_id", "=","products.id")
        ->whereYear('stocks.date', $ye)
        ->whereMonth('stocks.date', $mo)->whereDay('stocks.date', $da)
        ->get(array(DB::raw('products.*')));
        if(isset($products))
     {
       $response=$products;

       return response()->json($response,200);
     }
    }

    public function get_more_pubularity()
    {
      $product=Product::select("*")->orderBy('popularity','desc')->take(15)->get();
      return $product;
    }


    public function return_product(Request $request)
    {  $i=0;
      for ($i=0 ;$i<10 ;$i++)
      $product[]=Product::where('id',$request->list[$i])->get()->first();
      return $product;
    }

    public function Export_into_exel()
    {  
         $id=5;

        $order_d=Order_detail::where('product_id',$id)->get();
        foreach ($order_d as $o)
          {$item=Order::where('id',$o->order_id)->get();
        foreach ($item as $o1)
        {
         $detail=Order_detail::where('order_id',$o1->id)->get();
          foreach ($detail as $o2)
          $product[]=Product::where('id',$o2->product_id)->where('id','!=',$id)->get();}}
       //return $product;
      // return Excel::store( new EmployeeExport(5), 'Super.csv', 'export' );
       return Excel::download(new EmployeeExport(5),'/New folder/Downloads/product.csv');
      
       //return Http::get('http://127.0.0.1:7000/sugg_recm/')['summer_Sweat'];
    }

    public function http()
    {
      $this->Export_into_exel();
      $id='summer_Sweat';
      return Http::asForm()->get('http://127.0.0.1:7000/sugg_recm/summer_Sweat');
    }

    public function product_by_image(Request $request)
    {
        $count=6;
        $arrayofproduct = [];
        if(isset($request->image)){
            for ($i = 0; $i < $count; $i++)
            {
                $product=Product::where('image',$request->image[$i])->get()->first();
                $arrayofproduct[$i] = $product;
            }  
               $response = $arrayofproduct;
               return response()->json($response,200);
         }
         
           $response = $arrayofproduct;
           return response()->json($response,404);
         
    }
   


}
