<?php

namespace App\Http\ViewComposers\Visible;

use App\Models\Messages\Message;
use Illuminate\View\View;

/**
 * Class MessageSubjectsComposer
 * @package App\Http\ViewComposers\Visible
 */
class MessageSubjectsComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('message_subjects', Message::subjects());
    }
}
