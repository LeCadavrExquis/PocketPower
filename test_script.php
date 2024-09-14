<?php

// URL API
$url = 'https://fake-json-api.mock.beeceptor.com/users';

// Klucz API (w miejsce 'Sign Up for Key' wprowadź swój klucz)
$apiKey = 'YOUR_API_KEY'; // Zastąp swoim kluczem API

// Inicjalizacja curl
$curl = curl_init();

// Ustawienia curl dla requestu
curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
//        "x-rapidapi-host: weatherbit-v1-mashape.p.rapidapi.com",
//        "x-rapidapi-key: $apiKey"
    ]
]);

// Wykonaj zapytanie
$response = curl_exec($curl);

// Sprawdź, czy wystąpiły błędy
if(curl_errno($curl)) {
    echo 'Error: ' . curl_error($curl);
} else {
    // Wyświetl odpowiedź
    echo $response;
}

// Zakończenie sesji curl
curl_close($curl);

?>