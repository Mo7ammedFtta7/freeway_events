<div wire:ignore.self id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Register for <span class="program-name"> Gate of success program</span></h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    
                </button>
            </div>

            <div class="modal-body">
 <form wire:submit.prevent="submit" class="form-row">

    <div class="form-group col-12">
        <label for="name">Your Full Name</label>
        <input id="name" wire:model="name" class="form-control" type="text" placeholder="Enter your full name" name="name">
        @error('name')
            <span class="text-danger">{{ $message }}</span> 
        @enderror
    </div>
    <div class="form-group col-6">
        <label for="Gender">Gender</label>
            <select id="gender" class="form-control" name="gender" wire:model="gender">
                <option value="Male" selected>Male</option>
                <option value="Female">Female</option>
            </select>
            @error('gender')
            <span class="text-danger">{{ $message }}</span> 
            @enderror
    </div>
    <div class="form-group col-6">
        <label for="age">Age</label>
           <input id="age" class="form-control" type="number" placeholder="Enter your age" wire:model="age" name="age" >
        </select>
        @error('age')
        <span class="text-danger">{{ $message }}</span> 
        @enderror
    </div>
    <div class="form-group col-12">
        <label for="phone">Phone</label>
        <input id="phone" class="form-control" type="text" placeholder="09xxxxxxxx" name="phone" wire:model="phone">
        @error('phone')
        <span class="text-danger">{{ $message }}</span> 
        @enderror
    </div>
    <div class="form-group col-12">
        <label for="email">E-mail </label>
        <input id="email" class="form-control" type="email" placeholder="example@gmail.com" wire:model="email" name="email" >
        @error('email')
        <span class="text-danger">{{ $message }}</span> 
        @enderror
    </div>
    <input type="hidden"  type="text" wire:model="event_id">
    <div class="form-group col-12">
        <button class="btn btn-success btn-lg">Register <i class="fa fa-angle-right"></i></button>
    </div>
    {{-- <input type="text" wire:model="name">
    @error('name')
    <span class="error">{{ $message }}</span> 
    @enderror
    <input type="text" wire:model="email">
    @error('email') <span class="error">{{ $message }}</span> @enderror
    <button type="submit">Save Contact</button> 
    <button class="btn btn-success btn-lg" data-dismiss="modal"  data-target="#paymentModal" data-toggle="modal">Register <i class="fa fa-angle-right"></i></button>
--}}
</form>



            </div>
        </div>
    </div>
</div>
