<?php
namespace App\Admin\Widgets;

use App\Models\Product;
use Arrilot\Widgets\AbstractWidget;

class ProductsWidget extends AbstractWidget
{
    protected $config = [];
    public function shouldBeDisplayed()
    {
        return true;
    }

    public function run()
    {
        $count = Product::count();

        return view('voyager::dimmer', [
            'icon'   => 'voyager-bag',
            'title'  => "{$count} Products",
            'text'   => 'Total products in warehouse',
            'button' => [
                'text' => 'View All Products',
                'link' => route('voyager.products.index'),
            ],
            'image'  => asset('storage/widgets/products.jpg'),
        ]);
    }
}
