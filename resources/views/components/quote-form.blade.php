<form id="quoteForm" action="{{ route('quote.store') }}" method="POST" class="space-y-4">
    @csrf
    <h2 class="text-3xl font-bold text-card-foreground mb-2">
        Get a Free <span class="text-primary">Quote</span>
    </h2>
    <p class="text-sm text-muted-foreground mb-4">Fill the form below and get a callback within 30
        minutes</p>

    <div id="formResponse" class="hidden p-3 rounded-lg text-sm mb-4"></div>
    <div class="space-y-2">
        <x-form.label for="name" value="Your Full Name" required />
        <x-form.input name="name" id="name" placeholder="Your Name" required />
    </div>
    <div class="space-y-2">
        <x-form.label for="phone" value="Phone Number" required />
        <x-form.input type="tel" name="phone" id="phone" placeholder="Phone Number" required />
    </div>
    <div class="grid grid-cols-2 gap-3">
        <div class="space-y-2">
            <x-form.label for="from_city" value="From City" required />
            <x-form.input type="text" name="from_city" id="from_city" placeholder="From City" required />
        </div>
        <div class="space-y-2">
            <x-form.label for="to_city" value="To City" required />
            <x-form.input type="text" name="to_city" id="to_city" placeholder="To City" required />
        </div>
    </div>
    <div class="space-y-2">
        <x-form.label for="moving_date" value="Moving Date" required />
        <x-form.input type="date" name="moving_date" id="moving_date" required />
    </div>
    <div class="space-y-2">
        <x-form.label for="service" value="Service Required" required />
        <x-form.select name="service" id="service" required>
            <option value="" disabled selected>Service Required</option>
            <option value="House Relocation">House Relocation</option>
            <option value="Office Relocation">Office Relocation</option>
            <option value="Car Transportation">Car Transportation</option>
            <option value="Loading & Unloading">Loading & Unloading</option>
            <option value="Pet Relocation">Pet Relocation</option>
            <option value="International Relocation">International Relocation</option>
        </x-form.select>
    </div>
    <x-ui.primary-button type="submit" id="submitBtn" class="w-full">
        <span id="btnText">Get Free Quote →</span>
    </x-ui.primary-button>
</form>
