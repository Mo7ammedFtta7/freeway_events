<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\invoices;
use App\Models\event;
use App\Models\tickets;
use App\Mail\sendTicket;

use \Amarousepay\Laravelgateway\Laravelgateway as laraClass;
class Payment extends Component
{
    public $pan;
    public $ipin;
    public $expYear;
    public $expMonth;
    public $invoiceUuid="";
    public $invoice;
    private $publicKey;

 
    protected $listeners = ['goToPay','doTrans'];
    protected $rules = [
        'pan' => 'required|min:12|max:19',
        'ipin' => 'required|min:4|max:4',
        'expYear'=>'required',
        'expMonth'=>'required',

    ];


    public function render()
    {
        return view('livewire.payment');
    }
    public function mount()
    {
      //  $inv=invoices::whereUuid($uuid)->first();
    }
    public function goToPay($uuid)
    {

       // $inv=invoices::whereUuid($uuid)->first();
      //dd($data."xxx");
      $this->invoiceUuid=$uuid;

      $this->invoice=invoices::whereUuid($uuid)->first();
     // dd($this->invoice);

      //dd( $this->invoice->data);
     // dd( $this->invoice);
      
    }
    public function pay()
    {
        $this->validate();
        $this->publicKey=laraClass::getPublicKey();
        $this->dispatchBrowserEvent('encrypt', [
            'p'=>$this->publicKey,
            'i'=>$this->ipin,
            'v'=>$this->invoiceUuid,
            "pa"=>$this->pan,
            "ey"=>$this->expYear,
            "em"=>$this->expMonth]);
        $this->reset();

        return false;
    }
    public function doTrans($data)
    {
        $event =invoices::whereUuid($data['v'])->first();
        $amount = event::find($event->data->event_id)->ticket_selling_price;
        $res=laraClass::doTransaction($data['i'],$data['v'],$data['pa'],$data['ey'],$data['em'], $amount);
       if ($res['responseCode']==110) {
        invoices::whereUuid($res['tranUID'])->update(["response"=>$res,"status"=>'succeed']);
        tickets::create([
            "event_id"=>$event->data->event_id,
            "fullname"=>$event->data->name,
            "email"=>$event->data->email,
            "phone"=>$event->data->phone,
            "invoice_uuid"=>$data['v']]);
            $ticket = [
                'title' => 'Mail from ItSolutionStuff.com',
                'body' => 'This is for testing email using smtp'
            ];
            \Mail::to($event->data->email)->send(new \App\Mail\sendTicket($ticket));
       }
       $this->dispatchBrowserEvent('response',$res);
    }
}
