<?php

namespace App\Mail;

use App\Models\Video;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VideoCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $video;

    /**
     * Create a new message instance.
     *
     * @param Video $video
     */
    public function __construct(Video $video)
    {
        $this->video = $video;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Video Created: ' . $this->video->title)
            ->view('emails.video_created')
            ->with([
                'videoTitle' => $this->video->title,
                'videoDescription' => $this->video->description,
                'videoUrl' => $this->video->url,
                'createdAt' => $this->video->created_at->format('d-m-Y H:i'),
            ]);
    }
}
