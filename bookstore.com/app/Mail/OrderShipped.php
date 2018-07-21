<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Order;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $order;
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('orderconfirm@bookstore.com')
                    ->subject("Đơn hàng #".$this->order->id." đã sẵn sàng giao đến quý khách")
                    ->markdown('mails.order-shipped')
                    ->with([
                        'order' => $this->order,
                        'products' => $this->order->products
                    ])
                    ->delay(60);
    }
}
