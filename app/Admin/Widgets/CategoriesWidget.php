<?php
namespace App\Admin\Widgets;

use App\Models\Category;
use Arrilot\Widgets\AbstractWidget;

class CategoriesWidget extends AbstractWidget
{
    protected $config = [];
    public function shouldBeDisplayed()
    {
        return true;
    }

    public function run()
    {
        $count = Category::count();

        return view('voyager::dimmer', [
            'icon'   => 'voyager-categories',
            'title'  => "{$count} Categories",
            'text'   => 'Product categories available',
            'button' => [
                'text' => 'View Categories',
                'link' => route('voyager.categories.index'),
            ],
            'image'  => asset('storage/widgets/categories.jpg'),
        ]);
    }
}
