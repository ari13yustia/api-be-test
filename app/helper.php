<?php
    use Illuminate\Support\Facades\Http;

    function service_api_rajaongkir($type){
        $response = Http::withHeaders([
            'key' => '0df6d5bf733214af6c6644eb8717c92c'
        ])->get('https://api.rajaongkir.com/starter/'.$type);

        return $response['rajaongkir']['results'];
    }

?>
