<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Currencies extends Model
{


	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'currencies';


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
	protected $fillable = ["iso_code","iso_numeric_code","common_name","official_name","symbol"];


	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record
		$search_condition = '(
				iso_code LIKE ?  OR 
				iso_numeric_code LIKE ?  OR 
				common_name LIKE ?  OR 
				official_name LIKE ?  OR 
				symbol LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%"
		];
		//setting search conditions
		$query->whereRaw($search_condition, $search_params);
	}


	/**
     * return list page fields of the model.
     *
     * @return array
     */
	public static function listFields(){
		return [
			"id",
			"iso_code",
			"iso_numeric_code",
			"common_name",
			"official_name",
			"symbol"
		];
	}


	/**
     * return exportList page fields of the model.
     *
     * @return array
     */
	public static function exportListFields(){
		return [
			"id",
			"iso_code",
			"iso_numeric_code",
			"common_name",
			"official_name",
			"symbol"
		];
	}


	/**
     * return view page fields of the model.
     *
     * @return array
     */
	public static function viewFields(){
		return [
			"id",
			"iso_code",
			"iso_numeric_code",
			"common_name",
			"official_name",
			"symbol"
		];
	}


	/**
     * return exportView page fields of the model.
     *
     * @return array
     */
	public static function exportViewFields(){
		return [
			"id",
			"iso_code",
			"iso_numeric_code",
			"common_name",
			"official_name",
			"symbol"
		];
	}


	/**
     * return edit page fields of the model.
     *
     * @return array
     */
	public static function editFields(){
		return [
			"id",
			"iso_code",
			"iso_numeric_code",
			"common_name",
			"official_name",
			"symbol"
		];
	}


	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
