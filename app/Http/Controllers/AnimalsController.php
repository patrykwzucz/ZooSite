<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnimalStoreRequest;
use App\Http\Requests\AnimalUpdateRequest;
use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AnimalsController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view("animals.index", ["animals" => $animals]);
    }

    public function create()
    {
        if (!Auth::check()) return redirect(route("animals.index"));
        return view("animals.create");
    }

    public function store(AnimalStoreRequest $request)
    {
        if (!Auth::check()) return redirect(route("animals.index"));

        $data = $request->validated();

        $animal = new Animal();
        $animal->name = $data["name"];
        $animal->type = $data["type"];
        $animal->region = $data["region"];
        $animal->description = $data["description"];

        $maxId = Animal::max("id") + 1;
        $imagePath = public_path("img/animals/" . $maxId . ".jpg");

        // Usuń istniejący plik jeśli istnieje
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        // Zapisz przesłany plik
        $data["image"]->move(public_path("img/animals"), $maxId . ".jpg");

        // Zapisz ścieżkę do bazy (widoczna z poziomu przeglądarki)
        $animal->img = "img/animals/" . $maxId . ".jpg";
        $animal->save();

        return redirect(route("animals.animal", ["id" => $maxId]));
    }

    public function show(int $id)
    {
        $animal = Animal::find($id);
        return view("animals.show", ["animal" => $animal]);
    }

    public function edit(int $id)
    {
        if (!Auth::check()) return redirect(route("animals.index"));

        $animal = Animal::find($id);
        return view("animals.edit", ["animal" => $animal]);
    }

    public function update(AnimalUpdateRequest $request, int $id)
    {
        if (!Auth::check()) return redirect(route("animals.index"));

        $data = $request->validated();

        $animal = Animal::find($id);
        $animal->name = $data["name"];
        $animal->type = $data["type"];
        $animal->region = $data["region"];
        $animal->description = $data["description"];

        if (isset($data["image"])) {
            $imagePath = public_path("img/animals/" . $id . ".jpg");

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            $data["image"]->move(public_path("img/animals"), $id . ".jpg");
            $animal->img = "img/animals/" . $id . ".jpg";
        }

        $animal->save();

        return redirect(route("animals.animal", ["id" => $id]));
    }

    public function destroy(int $id)
    {
        if (!Auth::check()) return redirect(route("animals.index"));

        $animal = Animal::find($id);

        $imagePath = public_path("img/animals/" . $id . ".jpg");

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $animal->delete();

        return redirect(route("animals.index"));
    }
}
