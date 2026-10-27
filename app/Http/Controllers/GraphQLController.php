<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GraphQLController extends Controller
{
    private string $endpoint;

    public function __construct()
    {
        $this->endpoint = config('services.country_graphql');
    }
    public function index()
    {
        $query = <<<GQL
        query {
          countries {
            code
            name
            capital
            emoji
          }
        }
        GQL;

        $response = Http::post($this->endpoint, [
            'query' => $query
        ]);

        $countries = $response->json()['data']['countries'] ?? [];

        return view('countries.index', compact('countries'));
    }

    public function show(string $code)
    {
        $query = <<<GQL
        query GetCountry(\$code: ID!) {
          country(code: \$code) {
            code
            name
            native
            capital
            currency
            phone
            emoji
          }
        }
        GQL;

        $response = Http::post($this->endpoint, [
            'query' => $query,
            'variables' => [
                'code' => strtoupper($code)
            ]
        ]);

        $country = $response->json()['data']['country'] ?? null;

        abort_if(!$country, 404);

        return view('countries.show', compact('country'));
    }

}