<?php

namespace Delix245\Slider\View\Components;

use Illuminate\View\Component;
use Delix245\Slider\Models\Slider as SliderModel;

class Slider extends Component
{
    public $slides;

    public function __construct()
    {
        $this->slides = SliderModel::where('active', true)
            ->orderBy('sort')
            ->get();
    }

    public function render()
    {
        return view('slider::components.slider');
    }
}
