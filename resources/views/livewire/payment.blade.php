<div wire:ignore.self  id="paymentModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalTitle">Payment </h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                <form wire:submit.prevent="pay" class="form-row">
                    <div class="form-group col-12">
                        <label for="PAN">PAN</label>
                        <input id="pan" class="form-control" type="text" placeholder="Enter your PAN" name="pan" wire:model='pan'>
                        @error('pan')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>

                    <div class="form-group col-12">
                        <label for="IPIN">IPIN</label>
                        <input id="ipin" class="form-control" type="password" placeholder="Enter your IPIN" name="ipin" wire:model='ipin'>
                        @error('ipin')
                        <span class="text-danger">{{ $message }}</span> 
                        @enderror
                     </div>

                    <div class="form-group col-12 mt-2"><label for="date">Expiration date</label></div>
                        <div class="form-group col-6">
                            <label for="expMonth">Month</label>
                            <select id="expMonth" class="form-control" name="expMonth" wire:model='expMonth'>
                                <option >Month</option>
                                <option value="01" >01</option>
                                <option value="02" >02</option>
                                <option value="03" selected>03</option>
                                <option value="04" >04</option>
                                <option value="05" >05</option>
                                <option value="06" >06</option>
                                <option value="07" >07</option>
                                <option value="08" >08</option>
                                <option value="09" >09</option>
                                <option value="10" >10</option>
                                <option value="11" >11</option>
                                <option value="12" >12</option>
                            </select>
                            @error('expMonth')
                            <span class="text-danger">{{ $message }}</span> 
                            @enderror

                    </div>
                    <div class="form-group col-6">
                        <label for="year">Year</label>
                            <select id="expYear" class="form-control" name="expYear" wire:model='expYear'>
                                <option  >Year</option>
                                <option value="20" >2020</option>
                                <option value="21" >2021</option>
                                <option value="22" >2022</option>
                                <option value="23" >2023</option>
                                <option value="24" >2024</option>
                                <option value="25" >2025</option>
                                <option value="26" >2026</option>
                                <option value="27" selected >2027</option>
                                <option value="28" >2028</option>
                                <option value="29" >2029</option>
                                <option value="30" >2030</option>
                                <option value="31" >2031</option>
                                <option value="32" >2032</option>
                                <option value="33" >2033</option>
                                <option value="34" >2034</option>
                            </select>
                            @error('expYear')
                        <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>

                    <div class="form-group col-12">
                        <button class="btn btn-success btn-lg" >Confirm <i class="fa fa-angle-right"></i></button>
                    </div>

                    <input type="hidden" wire:model='invoiceUuid' id='invoiceUuid' name='invoiceUuid'>

                </form>
            </div>

            <div class="col-md-6">
                <!-- invoice here -->
                <div class="invoice">
                    <h5>Invoice</h5>
                    <table class="table table-gray">
                            <tr>
                                <td>Program</td>
                                <td>
                                    @if ($invoice)
                                    {{$invoice->event->name}}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                            <td>Name</td>
                            <td>
                                @if ($invoice)
                                {{$invoice->data->name}}
                                @endif
                            </td>
                            </tr>
                            <tr>
                            <td>Fees</td>
                            <td>
                                @if ($invoice)
                                {{$invoice->event->ticket_selling_price}}
                                @endif
                            </td>
                            </tr>
                            {{-- <tr>
                            <td>Tax</td>
                            <td>0.00 SDG</td>
                            </tr> --}}
                    </table>
                    <hr />
                    <h6>TOTAL : @if ($invoice)
                        {{$invoice->event->ticket_selling_price}}
                        @endif SDG</h6>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>