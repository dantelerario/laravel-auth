<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Post;

class UpdatePost extends Mailable
{
    use Queueable, SerializesModels;

    //post instance 
    protected $post;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('prova@test.com')
                    ->subject('New post Update ' . $this->post->title)
                    //->view('mail.edit-post')
                    ->markdown('mail.edit-post')
                    ->with([
                        'title' => $this->post->title,
                    ]);
    }
}
