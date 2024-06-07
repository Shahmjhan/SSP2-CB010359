<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Order;

use App\Models\User;


class AdminController extends Controller
{
    public function product()
    {
        return view('admin.product');
    }






    public function uploadproduct(Request $request)

    {
        $data=new product;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage', $imagename);

        $data->image=$imagename;

        $data->title=$request->title;

        $data->price=$request->price;

        $data->description=$request->des;

        $data->weight=$request->weight;

        $data->save();

        return redirect()->back()->with('message','Product Added Successfully');

    }






    public function showproduct()
    {
        $data=product::all();

        return view('admin.showproduct', compact('data'));
    }





    public function deleteproduct($id)
    {

        $data=product::find($id);

        $data->delete();

        return redirect()->back()->with('message','Product Deleted');

    }




    public function updateview($id)
    {
        $data=product::find($id);

        return view('admin.updateview', compact('data'));
    }





    public function updateproduct(Request $request, $id)
        {
            $data=product::find($id);

            $image=$request->file;

            if($image) {

                $imagename = time() . '.' . $image->getClientOriginalExtension();

                $request->file->move('productimage', $imagename);

                $data->image = $imagename;

            }

            $data->title=$request->title;

            $data->price=$request->price;

            $data->description=$request->des;

            $data->weight=$request->weight;

            $data->save();

            return redirect()->back()->with('message','Product Updated Successfully');

        }





        Public function showorder()
        {
            $order=order::all();
            return view('admin.showorder', compact('order'));
        }




        Public function updatestatus($id)
        {

            $order=order::find($id);

            $order->status='Delivered';

            $order->save();

            return redirect()->back();

        }




        Public function showusers()
        {

            $data=user::all();
            return view('admin.showusers', compact('data'));

        }




        Public function manageuser($id)
        {

            $data=user::find($id);

            return view('admin.manageuser', compact('data'));

        }





    public function deleteuser($id)
    {
        $data = user::find($id);

        if ($data) {
            $data->delete();
            return redirect()->back()->with('message', 'User Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'User Not Found');
        }
    }



    public function analytics()
    {
        $totalUsers = User::count();
        $totalProducts = Product::count();
        $totalOrders = Order::count();

        $ordersPerDay = Order::selectRaw('DATE(created_at) as date, COUNT(*) as count')
                              ->groupBy('date')
                              ->orderBy('date', 'asc')
                              ->take(30)
                              ->get();

        $dates = $ordersPerDay->pluck('date')->toArray();
        $orderCounts = $ordersPerDay->pluck('count')->toArray();

        return view('admin.analytics', compact('totalUsers', 'totalProducts', 'totalOrders', 'dates', 'orderCounts'));
    }
}


