<?php

use App\Http\Controllers\AnimalsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Models\Reservation;
use App\Models\Tickets;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/ticket', function () {
    $tickets = Tickets::all();
    return view('ticket/ticket', ["tickets" => $tickets]);
})->name('ticket.index');

Route::get('/reservations', function () {
    $reservations = Reservation::all();
    return view('reservations/reservation', ["reservations" => $reservations]);
})->name('reservation.index');

Route::get('/panel', function () {
    if (!Auth::check()) return redirect() -> route("home");
    return view('panel/panel');
})->name('panel.index');

Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'login')->name('login');
    Route::post('/auth/login', 'authenticate')->name('login.authenticate');
    Route::get('/auth/logout', 'logout')->name('logout');
});

Route::get("ticket/create", [TicketController::class, 'create'])->name('tickets.create');
Route::post("ticket/create", [TicketController::class, 'store'])->name('tickets.store');
Route::post("ticket/{id}/destroy", [TicketController::class, 'destroy'])->name('tickets.destroy');
Route::get("ticket/edit/{id}", [TicketController::class, 'edit'])->name('tickets.edit');
Route::post("ticket/edit/{id}", [TicketController::class, 'update'])->name('tickets.update');

Route::get("reservation/create", [ReservationController::class, 'create'])->name('reservation.create');
Route::post("reservation/create", [ReservationController::class, 'store'])->name('reservation.store');
Route::get('/reservation/{id}/edit', [ReservationController::class, 'edit'])->name('reservation.edit');
Route::put('/reservation/{id}', [ReservationController::class, 'update'])->name('reservation.update');
Route::delete('/reservation/{id}', [ReservationController::class, 'destroy'])->name('reservation.destroy');

Route::get("animals", [AnimalsController::class, 'index'])->name("animals.index");
Route::get("animals/{id}/read", [AnimalsController::class, 'show'])->name("animals.animal");
Route::post("animals/{id}/delete", [AnimalsController::class, "destroy"])->name("animals.destroy");
Route::get("animals/create", [AnimalsController::class, 'create'])->name("animals.create");
Route::post("animals/create", [AnimalsController::class, "store"])->name("animals.store");
Route::get("animals/{id}/edit", [AnimalsController::class, "edit"])->name("animals.edit");
Route::post("animals/{id}/edit", [AnimalsController::class, "update"])->name("animals.update");

?>
