<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', ['services' => $services]);
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index');
    }

}
