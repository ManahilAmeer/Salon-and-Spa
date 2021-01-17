@extends('layout')

@section('content')
<div align="center" class="container">
    <form style="margin: 100px 100px">
        <div align="center" style="background-color: pink; padding: 80px 0px; border: 2px solid #e75480; border-radius: 20px">
            <div align="center" class="form-group form-col">
                <div class="form-group col-md-5 mb-3">
                    <label for="BeautName" style="font-weight: 500">Beautician Name</label>
                    <div col-md-4>
                        <input type="text" id="BeautName" class="form-control" style="background-color: white" placeholder="Beautician Name" readonly>
                    </div>
                </div>
                <div class="form-group col-md-5 mb-3">
                    <label for="ServiceName" style="font-weight: 500">Service Name</label>
                    <input type="text" id="ServiceName" class="form-control" style="background-color: white" placeholder="Service Name" readonly>
                </div>
                <div class="form-group col-md-5 mb-3">
                    <label for="date-input" style="font-weight: 500">Enter Date</label>
                    <input class="form-control" type="date" value="2021-02-18" id="date-input" required>
                </div>
                <div class="form-group col-md-5 mb-3">
                    <label for="time-input" style="font-weight: 500">Enter Time</label>
                    <input class="form-control" type="time" value="12:00:00" id="time-input" min="12:00" max="22:00" required>
                </div>
                <div class="form-group col-md-5 mb-3">
                    <label for="Payment" style="font-weight: 500">Payment</label>
                    <div col-md-4>
                        <input type="number" id="Payment" class="form-control" style="background-color: white" placeholder="0.0" readonly>
                    </div>
                </div>
                <button type="submit" class="form-control col-md-3 mb-3 btn btn-primary" style="background-color: #e75480; color: white; margin-top: 20px;  border: 2px solid #e75480; border-radius: 20px; font-weight: 700">Book Appointment</button>
            </div>
        </div>
    </form>
</div>
@endsection