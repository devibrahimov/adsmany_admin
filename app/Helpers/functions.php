<?php
/**
 * @CompanyURI: https://lumusoft.com
 * @Description: Developed by LUMUSOFT Software team.
 * @Version: 1.0.0
 * @Date :    18.08.2021
 */

    function country($array,$language){

        foreach ($array as $data){
            if ( $data['language'] == $language){
                return $data['name'] ;
            }
        }


    }

    function tvchannel($array,$language){

        foreach ($array as $data){
            if ( $data['lang'] == $language){
                return $data['name'] ;
            }
        }


    }



 function program($array,$language,$column){

        foreach ($array as $data){
            if ( $data['lang'] == $language){
                return $data[$column] ;
            }
        }


    }




    function languages(){
        return \App\Models\Language::all();
    }
