<!doctype html>
<html lang="pl">
  <head>
  @include('shared.header')

  </head>
  <body>

  @include('shared.navbar')


  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Book tickets</div>

                <div class="card-body">
                    <form method="POST" action="{{ route("reservation.store")}}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Personal data</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phoneNumber" class="col-md-4 col-form-label text-md-end">Phone number</label>

                            <div class="col-md-6">
                                <input id="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" autocomplete="phoneNumber">

                                @error('phoneNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="ticketId" maxlength="1500" class="col-md-4 col-form-label text-md-end">Typ biletu</label>

                            <div class="col-md-6 mb-3">
                            <select class="form-select" id="ticketId" name="ticketId" required onchange="calculateTotalAmount()">
                                <option value="">Select a ticket type</option>
                                    @foreach ($tickets as $ticketType)
                                        <option value="{{ $ticketType->id }}" data-price="{{ $ticketType->price }}">{{ $ticketType->name }}</option>
                                    @endforeach
                            </select>
                                @error('ticketId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="reservationDate" class="col-md-4 col-form-label text-md-end">Ticket booking day</label>
                            <div class="col-md-6">
                                <input id="reservationDate" type="date" class="form-control @error('resevationDate') is-invalid @enderror" name="reservationDate" value="{{ old('reservationDate') }}" autocomplete="reservationDate" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="count" class="col-md-4 col-form-label text-md-end">Number of tickets</label>

                            <div class="col-md-6">
                                <input id="count" type="number" class="form-control @error('count') is-invalid @enderror" name="count" value="{{ old('count') }}" onchange="calculateTotalAmount()">

                                @error('count')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="sum" class="col-md-4 col-form-label text-md-end">Suma</label>

                            <div class="col-md-6">
                                <input id="sum" type="text" class="form-control @error('sum') is-invalid @enderror" name="sum" value="{{ old('sum') }}" readonly>

                                @error('sum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Book tickets</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<script>
    function calculateTotalAmount() {
        var ticketIdElement = document.getElementById('ticketId');
        var countElement = document.getElementById('count');
        var totalAmountElement = document.getElementById('sum');

        var ticketId = ticketIdElement.value;
        var count = countElement.value;
        var price = parseFloat(ticketIdElement.options[ticketIdElement.selectedIndex].getAttribute('data-price'));

        var totalAmount = price * count;
        totalAmountElement.value = totalAmount.toFixed(2);
    }
</script>


      
@include('shared.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>