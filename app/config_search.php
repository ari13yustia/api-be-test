<?php
    use Illuminate\Support\Facades\Http;

    function config_search(){
        // set return true for get data from database
        // set return false for get data from rajaongkir api
        return true;
    }

    function seach_with_rajaongkir($type, $id){
        $response = Http::get('https://api.rajaongkir.com/starter/'.$type, [
            'key' => '0df6d5bf733214af6c6644eb8717c92c',
            'id'  => $id
        ]);

        return $response['rajaongkir']['results'];
    }

?>
