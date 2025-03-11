<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Camera;
use App\Models\Lens;
use App\Models\Lights;
use App\Models\MemoryCard;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    private function getImagePath($product, $type)
    {
        $brand = explode(" ", $product->model)[0];
        $brand = strtolower($brand);
        $fileName = basename($product->photo);

        switch ($type) {
            case 'camera':
                return "photos/{$brand}Body/{$fileName}";
            case 'lens':
                return "photos/{$brand}Lens/{$fileName}";
            case 'memoryCard':
                return "photos/{$brand}MemoryCard/{$fileName}";
            case 'light':
                return $product->photo; // pentru lights folosim direct photo
            default:
                return '';
        }
    }

    public function getCart()
    {
        try {
            $cartItems = CartItem::where('user_id', auth()->id())->get();
            $formattedItems = [];

            foreach ($cartItems as $item) {
                $product = null;

                switch ($item->product_type) {
                    case 'camera':
                        $product = Camera::find($item->product_id);
                        break;
                    case 'lens':
                        $product = Lens::find($item->product_id);
                        break;
                    case 'light':
                        $product = Lights::find($item->product_id);
                        break;
                    case 'memoryCard':
                        $product = MemoryCard::find($item->product_id);
                        break;
                }

                if ($product) {
                    $formattedItems[] = [
                        'id' => $item->id,
                        'name' => $product->model,
                        'price' => $product->price,
                        'image' => $this->getImagePath($product, $item->product_type),
                        'quantity' => $item->quantity,
                        'product_type' => $item->product_type
                    ];
                }
            }

            return response()->json($formattedItems);

        } catch (\Exception $e) {
            Log::error('Cart error: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function addToCart(Request $request)
    {
        try {
            Log::info('Add to cart request:', $request->all());

            $request->validate([
                'product_id' => 'required|integer',
                'product_type' => 'required|string',
                'quantity' => 'required|integer|min:1'
            ]);

            // Verificăm dacă există deja produsul în coș
            $existingItem = CartItem::where([
                'user_id' => auth()->id(),
                'product_id' => $request->product_id,
                'product_type' => $request->product_type,
            ])->first();

            if ($existingItem) {
                // Dacă există, actualizăm cantitatea
                $existingItem->quantity += $request->quantity;
                $existingItem->save();
            } else {
                // Dacă nu există, creăm un nou item în coș
                CartItem::create([
                    'user_id' => auth()->id(),
                    'product_id' => $request->product_id,
                    'product_type' => $request->product_type,
                    'quantity' => $request->quantity
                ]);
            }

            return response()->json(['message' => 'Product added to cart successfully']);

        } catch (\Exception $e) {
            Log::error('Add to cart error: ' . $e->getMessage());
            return response()->json([
                'error' => 'Failed to add product to cart',
                'details' => $e->getMessage()
            ], 500);
        }
    }

    public function updateQuantity(Request $request, $id)
    {
        try {
            $request->validate([
                'quantity' => 'required|integer|min:1'
            ]);

            $cartItem = CartItem::where([
                'id' => $id,
                'user_id' => auth()->id()
            ])->firstOrFail();

            $cartItem->update([
                'quantity' => $request->quantity
            ]);

            return response()->json(['message' => 'Quantity updated successfully']);

        } catch (\Exception $e) {
            Log::error('Update quantity error: ' . $e->getMessage());
            return response()->json([
                'error' => 'Failed to update quantity',
                'details' => $e->getMessage()
            ], 500);
        }
    }

    public function removeItem($id)
    {
        try {
            $cartItem = CartItem::where([
                'id' => $id,
                'user_id' => auth()->id()
            ])->firstOrFail();

            $cartItem->delete();

            return response()->json([
                'message' => 'Item removed from cart successfully'
            ]);

        } catch (\Exception $e) {
            Log::error('Remove item error: ' . $e->getMessage());
            return response()->json([
                'error' => 'Failed to remove item from cart',
                'details' => $e->getMessage()
            ], 500);
        }
    }
}