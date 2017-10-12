<?php namespace 

App\Http\Controllers;
 
use App\Http\Requests;

use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;
 
class HelloWorldController extends Controller
{
 
    public function index()
    {
        $data['variableone'] = 'The value of variable one.';
        $data['variabletwo'] = 'The value of variable two.';

       /* $characters = [
            'Daenerys Targaryen' => 'Emilia Clarke',
            'Jon Snow'           => 'Kit Harington',
            'Arya Stark'         => 'Maisie Williams',
            'Melisandre'         => 'Carice van Houten',
            'Khal Drogo'         => 'Jason Momoa',
            'Tyrion Lannister'   => 'Peter Dinklage',
            'Ramsay Bolton'      => 'Iwan Rheon',
            'Petyr Baelish'      => 'Aidan Gillen',
            'Brienne of Tarth'   => 'Gwendoline Christie',
            'Lord Varys'         => 'Conleth Hill'
          ];*/

 
        return view('helloworld', $data);
    }
}

