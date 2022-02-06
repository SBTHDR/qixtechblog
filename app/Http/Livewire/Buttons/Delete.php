<?php

namespace App\Http\Livewire\Buttons;

use Livewire\Component;
use Illuminate\Support\Facades\File;

class Delete extends Component
{
    public $post;
    public $confirmingPostDeletion = false;

    public function confirmPostDeletion()
    {
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('confirming-delete-post');
        $this->confirmingPostDeletion = true;
    }

    public function deletePost()
    {
        File::delete(storage_path('app/public/images/' . $this->post->image));
        $this->post->delete();

        session()->flash('success', 'Post deleted successfully!');

        return redirect()->route('posts.index');
    }

    public function render()
    {
        return view('livewire.buttons.delete');
    }
}
