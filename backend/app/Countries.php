<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'countries';


    /**
     * The table primary key field
     *
     * @var string
     */
    protected $primaryKey = 'id';


    /**
     * Table fillable fields
     *
     * @var array
     */
    protected $fillable = ["id", "continent_code", "currency_code", "iso2_code", "iso3_code", "iso_numeric_code", "fips_code", "calling_code", "common_name", "official_name", "endonym", "demonym"];


    /**
     * Set search query for the model
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $text
     */
    public static function search($query, $text)
    {
        //search table record
        $search_condition = '(
				continent_code LIKE ?  OR 
				currency_code LIKE ?  OR 
				iso2_code LIKE ?  OR 
				iso3_code LIKE ?  OR 
				iso_numeric_code LIKE ?  OR 
				fips_code LIKE ?  OR 
				calling_code LIKE ?  OR 
				common_name LIKE ?  OR 
				official_name LIKE ?  OR 
				endonym LIKE ?  OR 
				demonym LIKE ? 
		)';
        $search_params = [
            "%$text%", "%$text%", "%$text%", "%$text%", "%$text%", "%$text%", "%$text%", "%$text%", "%$text%", "%$text%", "%$text%"
        ];
        //setting search conditions
        $query->whereRaw($search_condition, $search_params);
    }


    /**
     * return list page fields of the model.
     *
     * @return array
     */
    public static function listFields()
    {
        return [
            "id",
            "continent_code",
            "currency_code",
            "iso2_code",
            "iso3_code",
            "iso_numeric_code",
            "fips_code",
            "calling_code",
            "common_name",
            "official_name",
            "endonym",
            "demonym"
        ];
    }


    /**
     * return exportList page fields of the model.
     *
     * @return array
     */
    public static function exportListFields()
    {
        return [
            "id",
            "continent_code",
            "currency_code",
            "iso2_code",
            "iso3_code",
            "iso_numeric_code",
            "fips_code",
            "calling_code",
            "common_name",
            "official_name",
            "endonym",
            "demonym"
        ];
    }


    /**
     * return view page fields of the model.
     *
     * @return array
     */
    public static function viewFields()
    {
        return [
            "id",
            "continent_code",
            "currency_code",
            "iso2_code",
            "iso3_code",
            "iso_numeric_code",
            "fips_code",
            "calling_code",
            "common_name",
            "official_name",
            "endonym",
            "demonym"
        ];
    }


    /**
     * return exportView page fields of the model.
     *
     * @return array
     */
    public static function exportViewFields()
    {
        return [
            "id",
            "continent_code",
            "currency_code",
            "iso2_code",
            "iso3_code",
            "iso_numeric_code",
            "fips_code",
            "calling_code",
            "common_name",
            "official_name",
            "endonym",
            "demonym"
        ];
    }


    /**
     * return edit page fields of the model.
     *
     * @return array
     */
    public static function editFields()
    {
        return [
            "id",
            "continent_code",
            "currency_code",
            "iso2_code",
            "iso3_code",
            "iso_numeric_code",
            "fips_code",
            "calling_code",
            "common_name",
            "official_name",
            "endonym",
            "demonym"
        ];
    }


    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


}
