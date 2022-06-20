<?php

namespace App\Http\Controllers;

use App\Currencies;
use App\Http\Requests\CurrenciesAddRequest;
use App\Http\Requests\CurrenciesEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CurrenciesController extends Controller
{

    /**
     * List table records
     * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
    function index(Request $request, $fieldname = null, $fieldvalue = null)
    {
        $query = Currencies::query();
        if ($request->search) {
            $search = trim($request->search);
            Currencies::search($query, $search);
        }
        $orderby = $request->orderby ?? "currencies.id";
        $ordertype = $request->ordertype ?? "desc";
        $query->orderBy($orderby, $ordertype);
        if ($fieldname) {
            $query->where($fieldname, $fieldvalue); //filter by a single field name
        }
        $records = $this->paginate($query, Currencies::listFields());
        return $this->respond($records);
    }

    /**
     * Load csv|json data
     * @return data
     */
    function importdata(Request $request)
    {
        $importSettings = config("upload.import");
        $maxFileSize = intval($importSettings["max_file_size"]) * 1000; //in kilobyte
        $validator = Validator::make($request->all(),
            [
                "file" => "file|required|max:$maxFileSize|mimes:csv,txt",
            ]
        );
        if ($validator->fails()) {
            return $this->reject($validator->errors(), 400);
        }
        $csvOptions = array(
            'fields' => '', //leave empty to use the first row as the columns
            'delimiter' => ',',
            'quote' => '"'
        );
        $filePath = $request->file('file')->getRealPath();
        $modeldata = $this->parse_csv_data($filePath, $csvOptions);
        $result = Currencies::insert($modeldata);
        return $this->respond($result);
    }

    /**
     * Select table record by ID
     * @param string $rec_id
     * @return \Illuminate\View\View
     */
    function view($rec_id = null)
    {
        $query = Currencies::query();
        $record = $query->findOrFail($rec_id, Currencies::viewFields());
        return $this->respond($record);
    }

    /**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
    function add(CurrenciesAddRequest $request)
    {
        $modeldata = $request->validated();

        //save Currencies record
        $record = Currencies::create($modeldata);
        $rec_id = $record->id;
        return $this->respond($record);
    }

    /**
     * Update table record with form data
     * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
    function edit(CurrenciesEditRequest $request, $rec_id = null)
    {
        $query = Currencies::query();
        $record = $query->findOrFail($rec_id, Currencies::editFields());
        if ($request->isMethod('post')) {
            $modeldata = $request->validated();
            $record->update($modeldata);
        }
        return $this->respond($record);
    }

    /**
     * Delete record from the database
     * Support multi delete by separating record id by comma.
     * @param  \Illuminate\Http\Request
     * @param string $rec_id //can be separated by comma
     * @return \Illuminate\Http\Response
     */
    function delete(Request $request, $rec_id = null)
    {
        $arr_id = explode(",", $rec_id);
        $query = Currencies::query();
        $query->whereIn("id", $arr_id);
        $query->delete();
        return $this->respond($arr_id);
    }

}
