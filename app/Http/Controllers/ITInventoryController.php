<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
//use App\Services\Db2iService;

class ITInventoryController extends Controller
{
    public function report_it_inventory()
    {
        [$menu,$role,$masterdata] = DB::selectResultSets('CALL sp_get_role_menu(?)', ["getmenureport|" . Auth::user()->name . "|ITInventoryReport"]);
        
        // ==============================
        // PDO DB2 i (ODBC) – SAMA SEPERTI ROUTE
        // ==============================
        
        try {
            $pdo = new \PDO(
                "odbc:AS400_DSN",
                "AXPGMR",
                "AXPGMR",
                [
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]
            );

            $sql = "
                SELECT P01JNSDOK
                FROM HUB.P01FV_IV_NEW
                GROUP BY P01JNSDOK
            ";

            $stmt = $pdo->query($sql);
            //$jenisDokumen = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            $jenisDokumen = $stmt->fetchAll(\PDO::FETCH_OBJ);

        } catch (\PDOException $e) {
            // Optional: logging
            // \Log::error($e->getMessage());
            abort(500, 'Koneksi DB2 i gagal');
        }
        
        if (count($role)==0){
            abort(404);
        }else{
            return view('it-inventory/report/report-it-inventory',['masterdata' => $masterdata,'menu' => $menu,'role' => $role,'jenisDokumen' => $jenisDokumen]);
            //return view('it-inventory/report/report-it-inventory',['masterdata' => $masterdata,'menu' => $menu,'role' => $role]);
        }
    }

    public function report_it_inventory_responsebycode($code)
    {   
        $code2= str_replace("_","|",$code);
        $code3= str_replace("~","%",$code2);
        $query='CALL sp_report_it_inventory(?)';
        try {
            $report['data'] = DB::select($query, [$code3]);
            return response()->json($report);    
        }catch(\Illuminate\Database\QueryException $ex) {
            $report['data']=$ex->getMessage();
            return response()->json($report);
        } 
    }

    public function report_it_inventory_getdata(Request $request)
    { 
        try{
                $type = $request->input('sel_subreport');
                $doc = $request->input('sel_doc');
                
                $d = $request->input('datepicker_datefrom'); 
                $datefrom = Carbon::createFromFormat('m/d/Y',$d)->format('Y-m-d');
                
                $d2 = $request->input('datepicker_dateto');
                $dateto = Carbon::createFromFormat('m/d/Y',$d2)->format('Y-m-d'); 
                                
                $reportname = $request->input('txt_report');
                $query = $request->input('txt_query');
                $reportType = $request->input('txt_type');
                $url= $request->input('txt_url');
                $view = str_replace('/', '.', $url);
                
        
                //$header="";
                $params = $type ."|". $doc. "|" .$datefrom. "|" .$dateto;   
                // return  dd($params); 
                if ($query==""){
                    echo "<b>empty query !</b>"; 
                }else{
                    if ($reportType== 'datatable'){
                        //[$data] = DB::selectResultSets($query, [$params]);
                        [$data] = DB::selectResultSets($query);
                        return view($view,compact('reportname','datefrom','dateto','data'));
                    }else{
                        $data = DB::select($query, [$params]);
                        return view($url,compact('reportname','datefrom','data'));
                    }
                } 
        
        }catch(\Illuminate\Database\QueryException $ex) {
            dd($ex->getMessage()); 
        }  
    }

    public function select2Plant(Request $request)
    {
        $search = $request->q;

        $plants = DB::table('m_plant')
            ->when($search, function ($q) use ($search) {
                $q->where('plant_code', 'like', "%{$search}%")
                  ->orWhere('name', 'like', "%{$search}%");
            })
            ->orderBy('name')
            ->limit(20)
            ->get();

        return response()->json(
            $plants->map(function ($p) {
                return [
                    'id'   => $p->plant_code,
                    'text' => $p->plant_code . ' - ' . $p->name
                ];
            })
        );
    }
}
