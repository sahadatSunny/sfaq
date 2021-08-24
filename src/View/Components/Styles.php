<?php

namespace Sahadat\Sfaq\View\Components;


use Illuminate\View\Component;

class Styles extends Component

{
    public function render()
    {
        return function ($componentData) {
            return <<<BLADE
                @section("{$componentData['attributes']->get('name')}")
                    {$componentData['slot']}
                @endsection
            BLADE;
        };
    }
}
