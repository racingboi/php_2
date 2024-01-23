<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Products;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Order;
use App\Models\OrderDetail;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $products = Products::with(['category', 'subcategory', 'image_features' => function ($query) {
            $query->where('number', 0);
        }])->get();
        $category = Category::with(['subcategories'])->get();
        $user_id = auth()->id();
        $cart = OrderDetail::whereHas('order', function ($query) use ($user_id) {
            $query->where('users_id', $user_id);
        })
            ->with(['order.orderDetails', 'product.image_features'])
            ->get();
        $groupedCart = $cart->groupBy('product.id');
        return view('web.register', compact('products', 'category', 'groupedCart'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
