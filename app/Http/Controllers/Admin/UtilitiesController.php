<?php

namespace App\Http\Controllers\admin;
use App\Models\MainUtility;
use App\Models\Property;
use App\Models\Utility;
use App\Models\PropertyUnit;
use App\Models\UtilityReading;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UtilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagedata['unit']=UtilityReading::get();

        // $pagedata['mainUtilities']=MainUtility::get();

        return view("admin.utilities.index",$pagedata);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagedata['property']=Property::all();
        $pagedata['utility']=Utility::all();
        $pagedata['propertyUnit']=PropertyUnit::all();
        return view("admin.utilities.addutilities",$pagedata);
    }
    public function view(){

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      try{
        $request->validate([
            'property_id' => 'required',
            'utility_id' => 'required',
            'entry_type' => 'required',
            'utility' => 'required|array',
            // 'utility.*.property_unit_id' => 'required',
            // 'utility.*.reading_date' => 'required|date',
            // 'utility.*.current_reading' => 'required|numeric',
        ], [
            'property_id.required' => 'The property field is required.',
            'utility_id.required' => 'The utility field is required.',
            'entry_type.required' => 'The entry type field is required.',
            'utility.required' => 'At least one utility entry is required.',
            // 'utility.*.property_unit_id.required' => 'The property unit field is required for all entries.',
            // 'utility.*.reading_date.required' => 'The reading date field is required for all entries.',
            // 'utility.*.reading_date.date' => 'The reading date must be a valid date for all entries.',
            // 'utility.*.current_reading.required' => 'The current reading field is required for all entries.',
            // 'utility.*.current_reading.numeric' => 'The current reading must be a numeric value for all entries.',
        ]);


            $data=$request->except('_token');

            $data=$request->only('property_id','utility_id');
          $index=MainUtility::create($data);

        //   $data = $request->except('_token');
        // // dd($data);
        $utilities = $request->utility;

        $utility_rows = [];

        $utility_name = $utilities["property_unit_id"];
        $utility_date = $utilities["reading_date"];
        $utility_reading = $utilities["current_reading"];



        for ($i = 0; $i < count($utility_name); $i++) {
            // Create a new row with payment method and description
            $row = [($utility_name[$i] ?? '1'), ($utility_date[$i] ?? "N/A"),($utility_reading[$i] ?? "N/A")];
            $utility_rows[] = $row;
        }

        foreach($utility_rows as $utility){
            UtilityReading::create([
                'main_utilities_id'=>$index->id,
                'property_unit_id'=>$utility[0],
                'reading_date'=>$utility[1],
                'current_reading'=>$utility[2],
            ]);
        }


        return redirect()->route('admin.utilities.index')->with('success', 'Utility added successfully');
      }catch (\Illuminate\Validation\ValidationException $e) {
        // ValidationException will contain the validation errors
        return redirect()->back()->withInput()->withErrors($e->errors())->with('error', 'Please correct the following errors and try again.');
    } catch (\Exception $e) {
        // Log the error or handle it in a way that makes sense for your application
        // For example, you can log the error using Laravel's logging facilities
        \Log::error('Error creating property record: ' . $e->getMessage());
        // Redirect back with an error message and input data
        return redirect()->back()->withInput()->with('error', 'An error occurred while adding the Utility. Please try again.');
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['index']=UtilityReading::find($id);
        // dd($data['index']);
        return view('admin.utilities.viewutilitysumary',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
            $id=$request->utility_id;

            $data=$request->except('_token');
            UtilityReading::find($id)->update($data);
            return redirect()->back()->with('success','Utility Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $index=MainUtility::find($id);

        $index->delete();
       return redirect()->route('admin.utilities.index')->with('danger','Record has been Deleted Successfully!');
    }


    public function editnote(Request $request,$id){
        $utility=UtilityReading::with('main_utilities','property_unit','main_utilities.property','main_utilities.utility')->whereId($id)->first();

        return response()->json($utility,200);
    }
}
